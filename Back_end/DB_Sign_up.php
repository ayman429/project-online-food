<?php 
/**********SignUp***********/
/*FirstName_SignUp         */
/*LastName_SignUp          */
/*email_SignUp             */
/*NPassword                */
/*Password_Confirmation    */
/*button ==> SignUp        */
/***************************/

$FirstName_SignUp      = $_POST['FirstName_SignUp'];
$LastName_SignUp       = $_POST['LastName_SignUp'];
$email_SignUp          = $_POST['email_SignUp'];
$NPassword             = $_POST['NPassword'];
$Password_Confirmation = $_POST['Password_Confirmation'];

if(isset($_POST['SignUp'])){
$FirstName_SignUp      = mysqli_real_escape_string($conn, $_POST['FirstName_SignUp']);
$LastName_SignUp       = mysqli_real_escape_string($conn, $_POST['LastName_SignUp']);
$email_SignUp          = mysqli_real_escape_string($conn, $_POST['email_SignUp']);
$NPassword             = mysqli_real_escape_string($conn, $_POST['NPassword']);
$Password_Confirmation = mysqli_real_escape_string($conn, $_POST['Password_Confirmation']);


$sql = "INSERT INTO signup(FirstName_SignUp,LastName_SignUp,email_SignUp,NPassword,Password_Confirmation)
        VALUES ('$FirstName_SignUp','$LastName_SignUp','$email_SignUp','$NPassword','$Password_Confirmation')";
        if(mysqli_query($conn, $sql)){
            header('location: index.php');
        }else{ 'Error: ' . mysqli_connect_error($conn);}   
}

$sql='SELECT * FROM signup';
$result =mysqli_query($conn, $sql);

mysqli_free_result($result);
mysqli_close($conn);