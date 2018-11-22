<?php include '../temp/header.php' ?>
<title>curlジェネレーター|<?php echo $sitename;?></title>
<?php include '../temp/nav.php' ?>
<style>
input[type=text] {
  width: 100%;
  padding: 5px;
  font-size: 18px;
}
.curl{
	background: rgb(245,245,245);
	border:solid 1px;
	border-radius: 5px;
	font-size: 16px;
	font-family: Ubuntu;
}
</style>
<div id="app" class="contents" style="min-height:90vh">
	<div class="inner contents-inner">
		<?php include '../temp/ad.php'?>
		<div class="box">
			<div class="box-content">
				<h2>curlジェネレーター</h2>
				<noscript>
					<div class="infobox alert">
						<p>このツールを利用するにはJavaScriptを有効化してください。</p>
					</div>
				</noscript>
				<h3>URL</h3>
				<input type="text" placeholder="http(s)://" pattern="^(https?://[\w/:%#\$&\?\(\)~\.=\+\-]*|https?:/|https?:|https?|htt|ht|h)" maxlength="100" :value="urls" @input="urls=opt(urls,$event)">
				<h3>オプション</h3>
				<input type="checkbox" v-model="o" true-value="-O" false-value="">ファイルをダウンロードする(ファイル名:自動)<br>
				<input type="checkbox" v-model="c" true-value="-C-" false-value="">中断地点から再開する<br>
				<input type="checkbox" v-model="l" true-value="-L" false-value="">リダイレクトも追う<br>
				<input type="checkbox" v-model="sS" true-value="-sS" false-value="">進捗表示なし(エラーは表示)<br>
				<p>
					コマンド:<code id="code" class="curl">curl {{o}} {{c}} {{l}} {{sS}} {{urls}}</code><br>
				</p>
				<button class="btn" onclick="copyToClipboard('#code')" style="margin-top:15px">コピーする</button>
				<?php include('../temp/share.php') ?>
				<details>
					<summary>ソースコード</summary>
					<pre><code><?php highlight_file("curl.php");?></code></pre>
				</details>
			</div>
		</div>
	</div>
</div>
<?php include '../temp/footer.php' ?>
<?php include '../temp/js.php' ?>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script async defer src="../js/tools/vue-curl.js"></script>
</body>
</html>