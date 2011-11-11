<?php
//&copy; 2011 by <a href="http://www.geekhole.ch">geekhole.ch</a> - All rights reserved. Questions? <a href="mailto:swag@geekhole.ch">swag@geekhole.ch</a>

$options = get_option( 'geekhole_theme_options' );
?>

<div class="span-24 separator-label"><span>Themen</span></div>
	<div class="span-24 separator"></div>
		
	<div id="topic-navigator" class="span-24">
		<ul>
			<strong>nuffin' here yet.</strong>
		</ul>
	</div>
	
	<div class="span-24 separator-label"><span>Impressum</span></div>
	<div class="span-24 separator"></div>
	
	<div class="span-24">
		<p>
		<?php
			echo $options['footer']; 
		?>
		</p>
	</div>
</div>
</body>
</html>