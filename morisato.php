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
        <h2 class="section_title-words">リクルートサイト<br class="indent">「森里市採用特設ページ」</h2>
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
      <p>公務員時代に「年々志望者が減ってきていて、優秀な人材を確保するのが大変」と人事担当の同僚が困っていたのを見て、何とかしたいと思ったことが作成のきっかけです。<br>コロナ禍の影響で大人数を集めての会社説明会が開きにくい昨今だからこそ、会社の魅力をHP上で伝えられるような採用ページは、今後ますます需要が高くなってくると予想しています。</p>
      <h2 class="heading">製作期間</h2>
      <p>6営業日(33時間)</p>
      <h2 class="heading">使用言語 / 開発環境</h2>
      <p>macOS(Catalina)、HTML5、CSS3(Sass)、jQuery(3.5.1)、npm</p>
      <p>Google Chrome、Safari、Firefox、Microsoft Edge、iPhone7で実機確認済み</p>
      <h2 class="heading">レスポンシブ</h2>
      <p>対応済み</p>
      <h2 class="heading">取り組むにあたり望んだ姿勢</h2>
      <p>堅いイメージを持たれやすい公務員の募集なので、柔らかく親しみがもてるサイト作りをしようと計画立てました。</p>
      <h2 class="heading">やってみて感じたこと</h2>
      <p>パララックスをPC版で実装したので携帯版も対応させようと色々試してみました、携帯版のパララックスは不具合が起きやすくなるとの記述を見つけ、実装を断念しました。<br>どうやって実装するかを考えるのが仕事ではありますが、不具合が起きる等、製作依頼者の不利益になりそうな部分があるならば、理由を説明した上で別な手立てを考えることも必要になってくると思いました。<br>まず何よりも、事前に「これは不具合が起きやすい」といった情報を知っていれば、早い段階で別な案を提案することもできるので、様々な知識を集めていくことが仕事をする上で大切だと反省しました。</p>
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