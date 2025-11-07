<?php

/**
 * Template Part: Learning Resources Header
 */

// Get title & subtitle passed from set_query_var
$title = get_query_var('lr_title', 'Default Title');
$subtitle = get_query_var('lr_subtitle', 'Default Subtitle');
$show_buttons = get_query_var('lr_show_buttons', false); // Default to false
?>

<style>
    .header {
        background-color: #cce0ff;
        padding: 40px 60px;
        text-align: start;
    }

    .header h1 {
        margin: 0;
        font-size: 3rem;
        color: black;
    }

    .header p {
        font-size: 2.3rem;
        color: #333;
        margin-top: 15px;
    }

    .button-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        max-width: 250px;
    }

    .btn-primary {
        background-color: #65558f;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
    }



    .btn-outline {
        background-color: transparent;
        color: #65558f;
        border: 1px solid #65558f;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 1rem;
        cursor: pointer;
    }

    .btn-outline:hover {
        background-color: #f0f0f0;
    }

    @media (max-width:768px) {
        .header {
            padding: 20px;
        }
    }
</style>

<div class="header">
    <h1><?php echo esc_html($title); ?></h1>
    <p><?php echo esc_html($subtitle); ?></p>
    <?php if ($show_buttons): ?>
        <div class="button-group">
            <button onClick="startTrading(); return false;" class="btn-primary">Start trading</button>
            <button onClick="createDemoAccount(); return false;" class="btn-outline">Create demo account</button>
        </div>
    <?php endif; ?>
</div>