<?php

/**
 * Register the Hero pattern with button.
 */
function register_three_col_block()
{
    register_block_pattern(
        'apmwptheme/three-col-block',
        array(
            'title'       => __('Three Column Block', 'apmwptheme'),
            'description' => __('A three-column section with icons, titles, descriptions, and links for learning and guidance.', 'apmwptheme'),
            'categories'  => array('featured', 'columns'),
            'content'     => '
<!-- wp:group {"className":"abc-difference","layout":{"type":"constrained"}} -->
<div class="wp-block-group abc-difference">
    <!-- wp:heading {"level":2,"className":"abc-heading"} -->
    <h2 class="abc-heading">Why ABC is different</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"abc-reasons","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group abc-reasons">
        <!-- wp:group {"className":"abc-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group abc-card">
        <div class="abc-card-padding">
            <!-- wp:heading {"level":3,"className":"abc-card-title"} -->
            <h3 class="abc-card-title">Reason 1</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"abc-card-desc"} -->
            <p class="abc-card-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
            <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"abc-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group abc-card">
        <div class="abc-card-padding">
            <!-- wp:heading {"level":3,"className":"abc-card-title"} -->
            <h3 class="abc-card-title">Reason 2</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"abc-card-desc"} -->
            <p class="abc-card-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
            <!-- /wp:paragraph -->
        </div>
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"abc-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group abc-card" className="abc-card">
            <!-- wp:heading {"level":3,"className":"abc-card-title"} -->
            <h3 class="abc-card-title" style="color:#E22658">Reason 3</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"abc-card-desc"} -->
            <p class="abc-card-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"abc-button-container","layout":{"type":"constrained"}} -->
    <div class="wp-block-group abc-button-container">
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"abc-button"} -->
            <div class="wp-block-button"><a class="wp-block-button__link abc-button">Learn more about ABC</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
'
        )
    );
}
add_action('init', 'register_three_col_block');
