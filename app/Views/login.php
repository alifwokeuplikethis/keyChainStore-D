<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url('img/bekgron2.png');
        }
        .container{
            background-color: #BEC5C1;
            width: 688px;
            height: 683px;
            margin-left: 376px;
            margin-top: 178px;
            border-radius: 28px;
        }
        h1{
            font-size: 40px;
            text-align: center;
            padding-bottom: 32px;
            padding-top: 24px;
            height: 64px;
        }
        .form{
            font-size: 30px;
            padding-left: 60px;
        }
        .form1{
            border:1px solid #3E9DD3;
            box-shadow: 4px 4px #000000;
            font-size:20px;
            font-weight:400;
        }
        input{
            width: 519px;
            height: 64px;
            border-radius: 25px;
        }
        .containerBtn{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .btn{
            background-color: #478A99;
            width: 179px;
            height: 56px;
            border-radius: 23px;
            border: none;
            font-weight: 600;
            font-size: 30px;
            margin-top: 15px;
        }
    </style> 
</head>
<body>
    <?php if(session()->getFlashData('registered')){?>
        <script>
            alert("<?= session()->getFlashdata('registered') ?>");
            </script>
    <?php } ?>
    <div class="container">
        <h1>Login</h1>
        <?php if(!empty(session()->getFlashdata('error'))) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                alert("<?= session()->getFlashdata('error') ?>");
                });
        </script>
                <?php endif; ?>
                <form method="POST" action="<?= base_url()?>/login/process">
                <?= csrf_field(); ?>
        <div class="form"> Nama : <p> <input type="text" class="form1" name="Name"></div>
        <div class="form"> Password : <p> <input type="Password" class="form1" name="Password"></div>
            <div class="containerBtn">
            <button class="btn" type="submit">LOGIN</button>
            <a href="register" style="padding-top: 49px;font-size: 20px;">Tidak punya akun?register</a>
        </div>
            </form>
</div>
</body>
</html>