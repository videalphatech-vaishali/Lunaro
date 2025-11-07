<?php

/**
 * Register the "App Features" block pattern.
 */
if (!function_exists('apmwptheme_register_app_features_pattern')) {
    function apmwptheme_register_app_features_pattern()
    {
        register_block_pattern(
            'apmwptheme/app-features',
            array(
                'title'       => __('App Features', 'apmwptheme'),
                'description' => __('Three-column layout showing app features with icons and text.'),
                'categories'  => array('columns', 'text'),
                'content'     => '
<!-- wp:group {"align":"full","className":"app-features-section"} -->
<div class="wp-block-group alignfull app-features-section">

    <!-- wp:heading {"className":"app-features-heading"} -->
    <h2 class="app-features-heading">App features</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"app-features-columns"} -->
    <div class="wp-block-columns app-features-columns">

        <!-- wp:column {"className":"app-feature-item"} -->
        <div class="wp-block-column app-feature-item">
            <!-- wp:image {"className":"feature-icon"} -->
            <figure class="wp-block-image feature-icon">
                <img src="https://via.placeholder.com/80/CCE4FF/000000?text=1" alt="Feature 1 Icon" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":4,"className":"feature-title"} -->
            <h4 class="feature-title">Feature 1</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"feature-description"} -->
            <p class="feature-description">• Multiple chart types and timeframes.<br>• Technical indicators and analytical tools.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"app-feature-item"} -->
        <div class="wp-block-column app-feature-item">
            <!-- wp:image {"className":"feature-icon"} -->
            <figure class="wp-block-image feature-icon">
                <img src="https://via.placeholder.com/80/CCE4FF/000000?text=2" alt="Feature 2 Icon" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":4,"className":"feature-title"} -->
            <h4 class="feature-title">Feature 2</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"feature-description"} -->
            <p class="feature-description">• Support for Expert Advisors (EAs).<br>• Customizable trading algorithms.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"app-feature-item"} -->
        <div class="wp-block-column app-feature-item">
            <!-- wp:image {"className":"feature-icon"} -->
            <figure class="wp-block-image feature-icon">
                <img src="https://via.placeholder.com/80/CCE4FF/000000?text=3" alt="Feature 3 Icon" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":4,"className":"feature-title"} -->
            <h4 class="feature-title">Feature 3</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"feature-description"} -->
            <p class="feature-description">• Trade forex, commodities, indices, and more.</p>
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
    add_action('init', 'apmwptheme_register_app_features_pattern');
}
