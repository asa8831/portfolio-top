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
        <h2 class="section_title-words">ECサイト<br class="indent">「ハピコレ」</h2>
      </div>
      <!-- //ポートフォリオタイトル -->

      <!-- サイト画面 -->
        <img src="dist/img/hapikore.png" alt="ポートフォリオサイト「ハピコレ」の写真">
      <!-- //サイト画面 -->

      <!-- サイトリンク -->
      <button class="link-button">
        <a href="https://asa-works.com/hapikore/" target="_blank">Webサイトを見る</a>
      </button>
      <button class="link-button">
        <a href="https://github.com/asa8831/hapikore" target="_blank">GitHubを見る</a>
      </button>
      <!-- //サイトリンク -->

      <!-- 説明部分 -->
      <h2 class="heading">サイト概要</h2>
      <p>「ファミリー向けの服飾雑貨を扱っているECサイト」というイメージで作成しました。</p>
      <h2 class="heading">作成に至った経緯</h2>
      <p>コロナ禍で外出する機会が減った今日、ECサイトは前にも増して需要が高いという話を聞きました。<br>
      加え、外出する機会が減ったことにより虐待や離婚が増えているという話も聞き、家族の会話のきっかけになるようなサイトが作れればそういった問題の解消にもなり、売り上げにも結びつくのではないかと考え、ファミリー向けECサイトを今回のテーマとしました。</p>
      <h2 class="heading">製作期間</h2>
      <p>7営業日(46時間)</p>
      <h2 class="heading">使用言語 / 開発環境</h2>
      <p>macOS(Catalina)、HTML5、CSS3、jQuery(3.5.1)</p>
      <p>Google Chrome、Safari、Firefox、Microsoft Edgeで実機確認済み</p>
      <p>Google Chromeで実機確認済み</p>
      <h2 class="heading">レスポンシブ</h2>
      <p>非対応</p>
      <h2 class="heading">取り組むにあたり望んだ姿勢</h2>
      <p>ファミリー向けをテーマとしたため、どの年齢層の方でも操作しやすいサイトが必要だと考えました。<br>そのため、わかりやすいサイト構成とゆったりとしたアニメーションが必要だと考え、実装していくことを決めました。</p>
      <h2 class="heading">やってみて感じたこと</h2>
      <p>アニメーションが沢山あればわかりやすいサイトになるかと言えばそうではなく、むしろ必要最低限にしたほうが使いやすいものになると感じました。<br>利用者の利便性を考えて製作しないと、サイトの中身を見てもらえず利益が落ちる結果になってしまうので、独りよがりにならないよう気をつけていかねばならないと認識を改めました。</p>
      <h2 class="heading">苦労した部分</h2>
      <p>仕組みの理解のために、プラグインは使用せずに自動でスライドするスライダーを作成しました。空白のスライドが延々と流れ続けるなどなかなかうまくいきませんでしたが、苦労した分よい勉強になったと思います。<br>素早い実装のためにプラグインを使うことが一般的だと聞きますが、仕組みを理解していないと不具合があったときに対処ができなくなりますので、今後とも自主学習で仕組みを理解し、使っていくことを心がけていきたいです。</p>
      <h2 class="heading">こだわった部分</h2>
      <p>ホバーするとふわっと浮き上がる写真に対し、どうすれば心地よく感じるものになるか、アニメーションと影の付け方にこだわりました。<br>細かい部分ではありますが、サイトの使いごごちに関わってくる部分かと思われますので、今後とも納期との兼ね合いを見ながらこだわっていきたいです。</p>
      <h2 class="heading">今後の課題として取り組んでいきたいこと</h2>
      <p>今回はトップページのみ作成しましたが、カートの作成や商品の登録など、PHPが必要な部分についても今後実装していきたいです。</p>
      <!-- 説明部分 -->

      <button class="link-button">
        <a href="https://asa-works.com/top/#works">戻る</a>
      </button>
    </section>

  </main>


  <?php
  require('src/php/footer.php');
  ?>