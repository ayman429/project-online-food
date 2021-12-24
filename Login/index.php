<?php
/**********subscribe********************/
include '../Back_end/db.php';
include '../Back_end/DB_Login.php';
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
                <form action="" method="POST">               
                <input type="email" name="email_Login"          id="email_Login"          placeholder="Email">
                <input type="text"  name="lPassword"             id="lPassword"             placeholder="Password">            
                <?php     ?>
                <input type="submit" name="Login" id="Login" value="Login">
                </form>
</body>
</html>                
