<?php

/**
 * Register the "Overview Cards" block pattern.
 */
if (!function_exists('apmwptheme_register_overview_cards_pattern')) {
    function apmwptheme_register_overview_cards_pattern()
    {
        register_block_pattern(
            'apmwptheme/overview-cards',
            array(
                'title'       => __('Overview Cards', 'apmwptheme'),
                'description' => __('Two columns showing platform highlights with image, text and CTA link.'),
                'categories'  => array('columns', 'text', 'featured'),
                'content'     => '
<!-- wp:group {"align":"full","className":"overview-section"} -->
<div class="wp-block-group alignfull overview-section">

    <!-- wp:heading {"className":"overview-heading"} -->
    <h2 class="overview-heading">Overview</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"overview-columns"} -->
    <div class="wp-block-columns overview-columns">

        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:group {"className":"overview-card"} -->
            <div class="wp-block-group overview-card">

                <!-- wp:image {"className":"overview-image"} -->
                <figure class="wp-block-image overview-image">
                    <img src="https://via.placeholder.com/600x300/cccccc/000000?text=Image+1" alt="Meta Trader 5" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"overview-text"} -->
                <div class="wp-block-group overview-text">

                    <!-- wp:heading {"level":4,"className":"overview-title"} -->
                    <h4 class="overview-title">Meta Trader 5</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"overview-description"} -->
                    <p class="overview-description">Brief Description: Emphasize features like advanced charting tools, automated trading capabilities, and multi-asset support.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"overview-link"} -->
                    <p class="overview-link"><a href="#">Learn more</a></p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:group {"className":"overview-card"} -->
            <div class="wp-block-group overview-card">

                <!-- wp:image {"className":"overview-image"} -->
                <figure class="wp-block-image overview-image">
                    <img src="https://via.placeholder.com/600x300/cccccc/000000?text=Image+2" alt="Mobile App" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:group {"className":"overview-text"} -->
                <div class="wp-block-group overview-text">

                    <!-- wp:heading {"level":4,"className":"overview-title"} -->
                    <h4 class="overview-title">Mobile app</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"className":"overview-description"} -->
                    <p class="overview-description">Highlight on-the-go trading, real-time notifications, and user-friendly design.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"className":"overview-link"} -->
                    <p class="overview-link"><a href="#">Learn more</a></p>
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
    add_action('init', 'apmwptheme_register_overview_cards_pattern');
}
