

<?php

/**
 * Register the Hero pattern with button .
 */


register_block_pattern(
    'apmwptheme/info-cards-row',
    array(
        'title'       => __('Info Cards Row – FAQs and Tutorials', 'apmwptheme'),
        'description' => __('Two info cards in a row with light blue background.', 'apmwptheme'),
        'categories'  => array('columns', 'featured', 'text'),
        'content'     => '
<!-- wp:group {"className":"info-cards-section"} -->
<section class="wp-block-group info-cards-section">
    <!-- wp:columns {"className":"info-cards-grid"} -->
    <div class="wp-block-columns info-cards-grid">
    
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"info-card"} -->
            <div class="wp-block-group info-card">
                <div class="info-icon"></div>
                <!-- wp:heading {"level":2} -->
                <h2>FAQs</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi...</p>
                <!-- /wp:paragraph -->
                <!-- wp:html -->
                <a href="/index.php/faqs" class="info-button">Read FAQs</a>
                <!-- /wp:html -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"info-card"} -->
            <div class="wp-block-group info-card">
                <div class="info-icon"></div>
                <!-- wp:heading {"level":2} -->
                <h2>Tutorials</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi...</p>
                <!-- /wp:paragraph -->
                <!-- wp:html -->
                <a href="#" class="info-button">Read more</a>
                <!-- /wp:html -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->
'
    )
);
