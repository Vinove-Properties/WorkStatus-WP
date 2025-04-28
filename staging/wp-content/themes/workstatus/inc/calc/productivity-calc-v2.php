
<form class="prod-calc" onsubmit="return false;" style="display:none;">

<div class="form-wrap">

  <fieldset class="input-field">
    <label>Full Name *</label>
    <input type="text" name="name" value="">  
  </fieldset>


  <fieldset class="input-field">

    <label>Email Address *</label>
    <input class="input-area" type="text" name="email" value="">  

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
    <button type="submit" class="btn" name="submit">Get Started</button>
    <small style="text-align:left; display:block; color:#7e7e7e; font-size:12px; line-height:18px;">By clicking "Get Started", you consent to receive emails from Workstatus about productivity insights and updates. We'll use this information to send you a personalized productivity report. Your data is secure and will never be shared with third parties.</small>

  </fieldset>

</div>

</form>


<form class="prod-calc-step2" onsubmit="return false;" style="display:block;">

<div class="form-wrap">

  <fieldset class="input-field">
  <label for="industry">Industry</label>
  <select class="input-area" id="industry" name="industry"><option value="">Select an industry</option></select>
</fieldset>

<fieldset class="input-field">
  <label for="jobType">Job Type</label>
  <select class="input-area" id="jobType" name="jobType"><option value="">Select a job type</option></select>
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
    <input type="number" class="input-area" name="wage" id="wage" min="0" step="0.01" value="25" style="padding-left:50px;" />
      <select  class="input-area"  id="currency" name="currency"></select>
    </div>
  </fieldset>
  <fieldset class="input-field full-width  wage-fieldset">
      <label for="hours-lost">Estimated Daily Hours Lost</label>
      <input type="number" class="input-area" name="hours-lost" id="hours-lost" min="1" max="24" value="2">
  </fieldset>    
  <div class="input-field full-width   wage-fieldset">
  <p>Average hours lost per employee per day based on selected job type and industry benchmarks</p>  
  <div class="cmn-work">  
    <h3>Common Workplace Distractions</h3>
    <span class="text-sm text-gray-500">Select all that apply</span>
  </div>
  <?php /* ?>
  <div class="inner-wrap">
  <div class="flex-2">
  <input type="checkbox" id="dis-1" name="distraction" value="15"><label for="dis-1">Unnecessary Meetings (15%)</label>
  </div>
  <div class="flex-2">
  <input type="checkbox" id="dis-2" name="distraction" value="12"><label for="dis-2">Email Management (12%)</label>
  </div>
  <div class="flex-2">
  <input type="checkbox" id="dis-3" name="distraction" value="10"><label for="dis-3">Social Media (10%)</label>
  </div>
  <div class="flex-2">
  <input type="checkbox" id="dis-4" name="distraction" value="8"><label for="dis-4">Unscheduled Breaks (8%)</label>
  </div>
  <div class="flex-2">
  <input type="checkbox" id="dis-5" name="distraction" value="7"><label for="dis-5">Office Chat  (7%)</label>
  </div>
  </div>
  <?php */ ?>
  <fieldset>
  <legend>Distractions (select applicable)</legend>
  <label><input type="checkbox" name="distraction" value="meetings"> Unnecessary Meetings (15%)</label>
  <label><input type="checkbox" name="distraction" value="emails">Email Management (12%)</label>
  <label><input type="checkbox" name="distraction" value="social">Social Media (10%)</label>
  <label><input type="checkbox" name="distraction" value="breaks">Unscheduled Breaks (8%)</label>
  <label><input type="checkbox" name="distraction" value="chat">Office Chat (7%)</label>
  </fieldset>
  <button type="button" onclick="calculateImpact()">Calculate Productivity Impact</button>
  <div id="results" style="margin-top: 20px; color: #000000; font-weight: bold;"></div>

</div>
</form>
