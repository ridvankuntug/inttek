<?php require("inc/header.php"); ?><!--TODO:-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-9">
      <!-- Site içeriği Başlangıcı -->
      <h2>Site Amacı</h2>
      <div class="fakeimg">Fake Image</div>
      <p>Kolayca CV hazırlayın</p>
      <p>Hem de birkaç adımda.</p>
      <br>
      <h2>Hemen Aşağıdaki adımları takip edin</h2>
      <div class="fakeimg">Fake Image</div>
      <?php if($_SESSION["kullaniciYetki"] < 1){ ?>
        <p><a href="uye-ol.php">Üyelik alın</a> ya da <a href="giris.php">oturum açın.</a></p>
      <?php } ?>
      <p>Bilgilerinizi doldurun.</p>
      <p>Belgenizi indirin.</p>
      <!-- Site içeriği Sonu -->
    </div>
    <?php require("inc/right-menu.php"); ?><!--TODO:-->
  </div>
</div>

<?php require("inc/footer.php"); ?><!--TODO:-->
