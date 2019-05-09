<?php require("inc/header.php"); ?><!--TODO:-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-9">
      <!-- Site İçeriği Başlangıcı -->
      <form class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">E-Posta</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Postanız" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Şifre</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifreniz" required>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
        </div>
        <button type="submit" class="btn btn-primary">Kaydol</button>
      </form>
      <!-- Site içeriği Sonu -->
    </div>
    <?php require("inc/right-menu.php"); ?><!--TODO:-->
  </div>
</div>

<?php require("inc/footer.php"); ?><!--TODO:-->
