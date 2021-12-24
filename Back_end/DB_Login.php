<?php
/**********Login********/
/*email_Login              */
/*lPassword                */
/*button ==> Login         */
/***************************/ 
if(isset($_POST['Login'])){
$sql2='SELECT * FROM signup';
$result2 =mysqli_query($conn, $sql2);
while($row=mysqli_fetch_array($result2))
{
    $email_Login           = $_POST['email_Login'];
    $lPassword             = $_POST['lPassword'];
    
    if($row['email_SignUp']==$email_Login && $row['NPassword']==$lPassword){
    echo 'true';
    break;
}else{echo 'ERROR';}
   
}
mysqli_free_result($result2);
mysqli_close($conn);
}
?>






