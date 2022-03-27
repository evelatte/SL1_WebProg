<?php
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_SESSION)){
            if(!isset($_SESSION['username'])){
                header("Location: login.php");
            }
        }
        //echo "test";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="navbar">
        <caption>Aplikasi Pengelolaan Keuangan</caption> 
        <a href="home.php" id="home">Home</a>
        <a href="profile.php" id="profile">Profile</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>

    <br> <br>

    <div class="title">
        Profil Pribadi
    </div>

        <div class="section">
            <div class="content">
                <div class="input">
                    Nama Depan 
                    <?php
                        if(!isset($_SESSION['namadepan'])){
                            echo "No data yet";
                        }

                        else{
                            $namadepan = $_SESSION['namadepan'];
                            echo "<b>".$namadepan."</b>";
                        }    
                    ?>
                </div>
                
                <div class="input">
                    Tempat Lahir
                    <?php
                        if(!isset($_SESSION['namadepan'])){
                            echo "No data yet";
                        }

                        else{
                            $tempatlahir = $_SESSION['tempatlahir'];
                            echo "<b>".$tempatlahir."</b>";
                        }    
                    ?>
                </div>
                
                <div class="input">
                    Warga Negara
                    <?php
                        if(!isset($_SESSION['namadepan'])){
                            echo "No data yet";
                        }

                        else{
                            $warganegara = $_SESSION['warganegara'];
                            echo "<b>".$warganegara."</b>";
                        }    
                    ?>
                </div>
                
                <div class="input">
                    Alamat 
                    <?php
                        if(!isset($_SESSION['namadepan'])){
                            echo "No data yet";
                        }

                        else{
                            $alamat = $_SESSION['alamat'];
                            echo "<b>".$alamat."</b>";
                        }    
                    ?>
                </div>  
            </div>
            
            <div class="content">
                <div class="input">
                    Nama Tengah
                    <?php
                        if(!isset($_SESSION['namadepan'])){
                            echo "No data yet";
                        }

                        else{
                            $namatengah = $_SESSION['namatengah'];
                            echo "<b>".$namatengah."</b>";
                        }    
                    ?>
                </div>

                <div class="input">
                    Tgl Lahir 
                    <?php
                        if(!isset($_SESSION['tgllahir'])){
                            echo "No data yet";
                        }

                        else{
                            $tgllahir = $_SESSION['tgllahir'];
                            echo "<b>".date('d-m-Y', strtotime($tgllahir))."</b>";
                        }    
                    ?>
                </div>

                <div class="input">
                    Email 
                    <?php
                        if(!isset($_SESSION['email'])){
                            echo "No data yet";
                        }

                        else{
                            $email = $_SESSION['email'];
                            echo "<b>".$email."</b>";
                        }    
                    ?>
                </div>

                <div class="input">
                    Kode Pos
                    <?php
                        if(!isset($_SESSION['kodepos'])){
                            echo "No data yet";
                        }

                        else{
                            $kodepos = $_SESSION['kodepos'];
                            echo "<b>".$kodepos."</b>";
                        }    
                    ?>
                </div>
            </div>
    
            <div class="content">
                <div class="input">
                    Nama Belakang 
                    <?php
                        if(!isset($_SESSION['namabelakang'])){
                            echo "No data yet";
                        }

                        else{
                            $namabelakang = $_SESSION['namabelakang'];
                            echo "<b>".$namabelakang."</b>";
                        }    
                    ?>
                </div>

                <div class="input">
                    NIK 
                    <?php
                        if(!isset($_SESSION['nik'])){
                            echo "No data yet";
                        }

                        else{
                            $nik = $_SESSION['nik'];
                            echo "<b>".$nik."</b>";
                        }    
                    ?>
                </div>

                <div class="input">
                    No HP 
                    <?php
                        if(!isset($_SESSION['nohp'])){
                            echo "No data yet";
                        }

                        else{
                            $nohp = $_SESSION['nohp'];
                            echo "<b>".$nohp."</b>";
                        }    
                    ?>
                </div>
                
                <div class="input">
                   Foto Profil 
                   <?php
                        if(!isset($_SESSION['file'])){
                            echo "No data yet";
                        }
                    ?>
                    <div class="imageBox">
                        <img src="<?php echo $_SESSION['file'];?>" alt="">
                    </div>
                    
                </div>
            </div>
        </div>

        
</body>
</html>