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
					$fullURL = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
				?>
				<div class="image-zoom" href="<?php echo $fullURL; ?>"></div>
				<?php
					/*
					 * The above href-Attribute is NOT valid HTML, it's an ugly hack for fancybox AND I DON'T F*CKING CARE ;)
					 */ 
				?>
				<div class="caption span-16">
				<p><?php echo $caption; ?></p>
				</div>
			</div>
			
			<?php
		}
	?>
	<p>
		<?php
			$author = get_the_author();
			$date = get_the_date('d. F Y');
		?>
		<div class="post-info">
			<span><strong><?php echo $author; ?></strong><br />
				<?php echo $date; ?></span>
			<div id="social-sharer">
				<?php
					$isFrontpage = false;
					include(TEMPLATEPATH . '/inc/share.php');
				?>
			</div>
		</div>
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