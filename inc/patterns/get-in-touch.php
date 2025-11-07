<?php

/**
 * Register the Contact Form Section pattern.
 */
if (!function_exists('apmwptheme_register_contact_form_pattern')) {
    function apmwptheme_register_contact_form_pattern()
    {
        register_block_pattern(
            'apmwptheme/contact-form-section',
            array(
                'title'       => __('Get in Touch', 'apmwptheme'),
                'description' => __('A contact section with form and text info.', 'apmwptheme'),
                'categories'  => array('columns', 'text'),
                'content'     => '
<!-- wp:group {"align":"full","className":"contact-section"} -->
<div class="wp-block-group alignfull contact-section">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"40%","className":"contact-left"} -->
        <div class="wp-block-column contact-left">
            <!-- wp:heading {"level":2,"className":"contact-heading"} -->
            <h2 class="contact-heading">Get in touch</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"contact-subtext"} -->
            <p class="contact-subtext"><strong>Have any questions for us? Fill in the form below</strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%","className":"contact-right"} -->
        <div class="wp-block-column contact-right">
            <!-- wp:html -->
            <form class="contact-form" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                <button type="submit" class="contact-submit-btn">Submit</button>
            </form>
            <!-- /wp:html -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_contact_form_pattern');
}
