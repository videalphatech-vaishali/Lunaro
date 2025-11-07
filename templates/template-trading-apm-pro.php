<?php

/**
 * Template Name: Trading apm pro
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
get_header('new');
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
    // 🔹 Learning resources block
    set_query_var('lr_title', 'APM Pro');
    set_query_var('lr_subtitle', 'Supporting paragraphs');
    get_template_part('template-parts/global-widgets/page-heading');

    get_template_part('template-parts/trading-widgets/apm-pro-benifits');
    get_template_part('template-parts/trading-widgets/eligibility-criteria');

    get_template_part('template-parts/trading-widgets/trading-options');
    get_template_part('template-parts/trading-widgets/account-comparison');



    get_template_part('template-parts/trading-widgets/how-to-open-account');

    get_footer();
    ?>

</div>