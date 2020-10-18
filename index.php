<?php
require('src/php/head.php');
?>

<?php
require('src/php/header.php');
?>

<!-- main  -->
<main id="top">

  <!-- スライダー  -->
  <section class="slider_outer">
    <h1 class="fv_title">Haruna Asano<br>PortfolioSite</h1>
    <ul class="slider js-slider">
      <li class="slider_inner js-slider-inner"><img src="dist/img/fv1.jpeg" alt=""></li>
      <li class="slider_inner js-slider-inner"><img src="dist/img/fv2.jpeg" alt=""></li>
      <li class="slider_inner js-slider-inner"><img src="dist/img/fv3.jpeg" alt=""></li>
    </ul>
  </section>
  <!-- //スライダー -->


  <!-- 製作物 -->
  <section id="works" class="section-wrapper background-green">

    <div class="section_title">
      <h2 class="section_title-words">製作物</h2>
    </div>
    <p class="text-center">製作物はすべて<br class="indent">架空の企業のものとなっております。</p>

    <!-- １段目 -->
    <ul class="works">
      <li class="works_inner">
        <a href="mogumogu.php">
          <img src="dist/img/mogumogu.png" alt="ポートフォリオサイト「mogumogu」の写真">
          <h3 class="works_inner-title">Webサービス「mogumogu」</h3>
        </a>
      </li>

      <li class="works_inner">
        <a href="konoko.php">
          <img src="dist/img/konoko.png" alt="ポートフォリオサイト「このこどのねこ？」の写真">
          <h3 class="works_inner-title">ゲーム「このこどのねこ？」</h3>
        </a>
      </li>
    </ul>

    <!-- ２段目 -->
    <ul class="works">
      <li class="works_inner">
        <a href="hapikore.php">
          <img src="dist/img/hapikore.png" alt="ポートフォリオサイト「ハピコレ」の写真">
          <h3 class="works_inner-title">ECサイト「ハピコレ」</h3>
        </a>
    
      </li>
      <li class="works_inner" id="office">
        <a href="office.php">
          <img src="dist/img/officepro.png" alt="ポートフォリオサイト「オフィスプロ」の写真">
          <h3 class="works_inner-title">コーポレートサイト「オフィスプロ」</h3>
        </a>

      </li>
    </ul>


    <!-- ３段目 -->
    <ul class="works">
      <li class="works_inner">
        <a href="morisato.php">
          <img src="dist/img/morisato.png" alt="ポートフォリオサイト「職員募集特設ページ」の写真">
          <h3 class="works_inner-title">リクルートサイト「職員募集特設ページ」</h3>
        </a>
      </li>

      <li class="works_inner">
        <a href="port.php">
          <img src="dist/img/portfolio.png" alt="ポートフォリオサイトトップページの写真">
          <h3 class="works_inner-title">ポートフォリオサイト（本サイト）</h3>
        </a>

      </li>
    </ul>

  </section>
  <!-- //製作物 -->

  <!-- 製作環境 -->
  <section id="skill" class="section-wrapper">

    <div class="section_title">
      <h2 class="section_title-words">製作環境</h2>
    </div>

    <table class="table">
      
      <tr class="table-inner">
        <th class="table-title">フロントエンド</th>
        <td class="table-text">HTML / CSS(Sass) / javascript(jQuery)</td>
      </tr>
      
      <tr class="table-inner">
        <th class="table-title">バックエンド</th>
        <td class="table-text">PHP(製作物はまだありませんがFuelPHPを学習中、次にLaravelを学習予定です。) / SQL /</td>
      </tr>
      <tr class="table-inner">
        <th class="table-title">ツール等</th>
        <td class="table-text"> Node.js / yarn / gulp / npm / photoShop / Git(GitHub) / CyberDuck / MAMP</td>
      </tr>
      <tr class="table-inner">
        <th class="table-title">OS</th>
        <td class="table-text">Mac / Windows</td>
      </tr>

    </table>
  </section>
  <!-- //製作環境 -->


</main>
<!-- //main  -->

<?php
require('src/php/footer.php');
?>