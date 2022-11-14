<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email']) && isset($_POST['passw']))
{
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['tel']);

    $passw = addslashes($_POST['passw']);
    $passwHash = password_hash($passw, PASSWORD_DEFAULT);

    require_once 'class-userlog.php';
    $conn = new userLog("netflixdb", "localhost", "root", "");

    if($conn->insertData($name, $phone, $email, $passwHash) == false)
    {
        header("location: login.php");
    }
    else{
        header("location: registration.php");
    }

}

