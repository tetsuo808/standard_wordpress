<?php
/**
 * The Template for displaying the theme sidebar
 */
?>

		<div id="supplementaryContent"> 
			<span class="topSide"></span>
			<div class="sideContent">
				<div class="panel">
					<h2>Our newsletter</h2>
					<form id="frm_subscribe2" class="styledForm" action="/subscribe" method="post">
						<fieldset>
							<label for="email2">Email</label>
							<input tabindex="994" type="text" name="email2" class="styledInput" id="email2" value="insert your email" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" />
							<input tabindex="-1" type="hidden" name="subscribe_ok" value="true" />
							<label for="button-subscribeNow2">Subscribe Now</label>
							<input id="button-subscribeNow2" class="styledSubmit button" tabindex="995" type="submit" title="Subscribe now" value="Subscribe now" name="button-subscribeNow2" />
						</fieldset>
					</form>
				</div>
		 
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
						<a href="/our-clients/testimonials" title="" class="addArrowRight">Read all testimonials</a>
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
			<span class="bottomSide"></span>
		</div>
		
	</div>
</div>