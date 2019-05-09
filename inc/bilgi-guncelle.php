<?php require("inc/header.php"); ?><!--TODO:-->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-9">
      <!-- Site İçeriği Başlangıcı -->

      <form class="col-6">
        <div class="form-group">
          <label for="exampleInputName1">Ad Soyad</label>
          <input type="text" class="form-control"  id="exampleInputName1" placeholder="Tam Adınız" required>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
      </form>
      <form class="col-6">
        <div class="form-group">
          <label for="exampleInputEmail1">E-Posta</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Postanız" required>
          <small id="emailHelp" class="form-text text-muted">E-Posta adresinizi başkaları ile paylaşmayız.</small>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
      </form>
      <form class="col-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Şifre</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifreniz" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword2">Şifre</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Şifreniz Tekrar" required>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
      </form>
      <form class="col-6">
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Güncelleme e-postaları al</label>
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
      </form>

      <!-- Site içeriği Sonu -->
    </div>
    <?php require("inc/right-menu.php"); ?><!--TODO:-->
  </div>
</div>

<?php require("inc/footer.php"); ?><!--TODO:-->
