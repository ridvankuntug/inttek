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
      <script type="text/javascript">
        function cvKaydet1(){

          var isim = $("#isim").val();
          var soyisim = $("#soyisim").val();
          var yas = $("#yas").val();
          var memleket = $("#memleket").val();

          var sehir = $("#sehir").val();
          var okul = $("#okul").val();
          var bolum = $("#bolum").val();

          var yetenek1 = $("#yetenek1").val();
          var yderecesi1 = $("#yderecesi1").val();
          var yetenek2 = $("#yetenek2").val();
          var yderecesi2 = $("#yderecesi2").val();
          var yetenek3 = $("#yetenek3").val();
          var yderecesi3 = $("#yderecesi3").val();
          var yetenek4 = $("#yetenek4").val();
          var yderecesi4 = $("#yderecesi4").val();
          var yetenek5 = $("#yetenek5").val();
          var yderecesi5 = $("#yderecesi5").val();
          var yetenek6 = $("#yetenek6").val();
          var yderecesi6 = $("#yderecesi6").val();

          var hakkimda = $("#hakkimda").val();

          $.post('cv-kaydet.php', {isim: isim, soyisim: soyisim, yas: yas, memleket: memleket,
          sehir: sehir, okul: okul, bolum: bolum,
          yetenek1: yetenek1, yderecesi1: yderecesi1,
          yetenek2: yetenek2, yderecesi2: yderecesi2,
          yetenek3: yetenek3, yderecesi3: yderecesi3,
          yetenek4: yetenek4, yderecesi4: yderecesi4,
          yetenek5: yetenek5, yderecesi5: yderecesi5,
          yetenek6: yetenek6, yderecesi6: yderecesi6,
          hakkimda: hakkimda}, function (gelen_cevap) {
              success:$('#sonucForm').html(gelen_cevap);
          });
        }
      </script>
      <form class="col-6">
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
        <div class="form-group" id="sonucForm"></div>
        <div class="form-group">
          <input type="button" class="btn btn-primary" onclick="cvKaydet1()" value="Kaydet">
        </div>
      </form>
        <?php } ?>
      <!-- Site içeriği Sonu -->
    </div>
    <?php require("inc/right-menu.php"); ?><!--TODO:-->
  </div>
</div>

<?php require("inc/footer.php"); ?><!--TODO:-->