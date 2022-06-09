
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Database</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table th{
        background-color: aqua;
        }

        .butt{
            background-color: aqua;
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 16px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>

</head>
<body>

<form action="" method="post">
    <input type="text" name="keyword" id="keyword"placeholder="Search">
    <button type="submit" name="cari" id = "search">Cari </button>
</form>
<h1>Daftar Anggota</h1>
<div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
    <?php require 'setUp.php';
     
     if(!isset($_SESSION['login'])){
        header('location: login.php');
    }
    ?>
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
    </div> 
<div class="butt">
    <a href="Form%20Pendaftaran.html">Tambah Data</a>
    <a href="index.php">Index</a>
    </div>
    <script src="script1.js"></script>
</body>
</html>