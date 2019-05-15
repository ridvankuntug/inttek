<?php require("inc/header.php"); ?><!--TODO:-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-9">
      <!-- Site İçeriği Başlangıcı -->
      <ul class="list-group">
      <li class="list-group-item active">CV'leriniz</li>
      <?php
      if($_SESSION["kullaniciYetki"] < 1){
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
      }
      else{
        try{
          $kullanici_id = $_SESSION["kullaniciID"];
          $query = $db->query("SELECT * FROM cv WHERE
          kullanici_id = '$kullanici_id'
          ")->fetchAll(PDO::FETCH_ASSOC);
          $i=0;
          foreach ($query as $row) {
            echo '<a href="cv.php?id='.$row["id"].'" class="list-group-item list-group-item-action">'.++$i.'-'.$row["isim"].' '.$row["soyisim"].'</a>';
        }
        }catch(Exception $e) {
          echo '<div class="alert alert-success" role="alert"> Bir sorun oluşmuş gibi görünüyor. Anasayfaya dönmek için <a href="index.php">tıklayınız</a>.</div>';
        }
      }
      ?>
      </ul>
      <!-- Site içeriği Sonu -->
    </div>
    <?php require("inc/right-menu.php"); ?><!--TODO:-->
  </div>
</div>

<?php require("inc/footer.php"); ?><!--TODO:-->
