<?php

/**
 * Register the Awards/Certificates Section.
 */
if (!function_exists('apmwptheme_register_awards_certificates_section')) {
    function apmwptheme_register_awards_certificates_section()
    {
        register_block_pattern(
            'apmwptheme/awards-certificates-section',
            array(
                'title'       => __('Awards/Certificates Section', 'apmwptheme'),
                'description' => __('Horizontal list of certificate icons with a section heading.'),
                'categories'  => array('featured', 'columns'),
                'content'     => '
<!-- wp:group {"align":"full","className":"lr-awards-certificates-section"} -->
<div class="wp-block-group alignfull lr-awards-certificates-section">

    <!-- wp:heading {"level":3,"className":"lr-awards-heading"} -->
    <h3 class="lr-awards-heading">Awards/certificates</h3>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"lr-awards-icons-wrapper"} -->
    <div class="wp-block-group lr-awards-icons-wrapper">

        <!-- wp:image {"className":"lr-award-icon"} -->
        <figure class="wp-block-image lr-award-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=1" alt="Award 1" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"className":"lr-award-icon"} -->
        <figure class="wp-block-image lr-award-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=2" alt="Award 2" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"className":"lr-award-icon"} -->
        <figure class="wp-block-image lr-award-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=3" alt="Award 3" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"className":"lr-award-icon"} -->
        <figure class="wp-block-image lr-award-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=4" alt="Award 4" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"className":"lr-award-icon"} -->
        <figure class="wp-block-image lr-award-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=5" alt="Award 5" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"className":"lr-award-icon"} -->
        <figure class="wp-block-image lr-award-icon"><img src="https://via.placeholder.com/80/CCE4FF/000000?text=6" alt="Award 6" /></figure>
        <!-- /wp:image -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_awards_certificates_section');
}
