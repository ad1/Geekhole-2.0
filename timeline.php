<?php
$args = array(
	'numberposts' => 5,
	'offset' => 1,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'exclude' => 'cat=-103'
);

$posts = get_posts($args); 
?>

<div class="span-24 separator-label"><span>Timeline</span></div>
<div class="span-24 separator"></div>

<div id="timeline" class="span-24">
<?php
foreach ($posts as $post)
{
	setup_postdata($post);
	$format = 'd. M';
	$date = get_the_date($format);
	$title = get_the_title();
	if (strlen($title) > 80) {
		$title = substr($title, 0, 80);
		$title = $title . "...";
	}
	$author = get_the_author();
	
	$id = get_the_ID();
	$perma = get_permalink($id);
	
	$tag = "<a href=\"{$perma}\">";
?>
	<div class="span-24 timeline-item" id="timeline-item">
		<div class="span-2">
			<div class="timeline-triangle"></div>
		</div>
		<div class="span-2">
			<p class="timeline-date">
				<?php
					echo $date; 
				?>
			</p>
		</div>
		<div class="span-14">
			<?php
				echo $tag;
				echo $title;			 
			?>
			</a>
		</div>
		<div class="span-6 last">
			<p class="timeline-author">
				<?php
					echo $author; 
				?>
			</p>
		</div>
		
<?php 
} 
?>
</div>