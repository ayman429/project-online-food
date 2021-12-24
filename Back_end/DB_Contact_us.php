<?php 
/**********contact_us*******/
/*FullName_contact         */
/*email_contact	           */
/*messages                 */
/*button ==> Send          */
/***************************/ 

$FullName_contact = $_POST['FullName_contact'];
$email_contact    = $_POST['email_contact'];
$messages  = $_POST['messages'];

if(isset($_POST['Send'])){
$FullName_contact = mysqli_real_escape_string($conn, $_POST['FullName_contact']);
$email_contact     = mysqli_real_escape_string($conn, $_POST['email_contact']);
$messages     = mysqli_real_escape_string($conn, $_POST['messages']);


$sql = "INSERT INTO contact_us(FullName_contact,email_contact,messages)
        VALUES ('$FullName_contact','$email_contact','$messages')";
        if(mysqli_query($conn, $sql)){
            header('location: index.php');
        }else{ 'Error: ' . mysqli_connect_error($conn);}   
}

$sql='SELECT * FROM contact_us';
$result =mysqli_query($conn, $sql);

mysqli_free_result($result);
mysqli_close($conn);