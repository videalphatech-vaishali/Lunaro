<?php

/**
 * Register the Learn to Trade block pattern.
 */
function register_learn_to_trade_pattern()
{
    $content = <<<HTML
<!-- wp:group {"className":"learn-trade-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group learn-trade-wrapper">

    <!-- wp:columns {"className":"learn-trade-columns","align":"wide"} -->
    <div class="wp-block-columns alignwide learn-trade-columns">

        <!-- wp:column {"className":"learn-trade-left"} -->
        <div class="wp-block-column learn-trade-left">
            <!-- wp:heading {"level":2,"className":"learn-trade-heading"} -->
            <h2 class="learn-trade-heading">Learn to trade</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"learn-trade-description"} -->
            <p class="learn-trade-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"learn-trade-buttons"} -->
            <div class="wp-block-buttons learn-trade-buttons">
                <!-- wp:button {"className":"learn-trade-button"} -->
                <div class="wp-block-button learn-trade-button">
                    <a class="wp-block-button__link">Access our resources</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"learn-trade-right"} -->
        <div class="wp-block-column learn-trade-right">
       <!-- wp:group {"style":{"color":{"background":"#cce4ff"},"dimensions":{"minHeight":"220px"}},"className":"learn-trade-image-placeholder","layout":{"type":"constrained"}} -->
<div class="wp-block-group learn-trade-image-placeholder" style="background-color:#cce4ff;min-height:220px"></div>
<!-- /wp:group -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
HTML;

    register_block_pattern(
        'apmwptheme/learn-to-trade',
        array(
            'title'       => __('Learn to Trade Section', 'apmwptheme'),
            'description' => __('Two-column text and image layout with button CTA.'),
            'categories'  => array('text', 'columns', 'featured'),
            'content'     => $content,
        )
    );
}
add_action('init', 'register_learn_to_trade_pattern');
