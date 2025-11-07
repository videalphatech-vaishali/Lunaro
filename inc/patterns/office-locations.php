<?php

/**
 * Register the Office Locations block pattern.
 */
if (!function_exists('apmwptheme_register_office_locations_pattern')) {
    function apmwptheme_register_office_locations_pattern()
    {
        register_block_pattern(
            'apmwptheme/office-locations',
            array(
                'title'       => __('Office Locations Section', 'apmwptheme'),
                'description' => __('A section displaying two office locations in columns with short descriptions.', 'apmwptheme'),
                'categories'  => array('columns', 'text'),
                'content'     => '
<!-- wp:group {"className":"office-locations-section has-light-gray-background-color has-background","layout":{"type":"default"}} -->
<div class="wp-block-group office-locations-section has-light-gray-background-color has-background">

    <!-- wp:heading {"level":2,"className":"office-locations-heading has-text-align-left"} -->
    <h2 class="office-locations-heading has-text-align-left">Office locations</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"office-locations-intro has-text-align-left"} -->
    <p class="office-locations-intro has-text-align-left">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"className":"office-locations-columns"} -->
    <div class="wp-block-columns office-locations-columns">

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"location-entry"} -->
            <!-- wp:group {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"},"className":"location-entry"} -->
            <div class="wp-block-group location-entry is-layout-flex">
            
                <!-- wp:group {"className":"location-icon is-circle has-pale-cyan-blue-background-color has-background"} -->
                <div class="wp-block-group location-icon is-circle has-pale-cyan-blue-background-color has-background"></div>
                <!-- /wp:group -->
            
                <!-- wp:group {"className":"location-text"} -->
                <div class="wp-block-group location-text">
                    <!-- wp:paragraph {"className":"location-title has-text-align-left"} -->
                    <p class="location-title has-text-align-left">Location 1</p>
                    <!-- /wp:paragraph -->
            
                    <!-- wp:paragraph {"className":"location-description has-text-align-left"} -->
                    <p class="location-description has-text-align-left">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"location-entry"} -->
            <div class="wp-block-group location-entry">

                <!-- wp:group {"className":"location-icon is-circle has-pale-cyan-blue-background-color has-background"} -->
                <div class="wp-block-group location-icon is-circle has-pale-cyan-blue-background-color has-background"></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"location-text"} -->
                <div class="wp-block-group location-text">
                    <!-- wp:paragraph {"className":"location-title has-text-align-left"} -->
                    <p class="location-title has-text-align-left">Location 2</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"location-description has-text-align-left"} -->
                    <p class="location-description has-text-align-left">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->
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
    add_action('init', 'apmwptheme_register_office_locations_pattern');
}
