<?php


try{
    
    $servername ="localhost";
    $username = "root";
    $password = "";
    
    
    $conn = new PDO("mysql:host=$servername;dbname=brogrammer",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage(); 
}
?>