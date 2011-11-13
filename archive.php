<?php get_header(); ?>
<div id="content" class="span-16">
	<?php if (have_posts()) : ?>
	<?php $post = $posts[0]; ?>

	<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>Kategorie &laquo;<?php single_cat_title(); ?>&raquo;</h2>
		<hr />
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>Tag &laquo;<?php single_tag_title(); ?>&raquo;</h2>
		<hr />
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Archiv &laquo;<?php the_time('d. F Y'); ?>&raquo;</h2>
		<hr />
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archiv &laquo;<?php the_time('F Y'); ?>&raquo;</h2>
		<hr />
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archiv &laquo;<?php the_time('Y'); ?>&raquo;</h2>
		<hr />
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Archiv &laquo;Autor&raquo;</h2>
		<hr />
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Archiv &laquo;Blog&raquo;</h2>
		<hr />
	<?php } ?>

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
			
</div>