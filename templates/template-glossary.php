<?php

/**
 * Template Name: Glossary Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
load_country_header();

?>

<div class="glossary-content">

    <?php
    get_template_part('template-parts/glossary/glossary-content');
    load_country_footer();
    ?>
</div>