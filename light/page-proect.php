<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package light
 */

get_header();
?>
<?php
    echo get_field ('proect_title');
?>
	<main id="primary" class="site-main">
		<?php
            echo get_field ('proect_title');
        ?>
        <?php get_template_directory_uri() ?>
	</main><!-- #main -->

<?php
get_sidebar();