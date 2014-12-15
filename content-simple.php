<?php
/**
 * The template used for displaying page content in page.php
 */
?>

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

			<div id="main-content">
				<!--<?php post_class(); ?> <?php the_post_thumbnail(); ?> -->
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>