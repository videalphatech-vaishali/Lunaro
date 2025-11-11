<?php

/**
 * Template Name: ETD Trading
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
load_country_header();
?>

<style>
    body {
        background-color: white !important;
        margin: 0;
        font-family: Arial, sans-serif;
    }
</style>



<div class="resource-page-content">

    <?php
    get_template_part('template-parts/trading-widgets/etd/etd-hero-section');
    get_template_part('template-parts/trading-widgets/etd/etd-faq');
    load_country_footer();
    ?>

</div>