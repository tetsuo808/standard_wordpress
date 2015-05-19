<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

	<div class="container clearfix">
		<div class="copy">
			<div <?php post_class(); ?>>
				<!--<?php the_post_thumbnail(); ?>-->
				
				<h1><?php _e( 'Whoops, this doesn\'t look right.', 'migration' ); ?></h1>
				<?php the_content(); ?>
				
				<div>
					<p><?php _e( 'The page or file you were trying to access can&rsquo;t be found, or may no longer exist. Sorry about that.', 'migration' ); ?></p>
					<!--<?php get_search_form(); ?>-->
				</div>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>