<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('img/bekgron2.png');
        }
        .container {
            background-color: #FFFFFF;
            width: 1043px;
            height: 779px;
            border-radius: 32px;
            margin-top: 129px;
            margin-left: 198px;
            padding: 20px;
            box-sizing: border-box; 
            display: flex;
            flex-direction: column; /* Membuat flexbox menjadi kolom */
        }
        .header {
            font-weight: 600;
            font-size: 35px;
            text-align: center;
            padding-top: 23px;
            margin-bottom: 40px;
        }
        .content {
            display: flex;
            align-items: center;
            font-size: 25px;
            margin-bottom: 20px;
        }
        .content img {
            margin-left: 218px;
        }
        .kaki {
            margin-top: auto;
            text-align: right; 
        }
        .btn {
            background-color: #8CBC5D;
            color: #3D4B3E;
            font-weight: 600;
            font-size: 25px;
            width: 246px;
            height: 64px;
            border: none;
            border-radius: 7px;
        }
    </style>
</head>
<body>
    <form method="POST" action="purchase/process">
    <div style="all: unset;">
        <img src="img/icon/back.png" style="margin-left: 1200px;cursor: pointer;" onclick="window.location.href='/'">
        <div class="container">
            <div class="header">Yakin ingin membeli barang ini?</div>
            <?php if($mahiru > 0){ ?> 
            <div class="content">
              <?= $data1->nm_produk; ?> <img src="img/productImgMahiru.png"> <span style="margin-left:99.5px;margin-right:99px;"><?= $mahiru ?></span> Rp<?= $data1->harga * $mahiru; ?>
            </div>
            <?php } ?>
            <?php if($dazai > 0){ ?> 
            <div class="content">
                <?= $data2->nm_produk; ?> <img src="img/productImgDazai.png" style="margin-left:228px;"><span style="margin-left:99.5px;margin-right:99px;"> <?= $dazai ?> </span> Rp<?= $dazai * $data2->harga;?>
            </div>
            <?php } ?>
            <?php if($fyodor > 0){ ?> 
            <div class="content">
                <?= $data3->nm_produk; ?> <img src="img/productImgFyodor.png" style="margin-left:166px;"><span style="margin-left:99.5px;margin-right:99px;"> <?= $fyodor ?></span> Rp<?= $fyodor * $data3->harga; ?>
            </div>
            <?php } ?>
            <?php $total = ($mahiru * $data1->harga) + ($dazai * $data2->harga) + ($fyodor * $data3->harga);
            $message .= " dengan total keseluruhan harga {$total}";
            ?>
            <div class="kaki">
                <input type="hidden" value="<?= $mahiru; ?>" name="mahiru">
                <input type="hidden" value="<?= $dazai; ?>" name="dazai">
                <input type="hidden" value="<?= $fyodor; ?>" name="fyodor">
                <input type="hidden" value="<?= $message; ?>" name="message">
                <input type="hidden" value="<?= $users; ?>" name="user">
                <div style="font-size: 25px;margin-right: 220px;margin-bottom: 27px;">Total : <?= $total ?></div>
                <button  type="submit" class="btn">Checkout</button>
            </div>
        </div>
    </div>  
    </form>
</body>
</html>
