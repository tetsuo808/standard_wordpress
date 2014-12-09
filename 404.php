<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

<body id="fourohfour" <?php body_class(); ?>>

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
	
			<div id="mainContent" <?php post_class(); ?>>
				<?php the_post_thumbnail(); ?>
				<!--<h1><?php the_title(); ?></h1>-->
				<h1><?php _e( 'Whoops, this doesn\'t look right.', 'migration' ); ?></h1>
				
				<?php the_breadcrumb(); ?>
			
				<?php the_content(); ?>
				<div>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'migration' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>

<?php get_sidebar('minimal'); ?>
<?php get_footer(); ?>