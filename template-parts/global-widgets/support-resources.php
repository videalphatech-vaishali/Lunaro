<?php

$title = get_query_var('lr_title', 'Default Title');
?>

<style>
    .header {
        background-color: white;
        padding: 40px 50px;
        text-align: start;
    }

    .header a {
        font-size: 14px;
        color: #6b46c1;
        text-decoration: none;
    }

    .header h1 {
        margin: 0;
        font-size: 2.5rem;
        color: black;
    }

    .header p {
        font-size: 1.5rem;
        color: #333;
        margin-top: 15px;
        max-width: 1000px;
    }
</style>

<div class="header">
    <h1>Support and Resources</h1>
    <p>Leorseom Ipserewrw safsigrnfs sifsdao fsaofsdaj fo;sifj sodjs</p>
    <a href="<?php echo esc_url(site_url('/available-platforms?platform_id=' . get_the_ID())); ?>">
        <?php echo esc_html($title); ?> tutorials</a>
</div>