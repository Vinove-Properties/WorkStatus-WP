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