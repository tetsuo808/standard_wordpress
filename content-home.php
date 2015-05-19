<?php
/**
 * The template used for displaying page content in page.php
 */
?>

	<div class="container clearfix">
		<div class="copy">
			<div <?php post_class(); ?>>
				<!--<?php the_post_thumbnail(); ?>-->
				
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>