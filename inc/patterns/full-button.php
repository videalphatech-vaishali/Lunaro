<?php
/**
 * Register the Contact Form Filled Button pattern.
 */
if (!function_exists('apmwptheme_register_contact_form_filled_button')) {
    function apmwptheme_register_contact_form_filled_button()
    {
        register_block_pattern(
            'apmwptheme/contact-form-filled-button',
            array(
                'title'       => __('Filled Button', 'apmwptheme'),
                'description' => __('full background color button', 'apmwptheme'),
                'categories'  => array('contact', 'form'),
                'content'     => '
<!-- wp:group {"align":"full","className":"contact-section","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"5%","right":"5%"}}}} -->
<div class="wp-block-group alignfull contact-section" style="padding-top:60px;padding-bottom:60px;padding-left:5%;padding-right:5%">
    <!-- wp:buttons -->
    <div class="wp-block-buttons">
        <!-- wp:button {"style":{"color":{"background":"#65558f","text":"#ffffff"},"border":{"radius":"100px"},"typography":{"fontSize":"16px"}}} -->
        <div class="wp-block-button">
            <a class="wp-block-button__link has-text-color has-background" href="#" style="background-color:#65558f;color:#ffffff;border-radius:100px;font-size:16px;padding:10px 30px;">Learn More</a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_contact_form_filled_button');
}
