<?php
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_SESSION)){
            if(!isset($_SESSION['username'])){
                header("Location: login.php");
            }

            else if(($_POST['username'] == $_SESSION['username']) && ($_POST['password1'] == $_SESSION['password1'])){
                //echo "Login berhasil";
                //header("Location: home.php");
                $namadepan = $_SESSION['namadepan'];
                $namatengah = $_SESSION['namatengah'];
                $namabelakang = $_SESSION['namabelakang'];
            }

            else{
                echo "Maaf login belum berhasil";
                header("Location: login.php");
            }

            //echo "ada session";
        }

        // else{
        //  echo "tdk ada session";
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="navbar">
        <caption>Aplikasi Pengelolaan Keuangan</caption> 
        <a href="home.php" id="home">Home</a>
        <a href="profile.php" id="profile">Profile</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>
    <div class="text">
        <?php
            if(!isset($_SESSION['namadepan'])){
                echo "No data yet";
            }

            else{
                $namadepan = $_SESSION['namadepan'];
                $namatengah = $_SESSION['namatengah'];
                $namabelakang = $_SESSION['namabelakang'];

                echo "Halo, "." "."<b>".$namadepan." ".$namatengah." ".$namabelakang."</b>. Selamat Datang di Aplikasi Pengelolaan Keuangan";

            }    
        ?>
    </div>
</body>
</html>