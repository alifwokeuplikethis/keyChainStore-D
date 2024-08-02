<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-image: url('img/bekgron.png');
        background-repeat: no-repeat;
    }
    .container{
        background-color: #D9D9D9;
        border-radius: 24px;
        box-shadow: 0px 16px 32px 0px rgba(0,0,0,0.4);
        margin-left: 600px;
        width: 744px;
        height: 512px;
        padding: 20px;
    }
    .profile-container {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .profile-container img {
        margin-right: 10px;
    }
    .profile-details {
        display: flex;
        align-items: center;
    }
    .profile-name {
        font-weight: bold;
        font-size: 30px;
        margin-right: 10px;
    }
    .review-text {
        font-style: italic;
        font-weight: 600;
        font-size: 20px;
        margin-top: 10px;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="img/icon/back.png" style="float: right;width:90px;cursor: pointer;" onclick="window.location.href='/'">
    <div style="padding-top: 57px;">
        <img src="img/logo.png" style="padding-left: 270px;">
        <img src="img/Group 14 (1).png" style="padding-left: 270px;">
    </div>
    <div style="font-weight:600;margin-left: 600px;margin-top: 73.46px;">
        <div style="font-size: 30px">Ulasan mereka tentang toko kami</div> 
    </div>
    <div class="container">
        <div class="profile-container">
            <img src="img/icon/gg_profile.png" style="width: 50px; height: 50px;">
            <div class="profile-details">
                <div class="profile-name">Junaedi</div>
                <img src="img/icon/star.png">
            </div>
        </div>
        <div class="review-text">
            Gantungannya sangat bagus, barang tidak rusak saat sampai. Dan juga adminnya fast respon, seneng deh
            <hr style="height: 3px;">
        </div>
        <div class="profile-container">
            <img src="img/icon/gg_profile.png" style="width: 50px; height: 50px;">
            <div class="profile-details">
                <div class="profile-name">Aleeepp</div>
                <img src="img/icon/star.png">
            </div>
        </div>
        <div class="review-text">
            Wahhh adminnya ramah bangett, aku dikasih potongan harga banyaka bangettt, cocok deh buat yang nyari koleksi anime hehe
            <hr style="height: 3px;">
        </div>
        <div class="profile-container">
            <img src="img/icon/gg_profile.png" style="width: 50px; height: 50px;">
            <div class="profile-details">
                <div class="profile-name">Lunlun</div>
                <img src="img/icon/star.png">
            </div>
        </div>
        <div class="review-text">
            Wadidaww bagus banget 
            <hr style="height: 3px;">
        </div>
    </div>
</body>
</html>
