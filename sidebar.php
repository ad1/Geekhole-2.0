<?php
    $args = array(
	    'orderby' => 'name',
	    'oder' => 'ASC',
	    'limit' => -1,
	    'category_name' => 'We Like',
	    'hide_invisible' => 1,
    ); 
    
    $bookmarks = get_bookmarks($args);
?>

<div id="area" class="span-8 last">

	<?php
		get_template_part('searchform');
	?>
	<div id="social-widget" class="span-8">
		<p class="handwritten">find us!</p>
		<div id="social-bubble-triangle"></div>
		<div id="social-bubble">
			<a href="#" id="social-link">facebook.com/<span class="light">geekhole</span></a>
			<ul>
				<li id="fb" data-text="facebook.com/" data-light-text="geekhole" data-url="http://www.facebook.com/geekhole">
					<p class="inv">Facebook</p>
				</li>
				<li id="tw" data-text="twitter.com/" data-light-text="geekhole_ch" data-url="http://www.twitter.com/geekhole_ch">
					<p class="inv">Twitter</p>
				</li>
				<li id="gp" data-text="google.com/" data-light-text="plus" data-url="http://plus.google.com/115148340324970369147">
					<p class="inv">Google+</p>
				</li>
				<li id="rss" data-text="geekhole.ch/" data-light-text="rss" data-url="http://www.geekhole.ch/rss">
					<p class="inv">RSS Feed</p>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div id="we-like-widget" class="span-8">
		<h3><span class="dark">We</span> Like</h3>
		<ul class="link-list">
		<?php 
			foreach ($bookmarks as $bookmark)
			{
				echo "<li><a href=\"{$bookmark->link_url}\">{$bookmark->link_name}</a></li>";
			}
		?>
		
		</ul>
	</div>
	<div id="google-adsense" class="span-8">
		<script type="text/javascript"><!--
			google_ad_client = "ca-pub-9823082346816029";
			/* geekholeneu */
			google_ad_slot = "7915826370";
			google_ad_width = 300;
			google_ad_height = 250;
			//-->
		</script>
		<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	</div>
</div>