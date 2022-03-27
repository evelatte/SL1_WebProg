<?php
        session_start();
        if(isset($_POST['submit'])){
            $namadepan = $_POST['namadepan'];
            $tempatlahir = $_POST['tempatlahir'];
            $warganegara = $_POST['warganegara'];
            $alamat  = $_POST['alamat'];

            $namatengah = $_POST['namatengah'];
            $tgllahir = $_POST['tgllahir'];
            $email = $_POST['email'];
            $kodepos = $_POST['kodepos'];

            $namabelakang = $_POST['namabelakang'];
            $nik = $_POST['nik'];
            $nohp = $_POST['nohp'];

            $username = $_POST['username'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
            $nohp = $_POST['nohp'];

            $_SESSION['namadepan'] = $namadepan;
            $_SESSION['tempatlahir'] = $tempatlahir;
            $_SESSION['warganegara'] = $warganegara;
            $_SESSION['alamat'] = $alamat;
            
            $_SESSION['namatengah'] = $namatengah;
            $_SESSION['tgllahir'] = $tgllahir;
            $_SESSION['email'] = $email;
            $_SESSION['kodepos'] = $kodepos;

            $_SESSION['namabelakang'] = $namabelakang;
            $_SESSION['nik'] = $nik;
            $_SESSION['nohp'] = $nohp;
                        
            $_SESSION['username'] = $username;
            $_SESSION['password1'] = $password1;
            $_SESSION['password2'] = $password2;

            //print_r($_FILES);
            $imagename = $_FILES['foto']['name'];
            $tmp_name = $_FILES['foto']['tmp_name'];
            $directory = "image/";
            $upload = move_uploaded_file($tmp_name, $directory.$imagename);
            
            $_SESSION['file'] ="image/".$imagename;
            //Array ( [foto] => Array ( [name] => MyFleet-11.png [type] => image/png [tmp_name] => C:\xampp\tmp\phpD529.tmp [error] => 0 [size] => 622925 ) )
            //echo $username. "-" .$password1;
            //echo $_SESSION['username']."-".$_SESSION['password1'].$_SESSION['namadepan'].$_SESSION['namatengah'].$_SESSION['namabelakang'];
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <div class="title">
        Aplikasi Pengelolaan Keuangan
    </div>

    <div class="message">
        Selamat Datang di Aplikasi Pengelolaan Keuangan
    </div>

    <div class="buttons">
        <div class="login button">
           <a href="login.php">Login</a> 
        </div>

        <div class="register button">
            <a href="register.php">Register</a>
        </div>
    </div>
</body>
</html>