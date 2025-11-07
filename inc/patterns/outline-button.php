<?php

/**
 * Register the Contact Form Outlined Button pattern.
 */
if (!function_exists('apmwptheme_register_contact_form_outlined_button')) {
    function apmwptheme_register_contact_form_outlined_button()
    {
        register_block_pattern(
            'apmwptheme/contact-form-outlined-button',
            array(
                'title'       => __('Outlined Button', 'apmwptheme'),
                'description' => __('Outline button (#65558f).', 'apmwptheme'),
                'categories'  => array('contact', 'form'),
                'content'     => '
<!-- wp:group {"align":"full","className":"contact-section","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}}} -->
<div class="wp-block-group alignfull contact-section" style="padding-top:30px;padding-bottom:30px;padding-left:0px;padding-right:0px">
    <!-- wp:buttons -->
    <div class="wp-block-buttons">
        <!-- wp:button {"style":{"border":{"width":"2px","color":"#65558f","radius":"100px"},"color":{"text":"#65558f"},"typography":{"fontSize":"16px"}},"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link has-text-color" href="#" style="border:2px solid #65558f;border-radius:100px;color:#65558f;font-size:16px;padding:10px 30px;">Learn More</a>
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
    add_action('init', 'apmwptheme_register_contact_form_outlined_button');
}
