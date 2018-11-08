<?php include '../temp/header.php' ?>
<?php include '../temp/nav.php' ?>
<style>
input[type=text] {
  width: 100%;
  padding: 5px;
  font-size: 18px;
}
code{
	background: #f5f5f5;
	border:solid 1px;
	border-radius: 5px;
	font-size: 16px;
	font-family: Ubuntu;
}
</style>
<div id="app" class="contents" style="min-height:90vh">
	<div class="inner contents-inner">
		<div class="box">
			<div class="box-content">
				<h2>curlジェネレーター</h2>
				<h3>URL</h3>
				<input type="text" placeholder="http(s)://" pattern="^(https?://[\w/:%#\$&\?\(\)~\.=\+\-]*|https?:/|https?:|https?|htt|ht|h)" maxlength="100" :value="urls" @input="urls=opt(urls,$event)">
				<h3>オプション</h3>
				<input type="checkbox" v-model="o" true-value="-o" false-value="">ファイルをダウンロードする<br>
				<input type="checkbox" v-model="c" true-value="-C-" false-value="">中断地点から再開する
				<p>
					コマンド:<code id="code">curl {{o}} {{c}} {{urls}}</code><br>
				</p>
				<button class="btn" onclick="copyToClipboard('#code')" style="margin-top:15px">コピーする</button>
			</div>
		</div>
	</div>
</div>
<?php include '../temp/footer.php' ?>
<?php include '../temp/js.php' ?>
<script async defer src="../js/tools/vue-curl.js"></script>
</body>
</html>