<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<meta http-equiv="content-language" content="en-gb" />
	<meta name="robots" content="noodp" />
	<meta name="keywords" content="latent defects, premier guarantee, collateral warranty, collateral warranties, zurich building, building warranty, building guarantee, workmanship guarantee, inherent defect, newbuild warranty, commercial property warranty, construction defects " />
	<meta name="description" content="Building Warranties and Latent Defect Insurance from Building and Land Guarantees Ltd" />
	<meta name="language" content="english" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="profile" href="http://purl.org/uF/hCard/1.0/" />
	<link rel="profile" href="http://purl.org/uF/rel-tag/1.0/" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-face.css" type="text/css" media="screen" /> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" type="text/css" media="print" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox-1.3.3.css" type="text/css" media="screen" /> 
	
	<!--[if IE 6]>
		<link rel="stylesheet" href="/css/IE6.css" type="text/css" media="screen" title="Default Style" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" href="/css/IE7.css" type="text/css" media="screen" title="Default Style" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" href="/css/IE8.css" type="text/css" media="screen" title="Default Style" />
	<![endif]-->
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.equalheights.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/core.js"></script>
	<!--/{StaticFragments:showIf('n' => 'use_jquery_fancybox'):js-addons-fancybox}-->
	<!--<script type="text/javascript">
		window.onload = getNewWindowLinks;
	</script>-->
</head>
