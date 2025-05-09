(function () { function r(e, n, t) { function o(i, f) { if (!n[i]) { if (!e[i]) { var c = "function" == typeof require && require; if (!f && c) return c(i, !0); if (u) return u(i, !0); var a = new Error("Cannot find module '" + i + "'"); throw a.code = "MODULE_NOT_FOUND", a } var p = n[i] = { exports: {} }; e[i][0].call(p.exports, function (r) { var n = e[i][1][r]; return o(n || r) }, p, p.exports, r, e, n, t) } return n[i].exports } for (var u = "function" == typeof require && require, i = 0; i < t.length; i++)o(t[i]); return o } return r })()({
  1: [function (require, module, exports) {
    const bodyScrollLock = require('../../lib/bodyScrollLock.js');

    const disableBodyScrollButton = document.querySelectorAll('.disableBodyScroll');
    const enableBodyScrollButton = document.querySelector('.enableBodyScroll');
    const modalElement = document.querySelector('.modal');
    const scrollTargetElement = document.querySelector('.scrollTarget');

    disableBodyScrollButton.forEach(function (btn) {
      btn.addEventListener("click", function (event) {
        // console.info('disableBodyScrollButton');
        // show modal
        modalElement.classList.add('active');
        bodyScrollLock.disableBodyScroll(scrollTargetElement);


      })
    })



    // document.addEventListener('click', (event) => {
    //   const withinBoundaries = event.composedPath().includes(scrollTargetElement)

    //   if (withinBoundaries) {
    //     // console.log('Click happened inside element')
    //   } else {
    //     // console.log('Click happened **OUTSIDE** element')
    //     // hide modal
    //     modalElement.classList.remove('active');
    //     bodyScrollLock.enableBodyScroll(scrollTargetElement);
    //   }
    // })


    enableBodyScrollButton.onclick = function (e) {
      // console.info('enableBodyScrollButton');

      // hide modal
      modalElement.classList.remove('active');
      bodyScrollLock.enableBodyScroll(scrollTargetElement);
    };

  }, { "../../lib/bodyScrollLock.js": 2 }], 2: [function (require, module, exports) {
    (function (global, factory) {
      if (typeof define === "function" && define.amd) {
        define(['exports'], factory);
      } else if (typeof exports !== "undefined") {
        factory(exports);
      } else {
        var mod = {
          exports: {}
        };
        factory(mod.exports);
        global.bodyScrollLock = mod.exports;
      }
    })(this, function (exports) {
      'use strict';

      Object.defineProperty(exports, "__esModule", {
        value: true
      });

      function _toConsumableArray(arr) {
        if (Array.isArray(arr)) {
          for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {
            arr2[i] = arr[i];
          }

          return arr2;
        } else {
          return Array.from(arr);
        }
      }

      // Older browsers don't support event options, feature detect it.

      // Adopted and modified solution from Bohdan Didukh (2017)
      // https://stackoverflow.com/questions/41594997/ios-10-safari-prevent-scrolling-behind-a-fixed-overlay-and-maintain-scroll-posi

      var hasPassiveEvents = false;
      if (typeof window !== 'undefined') {
        var passiveTestOptions = {
          get passive() {
            hasPassiveEvents = true;
            return undefined;
          }
        };
        window.addEventListener('testPassive', null, passiveTestOptions);
        window.removeEventListener('testPassive', null, passiveTestOptions);
      }

      var isIosDevice = typeof window !== 'undefined' && window.navigator && window.navigator.platform && (/iP(ad|hone|od)/.test(window.navigator.platform) || window.navigator.platform === 'MacIntel' && window.navigator.maxTouchPoints > 1);


      var locks = [];
      var documentListenerAdded = false;
      var initialClientY = -1;
      var previousBodyOverflowSetting = void 0;
      var previousBodyPaddingRight = void 0;

      // returns true if `el` should be allowed to receive touchmove events.
      var allowTouchMove = function allowTouchMove(el) {
        return locks.some(function (lock) {
          if (lock.options.allowTouchMove && lock.options.allowTouchMove(el)) {
            return true;
          }

          return false;
        });
      };

      var preventDefault = function preventDefault(rawEvent) {
        var e = rawEvent || window.event;

        // For the case whereby consumers adds a touchmove event listener to document.
        // Recall that we do document.addEventListener('touchmove', preventDefault, { passive: false })
        // in disableBodyScroll - so if we provide this opportunity to allowTouchMove, then
        // the touchmove event on document will break.
        if (allowTouchMove(e.target)) {
          return true;
        }

        // Do not prevent if the event has more than one touch (usually meaning this is a multi touch gesture like pinch to zoom).
        if (e.touches.length > 1) return true;

        if (e.preventDefault) e.preventDefault();

        return false;
      };

      var setOverflowHidden = function setOverflowHidden(options) {
        // If previousBodyPaddingRight is already set, don't set it again.
        if (previousBodyPaddingRight === undefined) {
          var _reserveScrollBarGap = !!options && options.reserveScrollBarGap === true;
          var scrollBarGap = window.innerWidth - document.documentElement.clientWidth;

          if (_reserveScrollBarGap && scrollBarGap > 0) {
            previousBodyPaddingRight = document.body.style.paddingRight;
            document.body.style.paddingRight = scrollBarGap + 'px';
          }
        }

        // If previousBodyOverflowSetting is already set, don't set it again.
        if (previousBodyOverflowSetting === undefined) {
          previousBodyOverflowSetting = document.body.style.overflow;
          document.body.style.overflow = 'hidden';
        }
      };

      var restoreOverflowSetting = function restoreOverflowSetting() {
        if (previousBodyPaddingRight !== undefined) {
          document.body.style.paddingRight = previousBodyPaddingRight;

          // Restore previousBodyPaddingRight to undefined so setOverflowHidden knows it
          // can be set again.
          previousBodyPaddingRight = undefined;
        }

        if (previousBodyOverflowSetting !== undefined) {
          document.body.style.overflow = previousBodyOverflowSetting;

          // Restore previousBodyOverflowSetting to undefined
          // so setOverflowHidden knows it can be set again.
          previousBodyOverflowSetting = undefined;
        }
      };

      // https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollHeight#Problems_and_solutions
      var isTargetElementTotallyScrolled = function isTargetElementTotallyScrolled(targetElement) {
        return targetElement ? targetElement.scrollHeight - targetElement.scrollTop <= targetElement.clientHeight : false;
      };

      var handleScroll = function handleScroll(event, targetElement) {
        var clientY = event.targetTouches[0].clientY - initialClientY;

        if (allowTouchMove(event.target)) {
          return false;
        }

        if (targetElement && targetElement.scrollTop === 0 && clientY > 0) {
          // element is at the top of its scroll.
          return preventDefault(event);
        }

        if (isTargetElementTotallyScrolled(targetElement) && clientY < 0) {
          // element is at the bottom of its scroll.
          return preventDefault(event);
        }

        event.stopPropagation();
        return true;
      };

      var disableBodyScroll = exports.disableBodyScroll = function disableBodyScroll(targetElement, options) {
        // targetElement must be provided
        if (!targetElement) {
          // eslint-disable-next-line no-console
          console.error('disableBodyScroll unsuccessful - targetElement must be provided when calling disableBodyScroll on IOS devices.');
          return;
        }

        // disableBodyScroll must not have been called on this targetElement before
        if (locks.some(function (lock) {
          return lock.targetElement === targetElement;
        })) {
          return;
        }

        var lock = {
          targetElement: targetElement,
          options: options || {}
        };

        locks = [].concat(_toConsumableArray(locks), [lock]);

        if (isIosDevice) {
          targetElement.ontouchstart = function (event) {
            if (event.targetTouches.length === 1) {
              // detect single touch.
              initialClientY = event.targetTouches[0].clientY;
            }
          };
          targetElement.ontouchmove = function (event) {
            if (event.targetTouches.length === 1) {
              // detect single touch.
              handleScroll(event, targetElement);
            }
          };

          if (!documentListenerAdded) {
            document.addEventListener('touchmove', preventDefault, hasPassiveEvents ? { passive: false } : undefined);
            documentListenerAdded = true;
          }
        } else {
          setOverflowHidden(options);
        }
      };

      var clearAllBodyScrollLocks = exports.clearAllBodyScrollLocks = function clearAllBodyScrollLocks() {
        if (isIosDevice) {
          // Clear all locks ontouchstart/ontouchmove handlers, and the references.
          locks.forEach(function (lock) {
            lock.targetElement.ontouchstart = null;
            lock.targetElement.ontouchmove = null;
          });

          if (documentListenerAdded) {
            document.removeEventListener('touchmove', preventDefault, hasPassiveEvents ? { passive: false } : undefined);
            documentListenerAdded = false;
          }

          // Reset initial clientY.
          initialClientY = -1;
        } else {
          restoreOverflowSetting();
        }

        locks = [];
      };

      var enableBodyScroll = exports.enableBodyScroll = function enableBodyScroll(targetElement) {
        if (!targetElement) {
          // eslint-disable-next-line no-console
          console.error('enableBodyScroll unsuccessful - targetElement must be provided when calling enableBodyScroll on IOS devices.');
          return;
        }

        locks = locks.filter(function (lock) {
          return lock.targetElement !== targetElement;
        });

        if (isIosDevice) {
          targetElement.ontouchstart = null;
          targetElement.ontouchmove = null;

          if (documentListenerAdded && locks.length === 0) {
            document.removeEventListener('touchmove', preventDefault, hasPassiveEvents ? { passive: false } : undefined);
            documentListenerAdded = false;
          }
        } else if (!locks.length) {
          restoreOverflowSetting();
        }
      };
    });


  }, {}]
}, {}, [1]);
