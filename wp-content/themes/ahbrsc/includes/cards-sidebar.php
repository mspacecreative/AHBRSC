<div id="instafeed">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>

<?php 

$loop = new WP_Query( array( 'post_type' => 'cards', 'order' => 'ASC', 'category_name' => 'sidebar' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <div class="grid-item">
        	<div class="grid-inner">
        			<?php if ( has_post_thumbnail() ) { ?>
        			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        			<?php } ?>
        			<div class="card-content">
        				<h3><?php the_title(); ?></h3>
        				<?php if( get_field('subtitle') ): ?>
        				<h4 class="card_subtitle"><?php the_field('subtitle') ?></h4>
        				<?php endif; ?>
        				<?php the_excerpt(); ?><a class="read-more-link" href="<?php the_permalink(); ?>"><?php _e(' More...'); ?></a>
        			</div>
        	</div>
        </div>
        
  			<?php endwhile; 
    endif; 
wp_reset_postdata(); ?>
</div>