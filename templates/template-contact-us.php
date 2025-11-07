<?php
/**
 * Template Name: ContactUs Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */

load_country_header();
?>
<!DOCTYPE html>
<body >
    <?php
    get_template_part('template-parts/luna-contact-widgets/get-in-touch-section');
    get_template_part('template-parts/luna-contact-widgets/three-contact-boxes');
    get_footer();
    ?>
    </body>
</html>