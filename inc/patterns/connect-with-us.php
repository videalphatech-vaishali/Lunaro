<?php

/**
 * Register the "Connect with us" block pattern.
 */
if (!function_exists('apmwptheme_register_connect_with_us_pattern')) {
    function apmwptheme_register_connect_with_us_pattern()
    {
        register_block_pattern(
            'apmwptheme/connect-with-us-section',
            array(
                'title'       => __('Connect With Us Section', 'apmwptheme'),
                'description' => __('A centered heading with four circular icons for social links or actions.', 'apmwptheme'),
                'categories'  => array('featured', 'columns', 'text'),
                'content' => '
                <!-- wp:group {"align":"full","className":"connect-with-us-block"} -->
                <div class="wp-block-group alignfull connect-with-us-block">
                    
                    <!-- wp:heading {"textAlign":"center","level":3} -->
                    <h3 class="wp-block-heading has-text-align-center">Connect with us</h3>
                    <!-- /wp:heading -->
                
                    <!-- wp:group {"className":"icon-wrapper"} -->
                    <div class="wp-block-group icon-wrapper">
                
                        <!-- wp:group {"className":"icon-row is-layout-flex"} -->
                        <div class="wp-block-group icon-row is-layout-flex">
                            
                            <!-- wp:group {"className":"icon-circle"} -->
                            <div class="wp-block-group icon-circle"></div>
                            <!-- /wp:group -->
                
                            <div class="wp-block-group icon-circle"></div>
                            <div class="wp-block-group icon-circle"></div>
                            <div class="wp-block-group icon-circle"></div>
                
                        </div>
                        <!-- /wp:group -->
                
                    </div>
                    <!-- /wp:group -->
                
                </div>
                <!-- /wp:group -->
                ',


            )
        );
    }
    add_action('init', 'apmwptheme_register_connect_with_us_pattern');
}
