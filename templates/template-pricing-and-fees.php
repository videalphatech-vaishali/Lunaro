<?php
/**
 * Template Name: Pricing and Fees Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
get_header('new');
?>
<!DOCTYPE html>
<html>
<head>
    
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        /* Center icons horizontally */
        gap: 15px;
        margin-top: 20px;
        flex-wrap: wrap;
        /* Allow wrapping on small screens */
    }

    .social-icons img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
</style>
</head>
<body>
    <?php
    get_template_part('template-parts/luna-fees-pricing/fees-pricing-hero-section');
    get_template_part('template-parts/luna-fees-pricing/our-pricing-advantages');
    get_template_part('template-parts/luna-fees-pricing/breakdown-of-charges');
    get_template_part('template-parts/luna-fees-pricing/regulatory-security-info');
    get_template_part('template-parts/luna-fees-pricing/ready-to-start-trading');
    load_country_footer();
    ?>
</body>
</html>