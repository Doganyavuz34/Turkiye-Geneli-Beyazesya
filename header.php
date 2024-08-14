<?php
// JSON verisini dosyadan al
$jsonVeri = file_get_contents('veri.json');

// JSON verisini diziye çevir
$arrayVeri = json_decode($jsonVeri, true);

// Sadece şehir adlarını al
$sehirAdlari = array_column($arrayVeri['kentler'], 'isim');
$beyazesyaAdlari = array_column($arrayVeri['beyazesya'], 'isim');
$tvAdlari = array_column($arrayVeri['tv'], 'isim');

// Şehir adını URL'den al, yoksa varsayılan olarak ilk şehri al
$secilenSehir = isset($_GET['sehir']) ? $_GET['sehir'] : $sehirAdlari[0];
$secilenMarka = isset($_GET['marka']) ? $_GET['marka'] : $beyazesyaAdlari[0];
$secilenTv = isset($_GET['tv']) ? $_GET['tv'] : $tvAdlari[0];


// Sayfanın HTML kısmı
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="author" content="Teknik Servis">
    <meta name="robots" content="index,follow">
    <meta name="rating" content="All">
    <meta name="abstract" content="<?php echo $secilenSehir; ?> Beyaz Eşya Teknik Servisi">
    <link rel="shortcut icon" href="img/shorticon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">