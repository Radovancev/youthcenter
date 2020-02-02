<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package youth_center
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
        .menu {
            background-color: <?= get_field('menu_color', 'option'); ?>;
        }
        .menu-item li{
            background: <?= get_field('menu-item', 'option'); ?>;
        }
        .menu-item a:hover {
            color: <?= get_field('menu_item_text_hover', 'option'); ?>;
        }
        .menu li:hover {
            background: <?= get_field('menu_item_hover', 'option'); ?>!important;
        }
        .menu li > a:after { content: '   ▾'; }
        .menu li > a:only-child:after { content: ''; }
    </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <section id="intro" class="intro">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" width="100%"/>
        <div class="slogan">
          <a href="<?php echo home_url(); ?>"><img src=" <?= get_field('logo', 'option'); ?>" alt=""></a>
        </div>
      </section>
	<header id="masthead" class="site-header">
		<nav>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1'
            ) );
            ?>
        </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
