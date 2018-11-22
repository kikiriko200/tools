<h2>Share</h2>
<div class="flex">
	<!--twitter-->
	<a class="share_btn tw" href="https://twitter.com/share?url=<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow">
		<i class="icon-twitter"></i>
	</a>
	<!--facebook-->
	<a class="share_btn fb" href="https://facebook.com/share?url=<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow">
		<i class="icon-facebook"></i>
	</a>
	<!--hatena-->
	<a class="share_btn ht" href="http://b.hatena.ne.jp/entry/<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow">
		B!
	</a>
	<!--github-->
	<a class="share_btn gh" href="https://github.com/kikiriko200/tools" rel="nofollow">
		<i class="icon-github"></i>
	</a>
</div>