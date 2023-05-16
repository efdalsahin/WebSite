<?php
session_start();

// Kullanıcı adı ve şifre kontrolleri
$correctUsername = "e@e";
$correctPassword = "123";

if ($_POST['ehehe'] === $correctUsername && $_POST['password'] === $correctPassword) {
    $_SESSION["loggedin"] = true;
    $_SESSION["mail"] = $_POST['ehehe'];

  sleep(1);
  // Giriş başarılı olduğunda otomatik yönlendirme
  header("Location: index.html");
  exit;
}
?>

