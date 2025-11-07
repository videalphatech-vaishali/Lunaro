<?php

/**
 * Template Name: CME Futures Page
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
    get_template_part('template-parts/cme-futures/cme-hero-section');
    get_template_part('template-parts/cme-futures/choose-your-market-exposure');
    get_template_part('template-parts/cme-futures/building-expertise');
    get_template_part('template-parts/cme-futures/diversify-across');
    get_footer();
    ?>
</body>
</html>