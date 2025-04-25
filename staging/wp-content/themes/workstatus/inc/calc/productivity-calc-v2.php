<style type="text/css">
.hero-banner{padding-bottom:40px;}  
.prod-calc fieldset {
  border: none;
  margin-bottom: 1rem;
  padding: 0;
}

.prod-calc label {
  text-align: left;
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
  color: #333;
  font-size: 14px;
}

.prod-calc input[type="text"] {
  width: 100%;
  padding: 10px 12px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
  transition: border-color 0.3s ease;
}

.prod-calc input[type="text"]:focus {
  border-color: #007bff;
  outline: none;
}

.prod-calc small {
  color: #7e7e7e;
  font-size: 12px;
  line-height: 1.5;
  margin-bottom: 1rem;
  display: block;
}

.prod-calc .btn {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  color: white;
  font-size: 16px;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.prod-calc .btn:hover {
  background-color: #0056b3;
}

.prod-calc-step2 .wage-fieldset p{color: #000; font-size:12px; text-align:left; }
.prod-calc-step2 fieldset {
  border: none;
  margin-bottom: 1.5rem;
  padding: 0;
}

.prod-calc-step2 label {
  text-align: left;
  display: block;
  font-weight: 600;
  margin-bottom: 0.5rem;
  font-size: 14px;
  color: #333;
}

.prod-calc-step2 select,
.prod-calc-step2 input[type="number"] {
  width: 100%;
  padding: 10px 12px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 8px;
  background-color: #fff;
  transition: border-color 0.3s ease;
}

.prod-calc-step2 select:focus,
.prod-calc-step2 input[type="number"]:focus {
  border-color: #007bff;
  outline: none;
}

.wage-wrapper {
  position: relative;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.wage-wrapper .currency-symbol {
  font-size: 14px;
  color: #555;
}



.wage-wrapper select {
  padding: 8px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 8px;
}

.description {
  font-size: 13px;
  color: #666;
  margin: 1rem 0;
  line-height: 1.5;
}

.prod-calc-step2 button[type="submit"] {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  color: white;
  font-size: 16px;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.prod-calc-step2 button[type="submit"]:hover {
  background-color: #0056b3;
}

@media (max-width: 600px) {
  .prod-calc-step2{padding: 1.5rem;}
  .wage-wrapper{flex-direction:column; align-items: stretch;}
  .wage-wrapper select{width: 100%;}
}
</style>
<form class="prod-calc" onsubmit="return false;" style="display:none;">
  <fieldset class="">
    <label>Full Name *</label>
    <input type="text" name="name" value="">  
  </fieldset>

  <fieldset class="">
    <label>Email Address *</label>
    <input type="text" name="email" value="">  
  </fieldset>

  <fieldset class="">
    <label>Phone Number</label>
    <input type="text" name="phone" value="">  
  </fieldset>

  <fieldset class="">
    <label>Company Name</label>
    <input type="text" name="company" value="">  
  </fieldset>
  <fieldset class="">
    <label>Job Title</label>
    <input type="text" name="job-title" value="">  
  </fieldset>

  <fieldset class="">
    <small style="text-align:left; display:block; color:#7e7e7e; font-size:12px; line-height:18px;">By clicking "Get Started", you consent to receive emails from Workstatus about productivity insights and updates. We'll use this information to send you a personalized productivity report. Your data is secure and will never be shared with third parties.</small>
    <button type="submit" class="btn" name="submit">Get Started</button>
  </fieldset>
</form>


<form class="prod-calc-step2" onsubmit="return false;">
  <fieldset>
  <label for="industry">Industry</label>
  <select id="industry" name="industry" required>
    <option value="">Select an industry</option>
    <option value="it">Information Technology (IT)</option>
    <option value="manufacturing">Manufacturing</option>
    <option value="retail">Retail</option>
    <option value="healthcare">Healthcare</option>
    <option value="education">Education</option>
    <option value="finance">Finance</option>
    <option value="construction">Construction</option>
    <option value="transportation">Transportation</option>
    <option value="hospitality">Hospitality</option>
    <option value="telecommunications">Telecommunications</option>
  </select>
</fieldset>

<fieldset>
  <label for="jobType">Job Type</label>
  <select id="jobType" name="jobType" required>
    <option value="">Select a job type</option>
  </select>
</fieldset>

  <fieldset>
    <label for="teamSize">Team Size</label>
    <input type="number" name="teamSize" id="teamSize" min="1" value="10">
  </fieldset>

  <fieldset class="wage-fieldset">
    <label for="wage">Average Hourly Wage</label>
    <div class="wage-wrapper">
    <span id="currencySymbol" style="position:absolute; top:50%; left:10px; transform:translateY(-50%); 
    color: #555;">$</span>
    <input type="number" name="wage" id="wage" min="0" step="0.01" value="25" style="padding-left:50px;" />
      <select id="currency" name="currency"></select>
    </div>
  </fieldset>
  <fieldset class="wage-fieldset">
      <label for="hours-lost">Estimated Daily Hours Lost</label>
      <input type="number" name="hours-lost" id="hours-lost" min="1" max="24" value="2">
  </fieldset>    
  <div class="wage-fieldset">
  <p>Average hours lost per employee per day based on selected job type and industry benchmarks</p>  
  <div class="flex items-center justify-between">  
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
</form>
