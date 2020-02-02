<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package youth_center
 */

?>
	</div><!-- #content -->
    <div style="clear: both"></div>
	<footer id="colophon" class="site-footer">
	<!--<img src="<?php echo get_template_directory_uri(); ?>/assets/img/erasmuseu.jpg" width=450px height=100px/>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/narandzasti.jpg" width=250px height=100px/> -->
    <div class="col-lg-6">
        <img  src=" <?= get_field('footer_image','option'); ?>" alt="" width=450px height=100px>
    </div>
    <p>
        <?=get_field('footer_text','option');;?>
    </p>
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
<?php wp_footer(); ?>
<style>
    .site-footer {
        background-color: <?= get_field('footer_color', 'option'); ?>;
    }
</style>
