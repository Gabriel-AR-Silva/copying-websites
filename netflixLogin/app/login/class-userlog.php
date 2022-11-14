<?php
session_start();
class userLog{
    private $pdo;

 public function __construct($dbname, $localhost, $root, $passw){
    try{
        $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$localhost,$root, $passw);
        echo "Conected";
    }catch(PDOException $e){
        echo "Error with database".$e->getMessage();
    }catch(Exception $e){
        echo "Error".$e->getMessage()."<br>";
        echo "Error code".$e->getCode();
    }
 }   

 public function selectData($email, $passw){

    $total = array();
    $conn = $this->pdo->prepare("SELECT * FROM `user` WHERE emailUser = :eU");
    $conn->bindValue(":eU", $email);
    $conn->execute();

    
    if($conn->rowCount()>0){
        $data = $conn->fetch(PDO::FETCH_ASSOC);
        $_SESSION['idUser'] = $data['idUser'];


        return password_verify($passw, $data['passwUser']);
    }
    else{return false;}
 }

 public function insertData($name, $phone, $email, $passwHash){

    $total = array();
    $conn = $this->pdo->prepare("SELECT * FROM `user` WHERE emailUser = :eU");
    $conn->bindValue(":eU", $email);
    $conn->execute();

    if($conn->rowCount()>0){
        return true;
    }
    else{
        $conn = $this->pdo->prepare("INSERT INTO `user`(nameUser, phoneUser, emailUser, passwUser) VALUES (:nU, :phU, :eU, :pwU)");
        $conn->bindValue(":nU", $name);
        $conn->bindValue(":phU", $phone);
        $conn->bindValue(":eU", $email);
        $conn->bindValue(":pwU", $passwHash);
        $conn->execute();
        
        return false;
    }
 }

}