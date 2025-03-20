<form id="wsroi-calculator" onsubmit="return false;">
<h3 style="margin-bottom:40px;">ROI Calculator</h3>  
<fieldset class="calculator">
  <label class="salary">Number of employees</label>
  <input id="numEmployees" type="number" value="10" class="numberfiled">
</fieldset>

<fieldset class="calculator">
  <label class="salary">Average hourly wage per employee</label>
  <input id="hourlyWage" type="number" value="20" class="numberfiled">
</fieldset>

<fieldset class="calculator">
  <label class="salary">Estimated hours worked per week per employee</label>
  <input id="hoursPerWeek" type="number" value="40" class="numberfiled">
</fieldset>

<fieldset class="calculator">
  <label class="salary">Estimated percentage of unproductive hours</label>
  <input id="unproductivePercentage" type="number" value="20" class="numberfiled">
</fieldset>

<fieldset class="calculator">
  <label class="salary">Estimated percentage of inaccurate or manual timesheet entries</label>
  <input id="timesheetErrorPercentage" type="number" value="5" class="numberfiled">
</fieldset>

<fieldset class="calculator">
  <label class="salary">Time spent by HR or managers reviewing and correcting timesheets</label>
  <input id="timeSpentHR" type="number" value="5" class="numberfiled">
</fieldset>

<fieldset class="calculator">
  <label class="salary">Cost of the employee monitoring and automated timesheet software</label>
  <input id="softwareCost" type="number" value="5000" class="numberfiled">
</fieldset>

<fieldset class="calculator">
  <!--
  <button type="submit" onclick="document.getElementById('wage-calculator').reset();" class="btn" name="submit">Clear</button> 
  -->
  <button type="button" class="btn" onclick="ws_calculateROI()">Calculate ROI</button>
</fieldset>
<div id="results">
    <h5>Estimated Potential Annual Savings: <span id="potentialSavings">$0.00</span></h5>
    <h5>Net ROI: <span id="netROI">$0.00</span></h5>
</div>
</form>