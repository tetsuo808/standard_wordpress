<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
	<title><?php wp_title('&ndash;',true,'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta charset="utf-8" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="profile" href="http://purl.org/uF/hCard/1.0/" />
	<link rel="profile" href="http://purl.org/uF/rel-tag/1.0/" />

	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" rel="shortcut icon" />

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/theme-mobile.css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/dist/production.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.smoothscroll.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superfish.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/funcs.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/funcs.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/funcs-slider.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body id="generic" <?php body_class(); ?>>

	<div class="skip"><a href="<?php get_the_permalink(); ?>#skip" accesskey="s">Skip to content &#8595;</a></div>

	<header id="header">
		<div class="container cont-header clearfix" id="top">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
			<h1>Title of the Website</h1>

			<div class="quick-links">
				<div class="social">
					<a href="#" rel="external nofollow" target="_blank" class="sc-tw"><span>Follow us on Twitter</span></a>
					<a href="#" rel="external nofollow" target="_blank" class="sc-fb"><span>Like us on Facebook</span></a>
				</div>
				<p>Tel: <a href="tel:01110220333" class="tel">0111 022 0333</a><br />
				Email: <a href="mailto:enquiries@company.co.uk">enquiries@company.co.uk</a></p>
			</div>
		</div>
	</header>

	<nav id="nav">
		<div class="container cont-nav clearfix">
			<button id="pull">Show Menu</button>
			<?php
				wp_nav_menu(array(
					'depth' => '2',
					'menu' => 'Main Menu',
					'menu_class' => 'clearfix',
					'menu_id' => 'sf-menu',
					'container' => '',
					'walker' => new My_Walker
				));
			?>
		</div>
	</nav>
