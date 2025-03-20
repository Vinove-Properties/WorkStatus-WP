<form id="productivity-calculator" onsubmit="return false;">
<fieldset class="calculator">
  <label class="salary">Hours worked</label>
  <input id="pro-hours" type="number" value="0" onkeyup="wsGetProducitivityCalc();" class="numberfiled">
  <span class="footnote">$</span>
</fieldset>

<fieldset class="calculator">
  <label class="salary">Number of team members</label>
  <input id="pro-members" type="number" value="0" onkeyup="wsGetProducitivityCalc();" class="numberfiled">
  <span class="footnote">$</span>
</fieldset>

<fieldset class="calculator">
  <label class="salary">Costs of goods sold ($)</label>
  <input id="pro-cost" type="number" value="0" onkeyup="wsGetProducitivityCalc();" class="numberfiled">
  <span class="footnote">$</span>
</fieldset>
<fieldset class="calculator">
  <button type="submit" onclick="document.getElementById('productivity-calculator').reset();" class="btn" 
  name="submit">Clear</button>
</fieldset>
<div class="pro-output" style="background: #000000; padding: 10px;">Employee productivity : <span id="pro-output"></span>
</div>
</form>  