<?php
/**
 * The template used for displaying page content in page.php
 */
?>
<body id="pageHome" <?php body_class(); ?>>

	<div id="bannerConteiner">
		<div id="bannerCentre">
			<div id="mainBanner">
				<div id="banner">
					<div id="slider-wrapper">
						<div id="slider" class="nivoSlider">
							<img src="<?php echo get_template_directory_uri(); ?>/images/main-banner01.jpg" alt="Only Independent Company - to specialise in building guarantees" />
							<img src="<?php echo get_template_directory_uri(); ?>/images/main-banner02.jpg" alt="Community centres across the country" />
							<img src="<?php echo get_template_directory_uri(); ?>/images/main-banner03.jpg" alt="Schools and colleges across the country" />
							<img src="<?php echo get_template_directory_uri(); ?>/images/main-banner04.jpg" alt="Houses and apartments across the country" />
							<img src="<?php echo get_template_directory_uri(); ?>/images/main-banner05.jpg" alt="Commercial Premisies across the country" />
						</div>
						<div id="htmlcaption" class="nivo-html-caption">
							<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="headerWrap">
		<div id="header">
			<h4 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h4>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => '1', 'container_id' => 'globalNav', 'menu_class' => 'clearfix' ) ); ?>
			<h5 id="topContact">T: 0116 257 0111<br/>E: info@buildingandland.co.uk</h5>
		</div>
	</div>
	
	<div id="wrapperWrap">
		<div id="wrapper" class="clearfix">
			<a href="#globalNav" class="accessLink" accesskey="S">skip to navigation</a>
	
			<div id="mainContent"> 
	
				<div class="contentBlock">
					<div class="contentManaged" <?php post_class(); ?>>
						<?php the_post_thumbnail(); ?>
						<!--<h1><?php the_title(); ?></h1>-->
						<h1 id="welcome">Welcome to Building and Land Guarantees<span>the Only independent company to specialise in building guarantees</span></h1>
						
						<?php the_content(); ?>
					</div>
					<div class="clearer"></div>
				</div>
			</div>