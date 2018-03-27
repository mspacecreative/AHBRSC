<?php
if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
	<div id="sidebar">
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</div> <!-- end #sidebar -->
<?php
endif;
