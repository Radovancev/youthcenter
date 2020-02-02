<?php
/**
 * Template Name: How Page
 *
 * @package WordPress
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        the_title();
        the_content();
    endwhile;
endif;

/**if ( have_rows( 'testiminal_repeater' ) ) : ?>
	<?php while ( have_rows( 'testiminal_repeater' ) ) : the_row(); ?>
		<p><strong><?php the_sub_field( 'text' ); ?></strong></p>
		<?php $image = get_sub_field( 'image' ); ?>
		<?php if ( $image ) { ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php } ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif;*/

get_footer();
