<?php
/**
 * The default template for displaying content.
 */
?>

<!-- <?php the_ID(); ?>
<?php post_class(); ?> -->

<div class="blog-post">

	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>

	<?php the_title( sprintf( '<h3><a href="%s" class="link">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

	<?php if ( has_tag() ) : ?>
		<p class="tags"><?php the_time('j F Y') ?> | <?php the_tags(); ?></p>
	<?php endif; ?>

	<?php
		if(!$post->post_excerpt) {
			the_content();
		}
		else {
			the_excerpt();
		}
	?>

	<p><a href="<?php the_permalink(); ?>">Read more...</a></p>

	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'migration' ),
			'after'  => '</div>',
		) );
	?>
</div>
