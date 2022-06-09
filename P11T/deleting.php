<?php
try {

    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=brogrammer", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<br>";

    $id = $_GET['id'];

    $sql = "DELETE FROM brogrammer WHERE id=$id";
    $conn->exec($sql); //conn diset agar memiliki attribut exec, bukan menyimpan nilai exec ke dalam variabel
    /* if($conn){ 
    echo"   <script>
              alert("Data berhasil dihapus");
              header("location:list.php");
           </script>";
   }else{
       echo "Data dengan ID = ",$id," gagal dihapus";
   } */
    echo "
   <script>
       alert('Data berhasil dihapus');
       window.location.href='list.php';
       </script>";

    echo "<br>";
    $conn = null;
} catch (PDOException $e) {
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
    <button onclick="location.href='list.php'">List</button>
</body>

</html>