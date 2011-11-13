<?php

$category = get_category_by_slug('front');
$catID = $category->cat_ID;

$args = array(
	'type' => 'post',
	'child_of' => 0,
	'orderby' => 'name',
	'order' => 'ASC',
	'hide_empty' => 1,
	'hierarchical' => 1,
	'exclude' => $catID,
	'parent' => 0
);

$mainCategories = get_categories($args);

$options = get_option( 'geekhole_theme_options' );
?>

<div class="span-24 separator-label"><span>Themen</span></div>
	<div class="span-24 separator"></div>
		
	<div id="topic-navigator" class="span-24">
		<div id="topic-list" class="span-12">
			<?php
				$counter = 1;
				foreach ($mainCategories as $main)
				{
					$args['parent'] = $main->term_id;
					$subCategories = get_categories($args);
					
					$class = 'span-6';
					$link = get_category_link($main->term_id);
					if ($counter % 2 == 0)
					{
						$class = $class . ' last';
					}
					echo "<div class=\"{$class}\"><ul>";
					echo "<li class=\"main-category\"><a href=\"{$link}\">{$main->name}</a></li>";
					foreach ($subCategories as $sub)
					{
						$link = get_category_link($sub->term_id);
						echo "<li class=\"sub-category\"><a href=\"{$link}\">{$sub->name}</a></li>";
					}
					echo "</ul></div>";
					$counter++;
				} 
			?>
		</div>
		<div id="tag-cloud" class="span-12 last">
			<?php
				$tags = get_tags();
				
				$max;
				
				foreach ($tags as $tag)
				{
					$max = $max + $tag->count;
				}
				
				foreach ($tags as $tag)
				{
					$link = get_tag_link($tag->term_id);
					$rank = round(($tag->count / $max * 100000) / 10);
					
					echo "<a href=\"{$link}\" title=\"{$tag->count} Tags\" style=\"font-size: {$rank}%\";> {$tag->name} </a>";
				}
			?>
		</div>
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