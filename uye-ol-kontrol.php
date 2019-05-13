<?php
  include("funcs/headerphp.php");

  $isim1 = $_POST["isim1"];
  $eposta1 = $_POST["eposta1"];
  $sifre1 = $_POST["sifre1"];
  $sifre2 = $_POST["sifre2"];
  $kullanici_yetki= "1";

  if($sifre1 != $sifre2){
    echo '<div class="alert alert-danger" role="alert"> Şifreler uyuşmuyor. </div>';
  }
  else if(!filter_var($eposta1, FILTER_VALIDATE_EMAIL)){
    echo '<div class="alert alert-danger" role="alert"> E-Posta biçimi yanlış. </div>';
  }
  else if($isim1 == "" || $eposta1 == "" || $sifre1 == "" || $sifre2 == ""){
    echo '<div class="alert alert-danger" role="alert"> Boş bıraktığınız alanlar var. </div>';
  }
  else{
    $query = $db->prepare("INSERT INTO kullanici SET
    kullanici_ad = ?,
    kullanici_eposta = ?,
    kullanici_sifre = ?,
    kullanici_yetki = ?");
    $insert = $query->execute(array(
      $isim1, $eposta1, sha1(md5($sifre1)), $kullanici_yetki
    ));
    if($insert){
      echo '<div class="alert alert-success" role="alert"> Kayıt başarılı. Giriş yapmak için lütfen <a href="giris.php">tıklayınız</a>.</div>';
    }
    else{
      echo '<div class="alert alert-success" role="alert"> Bu e-posta kullanılamaz.</div>';
    }
  }

?>