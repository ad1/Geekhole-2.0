<?php
	get_header();
?>

<div id="content" class="span-16">
	<div class="span-16 blog-title">
		<h1 class="span-16">
			404 - Not Found
		</h1>
	</div>
	<p>
		Huch, wo sind wir denn <em>hier</em> gelandet?
	</p>
	<p>
		<a href="<?php echo get_bloginfo('siteurl'); ?>">Hier</a> gehts zur&uuml;ck zur Startseite - oder einfach das folgende Video geniessen!</a>
	</p>
	<iframe src="http://player.vimeo.com/video/15647310" 
			width="630" 
			height="473" 
			frameborder="0" 
			webkitAllowFullScreen 
			allowFullScreen>
	</iframe>
	<p>
		<a href="http://vimeo.com/15647310">Natalie Portman Rap: a SNL Digital Short (Unensored)</a> from <a href="http://vimeo.com/starworksartists">Starworks Artists</a> on <a href="http://vimeo.com">Vimeo</a>.
	</p>
</div>

<?php
	get_sidebar();
	get_footer();
	?>
