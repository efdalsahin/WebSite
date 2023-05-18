<?php
session_start();

// Kullanıcı adı ve şifre kontrolleri
$correctUsername = "g201210076@ogr.sakarya.edu.tr";
$correctPassword = "g201210076";
$regex = '/^([^\s@]+)@/';

if ($_POST['ehehe'] === $correctUsername && $_POST['password'] === $correctPassword) {
    $_SESSION["loggedin"] = true;
   

    if (preg_match($regex, $_POST['ehehe'], $matches)) {
      $username = $matches[1];
      $_SESSION["mail"] =  $username;
  } 

  sleep(1);
  // Giriş başarılı olduğunda otomatik yönlendirme
  header("Location: girisyap.php");
  exit;
}else { ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2;url=girisyap.php" />
    <title>Login Başarısız</title>
    <link rel="stylesheet" href="Stiller/girisyap.css">
  </head>
  <body>
    <div id="logincontainer">
      <div>
    <p>Yanlış Bilgileri girdiniz.</p>
    <p>Yönlendiriliyorsunuz...</p>
    
  
    </div>
    </div>
  </body>
  </html>
  <?php 
    
    

    
    //header( "Refresh:2; url=girisyap.php", true, 303);
}
    ?>


