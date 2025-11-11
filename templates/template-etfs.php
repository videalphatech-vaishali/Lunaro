<?php

/**
 * Template Name: ETFs Market Page
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
    get_template_part('template-parts/market-page-widgets/etfs/etf-hero-section');
    get_template_part('template-parts/market-page-widgets/etfs/intro-to-etfs-section');
    get_template_part('template-parts/market-page-widgets/etfs/benefits-risk'); 
    get_template_part('template-parts/market-page-widgets/etfs/popular-etfs-trade');
    // get_template_part('template-parts/market-page-widgets/etfs/educational-content');
    get_template_part('template-parts/market-page-widgets/etfs/start-trading-now');
    load_country_footer();
    ?>
</body>

</html>