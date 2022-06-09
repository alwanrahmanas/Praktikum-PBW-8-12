<?php
session_start();
try{
    
    $servername ="localhost";
    $username = "root";
    $password = "";
    
    global $conn;
    $conn = new PDO("mysql:host=$servername;dbname=brogrammer",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   /*  echo "Connected successfully"; */
    
    $email=$_POST['email'];
    $password=$_POST['pwd'];
   
   
   $sql= "SELECT * FROM autentifikasi WHERE email = '$email';";
   
  
    $result=$conn->query($sql);
    //$conn->exec($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $row=$result->fetch();
    if($row){
        if($row['password']==$password){
            $_SESSION['login']=true;
            $_SESSION['role']=$row['role'];
            echo "<script>
            alert('Login sabi');
            window.location.href='index.php';

            </script>";
        }else{
            
            echo "<script>
            alert('Login Failed! Wrong password');
            window.location.href='login.php';
            
            </script>";
        }
    }else{
        echo "<script>
        alert('Wrong Email');
        window.location.href='login.php';
        
        </script>";
    }
    $conn=null;

}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage(); 
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
    <button onclick="location.href='login.php'">Kembali</button>
</body>
</html>