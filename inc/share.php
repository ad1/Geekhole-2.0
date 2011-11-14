<?php
$output = array();
if ($isFrontpage === true)
{
	/**
	 * Because this template get's included, $isFrontpage will be either TRUE or FALSE. 
	 * If $isFrontpage is TRUE, we'll add URL which should be liked and is defined by $perma
	 */
	$output['twitter'] = "<div class=\"social-item twitter\"><a href=\"https://twitter.com/share\" 
							 class=\"twitter-share-button\" 
							 data-count=\"horizontal\" 
							 data-via=\"geekhole_ch\"
							 data-url=\"{$perma}\" 
							 data-lang=\"de\">
							Tweet
						  </a></div>";
	
	$output['google'] = "<div class=\"social-item google\"><g:plusone size=\"medium\" href=\"{$perma}\"></g:plusone></div>";
	
	$output['facebook'] = "<div class=\"social-item facebook\"><div class=\"fb-like\" data-send=\"false\"
											data-layout=\"button_count\" data-width=\"450\" 
											data-show-faces=\"false\" data-href=\"{$perma}\"></div></div>";
}
else
{	
	$output['twitter'] = "<div class=\"social-item twitter\"><a href=\"https://twitter.com/share\"
								 class=\"twitter-share-button\" 
								 data-count=\"horizontal\" 
								 data-via=\"geekhole_ch\"
								 data-lang=\"de\">
								Tweet
							  </a></div>";
	
	$output['google'] = "<div class=\"social-item google\"><g:plusone size=\"medium\"></g:plusone></div>";
	
	$output['facebook'] = "<div class=\"social-item facebook\"><div class=\"fb-like\" data-send=\"false\"
											data-layout=\"button_count\" data-width=\"450\" 
											data-show-faces=\"false\"></div></div>";
	
}

// Now looping through social media stuff

	foreach($output as $item)
	{
		echo $item;
	}
?>