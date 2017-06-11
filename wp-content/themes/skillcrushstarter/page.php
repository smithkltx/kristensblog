<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h3 class="entry-title"><?php the_title(); ?></h3>
			<article class="post-entry">
				<?php echo get_the_date(); ?>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>

</section>

<?php get_footer(); ?>
