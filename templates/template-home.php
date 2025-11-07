<?php

/**
 * Template Name: Home Page
 * Template Post Type: post, page
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
    get_template_part('template-parts/home-widgets/luna-hero-section');
    get_template_part('template-parts/home-widgets/luna-new-to-trading');
    get_template_part('template-parts/home-widgets/luna-market_is_different');
    get_template_part('template-parts/home-widgets/luna-platforms');
    get_template_part('template-parts/home-widgets/luna-start-trading-now');
    get_footer();
    ?>
</body>
</html>