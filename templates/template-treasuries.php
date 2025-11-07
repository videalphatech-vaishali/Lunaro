<?php

/**
 * Template Name: Treasuries Market Page
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
    get_template_part('template-parts/market-page-widgets/treasuries/treasuries-hero-section');
    get_template_part('template-parts/market-page-widgets/treasuries/intro-to-treasuries-section');
    get_template_part('template-parts/market-page-widgets/treasuries/benefits-risk'); 
    get_template_part('template-parts/market-page-widgets/treasuries/popular-treasuries-you');
    // get_template_part('template-parts/market-page-widgets/treasuries/educational-content');
    get_template_part('template-parts/market-page-widgets/treasuries/start-trading-now');
    get_footer();
    ?>
</body>

</html>