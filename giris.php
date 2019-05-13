<?php require("inc/header.php"); ?><!--TODO:-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-9">
      <!-- Site İçeriği Başlangıcı -->
      <?php
        if($_SESSION["kullaniciYetki"] > 0){
          echo '<meta http-equiv="refresh" content="5;URL=index.php">';
        }
        else{
      ?>
      <script type="text/javascript">
        function girisYap1(){

          var eposta1 = $("#eposta1").val();
          var sifre1 = $("#sifre1").val();

          $.post('giris-kontrol.php', {eposta1: eposta1, sifre1: sifre1}, function (gelen_cevap) {
              success:$('#sonucForm').html(gelen_cevap);
          });
        }
      </script>
      <form class="col-6">
        <div class="form-group">
          <label for="eposta1">E-Posta</label>
          <input type="email" class="form-control" id="eposta1" aria-describedby="emailHelp" placeholder="E-Postanız" required>
        </div>
        <div class="form-group">
          <label for="sifre1">Şifre</label>
          <input type="password" class="form-control" id="sifre1" placeholder="Şifreniz" required>
        </div>
        <div class="form-group" id="sonucForm"></div>
        <div class="form-group">
        <input type="button" class="btn btn-primary" onclick="girisYap1()" value="Giriş">
        </div>
      </form>

      <!-- Site içeriği Sonu -->
      <?php } ?>
    </div>
    <?php require("inc/right-menu.php"); ?><!--TODO:-->
  </div>
</div>

<?php require("inc/footer.php"); ?><!--TODO:-->
