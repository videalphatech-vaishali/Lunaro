<?php
/**
 * Register the Get In Touch Section block pattern.
 */
if ( ! function_exists( 'apmwptheme_register_get_in_touch_section' ) ) {
    function apmwptheme_register_get_in_touch_section() {

        register_block_pattern(
            'apmwptheme/luna-get-in-touch-section',
            array(
                'title'       => __( 'Get In Touch Section', 'apmwptheme' ),
                'description' => __( 'A centered section with a black background, title, and subtext for contact information.', 'apmwptheme' ),
                'categories'  => array( 'featured', 'text' ),
                'content'     => '
<!-- wp:group {"align":"full","className":"get-in-touch-section-body","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"red"} -->
<div class="wp-block-group alignfull get-in-touch-section-body has-black-background-color has-background" style="padding-top:80px;padding-bottom:80px;text-align:center;">

    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"50px","fontFamily":"Calibri","fontWeight":"900"}},"textColor":"red","className":"get-in-touch-heading"} -->
    <h2 class="wp-block-heading get-in-touch-heading has-text-align-center has-white-color has-text-color" style="font-size:50px;font-family:Calibri;font-weight:900;">Get in touch 1</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","fontFamily":"Calibri"}},"textColor":"white","className":"get-in-touch-description"} -->
    <p class="has-text-align-center get-in-touch-description has-white-color has-text-color" style="font-size:15px;font-family:Calibri;">
    No question is too small, and no issue too big; we\'re always happy to help.<br>
    Reach out to us in the way that\'s easiest for you, and our team will make sure you get the support you need.
    </p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action( 'init', 'apmwptheme_register_get_in_touch_section' );
}
