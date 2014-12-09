<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page.
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'home' ); ?>
	<?php endwhile; ?>

<?php get_sidebar('home'); ?>
<?php get_footer(); ?>