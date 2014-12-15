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
	
	<div id="wrapperWrap">
		<div id="wrapper" class="clearfix">
			<a href="#globalNav" class="accessLink" accesskey="S">skip to navigation</a>
	
			<div id="mainContent"> 
	
				<div class="contentBlock">
					<div class="contentManaged" <?php post_class(); ?>>
						<h1 class="styledHeading"><?php echo get_the_title($post->post_parent);?></h1>
						
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
				</div>
			</div>