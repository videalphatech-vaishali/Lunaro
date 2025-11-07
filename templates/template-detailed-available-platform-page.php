<?php

/**
 * Template Name: Detailed Available Platform Page
 * @package WordPress
 * @subpackage YourThemeName
 */

get_header('new');
?>


<?php
set_query_var('lr_title', 'Meta Trader 5');
set_query_var('lr_subtitle', 'supporting text');
get_template_part('template-parts/global-widgets/page-heading');
get_template_part('template-parts/platform-widgets/platform-features');
get_template_part('template-parts/platform-widgets/how-to-get-started');
get_template_part('template-parts/platform-widgets/testimonials');
get_template_part('template-parts/global-widgets/support-resources');
get_footer();
?>