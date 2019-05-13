<?php
  include("funcs/headerphp.php");

  $eposta1 = $_POST["eposta1"];
  $sifre1 = $_POST["sifre1"];

  if(!filter_var($eposta1, FILTER_VALIDATE_EMAIL)){
    echo '<div class="alert alert-danger" role="alert"> E-Posta biçimi yanlış. </div>';
  }
  else if($eposta1 == "" || $sifre1 == ""){
    echo '<div class="alert alert-danger" role="alert"> Boş bıraktığınız alanlar var. </div>';
  }
  else{
    $sifre1 = sha1(md5($sifre1));
    $query = $db->query("SELECT * FROM kullanici WHERE
    kullanici_eposta = '$eposta1' AND kullanici_sifre = '$sifre1'
    ")->fetch(PDO::FETCH_ASSOC);
    if ( $query ){
        $_SESSION["kullaniciAdi"] = ucwords(strtolower($query["kullanici_ad"]));
        $_SESSION["kullaniciYetki"] = $query["kullanici_yetki"];
        echo '<div class="alert alert-success" role="alert"> Hoşgeldin ' .$_SESSION["kullaniciAdi"]. '. Birazdan anasayfaya yönlendirileceksin. Ya da beklemek istemiyorsan <a href="index.php">tıkla</a>.</div>';
        echo '<meta http-equiv="refresh" content="5;URL=index.php">';

      }
    else{
      echo '<div class="alert alert-danger" role="alert"> Kullanıcı bulunamadı. </div>';
    }
  }

?>