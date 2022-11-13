function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm(){
    const fname = document.getElementById('fname')
    const lname = document.getElementById('lname')
    const email = document.getElementById('email')
    const contact = document.getElementById('contact')
    const speciatly = document.getElementById('speciatly')
    
    
    let nameErr = nameErr2 = emailErr = phoneNumErr = specErr = true;

    if(fname.value === "" || fname.value == null) {
        printError("nameErr", "Please enter your first name");
    } else {
        let regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname.value) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }        
    }
    
    if(lname.value === "" || lname.value == null) {
        printError("nameErr2", "Please enter your last name");
    } else {
        let regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lname.value) === false) {
            printError("nameErr2", "Please enter a valid name");
        } else {
            printError("nameErr2", "");
            nameErr2 = false;
        }        
    }
    
    if(email.value === "" || email.value == null){
        printError("emailErr", "Please enter your email address");
    }else{
        let regex = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if(regex.test(email.value) === false){
            printError("emailErr", "Please enter a valid email address");
        }else{
            printError("emailErr", "");
            emailErr = false;
        }        
    }
/*
    if(contact.value === "" || contact.value == null) {
            printError("phoneNumErr", "Please enter your contact number");
    } else {
            let regex = /^\d{3}(-\d{3})(-\d{4})?$/;
            if(regex.test(phoneNum.value) === false) {
                printError("phoneNumErr", "Please enter a valid 10 digit contact number.");
            } else{
                printError("phoneNumErr", "");
                phoneNumErr = false;
            }
        }
*/
    if(speciatly.value === "") {
        printError("specErr", "Please select your Specialty");
    } else {
        printError("specErr", "");
        specErr = false;
    }

    if((nameErr || nameErr2 || emailErr  || phoneNumErr || specErr ) == true){
        return false;
    }
};
