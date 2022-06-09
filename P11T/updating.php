<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Program Latihan PBW</title>
        <link rel="stylesheet" href="Program Implementasi PBW.css">
        <script src="formScript.js"></script>
    </head>
    <body>
        <header>
            <h1> Form Perubahan </h1>
        </header>
       
        <main>
            <?php

            $id = $_GET['id']; //buat cari data mana yang diubah
            require 'setUpUbah.php';//panggil id dengan require
            ?>
            <aside>
                <h2>Ubah data anggota</h2>
            </aside>
            <section>

                <p id="ErrorAlert"></p>

            <form name="myForm" onsubmit="validate()" action="dbconn3.php" method="post">
                <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                <label for="nama">Nama Lengkap:</label><br>
                <input type="text" name="nama" id="nama" size="100" required value="<?php echo $row["namaLengkap"]?>"> 
                <br><br>

                <label for="birthday">Tanggal Lahir:</label><br>
                <input type="date" name="birthday" id="birthday" required value="<?php echo $row["bday"]?>" >
                <br><br>

                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" size="100" required value="<?php echo $row["email"]?>">
                <br><br>
                
                <label>Jenis Kelamin:</label><br>
                <input type="radio" name="jenisKelamin" id="male" value="Laki-laki" <?php if($row["gender"]=="Laki-laki") echo "cheked"?>>
                <label for="male">Laki-laki</label><br>
                <input type="radio" name="jenisKelamin" id="female" value="Perempuan" <?php if($row["gender"]=="Perempuan") echo "cheked"?>>
                <label for="female">Perempuan</label>
                <br><br>
                <label>Bahasa Pemrograman yang Ingin Dipelajari:</label><br>
                <input type="radio" name="bahasa" id="bahasa1" value="PHP" <?php if($row["bahasa"]=="PHP") echo "cheked"?>>
                <label for="bahasa">PHP</label><br>
                <input type="radio" name="bahasa" id="bahasa2" value="Java" <?php if($row["bahasa"]=="Java") echo "cheked"?>>
                <label for="bahasa">Java</label><br>
                <input type="radio" name="bahasa" id="bahasa3" value="Python" <?php if($row["bahasa"]=="Python") echo "cheked"?>>
                <label for="bahasa">Python</label>
                <br><br>

            
               

                <label for="matkul">Mata Kuliah Favorit:</label><br>
                <select name="matkul" id="matkul" >
                    <option label="" value="" <?php if($row["matkulFav"]=="") echo "selected"?>>Pilihan Mata Kuliah:</option>
                    <option value="PTI" <?php if($row["matkulFav"]=="PTI") echo "selected"?>>Pengantar Teknologi Informasi</option>
                    <option value="Matdis" <?php if($row["matkulFav"]=="Matdis") echo "selected"?>>Matematika Diskrit</option>
                    <option value="Basdat" <?php if($row["matkulFav"]=="Basdat") echo "selected"?>>Basis Data Lanjutan</option>
                    <option value="PBW" <?php if($row["matkulFav"]=="PBW") echo "selected"?>>Pemerograman Berbasis Web</option>
                    <option value="RPL" <?php if($row["matkulFav"]=="RPL") echo "selected"?>>Rekayasa Perangkat Lunak</option>
                </select>
                <br><br>

               
                <input type="submit" action="dbconn3.php" value="Submit">
            </form>
            </section>   
        </main>

        <br><br>
        <footer>
            <p>Copyright &copy; 2022. All rights reserved.</p>
    </body>
</html>
