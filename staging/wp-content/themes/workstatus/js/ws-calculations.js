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


const industryJobMap = {
"it": ["Software Developer", "IT Support", "System Administrator", "Product Manager"],
"manufacturing": ["Production Worker", "Quality Inspector", "Machine Operator"],
"retail": ["Store Manager", "Cashier", "Sales Associate"],
"healthcare": ["Doctor", "Nurse", "Pharmacist"],
"education": ["Teacher", "Academic Counselor", "Principal"],
"finance": ["Accountant", "Financial Analyst", "Bank Teller"],
"construction": ["Civil Engineer", "Electrician", "Site Manager"],
"transportation": ["Driver", "Logistics Manager", "Fleet Supervisor"],
"hospitality": ["Hotel Manager", "Receptionist", "Chef"],
"telecommunications": ["Network Engineer", "Customer Support", "Telecom Analyst"]
};

document.getElementById("industry").addEventListener("change", function () {
const jobTypeSelect = document.getElementById("jobType");
const selectedIndustry = this.value;
jobTypeSelect.innerHTML = '<option value="">Select a job type</option>';

if (selectedIndustry && industryJobMap[selectedIndustry]) {
  industryJobMap[selectedIndustry].forEach(job => {
    const option = document.createElement("option");
    option.value = job.toLowerCase().replace(/\s+/g, "-");
    option.textContent = job;
    jobTypeSelect.appendChild(option);
  });
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
    option.setAttribute('data-cr', currency.symbol);
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

  if (!formData.industry || !formData.jobType) {
  //return;
  }

  // Mock distraction dataset
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
    <p><strong>Optimized Productive Hours/Day:</strong> ${optimizedProductiveHours.toFixed(2)}</p>
  `;
}