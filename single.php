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

	<div class="container clearfix">
		<div class="copy">
			<div <?php post_class(); ?>>
				<!--<?php the_post_thumbnail(); ?>-->
				
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				
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
				
				<div id="authorInfo">
					<div class="boxedImage">
						<?php echo get_avatar( get_the_author_email(), '110', '/images/no_images.jpg', get_the_author() ); ?>
					</div>
					<div id="authorDetails">
						<div class="nameAuthor">
							<p>Published by: <br/><span><?php the_author() ?></span></p>
						</div>
					</div>
				</div>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					endwhile;
				?>
				
			</div>
		</div>
	</div>
			
<!--<?php get_sidebar('blog'); ?>-->
<?php get_footer(); ?>