<?php

/**
 * Register the Testimonials pattern
 */

if (!function_exists('apmwptheme_register_testimonial_pattern')) {
    function apmwptheme_register_testimonial_pattern()
    {
        register_block_pattern(
            'apmwptheme/testimonials-carousel',
            array(
                'title'       => __('Testimonials Carousel', 'apmwptheme'),
                'description' => __('A horizontal scrolling testimonials section with arrows.', 'apmwptheme'),
                'categories'  => array('testimonials', 'columns'),
                'content'     => '
<!-- wp:group {"className":"testimonials-section"} -->
<div class="wp-block-group testimonials-section">
    <!-- wp:heading {"level":2,"className":"testimonials-heading"} -->
    <h2 class="wp-block-heading testimonials-heading">Testimonials</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"testimonials-scroll-container"} -->
    <div class="wp-block-group testimonials-scroll-container">
        <!-- wp:image {"url":"https://img.icons8.com/?size=100&id=39790&format=png&color=000000","className":"scroll-arrow left"} /-->

        <!-- wp:group {"className":"testimonials-marquee"} -->
        <div class="wp-block-group testimonials-marquee">
            <!-- wp:group {"className":"testimonial-card"} -->
            <div class="wp-block-group testimonial-card">
                <!-- wp:paragraph {"className":"testimonial-description"} -->
                <p class="testimonial-description">"This platform has changed the way I invest. Highly recommended!"</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"testimonial-footer"} -->
                <div class="wp-block-group testimonial-footer">
                    <!-- wp:image {"url":"https://via.placeholder.com/36","className":"testimonial-image"} /-->
                    <!-- wp:paragraph {"className":"testimonial-name"} -->
                    <p class="testimonial-name">Amit Sharma</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"testimonial-card"} -->
            <div class="wp-block-group testimonial-card">
                <!-- wp:paragraph {"className":"testimonial-description"} -->
                <p class="testimonial-description">"Excellent customer support and easy-to-use interface!"</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"testimonial-footer"} -->
                <div class="wp-block-group testimonial-footer">
                    <!-- wp:image {"url":"https://via.placeholder.com/36","className":"testimonial-image"} /-->
                    <!-- wp:paragraph {"className":"testimonial-name"} -->
                    <p class="testimonial-name">Priya Verma</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:image {"url":"https://img.icons8.com/?size=100&id=39790&format=png&color=000000","className":"scroll-arrow right"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_testimonial_pattern');
}
