<?php

$usernameERR =  $firstnameERR = $lastnameERR = $passwordERR = $repeatPassERR = $address1ERR = $address2ERR = $cityERR  =$zipcodeERR  =$phoneERR  = $emailERR = " ";
$username =  $firstname = $lastname = $password = $repeatPass= $address1= $address2= $city =$zipcode =$phone = $email = " ";
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    if (empty($_POST["username"])) {
        $usernameERR = "User name is required!";
        $isValid = false;
    } else {
        $username = test_input($_POST["username"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $usernameERR = "Only letters and white space allowed";
            $isValid=false;
        }
    }
    $isValid = true;
    if (empty($_POST["name"])) {
        $usernameErr = "Name is required!";
    } else {
        $username = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $usernameErr = "Only letters and white space allowed";
        }
    }





    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
