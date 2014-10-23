<?php
/**
 * Content Home Page
 *
 * Loop content in page home template (page-home.php)
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	
	<?php the_content(); ?>

</article>