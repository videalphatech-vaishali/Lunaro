<?php

/**
 * Template Name: Signup Individual Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
?>

<!DOCTYPE html>
<html>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Individual Sign Up</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: #ffffff;
                color: #000;
            }

            /* Header container */
            .header {
                background-color: #000;
                display: flex;
                flex-direction: column;
                /* 👈 stack logo + text vertically */
                justify-content: center;
                /* center vertically */
                align-items: center;
                /* center horizontally */
                text-align: center;
                /* center text alignment */
                padding: 20px 20px;
                width: 100%;
            }

            /* Logo styling */
            .header img {
                max-width: 180px;
                /* adjust as needed */
                height: auto;
                margin-bottom: 10px;
                /* space between logo and text */
            }

            /* Text styling */
            .header-title {
                font-size: 22px;
                font-weight: 400;
                color: #fff;
                /* or your theme color */
            }

            .lang {
                position: absolute;
                right: 240px;
                top: 160px;
                color: #2954ff;
                font-size: 14px;
                cursor: pointer;
            }

            /* Center card */
            .container {
                max-width: 500px;
                margin: 60px auto 15px;
                background: #fff;
                border-radius: 7px;
                box-shadow: 0px 0px 12px rgba(104, 94, 94, 0.1);
                padding: 70px 0;
                display: flex;
                flex-direction: column;
                /* 👈 stack logo + text vertically */
                justify-content: center;
                /* center vertically */
                align-items: center;
                /* center horizontally */
                text-align: center;
                /* center text alignment */
            }

            .container img {
                height: 80px;
                margin-bottom: 15px;
            }

            .container h2 {
                font-size: 20px;
                font-weight: 600;
                margin-bottom: 18px;
                color: #141829;
            }

            .container p {
                font-size: 16px;
                line-height: 1.5;
                color: #444;
                padding: 2px;
                margin-bottom: 25px;
            }

            /* Center container */
            .button-container {
                width: 55%;
                /* adjust width as needed (40%, 50%, 80%, etc.) */
                margin: 0 auto;
                text-align: center;
            }

            /* Button */
            .btn-continue {
                width: 96%;
                background: #143cff;
                color: #fff;
                border-radius: 8px;
                padding: 16px 0;
                margin-bottom: 2rem;
                font-weight: 600;
                font-size: 15px;
                border: none;
                cursor: pointer;
                transition: 0.3s;
            }

            .btn-continue:hover {
                background: #858da5;
            }

            /* Powered text */
            .powered {
                font-size: 10px;
                margin-top: 8px;
                color: #797c80;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 4px;
            }

            .powered img {
                height: 14px;
                opacity: 0.85;
            }
        </style>
    </head>

    <body>

        <!-- HEADER -->
        <div class="header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-horizontal.png"
                alt="Lunaro Logo"><br>
            <div class="header-title">Individual sign up</div>
        </div>
        <!-- CARD -->
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-horizontal.png" alt="Lunaro Logo">
            <h2>"Lunaro Markets Limited"<br> verification</h2>
            <p>
                You're about to submit sensitive data to "Lunaro Markets Limited".
                If you received this link from a suspicious source,
                please close this page and notify us immediately.
            </p>
        </div>
        <div class="button-container">
            <button class="btn-continue">Continue</button>
        </div>


        <?php
    get_footer();
    ?>
    </body>

    </html>