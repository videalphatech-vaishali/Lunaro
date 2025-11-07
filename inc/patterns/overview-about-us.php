<?php

/**
 * Register the Company Overview Section.
 */
if (!function_exists('apmwptheme_register_company_overview_section')) {
    function apmwptheme_register_company_overview_section()
    {
        register_block_pattern(
            'apmwptheme/overview-section',
            array(
                'title'       => __('Overview AboutUs', 'apmwptheme'),
                'description' => __('Three-column layout with icons, headings, and descriptions in wide layout.', 'apmwptheme'),
                'categories'  => array('columns', 'text'),
                'content'     => '
<!-- wp:group {"align":"wide","className":"lr-company-overview-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide lr-company-overview-section">

<!-- wp:heading {"textAlign":"left","className":"lr-overview-heading"} -->
<h2 class="has-text-align-left lr-overview-heading">Company overview</h2>
<!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","className":"lr-company-overview-cards"} -->
    <div class="wp-block-columns alignwide lr-company-overview-cards">

        <!-- wp:column {"className":"lr-company-card"} -->
        <div class="wp-block-column lr-company-card">
            <!-- wp:image {"sizeSlug":"medium","className":"lr-company-circle","align":"center"} -->
            <figure class="wp-block-image aligncenter size-medium lr-company-circle">
                <img src="https://img.icons8.com/?size=50&id=46274&format=png" alt="Our mission icon"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"textAlign":"center","className":"lr-company-card-heading"} -->
            <h3 class="has-text-align-center lr-company-card-heading">Our mission</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","className":"lr-company-card-text"} -->
            <p class="has-text-align-center lr-company-card-text">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"lr-company-card"} -->
        <div class="wp-block-column lr-company-card">
            <!-- wp:image {"sizeSlug":"medium","className":"lr-company-circle","align":"center"} -->
            <figure class="wp-block-image aligncenter size-medium lr-company-circle">
                <img src="https://img.icons8.com/?size=50&id=7877&format=png" alt="Our vision icon"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"textAlign":"center","className":"lr-company-card-heading"} -->
            <h3 class="has-text-align-center lr-company-card-heading">Our vision</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","className":"lr-company-card-text"} -->
            <p class="has-text-align-center lr-company-card-text">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"lr-company-card"} -->
        <div class="wp-block-column lr-company-card">
            <!-- wp:image {"sizeSlug":"medium","className":"lr-company-circle","align":"center"} -->
            <figure class="wp-block-image aligncenter size-medium lr-company-circle">
                <img src="https://img.icons8.com/?size=80&id=OUeUroTiRarQ&format=png" alt="Our values icon"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":3,"textAlign":"center","className":"lr-company-card-heading"} -->
            <h3 class="has-text-align-center lr-company-card-heading">Our values</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","className":"lr-company-card-text"} -->
            <p class="has-text-align-center lr-company-card-text">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_company_overview_section');
}
