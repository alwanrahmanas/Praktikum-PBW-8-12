<?php


try{
    
    $servername ="localhost";
    $username = "root";
    $password = "";
    
    global $conn;
    $conn = new PDO("mysql:host=$servername;dbname=brogrammer",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   /*  echo "Connected successfully"; */
    $id=$_POST['id'];
    $nama = isset($_POST["nama"])?$_POST["nama"]:"";
    $bday = isset($_POST["birthday"])?$_POST["birthday"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $password = isset($_POST["pwd"])?$_POST["pwd"]:"";
    $gender = isset($_POST["jeniskelamin"])?$_POST["jeniskelamin"]:"";
    $bahasa = isset($_POST["bahasa"])?$_POST["bahasa"]:$_POST["bahasa"];
    $alasan = isset($_POST["alasan"])?$_POST["alasan"]:"";
    $matkulFav = isset($_POST["matkul"])?$_POST["matkul"]:"";

   
   
   $sql= "UPDATE `brogrammer` SET namaLengkap='$nama',
   bday='$bday',
   bahasa='$bahasa',
   email='$email',
   gender='$gender',
   matkulFav='$matkulFav' WHERE id = $id";
   
   $conn->exec($sql);
   echo "
   <script>
       alert('Data berhasil diperbaharui');
       window.location.href='list.php';
    </script>";
  
   echo "<br>";
   
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