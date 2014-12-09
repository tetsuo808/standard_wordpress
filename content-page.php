<?php
/**
 * The template used for displaying page content in page.php
 */
?>

<body id="pageAboutUs" <?php body_class(); ?>>

	<div id="bannerConteiner">
		<div id="bannerCentre">
			<div id="mainBanner">
				<div id="banner">
					<img src="<?php echo get_template_directory_uri(); ?>/images/banner2.jpg" alt="sample banner" width="960" height="168" />
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
						
						<h1 class="styledHeading"><?php echo get_the_title($post->post_parent);?> </h1>
						<?php the_breadcrumb(); ?>
						
						<div id="imageWrapper">
							<?php the_post_thumbnail(); ?>
						</div>
						
						<?php if( is_child('case-studies') ): ?>
							<h2><?php the_title(); ?></h2>
							<?php else: ?>
							<!--nothing -->
						<?php endif; ?>
						<?php the_content(); ?>
						
					</div>
					<div class="clearer"></div>
				</div>
			</div>