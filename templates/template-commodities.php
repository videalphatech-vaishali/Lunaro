<?php

/**
 * Template Name: Commodities Market Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
load_country_header();
?>
<style>
 

    body {
        background-color: white !important; 
        font-family: Arial, sans-serif;
    }
</style>

<!DOCTYPE html>
<html>

<body>
    <?php
    get_template_part('template-parts/market-page-widgets/commodities/commodities-hero-section');
    get_template_part('template-parts/market-page-widgets/commodities/intro-to-commod-section');
    get_template_part('template-parts/market-page-widgets/commodities/benefits-risk'); 
    get_template_part('template-parts/market-page-widgets/commodities/popular-commodities-you');
    // get_template_part('template-parts/market-page-widgets/commodities/educational-content');
    get_template_part('template-parts/market-page-widgets/commodities/start-trading-now');
    load_country_footer();
    ?>
</body>

</html>