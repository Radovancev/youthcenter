<?php
/**
 * Template Name: Curba Page
 *
 * @package WordPress
 */

get_header(); ?>
<div class="heading">
    <?php  $image = get_field('curba_image'); ?>
  <img src="<?php echo esc_url($image['url']); ?>" width="250px" />
</div>
<?php
get_template_part('template-parts/content-curba');
if (have_posts()) :
    while (have_posts()) : the_post();
        the_title();
        the_content();
    endwhile;
endif;
get_footer();