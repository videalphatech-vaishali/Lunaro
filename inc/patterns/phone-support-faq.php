<?php

/**
 * Register the Support Options block pattern.
 */
if (!function_exists('apmwptheme_register_support_options_pattern')) {
    function apmwptheme_register_support_options_pattern()
    {
        register_block_pattern(
            'apmwptheme/support-options',
            array(
                'title'       => __('Support Options Section', 'apmwptheme'),
                'description' => __('A section showing support methods: FAQ, Email, Phone, in styled cards.'),
                'categories'  => array('columns', 'text', 'buttons'),
                'content'     => '
<!-- wp:group {"className":"support-section"} -->
<div class="wp-block-group support-section">

    <!-- wp:columns {"className":"support-columns"} -->
    <div class="wp-block-columns support-columns">

        <!-- wp:column {"className":"support-column"} -->
        <div class="wp-block-column support-column">

            <!-- wp:group {"className":"support-card"} -->
            <div class="wp-block-group support-card">

                <!-- wp:group {"className":"support-icon"} -->
                <div class="wp-block-group support-icon is-circle has-pale-cyan-blue-background-color has-background"></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"support-content"} -->
                <div class="wp-block-group support-content">

                    <!-- wp:heading {"level":3,"className":"support-title"} -->
                    <h3 class="support-title">FAQs</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"support-description"} -->
                    <p class="support-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"support-button-wrap"} -->
                    <div class="wp-block-buttons support-button-wrap">
                        <!-- wp:button {"className":"support-button is-style-outline"} -->
                        <div class="wp-block-button support-button is-style-outline">
                            <a class="wp-block-button__link">Read FAQs</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"support-column"} -->
        <div class="wp-block-column support-column">

            <!-- wp:group {"className":"support-card"} -->
            <div class="wp-block-group support-card">

                <!-- wp:group {"className":"support-icon"} -->
                <div class="wp-block-group support-icon is-circle has-pale-cyan-blue-background-color has-background"></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"support-content"} -->
                <div class="wp-block-group support-content">

                    <!-- wp:heading {"level":3,"className":"support-title"} -->
                    <h3 class="support-title">Support email</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"support-description"} -->
                    <p class="support-description">Contact us at email@email.com for non-urgent enquiries. We will get back to you within X business days.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"support-button-wrap"} -->
                    <div class="wp-block-buttons support-button-wrap">
                        <!-- wp:button {"className":"support-button is-style-outline"} -->
                        <div class="wp-block-button support-button is-style-outline">
                            <a class="wp-block-button__link">Email us</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"support-column"} -->
        <div class="wp-block-column support-column">

            <!-- wp:group {"className":"support-card"} -->
            <div class="wp-block-group support-card">

                <!-- wp:group {"className":"support-icon"} -->
                <div class="wp-block-group support-icon is-circle has-pale-cyan-blue-background-color has-background"></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"support-content"} -->
                <div class="wp-block-group support-content">

                    <!-- wp:heading {"level":3,"className":"support-title"} -->
                    <h3 class="support-title">Phone support</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"support-description"} -->
                    <p class="support-description">Contact us via phone at +440000000000. The line is active from Monday to Friday, 9am to 6pm.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"support-button-wrap"} -->
                    <div class="wp-block-buttons support-button-wrap">
                        <!-- wp:button {"className":"support-button is-style-outline"} -->
                        <div class="wp-block-button support-button is-style-outline">
                            <a class="wp-block-button__link">Call now</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

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
    add_action('init', 'apmwptheme_register_support_options_pattern');
}

