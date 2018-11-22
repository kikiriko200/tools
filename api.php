<?php
include './temp/header.php';
$ip = file_get_contents('https://api.dafu.cf/ip');
$isp = file_get_contents('https://api.dafu.cf/isp?ip=1.1.1.1');
$ua = file_get_contents('https://api.dafu.cf/ua');
$count = file_get_contents('https://api.dafu.cf/count?text=あいueお');
?>
<title>API|<?php echo $sitename;?></title>
<style>.api{margin: 20px 0}</style>
<?php include './temp/nav.php' ?>
<div class="contents">
  <div class="contents-hero">
    <h1>API</h1>
  </div>
	<div class="inner contents-inner">
    <div class="box">
      <div class="box-content">
        <h2>DAFU's Tools APIドキュメント</h2>
        <h3>最終更新日:2018/11/14</h3>
        <p>
          当サイトではAPIを用意しています。<br>
          サーバーの負荷が上がりすぎない範囲で無制限に利用可能です。<br>
          なお、当サイトのAPIは全てjson形式での提供となります。<br>
        </p>
        <div class="api">
          <h3 class="api-title"><span class="alert info">GET</span>プロバイダ確認API</h3>
          <p>
            IPアドレスに対応するプロバイダを確認出来ます。<br>
            このAPIでは、IPv4/IPv6両方の利用が可能です。<br>
            パラメータはip/ispです。
          </p>
          <h4>URL</h4>
          <pre>
            <code class="hljs">https://api.dafu.cf/isp?ip=1.1.1.1</code>
          </pre>
          <h4>実行結果</h4>
          <pre>
            <code class="hljs"><?php echo $isp; ?></code>
          </pre>
        </div>
        <div class="api">
          <h3 class="api-title"><span class="alert info">GET</span>文字数チェッカーAPI</h3>
          <p>
            文字数をチェックできます。<br>
            なお、日本語も英数字も1文字としてカウントされます。<br>
            パラメータはtextです。
          </p>
          <h4>URL</h4>
          <pre>
            <code class="hljs">https://api.dafu.cf/count?text=あいueお</code>
          </pre>
          <h4>実行結果</h4>
          <pre>
            <code class="hljs"><?php echo $count; ?></code>
          </pre>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include './temp/footer.php' ?>
<?php include './temp/js.php' ?>