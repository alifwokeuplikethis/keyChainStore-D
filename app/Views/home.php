<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keychain storee^^</title>
</head>
<body>
<div class="header">
    <div class="head-kiri">
        <img src="img/icon/gg_profile.png" style="float:left;">
        <?php if(session()->has('username')){ ?>
        <h2 style="float:left;margin-left:10px;"> <?= session()->get('username'); ?></h2>
        <?php }else{?>
            <img src="img/Login.png" class="login" onclick="window.location.href='login'" style="cursor: pointer;margin-top:15px;">
            <?php } ?>
    </div>
    <div class="head-kanan" style="float: right;">
        <button class="tentangKami dropbtn" onclick="myFunction()">
            <img id="dropdownIcon" src="img/icon/Polygon 1.png" style="padding-top: 2px;">
            <span style="padding: 0px;">Tentang kami</span>
        </button>
        <div id="myDropdown" class="dropdown-content">
            <a href="ulasan">Ulasan orang lain</a>
            <a href="sosmed">Sosial media kami</a>
            <?php if(session()->has('username')){ ?>
            <a href="destroy">Logout</a>
                <?php } ?>
        </div>
        <?php
        if(session()->get('username') == 'admin'){ ?>
            <button class="buttonHeader" style="margin-left:15px;" onclick="window.location.href='detail'">
                <img src="img/icon/sheet.png" style="width:24px;float:left;">
                <span style="float: left; font-size: 15px; margin-top: 3px; color: white;">Data pembeli</span>
            </button>
        <?php } ?>

        <?php if(session()->has('logged_in')){ ?>
        <button class="buttonHeader" id="openModalBtn2">
            <img src="img/icon/icon-park-outline_weixin-market.png" style="float: left;">
            <span style="float: left; font-size: 15px; margin-top: 5px; color: white;">Pesan sekarang</span>
        </button>
        <?php }else{ ?>
            <button style="float: right;width: 160px;height: 35px;border-radius: 12px;background-color: #76835A;border: none;" onclick="window.location.href='login'">
            <img src="img/icon/icon-park-outline_weixin-market.png" style="float: left;">
            <span style="float: left; font-size: 15px; margin-top: 5px; color: white;">Pesan sekarang</span>
        </button>
        <?php } ?>

        <?php if(session()->has('logged_in')){?>
        <button class="buttonHeader btn2" id="openModalBtn">
            <img src="img/icon/fluent-mdl2_product.png" style="float: left;">
            <span style="float: left; font-size: 15px; margin-top: 7px; color: white;">Penjelasan</span>
        </button>
        <?php }else{ ?>
            <button style="float: right;width: 160px;height: 35px;border-radius: 12px;background-color: #76835A;border: none;margin-right:15px;" onclick="window.location.href='login'">
            <img src="img/icon/fluent-mdl2_product.png" style="float: left;">
            <span style="float: left; font-size: 15px; margin-top: 7px; color: white;">Penjelasan</span>
        </button>
        <?php } ?>
        <?php if(session()->getFlashdata('login')): ?>
    <script>
        alert("<?= session()->getFlashdata('login') ?>");
    </script>
<?php endif; ?>
        <?php if(session()->getFlashdata('tidakMengisi')): ?>
    <script>
        alert("<?= session()->getFlashdata('tidakMengisi') ?>");
    </script>
<?php endif; ?>
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
<form method="POST" action="<?php base_url() ?>/purchase">
        <div class="modal-content2">
            <img src="img/cancel.png" class="close2">

            <div class="content-container" style="margin-left:80px;">
    <img src="img/dazaiCarts.png" style="margin-left:30px;margin-top:-30px"><p>
    <div class="stoks">
        Stok: <?= $data2->stok; ?><p>
        Terjual: <?= $data2->terjual; ?><p>
        Harga: Rp.<?= $data2->harga; ?>
    </div>
    <div style="position:absolute;margin-top:100px;margin-left:50px">Kuantitas:</div>
    <div class="content-operator" style="margin-top:120px;">
        <img src="img/icon/minus.png" id="minus1">
        <input type="number" class="inputModal" id="input1" value="0" name="dazai" readonly>
        <img src="img/icon/plus.png" id="plus1" style="margin-left:75px;">
    </div>
</div>


<div class="content-container" style="margin-left:80px;">
    <img src="img/mahiruCarts.png" style="margin-left:30px;"><p>
    <div class="stoks">
        Stok: <?= $data1->stok; ?><p>
        Terjual: <?= $data1->terjual; ?><p>
        Harga: Rp.<?= $data1->harga; ?><p>
    </div>
    <div style="position:absolute;margin-top:100px;margin-left:50px">Kuantitas:</div>
    <div class="content-operator" style="margin-top:120px;">
        <img src="img/icon/minus.png" id="minus2">
        <input type="number" class="inputModal" id="input2" name="mahiru" value="0" readonly>
        <img src="img/icon/plus.png" id="plus2" style="margin-left:75px;">
    </div>
</div>


<div class="content-container CC3" style="margin-left:80px;">
    <img src="img/fyodorCarts.png" style="margin-left:30px;"><p>
    <div class="stoks">
        Stok: <?= $data3->stok; ?><p>
        Terjual: <?= $data3->terjual; ?><p>
        Harga: Rp.<?= $data3->harga; ?><p>
    </div>
    <div style="position:absolute;margin-top:80px;margin-left:50px">Kuantitas:</div>
    <div class="content-operator" style="margin-top:100px;">
        <img src="img/icon/minus.png" id="minus3">
        <input type="number" class="inputModal" name="fyodor" id="input3" value="0" readonly>
        <img src="img/icon/plus.png" id="plus3" style="margin-left:75px;">
    </div>

</div>
<input type="hidden" value="<?= session()->get('username'); ?>" name="user">
    </div>    
    <button class="beliw" type="submit">Beli sekarang!</button>
</div>
        </form>
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




document.addEventListener('DOMContentLoaded', function () {
    // Function to increase or decrease the value of an input
    function updateValue(inputId, increment) {
        const input = document.getElementById(inputId);
        let value = parseInt(input.value, 10);
        if (isNaN(value)) {
            value = 0;
        }
        value = Math.max(0, value + increment); // Ensure the value doesn't go below 0
        input.value = value;
    }

    // Add event listeners to plus and minus buttons
    document.getElementById('plus1').addEventListener('click', function () {
        updateValue('input1', 1);
    });

    document.getElementById('minus1').addEventListener('click', function () {
        updateValue('input1', -1);
    });
    document.getElementById('plus2').addEventListener('click', function () {
        updateValue('input2', 1);
    });

    document.getElementById('minus2').addEventListener('click', function () {
        updateValue('input2', -1);
    });

    document.getElementById('plus3').addEventListener('click', function () {
        updateValue('input3', 1);
    });

    document.getElementById('minus3').addEventListener('click', function () {
        updateValue('input3', -1);
    });
});
</script>
</body>
</html>
