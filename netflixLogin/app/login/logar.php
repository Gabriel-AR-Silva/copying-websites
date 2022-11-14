<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $email = addslashes($_POST['email']);
    $passw = addslashes($_POST['passw']);

    require_once 'class-userlog.php';
    $conn = new userLog("netflixdb", "localhost", "root", "");

    if($conn->selectData($email, $passw) == true)
    {
        if(isset($_SESSION['idUser'])){
            header("Location: ../../index.php");
        }
        else{
            header("Location: login.php");
        }
    }
    else
    {
        header("Location: login.php");
    }
}
else
    {
        header("Location: login.php");
    }
    
?>