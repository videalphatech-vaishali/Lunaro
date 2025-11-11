<?php

/**
 * Template Name: CME Options Page
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
 */
load_country_header();
?>

<!DOCTYPE html>
<html>

<body>
    <?php 
    get_template_part('template-parts/cme-options/cme-options-hero-section');
    get_template_part('template-parts/cme-options/powerful-strategies');
    get_template_part('template-parts/cme-options/master-advanced');
    get_template_part('template-parts/cme-options/trade-options');
    load_country_footer();
    ?>
</body>
</html>