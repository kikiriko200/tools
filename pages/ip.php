<?php
	$ipv4 = $_SERVER["REMOTE_ADDR"];
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$isp = gethostbyaddr($ipv4);
	$url = "http://api.xhanch.com/ip-get-detail.php?ip=$ipv4&m=json";
	$json = file_get_contents($url);
	$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
	$geoip = json_decode($json,true);
?>
<?php include '../temp/header.php' ?>
<link rel="preload" as="style" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin="anonymous"
	 onload="this.rel='stylesheet'">
<?php include '../temp/nav.php' ?>
<div id="app" class="contents" style="min-height:90vh">
	<div class="inner contents-inner">
		<div class="box">
			<div class="box-content">
				<div class="alert info">
					<p>このツールで判定できるブラウザはEdge/Chrome/Firefox/Operaです。</p>
				</div>
				<h2>ipアドレス確認</h2>
				<h3>あなたのIPv4アドレス:<?php echo $ipv4; ?></h3>
        <h3>ユーザーエージェント:<?php echo $ua; ?></h3>
				<h3>プロバイダ:<?php echo $isp; ?></h3>
				<h3>国:<?php echo $geoip["country_name"]; ?></h3>
				<h3>時差:UTF+<?php echo $geoip["gmt"]; ?>時間</h3>
				<h3>
					<?php 
						if(strpos($geoip["latitude"],'-') !== false){
							echo '南緯:';
						}else{
							echo '北緯:';
						};
						echo $geoip["latitude"];
						echo '°';
					?>
				</h3>
				<h3>
				<h3>
				<?php 
					if(strpos($geoip["longitude"],'-') !== false){
						echo '西経:';
					}else{
						echo '東経:';
					};
					echo $geoip["longitude"];
					echo '°';
				?>
				</h3>
				<div id="map"></div>
				<h3>あなたが使用しているブラウザ:
				<?php
					if(strpos($ua,'Edge') !== false){
						echo 'MicroSoft Edge';
					}elseif(strpos($ua,'Chrome') !== false){
						echo 'Google Chrome';
					}elseif(strpos($ua,'Firefox') !== false){
						echo 'Firefox';
					}elseif(strpos($ua,'OPR') !== false){
						echo 'Opera';
					};
				?></h3>
      </div>
		</div>
	</div>
</div>
<?php include '../temp/footer.php' ?>
<?php include '../temp/js.php' ?>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
	integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
	crossorigin="anonymous"></script>
<script>
	var map = L.map('map').setView([<?php echo $geoip["latitude"];?>, <?php echo $geoip["longitude"];?>], 13);
	L.marker([<?php echo $geoip["latitude"];?>, <?php echo $geoip["longitude"];?>]).addTo(map)
		.bindPopup('ここだよ')
		.openPopup();
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
</script>
</body>
</html>