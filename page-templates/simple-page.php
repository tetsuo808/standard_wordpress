<?php
/**
 * Template Name: Simple Page Template
 *
 * Description: This template has no sub-sections
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'simple' ); ?>
	<?php endwhile; ?>

<?php get_sidebar('home'); ?>
<?php get_footer(); ?>