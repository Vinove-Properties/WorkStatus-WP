function ws_calculateHourly(e){
  const hourly  = document.getElementById("ws-hourly");  
}  

function ws_calculator_cb(value, type){
  const wage    = document.getElementById("ws-wages");
  const monthly = document.getElementById("ws-monthly");
  const weekly  = document.getElementById("ws-weekly");
  const daily   = document.getElementById("ws-daily");
  const hourly  = document.getElementById("ws-hourly");
  if( type == "anual" ){
    let monthlyVal  = ( value / 12 );    
    let weeklyVal   = ( value / 52 );
    let dailyVal    = ( weeklyVal / 5 );
    let hourlyVal   = ( dailyVal / 8 );

    monthly.value   = parseFloat( monthlyVal ).toFixed(2);
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    daily.value     = parseFloat( dailyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "monthly" ){
    let yearlyVal   = ( value * 12 );
    
    let weeklyVal   = ( yearlyVal / 52 );
    let dailyVal    = ( weeklyVal / 5 );
    let hourlyVal   = ( dailyVal / 8 );
    wage.value      = yearlyVal;
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    daily.value     = parseFloat( dailyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "weekly" ){
    let yearlyVal   = ( value * 52 );
    let monthlyVal  = ( yearlyVal / 12 );
    let dailyVal    = ( value / 5 );
    let hourlyVal   = ( dailyVal / 8 );

    monthly.value   = parseFloat( monthlyVal ).toFixed(2);
    wage.value      = yearlyVal;
    daily.value     = parseFloat( dailyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "daily" ){
    let yearlyVal   = ( (value * 5) * 52 );
    let monthlyVal  = ( yearlyVal / 12 );
    let weeklyVal   = ( yearlyVal / 52 );
    let hourlyVal   = ( value / 8 );

    wage.value      = yearlyVal;
    monthly.value   = parseFloat( monthlyVal ).toFixed(2);    
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    hourly.value    = parseFloat( hourlyVal ).toFixed(2);    
  }

  if( type == "hourly" ){
    let yearlyVal   = ( value * 40 * 52 );
    let monthlyVal  = ( yearlyVal / 12 );
    let weeklyVal   = ( yearlyVal / 52 );
    let dailyVal    = ( weeklyVal / 5 );

    wage.value      = yearlyVal;
    monthly.value   = parseFloat( monthlyVal ).toFixed(2);    
    weekly.value    = parseFloat( weeklyVal ).toFixed(2);
    daily.value     = parseFloat( dailyVal ).toFixed(2);    
  }

}

function ws_calculate_wages(e, type, ws_wage_calc){
  ws_wage_calc( e.value, type );  
}

function wsGetProducitivityCalc( e, type ){
    var hoursWorked     = parseFloat(document.getElementById("pro-hours").value);
    var numTeamMembers  = parseFloat(document.getElementById("pro-members").value);
    var costOfGoodsSold = parseFloat(document.getElementById("pro-cost").value);
    //var productivity = (hoursWorked * numTeamMembers) / costOfGoodsSold;
    var productivityPerHour = ( (hoursWorked * numTeamMembers) / costOfGoodsSold ) / hoursWorked;
    document.getElementById("pro-output").innerHTML = productivityPerHour.toFixed(2);
}

function ws_calculateROI(){
    var numEmployees = parseFloat(document.getElementById("numEmployees").value);
    var hourlyWage = parseFloat(document.getElementById("hourlyWage").value);
    var hoursPerWeek = parseFloat(document.getElementById("hoursPerWeek").value);
    var unproductivePercentage = parseFloat(document.getElementById("unproductivePercentage").value) / 100;
    var timesheetErrorPercentage = parseFloat(document.getElementById("timesheetErrorPercentage").value) / 100;
    var timeSpentHR = parseFloat(document.getElementById("timeSpentHR").value);
    var softwareCost = parseFloat(document.getElementById("softwareCost").value);
    
    var weeklyCostUnproductive = numEmployees * hourlyWage * hoursPerWeek * unproductivePercentage;
    var productivityGains = weeklyCostUnproductive * 0.5; // Assuming 50% reduction
    var weeklyCostTimesheetErrors = numEmployees * hourlyWage * hoursPerWeek * timesheetErrorPercentage;
    var timesheetSavings = weeklyCostTimesheetErrors * 0.9; // Assuming 90% reduction
    var timeSavingsHR = timeSpentHR * hourlyWage;
    var totalPotentialWeeklySavings = productivityGains + timesheetSavings + timeSavingsHR;
    var totalPotentialAnnualSavings = totalPotentialWeeklySavings * 52;
    var netROI = totalPotentialAnnualSavings - softwareCost;

    document.getElementById("potentialSavings").innerHTML = "$" + totalPotentialAnnualSavings.toFixed(2);
    document.getElementById("netROI").innerHTML = "$" + netROI.toFixed(2);
}

/*Productivity Calculator : Script*/
const pcFrmFields = [
  {selector: '#pc-name', rules:{required:true }},
  {selector: '#pc-email', rules:{required:true, email:true }}
];

function validateFieldOnEvent(selector, rules) {
  const input = document.querySelector(selector);
  if (!input) return;

  input.addEventListener('input', () => {
    validateField(input, rules);
  });

  input.addEventListener('blur', () => {
    validateField(input, rules);
  });
}

function setupRealTimeValidation() {
  pcFrmFields.forEach(({ selector, rules }) => {
    validateFieldOnEvent(selector, rules);
  });
}
document.addEventListener('DOMContentLoaded', setupRealTimeValidation);


function validateField(input, rules) {
  const value = input.value.trim();
  const container = input.closest('.input-field');
  const errorEl = container?.querySelector('.error-message');

  let error = '';

  if (rules.required && value === '') {
    error = input.getAttribute("data-err") || 'This field is required';
  } else if (rules.email && value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
    error = 'Enter a valid email';
  } else if (rules.phone && value && !/^[0-9+\-\s()]+$/.test(value)) {
    error = 'Enter a valid phone number';
  }

  if (error) {
    container?.classList.add('verror');
    if (errorEl) errorEl.textContent = error;
    return false;
  } else {
    container?.classList.remove('verror');
    if (errorEl) errorEl.textContent = '';
    return true;
  }
}

function validateFields(fields){
  let isValid = true;
  fields.forEach(({ selector, rules }) => {
    const input = document.querySelector(selector);
    if (!input) return;
    if (!validateField(input, rules)) isValid = false;
  });
  return isValid;
}

function vcGetName( name ){
    name = name.trim();
    let lastName = name.includes(' ') ? name.replace(/.*\s([\w-]*)$/, '$1') : '';
    let firstName = name.replace(new RegExp(lastName + '$'), '').trim();
    return [firstName, lastName];
}

function validatPCStepOneForm(e){  
  if( validateFields( pcFrmFields ) ){
    const formData = new FormData(e);
    let namePart    = vcGetName( e.name.value.trim() );
    let firstName   = namePart[0];
    let lastName    = (namePart[1] && (namePart[1] != "")) ? namePart[1] : '';
    let formBtn     = document.getElementById("stp-1btn");
    formBtn.innerText = "Please Wait...";
    formBtn.disabled  = true;
    //const url = 'https://www.workstatus.io/blog/wp-json/es_apicb/v1/addsubs';
    const url = 'http://localhost/workstatus.io/blog/staging/wp-json/es_apicb/v1/addsubs';
    const data = { first_name: firstName, last_name: lastName, email: e.email.value.trim() };
    console.log( data );
    fetch(url, {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        fetch( wsObj.admin_ajax+'?action=pc_postrequest', { method: 'POST', body: formData, })
        .then(response => response.json())
        .then(data => {console.log('Server response:', data);});
        formBtn.innerText       = "Get Started";
        formBtn.disabled        = false;
        e.reset();
    })
    .catch((error) => {
        formBtn.innerText       = "Get Started";
        formBtn.disabled        = false;
        e.reset();
    });    
    e.style.display = "none";
    document.getElementById("prod-calc-step2").style.display = "block";
  }
  return false;  
}


const industriesArray = [
  {
    id: 'it',
    name: 'Information Technology (IT)',
    jobs: [
      { id: 'developer', title: 'Developer', averageHoursLost: 1.8 },
      { id: 'tech-support', title: 'Technical Support', averageHoursLost: 2.0 }
    ]
  },
  {
    id: 'manufacturing',
    name: 'Manufacturing',
    jobs: [
      { id: 'operations', title: 'Operations', averageHoursLost: 2.2 },
      { id: 'quality-control', title: 'Quality Control', averageHoursLost: 2.0 }
    ]
  },
  {
    id: 'retail',
    name: 'Retail',
    jobs: [
      { id: 'sales', title: 'Sales Representative', averageHoursLost: 2.0 },
      { id: 'cashier', title: 'Cashier', averageHoursLost: 1.9 }
    ]
  },
  {
    id: 'healthcare',
    name: 'Healthcare',
    jobs: [
      { id: 'admin', title: 'Administrative Staff', averageHoursLost: 1.9 },
      { id: 'nurse', title: 'Nurse', averageHoursLost: 2.1 }
    ]
  },
  {
    id: 'education',
    name: 'Education',
    jobs: [
      { id: 'teacher', title: 'Teacher', averageHoursLost: 1.8 },
      { id: 'admin', title: 'Administrative Staff', averageHoursLost: 2.0 }
    ]
  },
  {
    id: 'finance',
    name: 'Finance',
    jobs: [
      { id: 'accountant', title: 'Accountant', averageHoursLost: 1.7 },
      { id: 'analyst', title: 'Financial Analyst', averageHoursLost: 1.8 }
    ]
  },
  {
    id: 'construction',
    name: 'Construction',
    jobs: [
      { id: 'site-worker', title: 'Site Worker', averageHoursLost: 2.3 },
      { id: 'project-manager', title: 'Project Manager', averageHoursLost: 2.0 }
    ]
  },
  {
    id: 'transportation',
    name: 'Transportation',
    jobs: [
      { id: 'driver', title: 'Driver', averageHoursLost: 2.1 },
      { id: 'logistics', title: 'Logistics Coordinator', averageHoursLost: 2.0 }
    ]
  },
  {
    id: 'hospitality',
    name: 'Hospitality',
    jobs: [
      { id: 'front-desk', title: 'Front Desk Staff', averageHoursLost: 2.0 },
      { id: 'housekeeping', title: 'Housekeeping', averageHoursLost: 1.9 }
    ]
  },
  {
    id: 'telecommunications',
    name: 'Telecommunications',
    jobs: [
      { id: 'support', title: 'Customer Support', averageHoursLost: 2.5 },
      { id: 'technician', title: 'Field Technician', averageHoursLost: 2.2 }
    ]
  },
];

const industryElm = document.getElementById("industry");
if(industryElm){
  industriesArray.forEach(ind => {
    const option = document.createElement("option");
    option.value = ind.id;
    option.textContent = ind.name;;
    industryElm.appendChild(option);
  });
}

document.getElementById("industry").addEventListener("change", function(){
  const jobTypeSelect     = document.getElementById("jobType");
  const selectedIndustry  = this.value;
  
  if( selectedIndustry !== "" ){
    this.closest('.input-field').classList.remove("error");
    const jobs              = industriesArray.find(industry => industry.id === selectedIndustry) || [];
    jobTypeSelect.innerHTML = '<option value="">Select a job type</option>';
    if(jobs){
      jobs.jobs.forEach( job => {
        const option = document.createElement("option");
        option.value = job.title;
        option.textContent = job.title;
        option.setAttribute('data-al', job.averageHoursLost);
        jobTypeSelect.appendChild(option);
      });
    }
  } 
});

document.getElementById("jobType").addEventListener("change", function(){
  const lostHour    = document.getElementById("hours-lost");
  const selectedOption = this.options[this.selectedIndex];
  const selectJob   = this.value;
  if( selectJob !== "" ){
    this.closest('.input-field').classList.remove("error");
    if( selectedOption.getAttribute("data-al") ){
      lostHour.value = selectedOption.getAttribute("data-al");
    }
  }
  
});

const currencies = [
{ code: 'USD', symbol: '$', name: 'US Dollar' }, { code: 'EUR', symbol: '€', name: 'Euro' },
{ code: 'GBP', symbol: '£', name: 'British Pound' }, { code: 'JPY', symbol: '¥', name: 'Japanese Yen' },
{ code: 'AUD', symbol: 'A$', name: 'Australian Dollar' }, { code: 'CAD', symbol: 'C$', name: 'Canadian Dollar' },
{ code: 'CHF', symbol: 'Fr', name: 'Swiss Franc' }, { code: 'CNY', symbol: '¥', name: 'Chinese Yuan' },
{ code: 'HKD', symbol: 'HK$', name: 'Hong Kong Dollar' }, { code: 'NZD', symbol: 'NZ$', name: 'New Zealand Dollar' },
{ code: 'SEK', symbol: 'kr', name: 'Swedish Krona' }, { code: 'KRW', symbol: '₩', name: 'South Korean Won' },
{ code: 'SGD', symbol: 'S$', name: 'Singapore Dollar' }, { code: 'NOK', symbol: 'kr', name: 'Norwegian Krone' },
{ code: 'MXN', symbol: '$', name: 'Mexican Peso' }, { code: 'INR', symbol: '₹', name: 'Indian Rupee' },
{ code: 'RUB', symbol: '₽', name: 'Russian Ruble' }, { code: 'ZAR', symbol: 'R', name: 'South African Rand' },
{ code: 'TRY', symbol: '₺', name: 'Turkish Lira' }, { code: 'BRL', symbol: 'R$', name: 'Brazilian Real' },
{ code: 'TWD', symbol: 'NT$', name: 'New Taiwan Dollar' }, { code: 'DKK', symbol: 'kr', name: 'Danish Krone' },
{ code: 'PLN', symbol: 'zł', name: 'Polish Złoty' }, { code: 'THB', symbol: '฿', name: 'Thai Baht' },
{ code: 'IDR', symbol: 'Rp', name: 'Indonesian Rupiah' }, { code: 'HUF', symbol: 'Ft', name: 'Hungarian Forint' },
{ code: 'CZK', symbol: 'Kč', name: 'Czech Koruna' }, { code: 'ILS', symbol: '₪', name: 'Israeli Shekel' },
{ code: 'CLP', symbol: '$', name: 'Chilean Peso' }, { code: 'PHP', symbol: '₱', name: 'Philippine Peso' },
{ code: 'AED', symbol: 'د.إ', name: 'UAE Dirham' }, { code: 'COP', symbol: '$', name: 'Colombian Peso' },
{ code: 'SAR', symbol: '﷼', name: 'Saudi Riyal' }, { code: 'MYR', symbol: 'RM', name: 'Malaysian Ringgit' },
{ code: 'RON', symbol: 'lei', name: 'Romanian Leu' }
];

const currencyElm = document.getElementById("currency");
if(currencyElm){
  currencies.forEach(currency => {
    const option = document.createElement("option");
    option.value = currency.symbol;
    option.textContent = `${currency.name} (${currency.symbol})`;
    currencyElm.appendChild(option);
  });
}

document.getElementById("currency").addEventListener("change", function(){
  const selectedOption    = this.options[this.selectedIndex];
  const selectedCurrency  = this.value;
  const symbolSpan        = document.getElementById("currencySymbol");
  symbolSpan.textContent  = selectedCurrency || "";
});

function calculateImpact(){
  const WORKDAYS_PER_YEAR = 260;
  const IMPROVEMENT_PERCENTAGE = 0.20;

  const formData = {
    industry: document.getElementById("industry").value,
    jobType: document.getElementById("jobType").value,
    teamSize: parseInt(document.getElementById("teamSize").value) || 0,
    averageHourlyWage: parseFloat(document.getElementById("wage").value) || 0,
    currency: document.getElementById("currency").value,
    estimatedTimeLost: parseFloat(document.getElementById("hours-lost").value) || 0
  };

  const selectedDistractions = Array.from(
    document.querySelectorAll('input[name="distraction"]:checked')
  ).map((el) => el.value);

  if( !formData.industry ){
    document.getElementById("industry").closest('.input-field').classList.add("error");
    return;
  }

  if( !formData.jobType ){
    document.getElementById("jobType").closest('.input-field').classList.add("error");
    return;
  }

  const distractions = [
    { id: "meetings", label: "Unnecessary Meetings", percentage: 15 },
    { id: "emails", label: "Email Management", percentage: 12 },
    { id: "social", label: "Social Media", percentage: 10 },
    { id: "breaks", label: "Unscheduled Breaks", percentage: 8 },
    { id: "chat", label: "Office Chat", percentage: 7 }
  ];

  const selectedDistractionsData = distractions.filter((d) =>
    selectedDistractions.includes(d.id)
  );

  const totalDistractionPercentage = selectedDistractionsData.reduce((sum, d) => sum + d.percentage, 0) / 100;
  const dailyHoursLost = formData.estimatedTimeLost * (1 + totalDistractionPercentage);
  const annualCost = formData.teamSize * formData.averageHourlyWage * dailyHoursLost * WORKDAYS_PER_YEAR;
  const potentialSavings = annualCost * IMPROVEMENT_PERCENTAGE;
  const currentProductiveHours = 8 - dailyHoursLost;
  const optimizedProductiveHours = currentProductiveHours + dailyHoursLost * IMPROVEMENT_PERCENTAGE;

  const reportData = {
    annualCost,
    potentialSavings,
    selectedDistractions: selectedDistractionsData,
    currentProductiveHours,
    optimizedProductiveHours,
    workdaysPerYear: WORKDAYS_PER_YEAR
  };

  console.log("Report Generated:", reportData);
  // Optional: render to DOM
  document.getElementById("results").innerHTML = `
  <h3>📊 Productivity Report</h3>
  <p><strong>Annual Impact:</strong> ${formData.currency} ${annualCost.toFixed(0).toLocaleString()}</p>
  <p><strong>Potential Savings (20%):</strong> ${formData.currency} ${potentialSavings.toFixed(0).toLocaleString()}</p>
  <p><strong>Current Productive Hours/Day:</strong> ${currentProductiveHours.toFixed(2)}</p>
  <p><strong>Optimized Productive Hours/Day:</strong> ${optimizedProductiveHours.toFixed(2)}</p>`;
}