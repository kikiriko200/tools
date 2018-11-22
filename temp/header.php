<?php $sitename = "DAFU's Tools"; ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<meta name="author" content="DAFU">
	<meta name="theme-color" content="#f5f5f5">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/tools/css/style.css">
	<link rel="preload" as="style" href="/tools/css/fonts.min.css" onload="this.rel='stylesheet'">
	<link rel="preload" as="style" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" onload="this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="/tools/css/fonts.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
	</noscript>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112493597-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-112493597-5');
	</script>
	<?php if($_SERVER["REQUEST_URI"] === '/tools/'){
		echo '<title>';
		echo $sitename;
		echo '</title>';
	};
	?>
</head>
<body>