<?php

/**
 * Register the Platform Container block pattern.
 */
if (! function_exists('apmwptheme_register_platform_container_pattern')) {
    function apmwptheme_register_platform_container_pattern()
    {
        register_block_pattern(
            'apmwptheme/platform-container',
            array(
                'title'       => __('Platform Container', 'apmwptheme'),
                'description' => __('A three-column section for displaying platforms with image, features, and a learn more link.', 'apmwptheme'),
                'categories'  => array('columns'),
                'content'     => '
                <!-- wp:group {"className":"lr-platforms-section"} -->
                <div class="wp-block-group lr-platforms-section">
                
                    <!-- wp:heading {"level":2} -->
                    <h2>Platforms</h2>
                    <!-- /wp:heading -->
                
                    <!-- wp:paragraph -->
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
                    <!-- /wp:paragraph -->
                
                    <!-- wp:group {"className":"lr-platform-item"} -->
                    <div class="wp-block-group lr-platform-item">
                
                        <!-- wp:columns -->
                        <div class="wp-block-columns">
                            <!-- wp:column {"className":"lr-platform-image-column"} -->
                            <div class="wp-block-column lr-platform-image-column">
                                <!-- wp:image {"className":"lr-platform-image"} -->
                                <figure class="wp-block-image lr-platform-image"><img src="/path/to/placeholder-image.png" alt="Platform Placeholder"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                
                            <!-- wp:column {"className":"lr-platform-text-column"} -->
                            <div class="wp-block-column lr-platform-text-column">
                                <!-- wp:heading {"level":3} -->
                                <h3>Meta Trader 5</h3>
                                <!-- /wp:heading -->
                
                                <!-- wp:list -->
                                <ul>
                                    <li>Feature 1</li>
                                    <li>Feature 2</li>
                                    <li>Feature 3</li>
                                </ul>
                                <!-- /wp:list -->
                
                                <!-- wp:paragraph {"className":"lr-platform-link"} -->
                                <p><a href="#">Learn about Meta Trader 5</a></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                
                    </div>
                    <!-- /wp:group -->
                
                    <!-- wp:group {"className":"lr-platform-item"} -->
                    <div class="wp-block-group lr-platform-item">
                
                        <!-- wp:columns -->
                        <div class="wp-block-columns">
                            <!-- wp:column {"className":"lr-platform-image-column"} -->
                            <div class="wp-block-column lr-platform-image-column">
                                <!-- wp:image {"className":"lr-platform-image"} -->
                                <figure class="wp-block-image lr-platform-image"><img src="/path/to/placeholder-image.png" alt="Platform Placeholder"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                
                            <!-- wp:column {"className":"lr-platform-text-column"} -->
                            <div class="wp-block-column lr-platform-text-column">
                                <!-- wp:heading {"level":3} -->
                                <h3>Mobile app</h3>
                                <!-- /wp:heading -->
                
                                <!-- wp:list -->
                                <ul>
                                    <li>Feature 1</li>
                                    <li>Feature 2</li>
                                    <li>Feature 3</li>
                                </ul>
                                <!-- /wp:list -->
                
                                <!-- wp:paragraph {"className":"lr-platform-link"} -->
                                <p><a href="#">Learn about the ABC mobile app</a></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                
                    </div>
                    <!-- /wp:group -->
                
                </div>
                <!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_platform_container_pattern');
}
