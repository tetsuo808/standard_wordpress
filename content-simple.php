<?php
/**
 * The template used for displaying page content in page.php
 */
?>

	<div class="container clearfix" id="top">
		<div class="main-content_holder">

			<section class="main-content" id="skip" role="main">
				<!--<?php post_class(); ?>-->

				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>

				<header>
					<h1><?php the_title(); ?></h1>
				</header>

				<?php the_content(); ?>

				<?php if( have_rows('listing_blocks') ): ?>
					<div class="line"></div>
					<?php while( have_rows('listing_blocks') ): the_row();
						$image = get_sub_field('listing_image');
						$title = get_sub_field('listing_title');
						$link = get_sub_field('listing_link');
					?>

					<div class="list-box">
						<?php if( $link ): ?>
							<a href="<?php echo $link; ?>">
						<?php endif; ?>

							<h4><?php echo $title; ?></h4>
							<img src="<?php echo $image ?>" alt="" />

						<?php if( $link ): ?>
							</a>
						<?php endif; ?>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</section>
			
		</div>
	</div>
