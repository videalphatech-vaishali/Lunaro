<?php

/**
 * Template Name: About Us Page
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
 */
get_header('new');

?>

<!DOCTYPE html>
<html>

       <link rel="preload" href="./style.css" as="style">
<body>
    <?php 
    get_template_part('template-parts/luna-about-2-widgets/about-2-hero-section');
    get_template_part('template-parts/luna-about-2-widgets/mission');
    get_template_part('template-parts/luna-about-2-widgets/regulatory-credential');
    get_template_part('template-parts/luna-about-2-widgets/why-trade-with-us');
    load_country_footer();
    ?>
</body>

</html>