<?php

get_header();
?>

<div id="main-content">

<div class="page-heading-container">
	<div class="container">
		<h1 class="entry-title main_title"><?php _e('News & Events'); ?></h1>
	</div>
</div>

	<div class="container" style="max-width: 1080px;">
		<div id="content-area" class="clearfix">
			<div id="instafeed">
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
					<?php if ( have_posts() ) { ?>
						
						<?php while ( have_posts() ) { the_post(); ?>
						
							<div class="grid-item">
								<div class="grid-inner">
										<?php if ( has_post_thumbnail() ) { ?>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
										<?php } ?>
										<div class="card-content">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<?php et_divi_post_meta(); ?>
											<?php the_excerpt(); ?><a class="read-more-link" href="<?php the_permalink(); ?>"><?php _e(' More...'); ?></a>
										</div>
								</div>
							</div>
						
						<?php } // endwhile ?>
									
					<?php } // endif ?>
				</div>
		<?php get_template_part( 'includes/navigation', 'index' ); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->

</div> <!-- #main-content -->

<?php get_footer('page');