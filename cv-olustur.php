<?php require("inc/header.php"); ?><!--TODO:-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-9">
      <!-- Site İçeriği Başlangıcı -->
      <?php
        if($_SESSION["kullaniciYetki"] < 1){
          echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        }
        else{
      ?>
      <form class="col-6" method="POST" action="cv.php">
        <h5>Kişisel</h5>
        <div class="form-group">
          <label for="isim">İsim</label>
          <input type="text" class="form-control" id="isim" name="isim">
        </div>
        <div class="form-group">
          <label for="soyisim">Soyisim</label>
          <input type="text" class="form-control" id="soyisim" name="soyisim">
        </div>
        <div class="form-group">
          <label for="yas">Yaş</label>
          <input type="text" class="form-control" id="yas" name="yas">
        </div>
        <div class="form-group">
          <label for="memleket">Memleket</label>
          <input type="text" class="form-control" id="memleket" name="memleket">
        </div>

        <h5>Eğitim</h5>
        <div class="form-group">
          <label for="sehir">Şehir</label>
          <input type="text" class="form-control" id="sehir" name="sehir">
        </div>
        <div class="form-group">
          <label for="okul">Okul</label>
          <input type="text" class="form-control" id="okul" name="okul">
        </div>
        <div class="form-group">
          <label for="bolum">Bölüm</label>
          <input type="text" class="form-control" id="bolum" name="bolum">
        </div>

        <h5>Yetenekler</h5>
        <div class="form-group">
          <label for="yetenek1">Yetenek</label>
          <input type="text" class="form-control" id="yetenek1" name="yetenek1">
        </div>
        <div class="form-group">
          <label for="yderecesi1">Derecesi</label>
          <input type="range" class="custom-range" min="0" max="100" step="5" id="yderecesi1" name="yderecesi1">
        </div>
        <div class="form-group">
          <label for="yetenek2">Yetenek</label>
          <input type="text" class="form-control" id="yetenek2" name="yetenek2">
        </div>
        <div class="form-group">
          <label for="yderecesi2">Derecesi</label>
          <input type="range" class="custom-range" min="0" max="100" step="5" id="yderecesi2" name="yderecesi2">
        </div>
        <div class="form-group">
          <label for="yetenek3">Yetenek</label>
          <input type="text" class="form-control" id="yetenek3" name="yetenek3">
        </div>
        <div class="form-group">
          <label for="yderecesi3">Derecesi</label>
          <input type="range" class="custom-range" min="0" max="100" step="5" id="yderecesi3" name="yderecesi3">
        </div>
        <div class="form-group">
          <label for="yetenek4">Yetenek</label>
          <input type="text" class="form-control" id="yetenek4" name="yetenek4">
        </div>
        <div class="form-group">
          <label for="yderecesi4">Derecesi</label>
          <input type="range" class="custom-range" min="0" max="100" step="5" id="yderecesi4" name="yderecesi4">
        </div>
        <div class="form-group">
          <label for="yetenek5">Yetenek</label>
          <input type="text" class="form-control" id="yetenek5" name="yetenek5">
        </div>
        <div class="form-group">
          <label for="yderecesi5">Derecesi</label>
          <input type="range" class="custom-range" min="0" max="100" step="5" id="yderecesi5" name="yderecesi5">
        </div>
        <div class="form-group">
          <label for="yetenek6">Yetenek</label>
          <input type="text" class="form-control" id="yetenek6" name="yetenek6">
        </div>
        <div class="form-group">
          <label for="yderecesi6">Derecesi</label>
          <input type="range" class="custom-range" min="0" max="100" step="5" id="yderecesi6" name="yderecesi6">
        </div>

        <h5>Hakkımda</h5>
        <div class="form-group">
          <label for="hakkimda">Hakkımda</label>
          <input type="text" class="form-control" id="hakkimda" name="hakkimda">
        </div>

        <div class="alert alert-info" role="alert"> Açılan sayfayı kaydederek istediğiniz dosya biçimine dönüştürebilirsiniz. (CTRL+S) </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Oluştur" formtarget="_blank">
        </div>
      </form>
        <?php } ?>
      <!-- Site içeriği Sonu -->
    </div>
    <?php require("inc/right-menu.php"); ?><!--TODO:-->
  </div>
</div>

<?php require("inc/footer.php"); ?><!--TODO:-->