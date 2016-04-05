<?php
/**
 * The template for displaying the footer.
 */
?>

	<div id="top-link"><a href="<?php get_the_permalink(); ?>#header">Back to top</a></div>

	<footer id="footer">
		<div class="container cont-footer clearfix">
			<p>&#169; <?php echo date('Y'); ?> COMPANY | <a href="<?php echo get_template_directory_uri(); ?>/contact">Contact</a></p>
			<?php
				wp_nav_menu(array(
					'depth' => '1',
					'menu' => 'Footer Menu'
				));
			?>
			<a href="http://www.satur9.co.uk/" rel="external nofollow" target="_blank" title="Web design &amp; development by Satur9" id="credit"><span>web design &amp; development by Satur9</span></a>
		</div>
	</footer>

	<script src="<?php echo get_template_directory_uri(); ?>/js/tracker.js"></script>
</body>
</html>
