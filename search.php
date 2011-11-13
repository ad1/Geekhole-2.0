<?php
	get_header();
	
?>

<div id="content" class="span-16">
	<?php 
		if (have_posts()) : 
	?>
	<div class="span-16 blog-title">
		<h1 class="span-16">Resultate</h1>
	</div>
	
	<?php
		while(have_posts()) : the_post();
		
		$postID = get_the_ID();
		$perma = get_permalink($postID);
	?>
	
	<div class="span-16">
		<h3><a href="<?php echo $perma; ?>"><?php the_title(); ?></a></h3>
		<h4 class="search-meta">Verfasst von <span><?php the_author() ?></span>, am <span><?php the_time('d. F Y'); ?></span></h4>
		<p>
			<?php
				the_excerpt(); 
			?>
			
			<a class="read-now" href="<?php echo $perma; ?>">Jetzt lesen!</a>
		</p>
	</div>
	<hr />
	
	<?php
		endwhile; 
		else : 
	?>
		<h1 class="span-16 grey">:(</h1>
		<h2 class="span-16">Leider hab ich nichts gefunden..</h2>
	<?php 
		endif;
	?>
</div>	
<?php 
	get_sidebar();
	get_footer();
?>
