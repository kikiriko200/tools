<div class="footer">
  <div class="inner footer-inner">
    <div class="r">
      <div class="col-33">
        <h4>Pages</h4>
        <details class="sitemap">
        <summary>ページ</summary>
          <li><a href="/tools/">トップページ</a></li>
          <li><a href="/tools/api.php">APIドキュメント</a></li>
        </details>
        <details>
        <summary>ツール</summary>
        <li><a href="/tools/pages/curl.php">Curlコマンドジェネレーター</a></li>
        <li><a href="/tools/pages/ip.php">IP確認</a></li>
        <li><a href="/tools/pages/count.php">文字数チェッカー</a></li>
        </details>
        <?php
          $counter_file = '/tools/count.txt';
          $counter_lenght = 8;
          $fp = fopen($counter_file, 'r+');
          if ($fp) {
              if (flock($fp, LOCK_EX)) {
                  $counter = fgets($fp, $counter_lenght);
                  $counter++;
                  rewind($fp);
                  if (fwrite($fp,  $counter) === FALSE) {
                      echo ('<p>'.'ファイル書き込みに失敗しました'.'</p>');
                  }
                  flock ($fp, LOCK_UN);
              }
          }
          fclose ($fp);
        ?>
        <?php echo $counter.'PV';?>
      </div>
      <div class="col-33">
        <!-- admax -->
        <script src="//adm.shinobi.jp/s/4cbdde51f1b412ff384c3d0ee8c5ddbd"></script>
        <!-- admax -->
      </div>
      <div class="col-33">
        <!-- admax -->
        <script src="//adm.shinobi.jp/s/4cbdde51f1b412ff384c3d0ee8c5ddbd"></script>
        <!-- admax -->
      </div>
    </div>
  </div>
  <div class="copy">&copy;2018-&nbsp;DAFU.</div>
</div>