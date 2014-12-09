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
			
				<?php the_content(); ?>

				<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					
					<div class="pagination">
						<?php
							global $wp_query;
							$big = 999999999; // need an unlikely integer
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
							) );
						?>
					</div>
					
					<ul id="blogListing" class="elementListing">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>
					<?php endwhile; ?>
					</ul>
					
					<div class="pagination">
						<?php
							global $wp_query;
							$big = 999999999; // need an unlikely integer
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
							) );
						?>
					</div>
					
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</div>

		
<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>