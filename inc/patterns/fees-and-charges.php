<?php

/**
 * Register the Fees and Charges Section.
 */
if (!function_exists('apmwptheme_register_fees_charges_section')) {
    function apmwptheme_register_fees_charges_section()
    {
        register_block_pattern(
            'apmwptheme/fees-charges-section',
            array(
                'title'       => __('Fees and Charges Section', 'apmwptheme'),
                'description' => __('Two-column layout with text and a call-to-action button on left, image box on right.', 'apmwptheme'),
                'categories'  => array('text', 'columns'),
                'content'     => '
<!-- wp:group {"align":"full","className":"fees-charges-section"} -->
<div class="wp-block-group alignfull fees-charges-section">
    <!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center">

        <!-- wp:column {"width":"50%","className":"fees-charges-left"} -->
        <div class="wp-block-column fees-charges-left">

            <!-- wp:group {"className":"fees-text-wrapper"} -->
            <div class="wp-block-group fees-text-wrapper">

                <!-- wp:heading {"className":"fees-heading"} -->
                <h2 class="fees-heading">Fees and charges</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"fees-text"} -->
                <p class="fees-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"fees-button"} -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link fees-button" href="#">Details on our fees and charges</a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","className":"fees-charges-right"} -->
        <div class="wp-block-column fees-charges-right">
            <!-- wp:group {"className":"fees-box"} -->
            <div class="wp-block-group fees-box"></div>
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
    add_action('init', 'apmwptheme_register_fees_charges_section');
}
