<?php
/**
 * Register the Contact Boxes Section block pattern.
 */
if ( ! function_exists( 'apmwptheme_register_contact_boxes_pattern' ) ) {
    function apmwptheme_register_contact_boxes_pattern() {
        register_block_pattern(
            'apmwptheme/contact-boxes-section',
            array(
                'title'       => __( 'Contact Boxes Section', 'apmwptheme' ),
                'description' => __( 'Three support cards with icons and text, over a dark background image.', 'apmwptheme' ),
                'categories'  => array( 'columns', 'featured', 'text' ),
                'content'     => '
<!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/BG-Table.png","dimRatio":60,"overlayColor":"black","minHeight":500,"isDark":true,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:500px">
  <span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60"></span>
  <img class="wp-block-cover__image-background" alt="" src="' . get_template_directory_uri() . '/assets/images/BG-Table.png" data-object-fit="cover"/>

  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}} -->
    <div class="wp-block-group" style="padding-top:100px;padding-bottom:100px">

      <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"600"}},"textColor":"white"} -->
      <h2 class="has-text-align-center has-white-color has-text-color" style="font-size:36px;font-weight:600">Our Support</h2>
      <!-- /wp:heading -->

      <!-- wp:columns {"style":{"spacing":{"blockGap":"20px","margin":{"top":"40px"}}}} -->
      <div class="wp-block-columns" style="margin-top:40px">

        <!-- wp:column -->
        <div class="wp-block-column">
          <!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"color":{"background":"rgba(255,255,255,0.4)"},"boxShadow":"0px 4px 15px rgba(0,0,0,0.2)"},"layout":{"type":"constrained"}} -->
          <div class="wp-block-group" style="border-radius:20px;padding:30px;background-color:rgba(255,255,255,0.4);box-shadow:0px 4px 15px rgba(0,0,0,0.2)">

            <!-- wp:image {"align":"center","width":48,"height":48,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter is-resized">
              <img src="' . get_template_directory_uri() . '/assets/images/lightning-01.svg" alt="Lightning Icon" width="48" height="48"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"700","letterSpacing":"-0.78px"}},"textColor":"white"} -->
            <h3 class="has-text-align-center has-white-color has-text-color" style="font-size:24px;font-weight:700;letter-spacing:-0.78px">FAQs</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"}},"textColor":"white"} -->
            <p class="has-text-align-center has-white-color has-text-color" style="font-size:15px;line-height:1.6">
              Your Capital is Protected under FCA and ADGM regulations. Funds are segregated into top-tier bank accounts, with negative balance protection for retail clients and transparent risk disclosures.
            </p>
            <!-- /wp:paragraph -->

          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
          <!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"color":{"background":"rgba(255,255,255,0.4)"},"boxShadow":"0px 4px 15px rgba(0,0,0,0.2)"},"layout":{"type":"constrained"}} -->
          <div class="wp-block-group" style="border-radius:20px;padding:30px;background-color:rgba(255,255,255,0.4);box-shadow:0px 4px 15px rgba(0,0,0,0.2)">

            <!-- wp:image {"align":"center","width":48,"height":48,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter is-resized">
              <img src="' . get_template_directory_uri() . '/assets/images/lock-01.svg" alt="Lock Icon" width="48" height="48"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"700"}},"textColor":"white"} -->
            <h3 class="has-text-align-center has-white-color has-text-color" style="font-size:24px;font-weight:700">Supported Email</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"}},"textColor":"white"} -->
            <p class="has-text-align-center has-white-color has-text-color" style="font-size:15px;line-height:1.6">
              Access the same technology used by professional trading desks: ultra-low latency execution, deep liquidity from multiple providers, and enterprise-level platform stability built to perform during high volatility.
            </p>
            <!-- /wp:paragraph -->

          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
          <!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"color":{"background":"rgba(255,255,255,0.4)"},"boxShadow":"0px 4px 15px rgba(0,0,0,0.2)"},"layout":{"type":"constrained"}} -->
          <div class="wp-block-group" style="border-radius:20px;padding:30px;background-color:rgba(255,255,255,0.4);box-shadow:0px 4px 15px rgba(0,0,0,0.2)">

            <!-- wp:image {"align":"center","width":48,"height":48,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter is-resized">
              <img src="' . get_template_directory_uri() . '/assets/images/message-chat-square.svg" alt="Chat Icon" width="48" height="48"/>
            </figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px","fontWeight":"700"}},"textColor":"white"} -->
            <h3 class="has-text-align-center has-white-color has-text-color" style="font-size:24px;font-weight:700">Live Chat</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"}},"textColor":"white"} -->
            <p class="has-text-align-center has-white-color has-text-color" style="font-size:15px;line-height:1.6">
              Trade on MetaTrader 5, the world\'s leading multi-asset platform, featuring advanced charting, algorithmic trading, real-time market data, and seamless mobile/web/desktop synchronization.
            </p>
            <!-- /wp:paragraph -->

          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

      </div>
      <!-- /wp:columns -->

      <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","marginTop":"40px"}},"textColor":"white"} -->
      <p class="has-text-align-center has-white-color has-text-color" style="font-size:18px;margin-top:40px">
        We\'re here to make your trading journey simpler, every step of the way.
      </p>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->
  </div>
</div>
<!-- /wp:cover -->
',
            )
        );
    }
    add_action( 'init', 'apmwptheme_register_contact_boxes_pattern' );
}
?>
