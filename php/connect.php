
<?php

 $mail = strip_tags($_POST['mail']);
 $password = strip_tags($_POST['password']);


 if (isset($password)) {
    if ($password === '2Adm') {

        header('Location: admin.php');
    }
    elseif ($password === '2Chf') {
        header('Location: chef.php');
    }
    else{
        header('Location: error.php');
    }
 }



?>

