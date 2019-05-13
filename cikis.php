<?php
  require("funcs/headerphp.php");
  session_destroy();
  echo '<input type="button" class="btn btn-primary" value="Çıkılıyor">';
  echo '<meta http-equiv="refresh" content="0;URL=index.php">';
?>