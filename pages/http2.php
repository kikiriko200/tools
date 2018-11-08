<?php
$url=$_POST['text1'];
?>
<?php include './../temp/header.php' ?>
<div id="app" class="contents" style="min-height:90vh">
	<div class="inner contents-inner">
		<div class="box">
			<div class="box-content">
        <h2>HTTP/2チェッカー</h2>
        <p>チェックするURLを入力してください</p>
        <form method="post" action="#">
          <input type="url" name="url" placeholder="http(s)://">
          <button type="submit" class="btn" style="margin-top:15px">チェックする</button>
        </form>
      </div>
		</div>
	</div>
</div>
<?php include './../temp/footer.php' ?>
<?php include './../temp/js.php' ?>
</body>
</html>