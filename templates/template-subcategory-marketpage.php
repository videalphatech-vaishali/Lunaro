<?php

/**
 * Template Name: Subcategory Market Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
$title = isset($_GET['market_category']) ? sanitize_text_field($_GET['market_category']) : 'Forex';

get_header('new');
?>
<style>
    body {
        background-color: white !important;
        margin: 0;
        font-family: Arial, sans-serif;
    }
</style>

<div class="subcategory-market">

    <?php
    set_query_var('lr_title', 'Introduction to ' . esc_html($title)); // FIXED
    set_query_var('lr_subtitle', '');
    get_template_part('template-parts/global-widgets/page-heading');
    get_template_part('template-parts/market-page-widgets/brief-of');
    // set_query_var('click_event1', "_paq.push(['trackEvent', 'Resource-Page', 'Start Trading Now', 'StartTrading']);");
    // set_query_var('click_event2', "_paq.push(['trackEvent', 'Resource-Page', 'Start Trading Now', 'Create Demo Account']);");
    // get_template_part('template-parts/global-widgets/start-trading');
    get_template_part('template-parts/market-page-widgets/benifits-of');
    get_template_part('template-parts/market-page-widgets/educational-content');
    load_country_footer();
    ?>

</div>