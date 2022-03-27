<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div class="title">
        Register
    </div>

    <form action="welcome.php" method="post" enctype="multipart/form-data" id="form">
        <div class="section">
            <div class="content">
                <div class="input">
                    Nama Depan <input type="text" name="namadepan" size="33" id="namadepan"> 
                </div>
                
                <div class="input">
                    Tempat Lahir <input type="text" name="tempatlahir" size="33" id="tempatlahir">
                </div>
                
                <div class="input">
                    Warga Negara <input type="text" name="warganegara" size="33" id="warganegara">
                </div>
                
                <div class="input">
                    Alamat <input type="text" name="alamat" size="33" id="alamat"> 
                </div>

                <div class="input">
                    Username <input type="text" name="username" size="33" id="username"> 
                </div>     
            </div>
            
            <div class="content">
                <div class="input">
                    Nama Tengah <input type="text" name="namatengah" size="33" id="namatengah">
                </div>

                <div class="input">
                    Tgl Lahir <input type="date" name="tgllahir" id="tgllahir">
                </div>

                <div class="input">
                    Email <input type="email" name="email" size="33" id="email">
                </div>

                <div class="input">
                    Kode Pos <input type="text" name="kodepos" size="33" id="kodepos"> 
                </div>

                <div class="input">
                    Password1 <input type="password" name="password1" size="33" id="password1">
                </div>
            </div>
    
            <div class="content">
                <div class="input">
                    Nama Belakang <input type="text" name="namabelakang" size="33" id="namabelakang">
                </div>

                <div class="input">
                    NIK <input type="text" name="nik" size="33" id="nik">
                </div>

                <div class="input">
                    No HP <input type="text" name="nohp" size="33" id="nohp">
                </div>
                
                <div class="input">
                   Foto Profil <input type="file" name="foto" accept="image/*" id="file">
                </div>
                
                <div class="input">
                    Password2 <input type="password" name="password2" size="33" id="password2">
                </div>
            </div>
        </div>
        
        <div class="msg" id="msg">
            <span class="erromsg"id= "errormsg" style= "color: red"></span>
        </div>
        
        <div class="buttons">
            <a href="welcome.php"><input type="button" id="kembali" value="Kembali"></a>    
            <input type="submit" name="submit" value="Register" id="register">
        </div>
    </form>
</body>
<script src="script.js"></script>
</html>