<?php require("funcs/headerphp.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 100px;
    background: #aaa;
  }
  </style>
</head>
<body>
  <script type="text/javascript">
    function cikis(){
      $.post('cikis.php', {}, function (gelen_cevap) {
          success:$('#sonucCikis').html(gelen_cevap);
      });
    }
  </script>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">CV Oluştur</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cv-olustur.php">Başlangıç</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>-->
      </ul>
      <form class="form-inline my-2 my-lg-0" id="sonucCikis">
        <?php if($_SESSION["kullaniciYetki"] > 0){ ?>
          <a class="nav-link" href="hesabim.php"> <?php echo $_SESSION["kullaniciAdi"]; ?> </a>
          <input type="button" class="btn btn-primary" onclick="cikis()" value="Çıkış">
        <?php }
        else{ ?>
          <input type="button" class="btn btn-primary" onclick="window.location='giris.php';" value="Giriş">
        <?php } ?>
      </form>
    </div>
  </nav>

  <div class="jumbotron text-center" style="margin-bottom:0; margin-top:55px; padding:1rem">
    <h1>CV Hazırla</h1>
    <p>Siz de birkaç adımda CV hazırlayın!</p>
  </div>