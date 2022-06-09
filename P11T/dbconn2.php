<?php


try{
    
    $servername ="localhost";
    $username = "root";
    $password = "";
    
    global $conn;
    $conn = new PDO("mysql:host=$servername;dbname=brogrammer",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   /*  echo "Connected successfully"; */
    $nama = isset($_POST["nama"])?$_POST["nama"]:"";
    $bday = isset($_POST["birthday"])?$_POST["birthday"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $password = isset($_POST["pwd"])?$_POST["pwd"]:"";
    $gender = isset($_POST["jeniskelamin"])?$_POST["jeniskelamin"]:"";
    $bahasa = isset($_POST["bahasa"])?$_POST["bahasa"]:"";
    $alasan = isset($_POST["alasan"])?$_POST["alasan"]:"";
    $matkulFav = isset($_POST["matkul"])?$_POST["matkul"]:"";
    
    
   /*  $isphp = $_POST["bahasa1"]; */
   
   
    
   
   
  
   /* $id=$_POST[add1()]; */
   
   $sql= "INSERT INTO `brogrammer`( `namaLengkap`, `bday`,`bahasa`, `email`, `password`, 
   `gender`,`alasan`, `matkulFav`) 
   VALUES ('$nama','$bday','$bahasa','$email','$password',
   '$gender','$alasan','$matkulFav')";
   $conn->exec($sql);
   echo "New record created successfully";
   echo "<br>";
   
   /* $last=$conn->lastInsertId(); 
   echo"Data berhasil ditambahkan. ID terakhir: ".$last;*/
   
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
    <button onclick="location.href='Form%20Pendaftaran.html'">Kembali</button>
</body>
</html>