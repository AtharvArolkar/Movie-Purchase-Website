function validateInput(input){
    console.log(input.name,input.validity.patternMismatch);
    if(input.validity.patternMismatch){
        var valMessage='Enter valid '+input.name;
        input.setCustomValidity(valMessage);
        input.reportValidity();
    }else{
        input.setCustomValidity('');
    }
}

function validateAge(input){
 var date = new Date(input.value)
 var today = new Date();
 var age=(today-date)/(1000*3600*24*365);
 if(age<18 || age>130 ){
    console.log(age);
    var valMessage='Please enter a valid date above 18 years of age.'
    input.setCustomValidity(valMessage);
 }else{
     input.setCustomValidity('');
 }
}