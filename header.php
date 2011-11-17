<?php 

	$homeURL = get_bloginfo('siteurl');
	$args = array(
		'child_of' => 0,
		'sort_oder' => 'ASC',
		'sort_column' => 'post_title',
		'hierarchical' => 0,
		'parent' => -1,
		'post_type' => 'page',
		'post_status' => 'publish'
	);
	
	$pages = get_pages($args);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
<?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type"
	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />




	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print">
	<!--[if lt IE 8]>
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>css/ie.css" type="text/css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/socialwidget.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/socialwidget.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/searchwidget.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/geekhole.js"></script>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
	  {lang: 'de'}
	</script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body   <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) {return;}
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="page-wrap" class="container">
		<div id="header" class="span-24">
			<div class="span-16">
				<div id="geekhole-logo">
					<a href="<?php echo $homeURL; ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="400" height="150" alt="Geekhole - The Blog." title="Geekhole - The Blog." />
					</a>					
				</div>
			</div>
			<div id="navigation-container" class="span-8 last">
				<ul>
					<?php
						$blog = true;
						
						foreach ($pages as $page)
						{
							if (is_page($page->post_title) == true)
							{
								$blog = false;
							}
						}
												
						if ($blog == true)
						{
							echo "<li class=\"active\"><a href=\"{$homeURL}\">Blog</a></li>";
						}
						else
						{
							echo "<li><a href=\"{$homeURL}\">Blog</a></li>";
						}
						
						foreach ($pages as $page)
						{
							$url = get_page_link($page->ID);
							$name = $page->post_title;
							if (is_page($page->post_title) == true)
							{	
								echo "<li class=\"active\"><a href=\"{$url}\">{$name}</a></li>";
							}
							else
							{
								echo "<li><a href=\"{$url}\">{$name}</a></li>";
							}
						}
					?>
				</ul>
			</div>
		</div>