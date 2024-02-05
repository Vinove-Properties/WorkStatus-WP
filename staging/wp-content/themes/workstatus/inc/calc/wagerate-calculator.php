<form id="wage-calculator" onsubmit="return false;">
  <fieldset class="calculator">
  <label class="salary">Annual salary</label>
  <input id="ws-wages" type="number" value="0" onkeyup="ws_calculate_wages(this, 'anual', ws_calculator_cb);" class="numberfiled">
  <span class="footnote">$</span>
  </fieldset>

  <fieldset class="calculator">
  <label class="salary">Monthly wage</label>
  <input id="ws-monthly" type="number" value="0" onkeyup="ws_calculate_wages(this, 'monthly', ws_calculator_cb);" class="numberfiled">
  <span class="footnote">$</span>
  </fieldset>

  <fieldset class="calculator">
  <label class="salary">Weekly wage</label>
  <input id="ws-weekly" type="number" value="0" onkeyup="ws_calculate_wages(this, 'weekly', ws_calculator_cb);" class="numberfiled">
  <span class="footnote">$</span>
  </fieldset>

  <fieldset class="calculator">
  <label class="salary">Daily wage</label>
  <input id="ws-daily" type="number" value="0" onkeyup="ws_calculate_wages(this, 'daily', ws_calculator_cb);" class="numberfiled">
  <span class="footnote">$</span>
  </fieldset>

  <fieldset class="calculator">
  <label class="salary">Hourly wage</label>
  <input id="ws-hourly" type="number" value="0" onkeyup="ws_calculate_wages(this, 'hourly', ws_calculator_cb);" class="numberfiled">
  <span class="footnote">$</span>
  </fieldset>

  <fieldset class="calculator">
  <label class="salary">Hours per week</label>
  <input type="number" value="40" onkeyup="ws_calculateHourly(this);" class="numberfiled">
  <span class="footnote">H</span>
  </fieldset>

  <fieldset class="calculator">
  <button type="submit" onclick="document.getElementById('wage-calculator').reset();" class="btn" name="submit">Clear</button>
  </fieldset>
</form>  