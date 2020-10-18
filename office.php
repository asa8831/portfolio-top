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
        <h2 class="section_title-words">コーポレートサイト<br class="indent">「オフィスプロ」</h2>
      </div>
      <!-- //ポートフォリオタイトル -->

      <!-- サイト画面 -->
        <img src="dist/img/officepro.png" alt="ポートフォリオサイト「オフィスプロ」の写真">
      <!-- //サイト画面 -->

      <!-- サイトリンク -->
      <button class="link-button">
        <a href="https://asa-works.com/officepro/" target="_blank">Webサイトを見る</a>
      </button>
      <button class="link-button">
        <a href="https://github.com/asa8831/officepro" target="_blank">GitHubを見る</a>
      </button>
      <!-- //サイトリンク -->

      <!-- 説明部分 -->
      <h2 class="heading">サイト概要</h2>
      <p>「オフィス機器やオフィススペースの貸し出し、販売等、オフィス関係のビジネスを行っている会社のコーポレートサイト」というイメージで作成しました。</p>
      <h2 class="heading">作成に至った経緯</h2>
      <p>急速に進むIT化に伴い、自社サイトは今や企業にとって必須のものとなっています。加え、個人による起業が注目されている昨今においてコーポレートサイトの需要が今後より高まると考え、作成するに至りました。</p>
      <h2 class="heading">製作期間</h2>
      <p>4営業日(26.5時間)</p>
      <h2 class="heading">使用言語 / 開発環境</h2>
      <p>macOS(Catalina)、HTML5、CSS3、jQuery(3.5.1)</p>
      <p>Google Chrome、Safari、Firefox、Microsoft Edge、iPhone7で実機確認済み</p>
      <h2 class="heading">レスポンシブ</h2>
      <p>対応済み</p>
      <h2 class="heading">取り組むにあたり望んだ姿勢</h2>
      <p>昨今のモバイルファーストを考慮し、まずレスポンシブル対応のページを目指しました。<br>そして事前に色々な企業のページを見て、「コーポレートサイトらしさ」をどうすればだせるのか考えた上で作成に取り掛かりました。</p>
      <h2 class="heading">やってみて感じたこと</h2>
      <p>事前に計画立てて取り組んでいくことの大切さを痛感しました。<br>初めてレスポンシブ対応のページを作成しましたが、PC用画面作成の段階である程度レスポンシブのことを考えながら組んでいけば、携帯用画面に切り替えたときに大きくレイアウトが崩れることはなく、考えていたよりも短い製作期間で作成が完了しました。<br>早さや品質はお客様の信頼に直結する部分なので、やみくもに取り組むのではなく、計画立てを大切にしながら今後取り組んでいきたいと思います。</p>
      <h2 class="heading">苦労した部分</h2>
      <p>画面右脇に「topに戻るボタン」を実装した際に、「ボタンが急に点滅しだす」「topに戻ったときに、一定時間スクロールが効かなくなる」という２点の不具合が起き、解消するのに苦労しました。<br>不具合の原因はそれぞれにあり個々に対処しなければならないのではないかと仮説立てていましたが、結局どちらも「if文の判定が複数回行われていてアニメーションが溜まっていた」ことが原因だということがわかり、個別に原因があると考えていただけに驚愕しました。<br>このことから、エラーが複数個同時に起きた場合も落ち着いて１つずつ取り組んでいくことが一番の近道だということを身に染みて感じました。（解消までの経緯について詳しくは<a href="https://yuzuichiban0331.hatenablog.com/entry/2020/09/17/000000" class="link-pink" target="_blank">ブログ参照</a>。）</p>
      <h2 class="heading">こだわった部分</h2>
      <p>ビジネス用のサイトのため「素早くスマートな会社」というイメージを見た人に与えられるようにしたいと考えました。<br>それを実現するため<br>①スッキリとした印象を与えるよう、青と白を基調とした<br>②「欲しい情報にすぐにたどり着く」を目指し画像も文章も最低限にし、詳しい情報へのリンクを大きめに表示した<br>③jQueryやCSSアニメーションで動きをつけた部分はスピーディーに動くよう調整した<br>の３点を盛り込んだことが、今回こだわった部分として挙げられます。</p>
      <h2 class="heading">今後の課題として取り組んでいきたいこと</h2>
      <p>今回参考のために様々な業界のコーポレートサイトを見た結果、個人で開業している医院やクリニックで独自のサイトを持っていないところが一定数あると感じました。なので今後、医療関係のコーポレートサイトの需要が増えてくるのではないかと予想をしております。<br>次回コーポレートサイトを作成する際はそのことをも踏まえテーマ設定を行いたいと思いました。</p>
      <!-- 説明部分 -->

      <button class="link-button">
        <a href="https://asa-works.com/top/#works">戻る</a>
      </button>
    </section>

  </main>


  <?php
  require('src/php/footer.php');
  ?>