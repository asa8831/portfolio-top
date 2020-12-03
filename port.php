<?php
require('src/php/head.php');
?>
<?php
require('src/php/header.php');
?>

<body>
  <main>
    <section class="section-wrapper">

      <!-- ポートフォリオタイトル -->
      <div class="section_title">
        <h2 class="section_title-words"><br>「浅野春菜<br class="indent">ポートフォリオサイト」<br>（本サイト）</h2>
      </div>
      <!-- //ポートフォリオタイトル -->

      <!-- サイト画面 -->
        <img src="dist/img/portfolio.png" alt="ポートフォリオサイト「浅野春菜ポートフォリオサイト」の写真">
      <!-- //サイト画面 -->

      <!-- サイトリンク -->
      <button class="link-button">
        <a href="https://github.com/asa8831/portfolio-top" target="_blank">GitHubを見る</a>
      </button>
      <!-- //サイトリンク -->

      <!-- 説明部分 -->
      <h2 class="heading">サイト概要</h2>
      <p>私自身のポートフォリオを集めたサイトです。</p>
      <h2 class="heading">製作期間</h2>
      <p>5営業日(38.5時間)</p>
      <h2 class="heading">使用言語 / 開発環境</h2>
      <p>MacOS(Catalina)、HTML5、CSS3(Sass)、jQuery(3.5.1)、yarn、gulp</p>
      <p>Google Chrome、Safari、Firefox、Microsoft Edge、iPhone7で実機確認済み</p>
      <h2 class="heading">レスポンシブ</h2>
      <p>対応済み</p>
      <h2 class="heading">苦労した部分</h2>
      <p>フェードインするスライダーをプラグインなしで作成しましたが、作成当初スライダーが下のコンテンツに重なって表示されてしまうという不具合が起きました。<br>最初は焦って闇雲に調べるところから始めてしまいましたが、不具合はなぜ起きたか仮説を立てて解決を図った結果、うまく表示させることができました。<br>手当り次第に行動するのではなく、落ち着いて何が原因かを探ることで解決の糸口が見えてきたので、実務においてエラーが発生した場合もまずは仮説を立てることを徹底していきたいと思います。</p>
      <h2 class="heading">こだわった部分</h2>
      <p>スライダーの動きをどうすれば心地よいものにできるか、何度も試して確認しました。<br>フェードインアウトの動きのスライダーのため、調整前はずっと見ていると点滅のような動きに感じて酔ってしまったので、切り替わりを出来るだけふんわりとさせることを心がけました。</p>
      <!-- 説明部分 -->

      <button class="link-button">
        <a href="https://asa-works.com/top/#works">戻る</a>
      </button>
    </section>

  </main>


  <?php
  require('src/php/footer.php');
  ?>