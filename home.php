<?php get_header();

get_template_part('sticky');

$category = get_category_by_slug('front');
$catID = $category->cat_ID;

$args = array(
	'numberposts' => 1,
	'offset' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'exclude' => "cat=-{$catID}"
);

$posts = get_posts($args);
$maxPosts = count($posts);

?>

<div class="span-24 separator-label"><span>Aktuell</span></div>
<div class="span-24 separator"></div>

<?php
foreach ($posts as $post)
{
	setup_postdata($post);
	
	$id = get_the_ID();
	$perma = get_permalink($id);
	?>
<div id="content" class="span-16">
	<div class="span-16 blog-title">
		<p class="topic-label span-16">
			<?php
				$categories = get_the_category();
				$count = 1;
				$length = count($categories);
				
				foreach ($categories as $category)
				{
					echo $category->name;
					if ($count < $length) {
						echo " | ";
					}
					$count++;
				} 
			?>
		</p>
		<h1 class="span-16">
			<a href="<?php echo $perma; ?>">
				<?php
					the_title();
				?>
			</a>
		</h1>
	</div>
			
	<?php 
		if (has_post_thumbnail())
		{
			?>
			
			<div class="image-container span-16">
				<a href="<?php echo $perma; ?>">
					<?php
						the_post_thumbnail();
						$caption = get_post(get_post_thumbnail_id())->post_excerpt;
						$fullURL = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
					?>
				</a>
				<div class="image-zoom" href="<?php echo $fullURL; ?>"></div>
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
					$isFrontpage = true;
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
}

get_template_part('sidebar');
get_template_part('timeline');
get_footer();