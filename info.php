<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stiller/info.css">

    <title>İnfo</title>
</head>
<body>
<?php
$isim=$_GET['isim']. " ". $_GET['soyisim'];
$hobiler="";
    if (!empty($_GET['hobi'])) {
        $stuff =  $_GET['hobi'];
        foreach ($stuff as $value) {
        $hobiler.=$value.", ";
        }
    }else {
        $hobiler="Hobiniz bulunmuyor.";
    }
    
$mail=$_GET['mail'];
$saat=$_GET['calismasaat'];
$egitim=$_GET['egitimduzey'];
$adres=$_GET['adres1'];


    ?>

<div class="container">
    <div class="icerik">
        <div class="bilgiler">
            <div class="alt">İsminiz: <br> <?php echo $isim;?></div>
            <div class="alt">E-mail: <br><?php echo $mail;?></div>
            <div class="alt">Hobileriniz: <br> <?php echo $hobiler;?></div>
            <div class="alt">Çalışma Saatiniz: <br><?php echo $saat;?></div>
            <div class="alt">Eğitim Düzeyiniz: <br><?php echo $egitim;?></div>
            <div class="alt">Adres: <br><?php echo $adres;?></div>


</div>
    </div>
</div>

</body>
</html>