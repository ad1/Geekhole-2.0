<div id="sticky-posts" class="span-16">


<?php
$args = array(
		'numberposts' => 3,
		'offset' => 0,
		'category' => 37, //HERE!
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'publish'
);
$formatBig = 'd.F Y';
$formatSmall = 'd.m.';
$posts = get_posts($args);

$options = get_option( 'geekhole_theme_options' );

$counter = 1;
foreach ($posts as $post)
{
	setup_postdata($post);
	if ($counter === 1)
	{
		?>
	<div id="sticky-01" class="sticky-post">


	<?php
	$id = get_the_ID();
	$perma = get_permalink($id);

	$tag = "<a href=\"{$perma}\">";

	echo $tag;
	
	the_post_thumbnail('front-big');
	?>
		</a>
		<div class="caption span-16">
			<p>
			<?php
			the_title();
			?>
				(<span class="grey">
				<?php
				the_date($formatBig);
				?> </span>)
			</p>
		</div>
	</div>
	
	
	
	
			<?php 
		}
		else
		{
			?>
			<div id="sticky-0<?php echo $counter; ?>" class="sticky-post small">
			<?php
				$id = get_the_ID();
				$perma = get_permalink($id);

				$tag = "<a href=\"{$perma}\">";
				
				echo $tag;
				
				the_post_thumbnail('front-small');
			?>
			</a>
			<div class="caption span-16">
				<p>
					<?php
						the_title(); 
					?>
					(<span class="grey">
					<?php
						the_date($formatSmall); 
					?>
					</span>)
			</p>
			</div>
			</div>
			<?php
		}
		$counter++;
	}
	
?>
<div class="clear"></div>
</div>

<div id="about-tile" class="span-8 last blue-bg">
	<div class="inner-tile">
		<h2>Geekhole</h2>
		<h3>
			<?php
				echo $options['boxtitle']; 
			?>
		</h3>
		<p>
			<?php
				echo $options['aboutgeekholetext']; 
			?>
		</p>
	</div>
</div>
