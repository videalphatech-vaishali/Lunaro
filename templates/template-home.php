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
      // get the country from session or default to 'uk'
      $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
      if ($country === 'uae') { 
         get_footer('uae');
      } else { 
         get_footer();
      }
    ?>
</body>
</html>