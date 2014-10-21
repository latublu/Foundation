<?php
/**
 * Single
 *
 * Loop container for single post content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 5.0
 */

get_header(); ?>

<div class="row">

    <!-- Main Content -->
    <div class="large-9 medium-8 columns" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

    </div><!-- columns main -->
    <!-- End Main Content -->

	<?php get_sidebar(); ?>
    
</div><!-- row -->

<?php get_footer(); ?>