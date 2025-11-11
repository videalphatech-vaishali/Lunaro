<?php

/**
 * Template Name: Indices Market Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
load_country_header();
?>
<style>
    body.admin-bar .your-header-class {
        margin-top: 200px;
    }

    body {
        background-color: white !important;
        margin: 0;
        font-family: Arial, sans-serif;
    }
</style>

<!DOCTYPE html>
<html>

<body>
    <?php
    get_template_part('template-parts/market-page-widgets/indices/indices-hero-section');
    get_template_part('template-parts/market-page-widgets/indices/what-are-indicies-section');
    get_template_part('template-parts/market-page-widgets/indices/benefits-risk');
    get_template_part('template-parts/market-page-widgets/indices/popular-indices');
    // get_template_part('template-parts/market-page-widgets/indices/educational-content');
    get_template_part('template-parts/market-page-widgets/indices/start-trading-now');
    load_country_footer();
    ?>
</body>

</html>