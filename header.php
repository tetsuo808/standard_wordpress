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
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="chrome=1" />
	
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="all" />
	<meta name="author" content="COMPANY Ltd." />
	
	<link rel="profile" href="http://purl.org/uF/hCard/1.0/" />
	<link rel="profile" href="http://purl.org/uF/rel-tag/1.0/" />
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114" />
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72" />
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed" />

	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" type="text/css" media="print" />
	
	<!--[if IE 7]>
		<link href="css/style_ie7.css" rel="stylesheet" />
	<![endif]-->
	<!--[if IE 8]>
		<link href="css/style_ie8.css" rel="stylesheet" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core.js"></script>
</head>
