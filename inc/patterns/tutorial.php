<?php

/**
 * Register the Hero pattern with button .
 */
register_block_pattern(
    'apmwptheme/info-card-tutorials',
    array(
        'title'       => __('Info Card – Tutorials', 'apmwptheme'),
        'description' => __('Tutorials information card.', 'apmwptheme'),
        'categories'  => array('columns', 'text'),
        'content'     => '
<!-- wp:group {"className":"info-cards-section"} -->
<section class="wp-block-group info-cards-section">
    <!-- wp:group {"className":"info-cards-grid"} -->
    <div class="wp-block-group info-cards-grid">
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
    <!-- /wp:group -->
</section>
<!-- /wp:group -->
'
    )
);
