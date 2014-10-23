<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 5.0
 */
?>

<!-- End Page -->

<!-- Footer -->

<footer class="row">
	
	<div class="medium-12 columns">
	
		<div id="footer-content" class="row">
		
			<div class="small-12 medium-9 columns">
		
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'menu footer', 'container' => 'div', 'container_class' => 'container footer clearfix', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
				
			</div>
	
			<div class="small-12 medium-3 columns copyright text-right">
				<p>
					Copyright &copy; <?php echo date('Y'); ?> <br />
					All rights reserved.
				</p>
			</div>
		
		</div>
	</div><!-- footer-content -->

</footer>

<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>