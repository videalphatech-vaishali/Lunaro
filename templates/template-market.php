<?php

/**
 * Template Name: Market Page
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
    get_template_part('template-parts/market-page-widgets/luna-pages/maket-hero-section');
    get_template_part('template-parts/market-page-widgets/luna-pages/market-category');
    get_template_part('template-parts/market-page-widgets/luna-pages/featured-markets');
    get_template_part('template-parts/market-page-widgets/luna-pages/start-trading-now');
    get_template_part('template-parts/market-page-widgets/luna-pages/real-trading-example');
    get_footer();
    ?>
</body>

</html>