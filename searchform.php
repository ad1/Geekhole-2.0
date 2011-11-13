<?php
	$term = $_GET['s'];

	$term = htmlentities(trim($term));
?>

<div class="span-8">
	<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
	    <div>
        	<input type="text" id="s" name="s" value="<?php echo $term; ?>" size="30" />
        	<input type="submit" value="Search" id="searchsubmit" />
    	</div>
	</form>
</div>