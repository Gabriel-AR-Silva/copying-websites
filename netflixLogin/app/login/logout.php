<?php

class userLogOut{
   
    public function logout(){ 
        if(!isset($_SESSION['idUser']) && empty($_SESSION['idUser']))
        {
            header("Location: ./app/login/login.php");
        }
        if(isset($_GET['deslogar']))
        {
            session_destroy();
            header("Location: ./app/login/login.php");
        }
    }
}