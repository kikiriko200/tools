<?php
$ipv4 = $_SERVER["REMOTE_ADDR"];
$ipv6 = file_get_contents('http://v6.ipv6-test.com/api/myip.php');
$ua = $_SERVER['HTTP_USER_AGENT'];;
?>
<?php include '../temp/header.php' ?>
<?php include '../temp/nav.php' ?>
<div id="app" class="contents" style="min-height:90vh">
	<div class="inner contents-inner">
		<div class="box">
			<div class="box-content">
				<h2>ipアドレス確認</h2>
				<h3>あなたのIPv4アドレス:<?php echo $ipv4; ?></h3>
				<h3>あなたのIPv6アドレス:<?php echo $ipv6;?></h3>
        <h3>ユーザーエージェント:<?php echo $ua; ?></h3>
				<h3>あなたが使用しているブラウザ:
				<?php
				if(strpos($ua,'Edge') === true){
					echo 'MicroSoft Edge';
				}elseif(strpos($ua,'Chrome') === true){
					echo 'Google Chrome';
				}elseif(strpos($ua,'Firefox') === true){
					echo 'Firefox';
				}elseif(strpos($ua,'OPR') === true){
					echo 'Opera';
				};
				?></h3>
      </div>
		</div>
	</div>
</div>
<?php include '../temp/footer.php' ?>
<?php include '../temp/js.php' ?>
</body>
</html>