<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('img/bekgronsosmed.png');
            margin: 0; 
            overflow-y: auto; 
        }
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 50px; 
        }
        .social-media {
            margin-top: 244px;
            display: flex;
            width: 100%;
            justify-content: space-between;
            padding: 0 20px; 
        }
        .social-media div {
            flex: 1;
        }
        .social-media div img {
            display: block;
            margin: 0 auto 66px auto;
        }
    </style>
</head>
<body>
    <img src="img/icon/back.png" style="float: right; cursor: pointer;" onclick="window.location.href='/'">
    <div class="content">
        <img src="img/logo.png" style="margin-top: -23px;">
        <img src="img/Group 14 (1).png">
        <div class="social-media">
            <div style="font-weight: 600; font-size: 40px;">
                <div style="margin-left: 185px;">Sosial media kami^^</div>
            </div>
            <div>
                <div><img src="img/insta.png"></div>
                <div><img src="img/facebook.png"></div>
                <div><img src="img/whatsapp.png" style="margin-left:140px;"></div>
            </div>
        </div>
    </div>
</body>
</html>
