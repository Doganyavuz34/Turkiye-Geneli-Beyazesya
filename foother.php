<footer style="background-color: black;">
    <div class="footer-top">
      <div class="container">
        <div class="footer-day-time">
          <div class="row">
            <div class="col-md-8">
              <ul>

              </ul>
            </div>
            <div class="col-lg-4">
              <div class="phone-no">

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">

            <h4 style="text-align: center; color:white;  ">Hakkımızda</h4>
            <p style="text-align: center; color:white;"> Beyaz Eşya Servis Merkezi olarak Beyaz Eşyalarınızın
              Ve Televizyonlarınızın tamiri ve bakımında daima
              üstün hizmet anlayışını benimsiyoruz. Benimsediğimiz anlayış doğrultusunda; kaliteli, garantili ve hesaplı
              servis arayanların ilk tercihi olmaktan büyük mutluluk duyuyoruz.
            </p>
            <br>
          </div>

          <div class="col-md-4">
            <h4 style="text-align: center; color:white; ">Bilgilendirme</h4>
            <p style="text-align: center; color:white;">
              Firmamız görünen markalara özel teknik servis hizmeti sunmaktadır. Yetkili servis değildir.
            </p>

            <br>
          </div>



          <div class="col-md-4">
            <h4 style="text-align: center; color:white;  ">İletişim Bilgileri</h4>
            <p style="text-align: center; color:white;">
              Türkiye Genel Servis <br>
              444 79 10<br>
              info@beyazesyaservismerkezi.com
            </p>


          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom text-center">
      <p style="color:white;" class="copyright text-uppercase">Copyright © 2024 Beyaz Eşya Servis Merkezi</p>
      <p style="color:white;">Korkmaz Yazılım Tarafından Yapılmıştır</p>
    </div>
  </footer>
  
<div class="mobilbararkaplan">
    <a href="https://wa.me/4447910">
    <div class="mobilbarwhatsapp">
        <i class="fab fa-whatsapp"></i>WhatsApp
    </div>
    </a>
    <a href="tel:4447910">
    <div class="mobilbarhemenara">
        <i class="fas fa-phone-volume"></i>Hemen Ara
    </div>
    </a>
</div>



<div>
  <?php
// Kentler
foreach ($arrayVeri['kentler'] as $sehir) {
  $sehirAdi = $sehir['isim'];
  $link = 'index.php?sehir=' . urlencode($sehirAdi) . '&marka=' . urlencode($secilenMarka);
  $selected = ($sehirAdi == $secilenSehir) ? 'selected' : '';

}

// Beyaz Eşyalar
foreach ($arrayVeri['beyazesya'] as $beyazEsya) {
  $beyazEsyaAdi = $beyazEsya['isim'];
  $link = 'marka.php?sehir=' . urlencode($secilenSehir) . '&marka=' . urlencode($beyazEsyaAdi);
  $selected = ($beyazEsyaAdi == $secilenMarka) ? 'selected' : '';

}

// TV Markaları
foreach ($arrayVeri['tv'] as $tvMarkasi) {
  $tvMarkasiAdi = $tvMarkasi['isim'];
  $link = 'index.php?sehir=' . urlencode($secilenSehir) . '&marka=' . urlencode($secilenMarka) . '&tv=' . urlencode($tvMarkasiAdi);
  $selected = ($tvMarkasiAdi == $secilenTv) ? 'selected' : '';

}
  ?>
</div>

</body>
</html>