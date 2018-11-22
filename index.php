<?php include './temp/header.php'?>
<?php include './temp/nav.php'?>
<div class="contents">
		<div class="contents-hero">
			<h1>DAFU's tools</h1>
		</div>
		<div class="inner contents-inner">
      <h2 class="md">更新情報</h2>
      <div class="alert info">
        <p>更新情報:IPアドレス確認・文字数チェッカーを追加しました(18/11/15)</p>    
      </div>
			<h2 class="md">ツール一覧</h2>
			<div class="r">
        <a href="./pages/curl.php" class="col">
          <div class="box">
            <div class="box-content">
              <div class="box-content-title">curlコマンドジェネレーター</div>
              <div class="box-content-img"><img src="./img/curl-logo.svg" alt="curlコマンドジェネレーター"></div>
              <p class="box-content-text">ファイルをDLするときなどに使うcurlコマンドを生成できます。</p>
            </div>
          </div>
        </a>
        <a href="./pages/ip.php" class="col">
          <div class="box">
            <div class="box-content">
              <div class="box-content-title">IPアドレス確認</div>
              <div class="box-content-img"><img src="./img/network.jpg" alt="IPアドレス確認"></div>
              <p class="box-content-text">ブラウザの認識するIPアドレスやプロバイダ・使用中のブラウザなどを確認出来ます。</p>
            </div>
          </div>
        </a>
        <a href="./pages/count.php" class="col">
          <div class="box">
            <div class="box-content">
              <div class="box-content-title">文字数チェッカー</div>
              <div class="box-content-img">No img</div>
              <p class="box-content-text">文章の文字数を確認出来ます。</p>
            </div>
          </div>
        </a>
        <div class="col box">
          <div class="box-content">
            <div class="box-content-title">Title</div>
            <div class="box-content-img"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include './temp/footer.php'?>
<?php include './temp/js.php'?>