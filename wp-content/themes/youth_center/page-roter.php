<?php
/**
 * Template Name: Roter Page
 *
 * @package WordPress
 */

get_header(); ?>
<div class="heading">
    <?php  $image = get_field('roter_banner'); ?>
    <img src="<?php echo esc_url($image['url']); ?>" width="250px" />
    <?php  $image2 = get_field('narandzasti_banner'); ?>
    <img src="<?php echo esc_url($image2['url']); ?>" width="250px" height="68px" />
</div>
<?php
get_template_part('template-parts/content-roter');
if (have_posts()) :
    while (have_posts()) : the_post();
        the_title();
        the_content();
    endwhile;
endif;
get_footer();