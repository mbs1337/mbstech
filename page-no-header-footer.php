<?php
/**
 * Template Name: No Header/Footer
 *
 * Template for pages that should display only content without header and footer
 *
 * @package mbsTECH
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
while (have_posts()) :
    the_post();
    the_content();
endwhile;
?>
<?php wp_footer(); ?>
</body>
</html>
