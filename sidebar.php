<?php
/**
 * The Template for displaying the theme sidebar
 */
?>

		<div id="supplementaryContent"> 
			
			<div class="side-content">
				<div class="panel">
					<h3>In this section</h3>
					<?php
					if($post->post_parent){
						$parent_title = get_the_title($post->post_parent);
						$children = wp_list_pages("depth=1&title_li=&child_of=".$post->post_parent."&echo=0");
					}
					else {
						$parent_title = get_the_title($post->ID);
						$children = wp_list_pages("depth=1&title_li=&child_of=".$post->ID."&echo=0");
					}
					if ($children) { ?>
						<ul>
							<li><a href="<?php echo get_the_permalink($id); ?>"><?php echo $parent_title; ?></a></li>
							<?php echo $children; ?>
						</ul>
					<?php } ?>
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