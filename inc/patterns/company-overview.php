<?php
/**
 * Register the Hero pattern with button.
 */
if (!function_exists('apmwptheme_register_company_overview_pattern')) {
    function apmwptheme_register_company_overview_pattern() {
        register_block_pattern(
            'apmwptheme/company-overview-section',
            array(
                'title'       => __('Company Overview Section', 'apmwptheme'),
                'description' => __('A two-column block with title, description, button, and image background.', 'apmwptheme'),
                'categories'  => array('columns', 'text'),
                'content'     => '
<!-- wp:group {"className":"company-overview-section"} -->
<div class="wp-block-group company-overview-section">
    <!-- wp:columns {"className":"company-overview-columns"} -->
    <div class="wp-block-columns company-overview-columns">
        <!-- wp:column {"className":"company-overview-content"} -->
        <div class="wp-block-column company-overview-content">
            <!-- wp:heading {"level":2} -->
            <h2>Company Overview Title</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae velit ex.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"overview-button"} -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link overview-button" href="#">Learn More</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"company-overview-image"} -->
        <div class="wp-block-column company-overview-image"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_company_overview_pattern');
}
