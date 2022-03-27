$("#form").submit(function(){
    let namadepan = $('#namadepan')
    let errormsg = document.getElementById('errormsg')
    let msg = document.getElementById("msg")
    msg.style.margin = '10px'

    if(!namadepan.val()){
        errormsg.innerHTML = "Nama Depan harus diisi <br> Minimal panjang 3 karakter";
        return false;
    }
    
    else if(namadepan.val().length < 3) {
         errormsg.innerHTML = "Nama depan minimal panjang 3 karakter";
         return false;
    }

    let tempatlahir = $('#tempatlahir')
    if(!tempatlahir.val()){
        errormsg.innerHTML = "Tempat Lahir harus diisi <br> Minimal panjang 3 karakter <br> Invalid tempat lahir";
        return false;
    }
    
    else if(tempatlahir.val().length < 3) {
        errormsg.innerHTML = "Minimal panjang 3 karakter <br> Invalid tempat lahir";
        return false; 
    }

    let warganegara = $('#warganegara')
    if(!warganegara.val()){
        errormsg.innerHTML = "Warga Negara harus diisi <br> Minimal panjang 3 karakter <br> Invalid warga negara";
        return false;
    }
    
    else if(warganegara.val().length < 3) {
        errormsg.innerHTML = "Minimal panjang 3 karakter <br> Invalid warga negara";
        return false;
    }
    
    let alamat = $('#alamat')
    if(!alamat.val()){
        errormsg.innerHTML = "Alamat harus diisi dan diawali dengan Jalan/jalan";
        return false;
    }
    
    else if(!alamat.val().startsWith("Jalan") && !alamat.val().startsWith("jalan")) {
        errormsg.innerHTML = "Alamat diawali dengan Jalan/jalan";
        return false;
    }
    
    let username = $('#username')
    if(!username.val()){
        errormsg.innerHTML = "Username harus diisi <br> Minimal panjang 5 karakter";
        return false;
    }
    
    else if(username.val().length < 5) {
        errormsg.innerHTML = "Username minimal panjang 5 karakter";
        return false;
    }

    let namatengah = $('#namatengah')
    if(!namatengah.val()){
        errormsg.innerHTML = "Nama Tengah harus diisi <br> Minimal panjang 3 karakter";
        return false;
    }
    
    else if(namatengah.val().length < 3) {
        errormsg.innerHTML = "Nama Tengah minimal panjang 3 karakter";
        return false;
    }

    let tgllahir = new Date($('#tgllahir').val())
    let date = new Date()
    let year = date.getFullYear()
    let age = year - tgllahir.getFullYear()

    if(!Date.parse(tgllahir)){
        errormsg.innerHTML = "Tgl Lahir harus diisi <br> Umur minimal 17 tahun";
        return false;
    }
    else if(age < 17){
        errormsg.innerHTML = "Umur minimal 17 tahun";
        return false;
    }

    let email = $('#email').val()
    if(!email.endsWith("@gmail.com") || !email.includes("@")){
        errormsg.innerHTML = "Invalid email";
        return false;
    }

    let kodepos = $('#kodepos').val()
    if(!kodepos){
        errormsg.innerHTML = "Kode pos harus diisi <br> Panjang karakter 5 <br> Invalid kode pos";
        return false;
    }
    
    else if(kodepos.length!=5){
        errormsg.innerHTML = "Invalid kode pos <br> panjang karakter 5"
        return false;
    }

    let password1 = $('#password1').val()
    if(!password1){
        errormsg.innerHTML = "Password harus diisi <br> Minimal panjang 8 karakter";
        return false;
    }

    else if(password1.length < 8){
        errormsg.innerHTML = "Password minimal panjang 8 karakter";
        return false;
    }
     
    let namabelakang = $('#namabelakang').val()
    if(!namabelakang){
        errormsg.innerHTML = "Nama Belakang harus diisi <br> Minimal panjang 3 karakter";
        return false;
    }
    
    else if(namabelakang.length < 3) {
        errormsg.innerHTML = "Nama Belakang minimal panjang 3 karakter";
        return false;
    }

    let nik = $('#nik').val()
    if(!nik){
        errormsg.innerHTML = "NIK harus diisi <br> Invalid NIK";
        return false;
    }
    
    else if(nik.length !=16) {
        errormsg.innerHTML = "Invalid NIK";
        return false;
    }

    let nohp = $('#nohp').val()
    if(!nohp){
        errormsg.innerHTML = "No HP harus diisi <br> No HP invalid"
        return false;
    }

    else if(!nohp.startsWith("+62") && !nohp.startsWith("0")){
        errormsg.innerHTML = "No HP invalid"
        return false;
    }

    let file = $('#file').val()
    if(!file){
        errormsg.innerHTML = "Upload foto"
        return false;
    }

    let password2 = $('#password2').val()
    if(password2!=password1){
        errormsg.innerHTML = "Password harus sama"
        return false;
    }
});