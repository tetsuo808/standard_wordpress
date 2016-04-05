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

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/theme-mobile.css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' />

	<!--[if IE 8]>
		<link href="css/style_ie8.css" rel="stylesheet" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jssor.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jssor.slider.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/funcs.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/funcs-slider.js"></script>
</head>

<body <?php body_class(); ?>>

	<div class="container">
		<div class="header clearfix">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>

			<div class="contact-info">
				<strong>Contact:</strong> 0116 288 4506
			</div>

			<?php wp_nav_menu( array( 'depth' => '1', 'container_class' => 'menu', 'menu_id' => 'nav', 'menu_class' => '' ) ); ?>
			<a href="#" id="pull">Show Menu</a>
		</div>
	</div>
