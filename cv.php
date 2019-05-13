<?php require("funcs/headerphp.php");

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

?>

<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:400,300italic,500,700);
  * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
  }

  body {
      background-size: cover;
      font-family: 'Roboto', sans-serif;
      font-size: 14px;
      letter-spacing: 1px;
  }

  .temizle {
    clear: both;
  }

  #kapsa {
    width: 100%;
    max-width: 800px;
    margin: 15px auto 15px auto;
    opacity: 0.9;
  }

  #ust {
    background: #CEF3DD;
    height: 30px;
    line-height: 30px;
    border-radius: 15px 15px 0 0;
    padding-right: 10px;
    padding-left: 14px;
  }

  #baslik {
    display: inline-block;
    color: darkslategrey;
  }

  #islem {
    float: right;
  }

  #y {
    background: #03d544;
    width: 12px;
    height: 12px;
    border-radius: 100%;
    display: inline-block;
    margin: 0 2px;
    cursor: pointer;
  }

  #s {
    background: #ffbe03;
    width: 12px;
    height: 12px;
    border-radius: 100%;
    display: inline-block;
    margin: 0 2px;
    cursor: pointer;
  }

  #k {
    background: #ff4545;
    width: 12px;
    height: 12px;
    border-radius: 100%;
    display: inline-block;
    margin: 0 2px;
    cursor: pointer;
  }
  /* Orta Kısım */

  #no {
    width: 41px;
    background: #263238;
    text-align: right;
    padding: 7px 10px 7px 0;
    float: left;
    color: #cdd3de;
  }

  .numara {
    display: block;
  }

  #satir {
    background: #1B2225;
    color: #cdd3de;
    display: inline-block;
    padding: 7px 10px;
    width: calc(100% - 41px);
  }

  .yorum {
    color: #98A8B5;
    font-weight: 400;
    display: block;
  }

  .yorum a {
    text-decoration: none;
    border-bottom: 1px dotted;
    color: aquamarine;
    font-weight: 400;
    font-style: italic;
  }

  .cl {
    color: #8EDCF5;
  }

  .id {
    color: #F3A5F7;
  }

  .beyaz {
    color: #cccccc;
  }

  .secici {
    color: #CDFF8E;
  }

  .ozellik {
    color: #FFFFFF;
  }

  .onemli {
    color: #FFA9A9;
    font-style: italic;
  }

  #alt {
    background: #CEF3DD;
    height: 30px;
    line-height: 30px;
    border-radius: 0 0 15px 15px;
    padding-right: 10px;
    text-align: center;
  }

  #alt a {
    margin-left: 5px;
    border-bottom: 1px dotted;
    text-decoration: none;
    color: #213738;
  }
  </style>

<div id="kapsa">

  <div id="ust">
    <h4 id="baslik">CODE EDITOR</h4>
    <div id="islem">
      <div id="y"></div>
      <div id="s"></div>
      <div id="k"></div>
    </div>
    <div class="temizle"></div>
  </div>

  <div id="orta">

    <div id="no">
      <span class="numara">1</span>
      <span class="numara">2</span>
      <span class="numara">3</span>
      <span class="numara">4</span>
      <span class="numara">5</span>
      <span class="numara">6</span>
      <span class="numara">7</span>
      <span class="numara">8</span>
      <span class="numara">9</span>
      <span class="numara">10</span>
      <span class="numara">11</span>
      <span class="numara">12</span>
      <span class="numara">13</span>
      <span class="numara">14</span>
      <span class="numara">15</span>
      <span class="numara">16</span>
      <span class="numara">17</span>
      <span class="numara">18</span>
      <span class="numara">19</span>
      <span class="numara">20</span>
      <span class="numara">21</span>
      <span class="numara">22</span>
      <span class="numara">23</span>
      <span class="numara">24</span>
      <span class="numara">25</span>
      <span class="numara">26</span>
      <span class="numara">27</span>
      <span class="numara">28</span>
      <span class="numara">29</span>
      <span class="numara">30</span>
      <span class="numara">31</span>
      <span class="numara">32</span>
      <span class="numara">33</span>

    </div>

    <div id="satir">

      <span class="yorum">/*<br>&nbsp;&nbsp;&nbsp; Bilgilerim <br>*/</span>
      <br>
      <span class="cl">.kisisel</span>
      <br>
      <span class="beyaz">{</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;ad</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $isim; ?></span><span class="beyaz">;</span>
      <br>


      <span class="secici">&nbsp;&nbsp;&nbsp;soyad</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $soyisim; ?></span><span class="beyaz">;</span>
      <br>


      <span class="secici">&nbsp;&nbsp;&nbsp;yas</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $yas; ?></span><span class="beyaz">;</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;hayat</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;aile <span class="onemli">!important</span></span><span class="beyaz">;</span>
      <br>
      <span class="beyaz">}</span>
      <br>
      <br>


      <span class="cl">.egitim</span>
      <br>
      <span class="beyaz">{</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;sehir</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $sehir; ?></span><span class="beyaz">;</span>
      <span class="yorum" style="display:inline-block;">&nbsp;/* Memleket <?php echo $memleket; ?> */</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;okul</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $okul; ?></span><span class="beyaz">;</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;bolum</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<font color="#D6FF00">"<?php echo $bolum; ?>"</font></span><span class="beyaz">;</span>
      <br>

      <span class="beyaz">}</span>
      <br>
      <br>



      <span class="cl">.yetenekler</span>
      <br>
      <span class="beyaz">{</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;<?php echo $yetenek1; ?></span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $yderecesi1; ?>%</span><span class="beyaz">;</span>
      <br>


      <span class="secici">&nbsp;&nbsp;&nbsp;<?php echo $yetenek2; ?></span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $yderecesi2; ?>%</span><span class="beyaz">;</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;<?php echo $yetenek3; ?></span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $yderecesi3; ?>%</span><span class="beyaz">;</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;<?php echo $yetenek4; ?></span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $yderecesi4; ?>%</span><span class="beyaz">;</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;<?php echo $yetenek5; ?></span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $yderecesi5; ?>%</span><span class="beyaz">;</span>
      <br>


      <span class="secici">&nbsp;&nbsp;&nbsp;<?php echo $yetenek6; ?></span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<?php echo $yderecesi6; ?>%</span><span class="beyaz">;</span>
      <br>

      <span class="beyaz">}</span>
      <br>
      <br>

      <span class="id">#hakkimda</span>
      <br>
      <span class="beyaz">{</span>
      <br>

      <span class="secici">&nbsp;&nbsp;&nbsp;content</span> <span class="beyaz">:</span>
      <span class="ozellik">&nbsp;<font color="#D6FF00">"<?php echo $hakkimda; ?>"</font></span><span class="beyaz">;</span>
      <br>

      <span class="beyaz">}</span>
      <br>

    </div>

    <div class="temizle"></div>
  </div>


  <div id="alt">
    &copy; <a href="https://twitter.com/RidvanKuntug">Rıdvan Küntuğ</a>
  </div>

</div>