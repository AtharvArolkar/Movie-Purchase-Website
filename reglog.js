function validateReg(){
    var form = document.forms[0];
    
    var name = form.fullname.value;
    var username = form.username.value;
    var number = form.number.value;
    var email = form.email.value;
    var password = form.password.value;

    var nameRegex=/^[a-z -]+$/i;
    var usernameRegex=/^[a-z][\w.]+$/i;
    var numberRegex=/^(\+91|0)?\d{10}$/;
    var emailRegex=/[\w\.\_]+\@[\w\_\.]+(\.{1}[a-zA-Z]+){1}/;
    
    var nameTest=nameRegex.test(name);
    var usernameTest=usernameRegex.test(username);
    var numTest=numberRegex.test(number);
    var emailTest=emailRegex.test(email);
    var passwordTest=(password.length>=6);
    var alertString="Enter a valid";
    if (!(nameTest&&numTest&&usernameTest&&emailTest)){
        if(!nameTest){
            alertString+=' name';
        }
        if(!numTest){
            alertString+=' phone number';
        }
        if(!usernameTest){
            alertString+=' username';
        }
        if(!emailTest){
            alertString+=' email';
        }
        if(!passwordTest){
            alertString+=' password\nPassword must be greater than 6 characters';
        }
        alert(alertString);
    }else{
        alert('Form valid. (Placeholder for submission.)');
    }
    return false;
}

function validateLog(){
    var form = document.forms[0];
    
    var username = form.username.value;
    var password = form.password.value;
    var usernameRegex=/^[a-z][\w.]+$/i;
    var usernameTest=usernameRegex.test(username);
    var passwordTest=(password.length>=6);
    var alertString='';
    if (!(usernameTest&&passwordTest)){
        if(!usernameTest){
            alertString+='Enter a valid username';
        }
        if(!passwordTest){
            alertString+='\nPassword must be atleast 6 characters long';
        }
        alert(alertString);
    }else{
        alert('Form valid. (Placeholder for submission.)');
    }
    return false;
    }