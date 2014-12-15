<?php
/**
 * The default template for displaying content.
 */
?>

<!-- <?php the_ID(); ?> 
<?php post_class(); ?> -->

<li class="clearfix">
	<?php the_title( sprintf( '<h3><a href="%s" class="link">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	<?php if ( 'post' == get_post_type() ) : ?>
		<p class="date"><?php the_time('m/j/y g:i A') ?></p>
	<?php endif; ?>
	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'basik' ), 
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
	?>

	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'basik' ),
			'after'  => '</div>',
		) );
	?>
</li>