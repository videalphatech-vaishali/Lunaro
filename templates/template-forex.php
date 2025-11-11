<?php

/**
 * Template Name: Forex Market Page
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
    get_template_part('template-parts/market-page-widgets/forex/forex-hero-section');
    get_template_part('template-parts/market-page-widgets/forex/what-is-forex-section');
    get_template_part('template-parts/market-page-widgets/forex/major-currency-pairs');
    get_template_part('template-parts/market-page-widgets/forex/benefits-risk'); 
    // get_template_part('template-parts/market-page-widgets/forex/educational-content');
    get_template_part('template-parts/market-page-widgets/forex/start-trading-now');
    load_country_footer();
    ?>
</body>

</html>