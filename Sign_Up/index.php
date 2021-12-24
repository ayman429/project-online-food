<?php
/**********subscribe********************/
include '../Back_end/db.php';
include '../Back_end/DB_Sign_up.php';
/****************************************/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <form action="index.php" method="POST">               
                <input type="text"  name="FirstName_SignUp"      id="FirstName_SignUp"      placeholder="First Name">
                <input type="text"  name="LastName_SignUp"       id="LastName_SignUp"       placeholder="Last Name">
                <input type="email" name="email_SignUp"          id="email_SignUp"          placeholder="Email">
                <input type="text"  name="NPassword"             id="NPassword"             placeholder="Password">
                <input type="text"  name="Password_Confirmation" id="Password_Confirmation" placeholder="Password Confirmation">

                <input type="submit" name="SignUp" id="SignUp" value="Sign Up">
                </form>
</body>
</html>                
