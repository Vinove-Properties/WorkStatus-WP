<form class="prod-calc" onsubmit="return validatPCStepOneForm(this);" style="display:block;">
  <div class="form-wrap">
    <fieldset class="input-field">
      <label>Full Name *</label>
      <input type="text" id="pc-name" class="input-area" name="name" value="" data-err="Please Fill Name">
      <small class="error-message"></small>  
    </fieldset>
    <fieldset class="input-field">
      <label>Email Address *</label>
      <input class="input-area" id="pc-email" type="text" name="email" value="" data-err="Please Fill Email">
      <small class="error-message"></small>
    </fieldset>
    <fieldset class="input-field">
      <label>Phone Number</label>
      <input class="input-area" type="text" name="phone" value="">  
    </fieldset>
    <fieldset class="input-field">
      <label>Company Name</label>
      <input class="input-area" type="text" name="company" value="">  
    </fieldset>
    <fieldset class="input-field">
      <label>Job Title</label>
      <input class="input-area" type="text" name="job-title" value="">  
    </fieldset>
    <fieldset class="input-field">
      <label style="opacity:0;">Submit Button</label>
      <button type="submit" id="stp-1btn" class="btn" name="submit">Get Started</button>
      <small style="text-align:left; display:block; color:#7e7e7e; font-size:12px; line-height:18px;">By clicking "Get Started", you consent to receive emails from Workstatus about productivity insights and updates. We'll use this information to send you a personalized productivity report. Your data is secure and will never be shared with third parties.</small>
    </fieldset>
  </div>
</form>

<form class="prod-calc-step2" id="prod-calc-step2" onsubmit="return false;" style="display:none;">
  <div class="form-wrap">
  <fieldset class="input-field">
    <label for="industry">Industry</label>
    <select class="input-area" id="industry" name="industry">
      <option value="">Select an industry</option>
    </select>
  </fieldset>
  <fieldset class="input-field">
    <label for="jobType">Job Type</label>
    <select class="input-area" id="jobType" name="jobType">
      <option value="">Select a job type</option>
    </select>
  </fieldset>
  <fieldset class="input-field">
    <label for="teamSize">Team Size</label>
    <input type="number" class="input-area" name="teamSize" id="teamSize" min="1" value="10">
  </fieldset>
  <fieldset class="input-field wage-fieldset">
    <label for="wage">Average Hourly Wage</label>
    <div class="wage-wrapper">
      <span id="currencySymbol" style="position:absolute; top:50%; left:10px; transform:translateY(-50%); 
        color: #555;">$</span>
      <input type="number" class="input-area" name="wage" id="wage" min="0" step="0.01" value="25" style="padding-left:30px;" />
      <select  class="input-area"  id="currency" name="currency"></select>
    </div>
  </fieldset>
  <fieldset class="input-field full-width  wage-fieldset">
    <label for="hours-lost">Estimated Daily Hours Lost</label>
    <input type="number" class="input-area" name="hours-lost" id="hours-lost" min="1" max="24" value="2">
  </fieldset>
  <div class="input-field full-width   wage-fieldset">
    <p>Average hours lost per employee per day based on selected job type and industry benchmarks</p>
    <fieldset class="distract-columns">
      <div class="cmn-work">
        <h3>Common Workplace Distractions</h3>
        <span class="text-sm text-gray-500">Select all that apply</span>
      </div>
      <div class="distractions-container">
        <div class="distraction-wrapper">
          <input type="checkbox" id="meetings" name="distraction" value="meetings">
          <label for="meetings" class="distraction-card">
            <img src="https://www.workstatus.io/staging/wp-content/uploads/2025/01/bown.webp" alt="Meetings Icon" class="distraction-icon">
            <div class="distraction-content">
              <div class="distraction-title">
                <span>Unnecessary Meetings</span>
                <span class="impact-badge">15% impact</span>
              </div>
              <div class="distraction-desc">
                Time spent in non-essential meetings that could be handled via email.
              </div>
            </div>
          </label>
        </div>
        <div class="distraction-wrapper">
          <input type="checkbox" id="emails" name="distraction" value="emails">
          <label for="emails" class="distraction-card">
            <img src="https://www.workstatus.io/staging/wp-content/uploads/2025/01/bown.webp" alt="Email Icon" class="distraction-icon">
            <div class="distraction-content">
              <div class="distraction-title">
                <span>Email Management</span>
                <span class="impact-badge">12% impact</span>
              </div>
              <div class="distraction-desc">
                Time spent organizing, reading, and responding to non-urgent emails
              </div>
            </div>
          </label>
        </div>
        <div class="distraction-wrapper">
          <input type="checkbox" id="social" name="distraction" value="social">
          <label for="social" class="distraction-card">
            <img src="https://www.workstatus.io/staging/wp-content/uploads/2025/01/bown.webp" alt="Social Icon" class="distraction-icon">
            <div class="distraction-content">
              <div class="distraction-title">
                <span>Social Media</span>
                <span class="impact-badge">10% impact</span>
              </div>
              <div class="distraction-desc">
                Unplanned time spent browsing social media during work hours
              </div>
            </div>
          </label>
        </div>
        <div class="distraction-wrapper">
          <input type="checkbox" id="breaks" name="distraction" value="breaks">
          <label for="breaks" class="distraction-card">
            <img src="https://www.workstatus.io/staging/wp-content/uploads/2025/01/bown.webp" alt="Breaks Icon" class="distraction-icon">
            <div class="distraction-content">
              <div class="distraction-title">
                <span>Unscheduled Breaks</span>
                <span class="impact-badge">8% impact</span>
              </div>
              <div class="distraction-desc">
                Additional break time beyond scheduled rest periods
              </div>
            </div>
          </label>
        </div>
        <div class="distraction-wrapper">
          <input type="checkbox" id="chat" name="distraction" value="chat">
          <label for="chat" class="distraction-card">
            <img src="https://www.workstatus.io/staging/wp-content/uploads/2025/01/bown.webp" alt="Chat Icon" class="distraction-icon">
            <div class="distraction-content">
              <div class="distraction-title">
                <span>Office Chat</span>
                <span class="impact-badge">7% impact</span>
              </div>
              <div class="distraction-desc">
                Non-work related conversations and informal discussions
              </div>
            </div>
          </label>
        </div>
      </div>
    </fieldset>
    <button type="button" onclick="calculateImpact()">Calculate Productivity Impact</button>
    <div id="results" style="margin-top: 20px; color: #000000; font-weight: bold;"></div>
  </div>
</form>