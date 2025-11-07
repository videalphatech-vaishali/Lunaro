<?php

/**
 * Template Name: Trading Page
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
    get_template_part('template-parts/trading-widgets/trading-hero-section');
    get_template_part('template-parts/trading-widgets/trading-content');
    get_footer();
    ?>
</body>

</html>