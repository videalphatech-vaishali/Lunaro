<?php

/**
 * Template Name: Create Demo Account
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */

get_header('new');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<body <?php body_class(); ?>>

    <?php
    set_query_var('lr_title', 'Brief Introduction emphasizing the range of markets available for trading.');
    set_query_var('lr_subtitle', '');
    get_template_part('template-parts/global-widgets/page-heading');


    echo do_shortcode('[contact-form-7 id="7c4ae40" title="Multi-step Form"]');

    get_footer();
    ?>

</body>

</html>