<?php
session_start();
/* if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
} */
if(!isset($_SESSION['login'])){
    header('location: login.php');
}
try{
    
    $servername ="localhost";
    $username = "root";
    $password = "";
    
    global $conn;
    $conn = new PDO("mysql:host=$servername;dbname=brogrammer",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
   
   $sql= "SELECT * FROM brogrammer";

   //cetak data
   $result=$conn->query($sql);
   $result->setFetchMode(PDO::FETCH_ASSOC);
   $row=$result->fetchAll();
   $conn = null;
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage(); 
}
?>
