<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="head-kiri">
        <img src="img/icon/gg_profile.png">
        <img src="img/Nama Pengguna.png" class="login">
    </div>
    <div class="head-kanan" style="float: right;">
        <button class="tentangKami dropbtn" onclick="myFunction()">
            <img id="dropdownIcon" src="img/icon/Polygon 1.png" style="padding-top: 2px;">
            <span style="padding: 0px;">Tentang kami</span>
        </button>
        <div id="myDropdown" class="dropdown-content">
            <a href="ulasan.html">Ulasan orang lain</a>
            <a href="sosmed.html">Sosial media kami</a>
        </div>
        <button class="buttonHeader" id="openModalBtn2">
            <img src="img/icon/icon-park-outline_weixin-market.png" style="float: left;">
            <span style="float: left; font-size: 15px; margin-top: 5px; color: white;">Pesan sekarang</span>
        </button>
        <button class="buttonHeader btn2" id="openModalBtn">
            <img src="img/icon/fluent-mdl2_product.png" style="float: left;">
            <span style="float: left; font-size: 15px; margin-top: 7px; color: white;">Penjelasan</span>
        </button>

    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <img src="img/cancel.png" class="close">
            <div><span class="info1">Osamu dazai adalah karakter dari anime Bungou Stary Dogs,ia adalah karakter protagonist yang bahkan lebih terkenal dibandingkan main character dalam anime itu sendiri</span></div>
            <img src="img/infoDazai.png" class="infoinfo">
            <div><span class="info2">Mahiru Shiina adalah karakter dari anime Otonari No Tenshi Sama(The Angel Next Door Spoils Me Rotten), ia adalah figuran heroine di anime tersebut</span></div>
            <img src="img/infoMahiru.png" class="infoinfo">
            <div><span class="info3">Fyodor Dostoevsky adalah karakter dari anime Bungou Stray Dogs ,ia adalah karakter Antagonis yang juga terkenal dan cukup banyak penggemarnya, ia digadang-gadang disebut best villain dalam anime  </span></div>
            <img src="img/infoFyodor.png" class="infoinfo"></div>
        </div>
    </div>
    <!--  =======================================  -->

    <div id="myModal2" class="modal2">
        <!-- Modal content -->
        <div class="modal-content2">
            <img src="img/cancel.png" class="close2">
            <div class="tile1"><span class="kuantitas">Kuantitas :</span><img src="img/icon/minus.png" class="minus" id="minus1"><input type="number" class="input2" id="input1" value="0" min="0" disabled><img src="img/icon/plus.png" class="plus" id="plus1">
            <img src="img/dazaiCart.png" class="imgCart"></div>
            <div class="tile2"><span class="kuantitas">Kuantitas :</span><img src="img/icon/minus.png" class="minus" id="minus2"><input type="number" class="input2" id="input2" value="0" disabled><img src="img/icon/plus.png" class="plus" id="plus2">
            <img src="img/mahiruCart.png" class="imgCart"></div>
            <div class="tile3"><span class="kuantitas">Kuantitas :</span><img src="img/icon/minus.png" class="minus" id="minus3"><input type="number" class="input2" id="input3" value="0" disabled><img src="img/icon/plus.png" class="plus" id="plus3">
            <img src="img/fyodorCart.png" class="imgCart"></div> 
            <button class="cartBtn" onclick="window.location.href='purchase.html'"><img src="img/icon/map_grocery-or-supermarket.png" style="float: left;"><span class="beliw"> Beli!</span></button>
        </div>

    </div>
    </div>
</div>
<div>
    <img src="img/logo.png" style="padding-left: 270px;" class="logo">
    <img src="img/Group 14 (1).png" style="padding-left: 270px;" class="logo">
</div>
<div class="isi">
    <img src="img/anime.png" class="duotrio">
    <span class="isiTxt">
        Keychain store adalah toko yang menjual bermacam gantungan kunci dari beberapa anime, toko ini sudah beroperasi sejak awal 2020 pada masa pandemi covid-19, gantungan kunci yang kami buat dibuat dengan bahan yang bagus dan tidak murahan. gambarnya tidak akan luntur jikalau terkena air dan pastinya gantungannya tidak mudah patah~
    </span>
</div>
<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        document.getElementById("dropdownIcon").classList.toggle("rotate")

    }
          //===================== modal 1===================
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var tutup = document.getElementsByClassName("close")[0];
tutup.onclick = function() {
    modal.style.display = "none";
}
btn.onclick = function() {
    modal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == modal || event.target == modal2) {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
}
//==================== modal 2==================================
var tutup2 = document.getElementsByClassName("close2")[0];
tutup2.onclick = function() {
    modal2.style.display = "none";
}

var btn2 = document.getElementById("openModalBtn2");
var modal2 = document.getElementById("myModal2");
btn2.onclick = function(){
    modal2.style.display = "block";
}




var plus1 = document.getElementById("plus1");
var minus1 = document.getElementById("minus1");
var input1 = document.getElementById("input1");
plus1.onclick = function(){
    var asli = parseInt(input1.value, 10);
    input1.value = asli + 1;
}
minus1.onclick = function(){
    var asli = parseInt(input1.value, 10);
    if(asli > 0){
        input1.value = asli - 1;
    }
}

var plus2 = document.getElementById("plus2");
var minus2 = document.getElementById("minus2");
var input2 = document.getElementById("input2");
plus2.onclick = function(){
    var asli = parseInt(input2.value, 10);
    input2.value = asli + 1;
}
minus2.onclick = function(){
    var asli = parseInt(input2.value, 10);
    if(asli > 0){
        input2.value = asli - 1;
    }
}

var plus3 = document.getElementById("plus3");
var minus3 = document.getElementById("minus3");
var input3 = document.getElementById("input3");
plus3.onclick = function(){
    var asli = parseInt(input3.value, 10);
    input3.value = asli + 1;
}
minus3.onclick = function(){
    var asli = parseInt(input3.value, 10);
    if(asli > 0){
        input3.value = asli - 1;
    }
}
</script>
</body>
</html>
