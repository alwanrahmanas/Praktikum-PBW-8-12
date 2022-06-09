<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #f2f2f2;
        }

        .container{
            width: 100%;
            height: 100%;
            background-color: #fff;
            padding: 20px;
        }

        .container h1{
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        ul,li{
            list-style: none;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
   
    <h1>Halaman muka</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="list.php">List</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>    
    </nav>
</body>
</html>