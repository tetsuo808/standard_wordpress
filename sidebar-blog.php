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
					<?php if ( is_active_sidebar( 'blog_categories_1' ) ) : ?>
						<?php dynamic_sidebar( 'blog_categories_1' ); ?>
					<?php endif; ?>
					<ul>
						<li id="RSSLink"><a href="/feed/" title="The RSS feed for our Blog"><span>Our Blog's RSS feed</span></a></li>
					</ul>
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