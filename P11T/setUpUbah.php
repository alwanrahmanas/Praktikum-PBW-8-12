<?php
try{
    
    $servername ="localhost";
    $username = "root";
    $password = "";
    
    global $conn;
    $conn = new PDO("mysql:host=$servername;dbname=brogrammer",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
   $id=$_GET['id'];

   $sql= "SELECT * FROM brogrammer WHERE id=$id"; 

   //cetak data
   $result=$conn->query($sql);
   $result->setFetchMode(PDO::FETCH_ASSOC);
    $row=$result->fetch();
   $conn = null;
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage(); 
}
?>
