<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

<body <?php body_class(); ?>>

	<div id="header-wrap">
		<div id="header">
			<h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => '1', 'container_id' => 'globalNav', 'menu_class' => 'clearfix' ) ); ?>
			<p>T: 0000 000 000<br />E: info@company.co.uk</p>
		</div>
	</div>
	
	<div id="wrapper-wrap">
		<div id="wrapper" class="clearfix">
			<a href="#globalNav" class="accessLink" accesskey="S">skip to navigation</a>
	
			<div id="mainContent" <?php post_class(); ?>>
				<?php the_post_thumbnail(); ?>
				<!--<h1><?php the_title(); ?></h1>-->
				<h2><?php _e( 'Whoops, this doesn\'t look right.', 'migration' ); ?></h2>
				
				<?php the_breadcrumb(); ?>
			
				<?php the_content(); ?>
				<div>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'migration' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>

<?php get_sidebar('minimal'); ?>
<?php get_footer(); ?>