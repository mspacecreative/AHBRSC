<div class="owl-carousel">
	<?php 
	$loop = new WP_Query( array( 'post_type' => 'hero', 'order' => 'ASC' ) );
	    if ( $loop->have_posts() ) :
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
						  <div style="background-image: url(<?php echo $backgroundImg[0] ?>);" class="hero-bg">
						  	<div class="outer-hero-text-container">
						  		<div class="inner-hero-text-container">
						  			<h1><?php the_title(); ?></h1>
						  			<a href="<?php the_field('hero_link'); ?>"><?php the_field('hero_button_label'); ?></a>
						  		</div>
						  	</div>
						  </div>
					<?php endwhile; 
			endif; 
	wp_reset_postdata(); 
	?>
</div>
<div class="hero-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-next.png" /></div>