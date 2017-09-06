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



				<?php if(is_page(117)): ?>
					<?php
						// get repeater field data
						$repeater = get_field('application_details');
						// vars
						$order = array();
						// populate order
						foreach( $repeater as $i => $row ) {
							$order[ $i ] = $row['id'];
						}
						// multisort
						array_multisort( $order, SORT_DESC, $repeater );

						// loop through repeater
						if( $repeater ): ?>
							<div class="line" role="separator"></div>
							<table cellpadding="0" cellspacing="0" class="applications">
								<caption>&mdash; 2016 Applications (last updated: <?php the_modified_time('j F Y'); ?>, <?php the_modified_time('g:i a'); ?>)</caption>
								<tr>
									<th>Project Title</th>
									<th>Project Leader(s)</th>
									<th>College</th>
									<th>Status</th>
								</tr>
								<?php foreach( $repeater as $i => $row ): ?>
								<tr>
									<td class="application-title"><span>Project Title: </span><?php echo $row['application_title']; ?></td>
									<td><span>Project Leader(s): </span><?php echo $row['application_leader']; ?></td>
									<td><span>College: </span><?php echo $row['application_college']; ?></td>
									<td class="application-status"><span>Status: </span><?php echo $row['application_status']; ?></td>
								</tr>
								<?php endforeach; ?>
							</table>
						<?php endif; ?>

					<?php else: ?>
					<!--nothing -->
				<?php endif; ?>



			</section>

		</div>
	</div>
