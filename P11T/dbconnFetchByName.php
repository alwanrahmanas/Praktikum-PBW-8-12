<?php
session_start();
    try{
        $servername ="localhost";
        $username = "root";
        $password = "";
        
        
        $conn = new PDO("mysql:host=$servername;dbname=brogrammer",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
         $keyword = $_REQUEST['keyword'];
         $sql = "SELECT * FROM brogrammer WHERE namaLengkap LIKE '%$keyword%'";
         
         $result = $conn->query($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetchAll();
            //var_dump($row);
            $conn = null;   
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage(); 
        }

?>

<table border="1" cellpadding="10" cellspacing="0">
    
    <tr>
        <th>ID</th>
        <?php if($_SESSION['role']=='admin'){ 
        ?> <th>Aksi</th>
        <?php } ?>  
        <th>Nama</th>
        <th>Email</th>
        <th>Matkul Favorit</th>
        <th>Bahasa Pemrograman</th>
    </tr>
  
        
    <?php foreach($row as $rows): ?>
    <tr>
        <td>
            <?= $rows['id']; ?>
        </td>  
        <?php if($_SESSION['role']=='admin'){
        ?><td>
            <a href="updating.php?id=<?=$rows["id"];?>">Ubah</a> |
            <a href="deleting.php?id=<?= $rows["id"];?>">Hapus</a>
          </td>
        <?php } ?>  
        <td><?= $rows["namaLengkap"]?></td>
        <td><?= $rows["email"]?></td>
        <td><?= $rows["matkulFav"]?></td>
        <td><?= $rows["bahasa"]?></td>
    </tr>

    <?php endforeach; ?>
    
</table>