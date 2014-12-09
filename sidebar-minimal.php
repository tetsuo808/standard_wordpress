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
				
			</div>
			<span class="bottomSide"></span>
		</div>
		
	</div>
</div>