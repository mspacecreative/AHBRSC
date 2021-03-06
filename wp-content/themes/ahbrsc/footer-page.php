		<div class="top-footer">
			<div class="footer-callout">
				<h4><?php the_field('callout_text', 'options'); ?></h4>
				<a href="<?php the_field('callout_link', 'options'); ?>"><?php the_field('callout_label', 'options'); ?></a>
			</div>
		</div>
	
	</div> <!-- #et-main-area -->

</div> <!-- #page-container -->

<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				
				<?php echo get_template_part('includes/footer-logos'); ?>
				
				<div class="credits">
					<?php echo _('&copy; '); echo date('Y '); echo _e('Atlantic Home Building & Renovation Sector Council'); ?>
				</div>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #wrapper -->

	<?php wp_footer(); ?>
</body>
</html>