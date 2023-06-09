<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammet Efdal ŞAHİN | Giriş</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="Stiller/girisyap.css">




</head>

<body>
    <div id="sayfacizgi"></div>
    <div id="sayfacizgi2"></div>
    <div id="icerik">
        <div class="header">


            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="egitim.html"> Eğitim Bilgileri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasim.html">Mirasım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ilgialani.html">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Giris Yap</a>
                </li>


            </ul>
            <br><br><br>

        </div>

        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
            <div class="bilgi">
                <div>
                <h2>Zaten giriş yapıldı!</h2>
                </div>
                <div id="girilen">
                <?php echo $_SESSION["mail"] ?>
                </div>
            <div>
            <a href="logout.php" >Çıkış Yap</a>
            </div>
                
            </div>
            
            
            <?php else: ?>
        
            <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="ehehe" name="ehehe" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Söz veriyoruz sizi spamlamayacağız.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Şıfre</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Beni Hatirla</label>
            </div>
            <button type="submit" class="btn btn-primary">Gırıs Yap</button>
        </form>

        <?php endif; ?>


    </div>

    <div id="footer">
        Copyright by <font color="red">Guser</font> | 2023 <br>
        <a href="https://github.com/efdalsahin/WebSite" target="_blank">Bu site Git-Hub üzerinde açık
            kaynaklı olarak bulunmaktadir.</a>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>