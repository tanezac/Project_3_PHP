function chkPasswords() {
    var first = document.forms["myForm"]["password"].value;


    //const first = document.getElementById("password");
    //const second = document.getElementById("repeat_password");
    if(first.length >50){
        document.getElementById('passErr').innerHTML="Your password is too long - exceed the maximum of 50 characters";
    }
    else if(first.length<8 && first.length>=1){
        document.getElementById('passErr').innerHTML="Your password is too short - below the 8 characters minimum";
    }
    else if(first.length <= 50 && first.length >=8){
        document.getElementById('passErr').innerHTML=" ";
        var pass= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,50}$/;
        if(!first.match(pass))
        {
            alert("Wrong format \n"
                +"Contain at least 8 characters \n"
                +"Contain at least 1 number \n"
                +"Contain at least 1 lowercase character (a-z) \n"
                +"Contain at least 1 uppercase character (A-Z) \n"
                +"Contain at least 1 special character")
            document.getElementById("password").style.color="red";
            document.getElementById("password").style.borderColor= "red";
            return false;
        }
        else {
            document.getElementById("password").style.color="black";
            document.getElementById("password").style.borderColor= "green";
        }
    }
}

function Reenter(){
    var second = document.forms["myForm"]["repeat password"].value;
    //var check = document.forms["myForm"]["password"].value;

    if(second.length >50){
        document.getElementById('verPassErr').innerHTML="Your password is too long - exceed the maximum of 50 characters";
    }
    else if(second.length<8 && second.length>=1){
        document.getElementById('verPassErr').innerHTML="Your password is too short - below the 8 characters minimum";
    }
    else if(second.length <= 50 && second.length >=8){
        document.getElementById('verPassErr').innerHTML=" ";
        var pass= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,50}$/;
        if(!second.match(pass))
        {
            alert("Wrong format \n"
                +"Contain at least 8 characters \n"
                +"Contain at least 1 number \n"
                +"Contain at least 1 lowercase character (a-z) \n"
                +"Contain at least 1 uppercase character (A-Z) \n"
                +"Contain at least 1 special character")
            //check_match();
            document.getElementById("repeat_password").style.color="red";
            document.getElementById("repeat_password").style.borderColor= "red";
        }
        else {
            //document.getElementById("repeat_password").style.color="black";
            check_match();
        }
    }


}
function check_match(){
    var second = document.forms["myForm"]["repeat password"].value;
    var check = document.forms["myForm"]["password"].value;
 if(second != check)
    {
        alert("Password does not match!")
        document.getElementById("repeat_password").style.color="red";
        document.getElementById("repeat_password").style.borderColor= "red";
        return false;
    }
 else {
     document.getElementById("repeat_password").style.color="black";
     document.getElementById("repeat_password").style.borderColor= "green";
 }
}


function registerHandlers() {
    document.getElementById("repeat_password").onblur = Reenter;
    document.getElementById("myForm").onsubmit = chkPasswords;
    document.getElementById("password").onblur = chkPasswords;
}
