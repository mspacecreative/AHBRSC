<?php
/* Template Name: Page with Sidebar */

get_header();
?>

<div id="main-content">

<div class="page-heading-container">
	<div class="container">
		<h1 class="entry-title main_title"><?php the_title(); ?></h1>
	</div>
</div>

	<div class="container">
		<div id="content-area" class="clearfix">
		<?php if ( have_posts() ) { ?>
			
			<div id="left-area">

				<?php while ( have_posts() ) { the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
						<div class="entry-content">
						<?php the_content(); ?>
						</div> <!-- .entry-content -->
	
					</article> <!-- .et_pb_post -->

				<?php } // endwhile ?>

			</div> <!-- #left-area -->
			
		<?php } // endif ?>

		<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->

</div> <!-- #main-content -->

<?php get_footer('page');
