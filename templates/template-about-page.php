<?php

/**
 * Template Name: About Page
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
 */
load_country_header();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<style>
    :root {

        --font-primary: "DM Sans", sans-serif;

        --white-color: #fff;

        --brand-color: #0B0D16;

        --text-color: #C9CCD6;

        --accent-color: #FFF4E4;

        --card-bg: #121622;

        --border-color: #1d2233;

    }



    * {

        box-sizing: border-box;

    }



    body {

        margin: 0;

        font-family: var(--font-primary);

        background-color: var(--brand-color);

        color: var(--white-color);



        /* background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/Backgrounds.png'); */

        background-repeat: no-repeat;

        background-size: 100% 100%;

        /* stretch width, height auto */

    }




    /* ===== CONTAINER WIDTHS (Bootstrap-like breakpoints) ===== */
    .container-custom {
        width: 100%;
        margin: 0 auto;
        padding: 0 20px;
    }

    @media (min-width: 576px) {
        .container-custom {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container-custom {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container-custom {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container-custom {
            max-width: 1140px;
        }
    }

    @media (min-width: 1400px) {
        .container-custom {
            max-width: 1320px;
        }
    }


    .advantage-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 15px;
    }

    .advantage-item img {
        width: 22px;
        height: 22px;
    }

    .column-right-text span {
        font-size: 1rem;
        color: rgba(255, 244, 228, 0.9);
    }





    /*  */
    /* Responsive */
    @media (max-width: 992px) {

        .cfd-faq-section,
        .cfd-start-trading-container {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 3rem;
        }

        .cfd-start-trading-right {
            align-items: center;
        }

        .feature {
            justify-content: center;
            text-align: left;
        }
    }

    /* ===MISSION VISION  */

    .mission-vision-section {
        background: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/mission back.png') center/cover no-repeat;
        background-color: #000;
        padding: 50px 20px;
        position: relative;
    }

    .container {
        margin: 0 auto;
        max-width: 1000px;
        text-align: center;
    }

    .section-title {
        display: inline-block;
        padding: 16px 40px;
        font-weight: 600;
        font-size: 50px;
        color: #fff;
    }

    .mission-vision-boxes {
        gap: 30px;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 40px;
        justify-content: center;
    }

    .box {
        border: 1px solid #A89469;
        background-color: #0B0D16;
        border-radius: 12px;
        padding: 30px 24px;
        text-align: left;
        flex: 1 1 420px;
    }

    .box h3 {
        color: #fff;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .box p {
        color: #C6C8D0;
        line-height: 1.6;
        font-size: 15px;
    }

    /* Core Values Section */
    .core-values {
        border: 1px solid #A89469;
        background-color: #0B0D16;
        padding: 35px 30px;
        border-radius: 12px;
        text-align: left;
    }

    .core-values h3 {
        color: #fff;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .value-item {
        margin-bottom: 20px;
    }

    .value-item strong {
        color: #fff;
        display: block;
        font-size: 16px;
        margin-bottom: 6px;
    }

    .value-item p {
        line-height: 1.6;
        font-size: 15px;
        color: #C6C8D0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .mission-vision-boxes {
            flex-direction: column;
        }

        .section-title {
            font-size: 20px;
            padding: 12px 30px;
        }
    }

    /* ===== Contact Section ===== */
    .contact-section {
        padding: 0 5rem;
        padding-bottom: 4rem;
        color: #fff;
    }

    .contact-container {
        display: flex;
        flex-wrap: wrap;
        gap: 3rem;
        align-items: flex-start;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* ===== Left Side ===== */
    .contact-info {
        flex: 1 1 45%;
    }

    .contact-info h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .contact-info p {
        color: #e2e2e2;
        line-height: 1.6;
        margin-bottom: 2rem;
        max-width: 500px;
    }

    .contact-image img {
        width: 100%;
        max-width: 450px;
        border-radius: 1rem;
        display: block;
    }

    /* ===== Right Side ===== */
    .contact-form {
        flex: 1 1 45%;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .contact-form label {
        font-size: 0.9rem;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        margin-bottom: 0.3rem;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        background: #fff;
        color: #000;
        border: none;
        padding: 0.9rem 1rem;
        border-radius: 0.5rem;
        font-size: 1rem;
        outline: none;
    }

    .contact-form textarea {
        min-height: 120px;
        resize: vertical;
    }

    /* ====stop showing top response ===== */
    .wpcf7 .wpcf7-response-output {
        display: none;
    }

    /* ===== Button ===== */

    .contact-form button:hover {
        background-color: #f5d7a7;
        transform: translateY(-2px);
    }

    /* Remove default CF7 paragraph spacing */
    .wpcf7 form p {
        margin: 5px 0;
        text-align: left;
    }

    /* Align only the last paragraph (which contains the button) */
    .wpcf7 form p:last-of-type {
        text-align: right;
    }

    /* Fix CF7 button alignment */
    .contact-form form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    /* Target CF7 submit button specifically */
    .wpcf7input[type="submit"],
    .wpcf7 button {
        background-color: #fff4e4;
        color: #000;
        border: none;
        padding: 0.9rem 2rem;
        border-radius: 9999px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1rem;
        align-content: center;
    }


    /* ===== Responsive ===== */
    @media (max-width: 900px) {
        .contact-container {
            flex-direction: column;
            align-items: center;
        }

        .contact-info,
        .contact-form {
            flex: 1 1 100%;
        }

        .contact-form {
            width: 100%;
            max-width: 500px;
        }
    }



    /* ===== SECTION SPACING ===== */
    .card-section,
    .feature2-section {
        width: 100%;
        padding: 80px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card-section h1 {
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 25px;
        text-align: center;
        color: #fff;
    }

    /* ===== CONTAINER WIDTH RULES ===== */
    .feature-grid,
    .features2 {
        display: grid;
        gap: 2rem;
        width: 100%;
        margin: 0 auto;
        justify-content: center;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }

    /* Bootstrap-like responsive widths */
    @media (min-width: 576px) {

        .feature-grid,
        .features2 {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {

        .feature-grid,
        .features2 {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {

        .feature-grid,
        .features2 {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {

        .feature-grid,
        .features2 {
            max-width: 1140px;
        }
    }

    @media (min-width: 1400px) {

        .feature-grid,
        .features2 {
            max-width: 1320px;
        }
    }

    /* ===== CARD STYLING ===== */
    .feature-card {
        background-color: rgba(255, 244, 228, 0.2);
        padding: 1.8rem;
        height: 360px;
        border-radius: 1.5rem;
        border: 1px solid rgb(55, 65, 81);
        display: flex;
        flex-direction: column;
        transition: 0.3s ease;
    }

    .feature-card:hover {
        border-color: #a89469;
        transform: translateY(-6px);
    }

    .feature-icon {
        background: #a89469;
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #fff;
    }

    .feature-description {
        color: rgb(209, 213, 219);
        font-size: 1rem;
        line-height: 1.55;
        margin-bottom: auto;
    }

    /* BUTTON FIX */
    .btn-primary {
        color: #000;
        background: #fff0d6;
        padding: 12px 28px;
        border-radius: 30px;
        font-weight: 600;
        display: inline-flex;
        align-self: flex-start;
        transition: 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary:hover {
        background: #ffe1a8;
    }

    /* ===== MOBILE RESPONSIVE ===== */
    @media (max-width: 768px) {
        .feature-card {
            height: auto;
            text-align: left;
            padding: 1.4rem;
        }

        .btn-primary {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 520px) {
        .feature-title {
            text-align: left;
        }
    }


    .about-page-section {

        margin: 0;
        font-family: var(--font-primary);
        background-color: var(--brand-color);
        color: var(--white-color);
        background-position-y: -100px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/Backgrounds.png');
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>

<body>
    <div class="about-page-section">

        <?php 
    get_template_part('template-parts/about-widgets/about-us-hero-section');
    get_template_part('template-parts/about-widgets/company-overview');
    get_template_part('template-parts/about-widgets/our-leadership-team');
    ?>

        <section class="mission-vision-section">
            <div class="container">
                <h3 class="section-title">Our Mission, Vision & Values</h3>

                <div class="mission-vision-boxes">
                    <div class="box">
                        <h3>Our Mission</h3>
                        <p>
                            To create a trading environment where integrity, transparency, and performance define every
                            client interaction, from account opening to order execution.
                        </p>
                    </div>

                    <div class="box">
                        <h3>Our Vision</h3>
                        <p>
                            To become the benchmark for boutique financial services: balancing cutting-edge innovation
                            with
                            regulatory discipline, while expanding fair access to global markets for traders worldwide.
                        </p>
                    </div>
                </div>

                <div class="core-values">
                    <h3>Our Core Values</h3>
                    <div class="value-item">
                        <strong>Trust</strong>
                        <p>Your capital and data are protected through segregated accounts, tier-one banking
                            partnerships,
                            and
                            <br>
                            strict regulatory oversight.
                        </p>
                    </div>

                    <div class="value-item">
                        <strong>Discipline</strong>
                        <p>We operate with institutional rigor, a long-term focus, and a commitment to sustainable
                            growth.
                        </p>
                    </div>

                    <div class="value-item">
                        <strong>Clarity</strong>
                        <p>No hidden fees. No confusing jargon. Just straightforward pricing, transparent terms, and
                            honest
                            <br>
                            communication at every touchpoint.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php  
    get_template_part('template-parts/about-widgets/regulatory-credentials');
    ?>


        <section class="card-section">
            <h1>Why Trade With Lunaro Markets </h1>
            <div class="feature-grid">
                <!-- Card 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg"
                            alt="Lightning Fast Icon">
                    </div>
                    <h3 class="feature-title">Regulated & Secure</h3>
                    <p class="feature-description">
                        Your capital is protected under FCA and FSRA regulations. Funds are are held in segregated (non
                        title transfer) accounts, with negative balance protection for retail clients and transparent
                        risk
                        disclosures.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="feature-card">

                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                            alt="Trusted and Regulated Icon">
                    </div>
                    <h3 class="feature-title">Institutional Grade <br>Infrastructure</h3>
                    <p class="feature-description">
                        Access the same technology used by professional trading desks: ultra-low latency execution, deep
                        liquidity from multiple providers, and enterprise-level platform stability, built to perform
                        during
                        high volatility.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                            alt="Trusted and Regulated Icon">
                    </div>
                    <h3 class="feature-title">Client First Service</h3>
                    <p class="feature-description">
                        Unlike high-volume brokers, we maintain direct client relationships. You'll work with
                        experienced
                        professionals who understand markets and provide tailored support, not automated responses.
                    </p>
                </div>





            </div>

        </section>
        <section class="feature2-section">
            <div class="features2">
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                            alt="Trusted and Regulated Icon">
                    </div>
                    <h3 class="feature-title">FAQs</h3>
                    <?php
                        // get the country from session or default to 'uk'
                        $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
                        if ($country === 'uae') {

                    ?>
                    <!-- uae -->
                    <p class="feature-description">
                        Find answers to common questions about our platforms, CFDs, ETDs, and how to get started with
                        Lunaro.
                    </p>
                      <?php
                        } else {

                    ?>
                    <!-- uk -->
                    <p class="feature-description">
                        Find answers to common questions about our platforms,
                        CFDs, Spread Betting, and how to get started with Lunaro.
                    </p>
                      <?php
                      }
                    ?>
                    <a href="faqs/"> <button class="btn-primary">Read FAQs</button></a>
                </div>

                <!-- Card 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                            alt="Trusted and Regulated Icon">
                    </div>
                    <h3 class="feature-title">Pricing and Fees</h3>
                    <p class="feature-description">
                        Explore our transparent pricing structure across a range of financial products, with clear
                        spreads and no
                        hidden charges or surprises.
                    </p>
                    <a href="trading/"><button class="btn-primary">Start Trading</button></a>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="contact-container">
                <!-- Left Side -->
                <div class="contact-info">
                    <h2>Contact us</h2>
                    <p>
                        Connect with our experienced professionals for direct access to personalised support
                        and guidance with your trading needs and goals.
                    </p>
                    <div class="contact-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/contact.png"
                            alt="Contact professionals">
                    </div>
                </div>


                <!-- Right Side -->
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="c37560b" title="Contact us"]'); ?>
                </div>
            </div>
        </section>

        <?php 
     load_country_footer();
    ?>

</body>

</html>