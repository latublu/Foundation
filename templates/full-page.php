<?php

/*
 * Template Name: Full Page Template
 */

get_header(); ?>

<!-- Main Content -->

<div class="row">

    <div class="large-12 medium-12 columns" role="content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div><!-- columns content -->
    
</div><!-- row -->

<!-- End Main Content -->

<?php get_footer(); ?>