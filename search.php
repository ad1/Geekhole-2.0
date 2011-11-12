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
	?>
	
	<div class="span-16">
		<h3><?php the_title(); ?></h3>
		<p>
			<?php
				the_excerpt(); 
			?>
		</p>
	</div>
	<hr />
	
	<?php
		endwhile; 
		else : 
	?>
		<h1 class="soan-16">Leider nichts gefunden :(</h1>
	<?php 
		endif;
	?>
</div>	
<?php 
	get_sidebar();
	get_footer();
?>