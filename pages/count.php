<?php include '../temp/header.php' ?>
<title>文字数チェッカー|<?php echo $sitename;?></title>
<?php include '../temp/nav.php' ?>
<div id="app" class="contents" style="min-height:90vh">
	<div class="inner contents-inner">
    <?php include '../temp/ad.php'?>
    <div class="box">
      <div class="box-content">
        <h2>文字数チェッカー</h2>
        <p>
          文字数をカウント出来ます。<br>
          なお、日本語も英数字も等しく1文字とカウントされます。
        </p>
        <h3>文字列</h3>
        <textarea id="text" class="textarea" row="5" v-model.trim="text"></textarea>
        <h3>結果</h3>
        <p class="result alert success">{{text.length}}文字</p>
        <?php include('../temp/share.php') ?>
        <details>
					<summary>ソースコード</summary>
					<pre><code><?php highlight_file("count.php");?></code></pre>
				</details>
      </div>
    </div>
  </div>
</div>
<?php include '../temp/footer.php' ?>
<?php include '../temp/js.php' ?>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script defer src="../js/tools/vue-count.js"></script>
<style>
.textarea{padding:10px;width: 100%;height:250px;resize: none;color: #111;font-size:16px;font-family:inherit}
.result{text-align:center}
</style>
</body>
</html>