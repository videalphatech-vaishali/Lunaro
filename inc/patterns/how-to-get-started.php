<?php

/**
 * Register the "How to Get Started" block pattern.
 */
if (!function_exists('apmwptheme_register_get_started_pattern')) {
    function apmwptheme_register_get_started_pattern()
    {
        register_block_pattern(
            'apmwptheme/how-to-get-started',
            array(
                'title'       => __('How to Get Started', 'apmwptheme'),
                'description' => __('Three-step horizontal list with icons and descriptions, followed by a CTA button.'),
                'categories'  => array('text', 'columns'),
                'content'     => '
<!-- wp:group {"align":"full","className":"get-started-section"} -->
<div class="wp-block-group alignfull get-started-section">

    <!-- wp:heading {"className":"get-started-heading"} -->
    <h2 class="get-started-heading">How to get started</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"get-started-steps"} -->
    <div class="wp-block-group get-started-steps">

        <!-- wp:group {"className":"step-item"} -->
        <div class="wp-block-group step-item">
            <!-- wp:image {"className":"feature-icon"} -->
            <figure class="wp-block-image feature-icon">
                <img src="https://via.placeholder.com/80/CCE4FF/000000?text=1" alt="Step 1 Icon" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"step-text"} -->
            <div class="wp-block-group step-text">
                <!-- wp:heading {"level":4,"className":"step-title"} -->
                <h4 class="step-title">Download the app</h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"feature-description"} -->
                <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"step-item"} -->
        <div class="wp-block-group step-item">
            <!-- wp:image {"className":"feature-icon"} -->
            <figure class="wp-block-image feature-icon">
                <img src="https://via.placeholder.com/80/CCE4FF/000000?text=2" alt="Step 2 Icon" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"step-text"} -->
            <div class="wp-block-group step-text">
                <!-- wp:heading {"level":4,"className":"step-title"} -->
                <h4 class="step-title">Log into the app or create an account</h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"feature-description"} -->
                <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"step-item"} -->
        <div class="wp-block-group step-item">
            <!-- wp:image {"className":"feature-icon"} -->
            <figure class="wp-block-image feature-icon">
                <img src="https://via.placeholder.com/80/CCE4FF/000000?text=3" alt="Step 3 Icon" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:group {"className":"step-text"} -->
            <div class="wp-block-group step-text">
                <!-- wp:heading {"level":4,"className":"step-title"} -->
                <h4 class="step-title">Customise your trading environment</h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"feature-description"} -->
                <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        
        <!-- /wp:group -->
        <!-- wp:buttons {"className":"get-started-button"} -->
        <div class="wp-block-buttons get-started-button">
            <!-- wp:button {"className":"start-button is-style-outline"} -->
            <div class="wp-block-button is-style-outline start-button">
                <a class="wp-block-button__link">Create an account</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

   

</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_get_started_pattern');
}
