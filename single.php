<?php
	get_header();
	
	if (have_posts()) : while(have_posts()) : the_post();
		
?>

<div id="content" class="span-16">
	<div class="span-16 blog-title">
		<p class="topic-label span-16">
		</p>
		<h1 class="span-16">
			<?php
				the_title(); 
			?>	
		</h1>
	</div>
	<?php 
		if (has_post_thumbnail())
		{
			?>
			
			<div class="image-container span-16">
				<?php
					the_post_thumbnail();
					$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				?>
				<div class="image-zoom"></div>
				<div class="caption span-16">
				<p><?php echo $caption; ?></p>
				</div>
			</div>
			
			<?php
		}
	?>
	<p>
		<?php
			the_content(); 
		?>
	</p>
</div>

<?php

	
	endwhile; endif;
	
	get_sidebar();
	comments_template();
	get_footer();
	
?>