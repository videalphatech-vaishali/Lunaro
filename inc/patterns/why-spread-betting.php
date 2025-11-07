<?php
function register_spread_betting_pattern()
{
    register_block_pattern(
        'apmwptheme/spread-betting-section',
        array(
            'title'       => __('What is Spread Betting', 'apmwptheme'),
            'description' => __('Two-column layout with description and key features/benefits.', 'apmwptheme'),
            'categories'  => array('text', 'columns'),
            'content'     => '
<!-- wp:group {"className":"spreadbetting-wrapper","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group spreadbetting-wrapper">

    <!-- wp:group {"className":"spreadbetting-left","layout":{"type":"constrained"}} -->
    <div class="wp-block-group spreadbetting-left">
        <!-- wp:heading {"level":2,"className":"spreadbetting-heading"} -->
        <h2 class="spreadbetting-heading">What is spread betting?</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"spreadbetting-text"} -->
        <p class="spreadbetting-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"spreadbetting-right","layout":{"type":"constrained"}} -->
    <div class="wp-block-group spreadbetting-right">

        <!-- wp:group {"className":"spreadbetting-feature-list","layout":{"type":"flex","orientation":"vertical","gap":"20px"}} -->
        <div class="wp-block-group spreadbetting-feature-list">

            <!-- wp:heading {"level":3,"className":"spreadbetting-subheading"} -->
            <h3 class="spreadbetting-subheading">Key features / benefits</h3>
            <!-- /wp:heading -->

            <!-- Feature 1 -->
            <!-- wp:group {"className":"spreadbetting-feature","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
            <div class="wp-block-group spreadbetting-feature">
                <!-- wp:image {"className":"spreadbetting-icon"} -->
                <figure class="wp-block-image spreadbetting-icon">
                    <img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Feature icon"/>
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"className":"spreadbetting-feature-text"} -->
                <p class="spreadbetting-feature-text"><strong>Feature 1</strong><br>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- Feature 2 -->
            <!-- wp:group {"className":"spreadbetting-feature","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
            <div class="wp-block-group spreadbetting-feature">
                <figure class="wp-block-image spreadbetting-icon">
                    <img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Feature icon"/>
                </figure>
                <p class="spreadbetting-feature-text"><strong>Feature 2</strong><br>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
            </div>
            <!-- /wp:group -->

            <!-- Feature 3 -->
            <!-- wp:group {"className":"spreadbetting-feature","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
            <div class="wp-block-group spreadbetting-feature">
                <figure class="wp-block-image spreadbetting-icon">
                    <img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Feature icon"/>
                </figure>
                <p class="spreadbetting-feature-text"><strong>Feature 3</strong><br>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
            </div>
            <!-- /wp:group -->

            <!-- Feature 4 -->
            <!-- wp:group {"className":"spreadbetting-feature","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
            <div class="wp-block-group spreadbetting-feature">
                <figure class="wp-block-image spreadbetting-icon">
                    <img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Feature icon"/>
                </figure>
                <p class="spreadbetting-feature-text"><strong>Feature 4</strong><br>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
            </div>
            <!-- /wp:group -->

            <!-- Feature 5 -->
            <!-- wp:group {"className":"spreadbetting-feature","layout":{"type":"flex","orientation":"horizontal","gap":"20px","verticalAlignment":"center"}} -->
            <div class="wp-block-group spreadbetting-feature">
                <figure class="wp-block-image spreadbetting-icon">
                    <img src="' . esc_url(get_template_directory_uri()) . '/assets/img/circle-icon.png" alt="Feature icon"/>
                </figure>
                <p class="spreadbetting-feature-text"><strong>Feature 5</strong><br>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
'
        )
    );
}
add_action('init', 'register_spread_betting_pattern');
