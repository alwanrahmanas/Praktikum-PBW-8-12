<?php
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
   $rows=$result->fetchAll();
   var_dump($rows); 
   foreach($result as $row){

            echo $row['namaLengkap']."<br>";
            echo $row['bday']."<br>";
            echo $row['bahasa']."<br>";
            echo $row['email']."<br>";
   } $conn = null;
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage(); 
}
?>
