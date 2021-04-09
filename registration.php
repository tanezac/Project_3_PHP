<!DOCTYPE html>
<html lang="en">
<head>

    <?php define("title", "Registration"); ?>
    <title><?php echo title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="./css/stylesheet_1.css"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/color.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">



</head>
<body>
<h1><?php echo title; ?></h1>
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="home_page.php" class="w3-bar-item w3-button"><img style="margin-left:-17px; height:50px;" src="./img/logo.jpg" alt="logo"><b>STA</b> Snow Station</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="home_page.php" class="w3-bar-item w3-button" >Home</a>
            <a href="registration.php" class="w3-bar-item w3-button">Registration</a>
            <a href="animation_snow.php" class="w3-bar-item w3-button">Animations</a>
        </div>
    </div>
</div>
<header class="w3-display-container w3-content w3-wide" style="max-width:2000px; line-height: 100px" id="home">
    <img class="w3-image" src="./img/winner_2.jpg" alt="Winner" width="100%">
    <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>STA</b></span> <span class="w3-hide-small w3-text-light-grey">Snow Station</span></h1>
    </div>
</header>

<?php
    include './PHP/check_form.php';
?>


<!--Button Left-->
<div class="wrapper" >
    <div id="menubar">
        <div id="menu_list">
            <a href="home_page.php" class="w3-bar-item w3-button menuitem menuitem_1" >Home</a><br>
            <a href="registration.php" class="w3-bar-item w3-button menuitem menuitem_1" >Registration</a><br>
            <a href="animation_snow.php" class="w3-bar-item w3-button menuitem menuitem_1" >Animations</a>
        </div>
    </div>

<div id="main1">
    <h1 style="text-align: center">Register Now</h1>
    <p><span class="error">* Required Field </span> </p>
    <form  method="post" novalidate
           action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <div class="col-xs-65 col-sm-90 col-md-90 col-lg-90 text-left">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="username">User Name:</label>
                        <input id="username" name="username" class="form-control" type="text"
                               placeholder="Enter User Name" required="required"
                               value="<?php echo $username; ?>"/>
                        <span class="error"><?php echo $usernameERR;?></span>

                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input id="password" name="password" class="form-control" type="password"
                               placeholder="Enter Password" value="" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="repeat_password">Repeat Password:</label>
                        <input id="repeat_password" name="repeat password" class="form-control" type="password"
                               placeholder="Repeat Password" value="" required="required"/>
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input id="first_name" name="first name" class="form-control" type="text"
                               placeholder="Enter First Name" required="required"/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input id="last_name" name="last name" class="form-control" type="text"
                               placeholder="Enter Last Name" required="required"/>
                    </div>

                    <div class="form-group">
                        <label for="birthDay">Date of Birth:</label><br/>
                        <input id="birthDay" type="date" name="birthDay" class="form-control"
                        placeholder="Enter Date Of Birth" required="required"/>
                    </div>

                    <div class="form-group">
                        <label>Gender:</label><br>
                        <input type="radio"
                               name="gender" id="maleGender"
                               <?php if($gender == "male"){echo "Checked";} ?>
                               value="male" />
                        <label for="maleGender">Male</label>
                        <input type="radio"
                               name="gender" id="femaleGender"
                               <?php if($gender == "female"){echo "Checked";} ?>
                               value="female" />
                        <label for="femaleGender">Female</label>
                        <input type="radio"
                               name="gender" id="otherGender"
                                <?php if($gender == "other"){echo "Checked";} ?>
                               value="other" />
                        <label for="otherGender">Other</label>
                    </div>
                    <div class="form-group">
                        <label>Marital Status:</label><br>
                        <input type="radio"
                               name="status" id="yes"
                               value="yes" />
                        <label for="yes">Yes</label>
                        <input type="radio"
                               name="status" id="no"
                               value="no" />
                        <label for="no">No</label>

                    </div>


                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="address1">Address Line 1:</label>
                        <input id="address1" name="address1" class="form-control" type="text"
                               placeholder="Enter Address" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="address2">Address Line 2:</label>
                        <input id="address2" name="address2" class="form-control" type="text"
                               placeholder="Enter Address"/>
                    </div>

                    <div class="form-group">
                        <label for="city">City:</label>
                        <input id="city" name="city" class="form-control" type="text"
                               placeholder="Enter City" />
                    </div>
                    <div class="form-group">
                    <label for="state">State:</label>
                    <select id="state" name="state" class="form-control">
                        <option value="" selected="selected" hidden="hidden" disabled="disabled">
                            --Please Select--
                        </option>
                        <option value="CA">California</option>
                        <option value="MO">Missouri</option>
                        <option value="NY">New York</option>
                        <option value="QR">Oregon</option>
                        <option value="TX">Texas</option>
                        <option value="LA">Los Angeles</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code:</label>
                        <input id="zip" name="zip" class="form-control" type="text"
                               placeholder="Enter Zip Code" required="required"/>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input id="phone" name="phone" class="form-control" type="tel"
                               placeholder="Enter Phone Number" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" name="email" class="form-control" type="email"
                               placeholder="Enter Email" required="required"/>
                    </div>

                    <input type="submit" class="btn btn-success" value="Submit Button"/>
                    <input type="reset" class="btn btn-info" value="Reset Button"/>
                </div>
            </div>
        </div>
    </form>



</div>
</div>




<footer class="w3-container w3-padding-32 w3-light-blue">
    <div class="w3-row-padding">
        <div class="w3-third">
            <h3>Contact Information</h3>
            <p>Contact me if you have any questions.</p>
            <p> <i class="material-icons">email</i>  ntnhmc@umsystem.edu </p>
            <p> <i class="material-icons">phone</i>  314-256-1754 </p>
            <p> <i class="material-icons">account_balance</i> 1 University Saint Louis, MO, 63125 </p>
        </div>

        <div class="w3-third">
            <h3>MEDIA POSTS</h3>
            <ul class="w3-ul">
                <li class="w3-padding-16 w3-hover-white">
                    <img src="./img/fb.jpg" class="w3-left w3-margin-right" style="width:50px" alt="facebook">
                    <span class="w3-large">SnowStation</span><br>
                    <a href="https://www.facebook.com/" target="_blank" title="Click here for more information">
                        Click Here
</a>

                </li>
                <li class="w3-padding-16 w3-hover-white">
                    <img src="./img/instagram.jpg" class="w3-left w3-margin-right" style="width:50px" alt="instagram">
                    <span class="w3-large">SnowStation_SaintLouis</span><br>
                    <a href="https://www.instagram.com/" target="_blank" title="Click here for more information">
    Click Here
</a>
                </li>
            </ul>
        </div>

        <div class="w3-third">
            <h3>POPULAR TAGS</h3>
            <p>
                <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">London</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">DIY</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Family</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>
            </p>
        </div>
    </div>
</footer>



</body>
</html>