<?php
/**
 * Template Name: Partners Page
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
get_footer();