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
        <h2 class="section_title-words">ゲーム<br class="indent">「このこどのねこ？」</h2>
      </div>
      <!-- //ポートフォリオタイトル -->

      <!-- サイト画面 -->
        <img src="dist/img/konoko.png" alt="ポートフォリオサイト「このこどのねこ？」の写真">
      <!-- //サイト画面 -->

      <!-- サイトリンク -->
      <button class="link-button">
        <a href="https://asa-works.com/konoko/" target="_blank">Webサイトを見る</a>
      </button>
      <button class="link-button">
        <a href="https://github.com/asa8831/konoko" target="_blank">GitHubを見る</a>
      </button>
      <!-- //サイトリンク -->

      <!-- 説明部分 -->
      <h2 class="heading">ゲーム概要</h2>
      <p>コマンドを選び、道端で出会ったねこの警戒心を解いて友達になっていくブラウザゲームです。オブジェクト指向理解のため、フレームワークを使わずPHPのフルスクラッチで作成しました。</p>
      <h2 class="heading">作成に至った経緯</h2>
      <p>今年の春に姪が生まれ、産休を取りながら頑張っている妹を見て、姪をあやすのに使ったり、ゆくゆくは一緒に遊べる子供用のゲームがあると働くお母さんも多少楽になるのではないかという思いで作りました。</p>
      <h2 class="heading">ゲームの流れ</h2>
      <p>タイトル画面で３種類の主人公のうち１つを選び、スタートします。左上にある４種類のコマンドを選択すると、右上にある「警戒心」が減っていきます。「警戒心」が0になればそのねことは友達になり、先に進みます。対するねこの行動で右上にある制限時間が減っていくので、それが0になるとタイムアップです。最後に友達になったねこの数が表示されます。</p>
      <h2 class="heading">製作期間</h2>
      <p>9営業日(56時間)</p>
      <h2 class="heading">使用言語 / 開発環境</h2>
      <p>macOS(Catalina)、HTML5、CSS3、JavaScript(jQuery(3.5.1))、PHP(7.4.2)、MAMP、PhotoShop</p>
      <p>Google Chrome、Safari、Firefox、Microsoft Edgeで実機確認済み</p>
      <h2 class="heading">レスポンシブ</h2>
      <p>未対応</p>
      <h2 class="heading">取り組むにあたり望んだ姿勢</h2>
      <p>小さな子供と遊ぶことを目的としたものなので画面や機能はなるべくシンプルにわかりやすくを心がけ、ゲームの内容や使用する画像も可愛らしくほのぼのとしたものを選びました。</p>
      <h2 class="heading">やってみて感じたこと</h2>
      <p>この作品を通し、後々の改修やメンテナンスのしやすさを意識したコード作りの大切さを学びました。限られた時間の中でいかに保守性の高いコードを書けるかを、日々の自主学習で学び続けていきたいと思います。</p>
      <h2 class="heading">苦労した部分</h2>
      <p>オブジェクト指向型で記載をする場合、手続き型と違い処理ごとに記載をまとめてあるため、何の処理をどこで担当しているかをきちんと把握していないと、不具合の出ている箇所を発見するのに時間がかかる点に苦労しました。<br>実際このゲームを作成中、途中でどのコマンドをえらんでも「警戒心」が減らなくなるという不具合が起きましたが、原因の究明に時間がとてもかかってしまったのを覚えています。 <br>仕事として扱う以上経験が浅いという言い訳は勿論使うことはできないので、慢心することはなく技術の習得に努めていかなければいけないことを再確認しました。
      </p>
      <h2 class="heading">今後の課題として取り組んでいきたいこと</h2>
      <p>今回はPHPで最低限の機能しか実装しなかった点を反省しています。<br>
      最低限の機能を素早く実装するのはもちろんとして、プラスαで、いかにすればより使用者に満足してもらえ利益が上がるかを考えなければならなかったので、ゆくゆくはその辺りを考え実装していきます。</p>
      <!-- 説明部分 -->

      <button class="link-button">
        <a href="https://asa-works.com/top/#works">戻る</a>
      </button>
      
    </section>

  </main>


  <?php
  require('src/php/footer.php');
  ?>