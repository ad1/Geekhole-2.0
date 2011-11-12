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
		<ul>
			<?php
				foreach ($mainCategories as $main)
				{
					$args['parent'] = $main->term_id;
					$subCategories = get_categories($args);
					echo "<li><strong>{$main->name}</strong></li>";
					foreach ($subCategories as $sub)
					{
						echo "<li><em>{$sub->name}</em></li>";
					}
				} 
			?>
		</ul>
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