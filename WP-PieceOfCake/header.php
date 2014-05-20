<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(''); ?></title>
<meta name="description" content="">

<?php // mobile meta (hooray!) ?>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/main.css"/>

<!--JQUERY CODES GO HERE -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!--LOAD MODERNIZR FOR IE HTML5/CSS3 RENDERING -->
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/libraryjs/modernizr.js"></script><![endif]-->

<script src="<?php echo get_template_directory_uri(); ?>/library/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/library/js/main.js"></script>


<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#333">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>



</head>
<body <?php body_class(); ?>>
<a id="skip" href="#main">Skip to Main Content</a>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div class="container">

<!-- HEADER -->
<header role="banner" class="box">
    <h1><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
    <?php // if you'd like to use the site description you can un-comment it below ?>
	<?php // bloginfo('description'); ?>
</header>
<!-- MAIN FLEX NAV -->
<nav class="applePie" role="navigation" aria-labelledby="nav">
<div class="menubtn">Menu Button</div>
<nav class="applePie" role="navigation" aria-labelledby="nav">
<div class="menubtn">Menu Button</div>

<?php if ( has_nav_menu( 'primary-menu', 'mytheme' ) ) { ?>
	<?php wp_nav_menu( array( 'container' => false, 'menu_class' => 'menu', 'theme_location' => 'primary-menu', 'fallback_cb' => 'display_home' ) ); ?>

	<?php } else { ?>

    <ul id="nav">

	<li><a href="<?php echo home_url(); ?>/">Home</a></li>
	<?php wp_list_pages('title_li=' ); ?>

    </ul><!-- end .menu -->

	<?php	} ?>
</nav>

</nav>



