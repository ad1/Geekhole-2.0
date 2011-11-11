<?php
	get_header();
	
	if (have_posts()) : while(have_posts()) : the_post();
		
?>

<div id="content" class="span-16">
	<div class="span-16 blog-title">
		<h1 class="span-16">
			<?php
				the_title(); 
			?>	
		</h1>
	</div>
	<p>
		<?php
			the_content(); 
		?>
	</p>
</div>

<?php

	
	endwhile; endif;
	
	get_sidebar();
	get_footer();
	
?>