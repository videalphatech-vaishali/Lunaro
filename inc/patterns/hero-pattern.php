<?php

/**
 * Register the Hero pattern with button.
 */
if (! function_exists('register_hero_pattern')) {
    function register_hero_pattern()
    {
        register_block_pattern(
            'apmwptheme/hero-pattern',
            array(
                'title'       => __('Hero section', 'apmwptheme'),
                'description' => __('A hero section with a title, subtitle, and two buttons.', 'apmwptheme'),
                'categories'  => array('header'),
                'content'     => '
<!-- wp:group {"className":"lr-hero-section"} -->
<div class="wp-block-group lr-hero-section">
    <!-- wp:heading {"level":1,"className":"lr-hero-title"} -->
    <h1 class="lr-hero-title">Default Title</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"lr-hero-subtitle"} -->
    <p class="lr-hero-subtitle">Default Subtitle</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"className":"lr-hero-buttons"} -->
    <div class="wp-block-buttons lr-hero-buttons">
        <!-- wp:button -->
        <div class="wp-block-button">
            <a class="wp-block-button__link lr-btn-primary" onclick="startTrading(); return false;">Start trading</a>
        </div>
        <!-- /wp:button -->

        <!-- wp:button -->
        <div class="wp-block-button">
            <a class="wp-block-button__link lr-btn-outline" onclick="createDemoAccount(); return false;">Create demo account</a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
',
            )
        );
    }
    add_action('init', 'register_hero_pattern');
}
