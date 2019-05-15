<?php require("funcs/headerphp.php");

$kullanici_id = $_SESSION["kullaniciID"];

$isim = $_POST["isim"];
$soyisim = $_POST["soyisim"];
$yas = $_POST["yas"];
$memleket = $_POST["memleket"];

$sehir = $_POST["sehir"];
$okul = $_POST["okul"];
$bolum = $_POST["bolum"];

$yetenek1 = $_POST["yetenek1"];
$yderecesi1 = $_POST["yderecesi1"];
$yetenek2 = $_POST["yetenek2"];
$yderecesi2 = $_POST["yderecesi2"];
$yetenek3 = $_POST["yetenek3"];
$yderecesi3 = $_POST["yderecesi3"];
$yetenek4 = $_POST["yetenek4"];
$yderecesi4 = $_POST["yderecesi4"];
$yetenek5 = $_POST["yetenek5"];
$yderecesi5 = $_POST["yderecesi5"];
$yetenek6 = $_POST["yetenek6"];
$yderecesi6 = $_POST["yderecesi6"];

$hakkimda = $_POST["hakkimda"];

if(!isset($_SESSION["kullaniciID"])){
  echo '<div class="alert alert-danger" role="alert"> Önce giriş yapın. </div>';
}
else if($isim == "" || $soyisim == "" || $yas == "" || $memleket == "" || $sehir == "" || $okul == "" ||
$bolum == "" || $yetenek1 == "" || $yderecesi1 == "" || $hakkimda == ""){
  echo '<div class="alert alert-danger" role="alert"> Boş bıraktığınız alanlar var. </div>';
}
else{

  try{
    $query = $db->prepare("INSERT INTO cv SET
      kullanici_id = ?,

      isim = ?,
      soyisim = ?,
      yas = ?,
      memleket = ?,

      sehir = ?,
      okul = ?,
      bolum = ?,

      yetenek1 = ?,
      yderecesi1 = ?,
      yetenek2 = ?,
      yderecesi2 = ?,
      yetenek3 = ?,
      yderecesi3 = ?,
      yetenek4 = ?,
      yderecesi4 = ?,
      yetenek5 = ?,
      yderecesi5 = ?,
      yetenek6 = ?,
      yderecesi6 = ?,

      hakkimda = ?");
    $insert = $query->execute(array(
      $kullanici_id,

      $isim,
      $soyisim,
      $yas,
      $memleket,

      $sehir,
      $okul,
      $bolum,

      $yetenek1,
      $yderecesi1,
      $yetenek2,
      $yderecesi2,
      $yetenek3,
      $yderecesi3,
      $yetenek4,
      $yderecesi4,
      $yetenek5,
      $yderecesi5,
      $yetenek6,
      $yderecesi6,

      $hakkimda

    ));

    if($insert){
      echo '<div class="alert alert-success" role="alert"> Kayıt başarılı. Hesabınız üzerinden görüntülemek için <a href="hesabim.php">tıklayınız</a>.</div>';
    }
    else{
      echo '<div class="alert alert-success" role="alert"> Bir sorun oluştu.</div>';
    }
  }catch(Exception $e) {
    echo '<div class="alert alert-success" role="alert"> Bir sorun oluştu. </div>';
  }
}

?>