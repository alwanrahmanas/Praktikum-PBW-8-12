<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Page</title>
</head>
<body>
    <!-- <?php var_dump($_POST); ?> -->
    <h1>Selamat datang, <?php if (isset ($_POST["nama"]))echo $_POST["nama"]; ?>!</h1>

    <ul>
        <li>Tanggal Lahir: <?php if (isset ($_POST["birthday"]))echo $_POST["birthday"]; ?></li>
        <li>Email: <?php if (isset($_POST["email"]))echo $_POST["email"]; ?></li>

        <li>Ingin belajar PHP? <?php  if(isset ($_POST["bahasa1"]))echo $_POST["bahasa1"] ?></li>
        <li>Ingin belajar Python? <?php  if(isset ($_POST["bahasa3"]))echo $_POST["bahasa3"] ?></li>
        <li>Ingin belajar Java? <?php  if(isset ($_POST["bahasa2"]))echo $_POST["bahasa2"] ?></li>
        <li>Alasan Bergabung? <?php if (isset ($_POST["alasan"]))echo $_POST["alasan"]; ?></li>
    </ul>
</body>
</html>