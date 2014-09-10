<?php

/*
 * Template Name: Sidebar Left Template
 */

get_header(); ?>

<div class="row">

	<?php get_sidebar(); ?>

    <!-- Main Content -->
    <div class="large-9 medium-8 columns" role="content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div><!-- columns content -->
    <!-- End Main Content -->
   
</div><!-- row -->

<?php get_footer(); ?>