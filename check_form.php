<?php

$usernameERR =  $firstnameERR = $lastnameERR = $passwordERR = $repeatPassERR =$genderERR= $maritalERR= $address1ERR = $address2ERR = $cityERR  =$zipcodeERR  =$phoneERR  = $emailERR = "";
$username =  $firstname = $lastname = $password = $repeatPass= $gender= $marital= $address1= $address2= $city =$zipcode =$phone = $email = "";
$birthday = $birthdayERR="";
$state = $stateERR = "";
$isValid = false;


if(isset($_POST["create"])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;
    $username = test_input($_POST["username"]);
    if (empty($_POST["username"])) {
        $usernameERR = "User name is required!";
        $isValid = false;
    }
    else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $usernameERR = "Only letters and white space allowed";
            $isValid=false;
        }
        else{
            if(strlen($_POST["username"]) > 50){
                $usernameERR= "User name's length is too long - exceed the maximum of 50 characters";
                $isValid=false;
            }
            elseif( strlen($_POST["username"]) < 6){
                $usernameERR= "User name's length is too short - below the 6 character minimum";
                $isValid=false;
            }
            else{
                $usernameERR="";
                $isValid=true;
            }
        }
    }
    //password

        if (!empty($_POST["password"]) && ($_POST["repeatPass"])) {
            $password = test_input($_POST["password"]);
            $repeatPass = test_input($_POST["repeatPass"]);
            if (strlen($_POST["password"]) <= 8) {
                $passwordERR = "Your Password Must Contain At Least 8 Characters!";
                $isValid=false;
            } elseif (!preg_match("#[0-9]+#", $password)) {
                $passwordERR = "Your Password Must Contain At Least 1 Number!";
                $isValid=false;
            } elseif (!preg_match("#[A-Z]+#", $password)) {
                $passwordERR = "Your Password Must Contain At Least 1 Capital Letter!";
                $isValid=false;
            } elseif (!preg_match("#[a-z]+#", $password)) {
                $passwordERR = "Your Password Must Contain At Least 1 Lowercase Letter!";
                $isValid=false;
            } elseif (!preg_match("#[\W]+#", $password)) {
                $passwordERR = "Your Password Must Contain At Least 1 Special Character!";
                $isValid=false;
            } elseif (strcmp($password, $repeatPass) !== 0) {
                $passwordERR = "Passwords must match!";
                $isValid=false;
            }
        }
        elseif(empty($_POST["password"])) {
            $passwordERR = "Password is required!";
            $isValid=false;
        }
        elseif(empty($_POST["repeatPass"]) && !empty($_POST["password"])){
            $repeatPassERR = "Please Check You've Entered Or Confirmed Your Password!";
            $isValid=false;
        }
        else
        {
            $passwordERR=$repeatPass="";
            $isValid=true;
        }

//First Name
    $firstname = test_input($_POST["firstname"]);
    if (empty($_POST["firstname"])) {
        $firstnameERR = "First name is required!";
        $isValid = false;
    }
    else {

        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
            $firstnameERR = "Only letters and white space allowed";
            $isValid=false;
        }
        else {
            // check if name only contains letters and whitespace
            if ( strlen($_POST["firstname"])  > 50) {
                $firstnameERR = "First name's length is too long - exceed the maximum of 50 characters";
                $isValid = false;
            } else {
                $firstnameERR= "";
                $isValid = true;
            }
        }
    }
    //Lastname
    $lastname = test_input($_POST["lastname"]);
    if (empty($_POST["lastname"])) {
        $lastnameERR = "Last name is required!";
        $isValid = false;
    }
    else {

        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
            $lastnameERR = "Only letters and white space allowed";
            $isValid=false;
        }
        else {
            // check if name only contains letters and whitespace
            if ( strlen($_POST["lastname"])  > 50) {
                $lastnameERR= "Last name's length is too long - exceed the maximum of 50 characters";
                $isValid = false;
            } else {
                $lastnameERR= "";
                $isValid = true;
            }
        }
    }

//birthday
    $birthday= test_input($_POST["birthday"]);
    if (empty($_POST["birthday"])) {
            $birthdayERR = "Birthday is required!";
            $isValid = false;
    }
    else{
        $isValid=true;
    }




//gender
    if (isset($_POST["gender"])) {
    $gender = test_input($_POST["gender"]);
    if (empty($_POST["gender"])) {
        $genderERR = "Gender is required!";
        $isValid = false;
        }
    }
    else {
        $genderERR = "Gender is required!";
        $isValid = false;
    }
//Marital status
    if (isset($_POST["status"])) {
        $marital = test_input($_POST["status"]);
        if (empty($_POST["status"])) {
            $maritalERR = "Marital Status is required";
            $isValid = false;
        }
    }
    else {
        $maritalERR= "Marital Status is required";
        $isValid = false;
    }


//Address1
    $address1 = test_input($_POST["address1"]);
    if (empty($_POST["address1"])) {
        $address1ERR = "Address is required!";
        $isValid = false;
    }
    else {
        if ( strlen($_POST["address1"])  > 100) {
                $address1ERR= "Address's length is too long - exceed the maximum of 100 characters";
                $isValid = false;
        } else {
                $address1ERR= "";
                $isValid = true;
            }
        }

    $address2 = test_input($_POST["address2"]);
    if ( strlen($_POST["address2"])  > 100) {
            $address2ERR= "Address's length is too long - exceed the maximum of 100 characters";
            $isValid = false;
    }
    else {
            $address2ERR= "";
            $isValid = true;
    }
//city
    $city = test_input($_POST["city"]);
    if (empty($_POST["city"])) {
        $cityERR = "City is required!";
        $isValid = false;
    }
    else {
        if ( strlen($_POST["city"])  > 50) {
            $cityERR= "City's length is too long - exceed the maximum of 50 characters";
            $isValid = false;
        } else {
            $cityERR= "";
            $isValid = true;
        }
    }

//state
    $state = test_input($_POST["state"]);
    if (empty($_POST["state"])) {
        $stateERR = "State is required!";
        $isValid = false;
    }
    else{
        $isValid=true;
    }

//phone
    function phone_number_format($number) {

        // Allow only Digits, remove all other characters.
        $number = preg_replace("/[^\d]/","",$number);

        // get number length.
        $length = strlen($number);

        // if number = 10
        if($length == 10) {
            $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
        }

        return $number;

    }
    $phone = test_input($_POST["phone"]);
    if (empty($_POST["phone"])) {
        $phoneERR = "Phone number is required!";
        $isValid = false;
    }
    else{
        if ( strlen($_POST["phone"])  > 12 ) {
            $phoneERR= "Max length 12 characters!";
            $isValid = false;
        }
        elseif(preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)){
            $phoneERR="";
            $isValid=true;
        }
        elseif(phone_number_format($phone)){
            $phoneERR="";
            $phone=phone_number_format($phone);
            $isValid=true;
        }
        else{
            $phoneERR="Phone number should be formatted: xxx-xxx-xxxx";
            $isValid=false;
        }

    }

//zipcode
    $zipcode = test_input($_POST["zipcode"]);
    if (empty($_POST["zipcode"])) {
        $zipcodeERR = "Zip code is required!";
        $isValid = false;
    }
    else{
        if ( strlen($_POST["zipcode"])  > 10 || strlen($_POST["zipcode"]) <5 ) {
                $zipcodeERR= "Max length 10 characters, minimum length 5 digits";
                $isValid = false;
        }
        elseif(preg_match('/^[0-9]{5}([- ]?[0-9]{4})?$/', $zipcode)){
            $zipcodeERR="";
            $isValid=true;
        }
        else{
            $zipcodeERR="Zip Code should be formatted: xxxxx or xxxxx-xxxx";
            $isValid=false;
        }
    }


    //email
    $email = test_input($_POST["email"]);
    if (empty($_POST["email"])) {
        $emailERR = "Email is required!";
        $isValid=false;
    } else {

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailERR = "Invalid email format - x@x.xformat!";
            $isValid=false;
        }
        else{
            $isValid=true;
        }
    }


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

