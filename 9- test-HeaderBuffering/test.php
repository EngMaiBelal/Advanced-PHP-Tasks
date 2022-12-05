<?php 
echo " Hello from Sudan ";
setcookie("cookiename", "cookiedata");
// output will be Warning: Cannot modify header information 
// header('Location: hello.php');


if(isset($_POST['redirect'])){
    header('Location: hello.php');

}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <button name="redirect" type="submit"> click here! </button>
    <button name="another-redirect" type="submit"> click here! </button>
    <?php
    
    if(isset($_POST['another-redirect'])){
        header('Location: another-hello.php');
    
    }
    ?>
    </form>
</body>
</html>