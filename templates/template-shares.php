<?php

/**
 * Template Name: shares Market Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
load_country_header();
?>

<!DOCTYPE html>
<html>

<body>
    <?php
    get_template_part('template-parts/market-page-widgets/shares/shares-hero-section');
    get_template_part('template-parts/market-page-widgets/shares/intro-to-shares-section');
    get_template_part('template-parts/market-page-widgets/shares/benefits-risk'); 
    get_template_part('template-parts/market-page-widgets/shares/popular-shares-you');
    // get_template_part('template-parts/market-page-widgets/shares/educational-content');
    get_template_part('template-parts/market-page-widgets/shares/start-trading-now');
    load_country_footer();
    ?>
</body>

</html>