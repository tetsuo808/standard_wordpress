<?php
/**
 * The Template for displaying the theme sidebar
 */
?>

		<div id="supplementaryContent"> 
			<div class="side-content">
				<div class="panel">
					<h2>Our newsletter</h2>
				</div>
				
				<div class="panel">
					<h3>What we've done</h3>
					<div class="snapCase">
						<?php if ( is_active_sidebar( 'latest_case_1' ) ) : ?>
							<?php dynamic_sidebar( 'latest_case_1' ); ?>
						<?php endif; ?>
					</div>
				</div>
				
				<div class="panel">
					<h3>What they say about us </h3>
					<div class="snapTestimonial">
						<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
							<?php dynamic_sidebar( 'home_right_1' ); ?>
						<?php endif; ?>
					</div>
				</div>
				
				<div class="panel">
					<h3>What we are talking about</h3>
					<div class="snapBlog">
						<?php if ( is_active_sidebar( 'latest_posts_1' ) ) : ?>
							<?php dynamic_sidebar( 'latest_posts_1' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>