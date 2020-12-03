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
        <h2 class="section_title-words">リクルートサイト<br class="indent">「職員募集特設ページ」</h2>
      </div>
      <!-- //ポートフォリオタイトル -->

      <!-- サイト画面 -->
        <img src="dist/img/morisato.png" alt="ポートフォリオサイト「森里市採用特設ページ」の写真">
      <!-- //サイト画面 -->

      <!-- サイトリンク -->
      <button class="link-button">
        <a href="https://asa-works.com/morisato/" target="_blank">Webサイトを見る</a>
      </button>
      <button class="link-button">
        <a href="https://github.com/asa8831/morisato" target="_blank">GitHubを見る</a>
      </button>
      <!-- //サイトリンク -->

      <!-- 説明部分 -->
      <h2 class="heading">サイト概要</h2>
      <p>「市町村の職員募集ページ」というイメージで作成しました。</p>
      <h2 class="heading">作成に至った経緯</h2>
      <p>前職で人事担当が、採用試験の応募人数が減っているので増やしたいと話していたのを聞き「親しみやすさを持った採用ページがあれば興味を持ってもらえるのではないか」と思ったことが作成に至ったきっかけです。</p>
      <h2 class="heading">製作期間</h2>
      <p>6営業日(33時間)</p>
      <h2 class="heading">使用言語 / 開発環境</h2>
      <p>MacOS(Catalina)、HTML5、CSS3(Sass)、jQuery(3.5.1)、npm</p>
      <p>Google Chrome、Safari、Firefox、Microsoft Edge、iPhone7で実機確認済み</p>
      <h2 class="heading">レスポンシブ</h2>
      <p>対応済み</p>
      <h2 class="heading">取り組むにあたり望んだ姿勢</h2>
      <p>堅いイメージを持たれやすい公務員の募集なので、柔らかく親しみがもてるサイト作りをしようと計画立てました。</p>
      <h2 class="heading">やってみて感じたこと</h2>
      <p>柔らかく親しみがもてるサイト作りを目標に掲げていたので色々なアニメーションを試してみましたが、動きが少し違うだけでサイトが与える印象はだいぶ変わるということを実感しました。<br>実務で実装する際はクライアント様の要望からどのようにすれば一番良いかを考え、細かいところまで気を配っていきたいと思いました。</p>
      <h2 class="heading">苦労した部分</h2>
      <p>レスポンシブ用メニュー作成時にハンバーガーボタンが消えてしまい、「このCSSはこういうものだ」という思い込みのため、解決まで時間がかかってしまったということがありました。<br>変に思い込んでしまうと実装の遅れに繋がってしまうため、自分の知識のアップデートを今後いっそう意識しなければならないと再認識しました。（解消までの経緯について詳しくは<a href="https://yuzuichiban0331.hatenablog.com/entry/2020/10/06/160033" class="link-pink" target="_blank">ブログ参照</a>。）</p>
      <h2 class="heading">こだわった部分</h2>
      <p>ヘッダーとメニューを別に作り、どちらも固定させ、その間にパララックス機能がついたトップ画像をいれることにより、動きにユニークさが出るようにしました。<br>加え、スクロールするとふわっと現れる文字や、画像がゆっくりズームするアニメーションをいれることにより、サイト作成前に計画立てていた「柔らかく親しみがもてるサイト」の雰囲気を作ることを目指しました。
      </p>
      <h2 class="heading">今後の課題として取り組んでいきたいこと</h2>
      <p>レイアウトの引き出しがまだまだ少ないと今回作成して感じたので、もっと様々なサイトを研究し、よりよいものが作れるようにしていきたいです。</p>
      <!-- 説明部分 -->


      <button class="link-button">
        <a href="https://asa-works.com/top/#works">戻る</a>
      </button>
    </section>

  </main>


  <?php
  require('src/php/footer.php');
  ?>