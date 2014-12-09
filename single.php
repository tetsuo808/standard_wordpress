<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<body id="pageBlog" <?php body_class(); ?>>

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
				<h1 class="styledHeading" id="titleBlog">The Building and Land Guarantees Ltd Blog</h1>
				
				<?php the_breadcrumb(); ?>

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
	
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', 'post' );
				?>		
						<div class="divisionLine"><hr /></div>
			<div id="authorInfo">
				<div class="boxedImage">
					<span class="imageTopLeft"></span>
					<?php echo get_avatar( get_the_author_email(), '110', '/images/no_images.jpg', get_the_author() ); ?>
					<span class="imageBottomRight"></span>
					<span class="imageBottomLeft">&nbsp;</span>
				</div>
				<div id="authorDetails">
					<div class="nameAuthor">
						<p>Published by: <br/><span><?php the_author() ?></span></p>
					</div>
					<div class="introAuthor"></div>
				</div>
			</div>
			<div class="divisionLine"><hr /></div>
				
				<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					endwhile;
				?>
			</div>
			
			

		
<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>