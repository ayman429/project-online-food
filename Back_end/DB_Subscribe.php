<?php 
/**********Subscribe********/
/*email_Subscribe          */
/*button ==> subscribe_btn */
/***************************/ 

$email_Subscribe = $_POST['email_Subscribe'];

if(isset($_POST['subscribe_btn'])){
$email_Subscribe = mysqli_real_escape_string($conn, $_POST['email_Subscribe']);


$sql = "INSERT INTO subscribe(email_Subscribe)
        VALUES ('$email_Subscribe')";
        if(mysqli_query($conn, $sql)){
            header('location: index.php');
        }else{ 'Error: ' . mysqli_connect_error($conn);}   
}

$sql='SELECT * FROM subscribe';
$result =mysqli_query($conn, $sql);

mysqli_free_result($result);
mysqli_close($conn);