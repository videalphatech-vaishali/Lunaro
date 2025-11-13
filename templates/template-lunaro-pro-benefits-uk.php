<?php

/**
 * Template Name: Lunaro Pro Benefits UK
 *
 * @package WordPress
 * @subpackage YourThemeName
 */ 

     get_header('logo');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunaro Benefits UK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'DM Sans', sans-serif;
        }

        :root {
            --font-family: 'DM Sans', sans-serif;
        }

        .lunaro-benefits-uk-body {
            background-color: #0d0f1a;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0px 20px;
        }





        /* =============================
       LUNARO PRO HERO SECTION
    ============================= */

        .lunaro-herocontainer {
            width: 100%;
        }

        .lunaro-hero {
            width: 100%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 80px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 60px;
        }

        /* LEFT TEXT CONTENT */
        .lunaro-text {
            flex: 1;
        }

        .lunaro-text h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .lunaro-text p {
            font-size: 1rem;
            line-height: 1.8;
            color: #dcdcdc;
            max-width: 500px;
        }

        /* RIGHT IMAGE BOX */
        .lunaro-image {
            flex: 1;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .lunaro-image img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            display: block;
        }



        /* =============================
       RESPONSIVE BREAKPOINTS
    ============================= */

        /* Extra Small (<576px) */
        @media (max-width: 575.98px) {
            .lunaro-hero {
                flex-direction: column;
                padding: 60px 15px;
                text-align: center;
            }

            .lunaro-text h1 {
                font-size: 2rem;
                margin-bottom: 15px;
            }

            .lunaro-text p {
                font-size: 0.95rem;
                margin: 0 auto;
            }

            .lunaro-image {
                width: 100%;
            }

            .lunaro-tag {
                bottom: 10px;
                left: 10px;
                font-size: 0.85rem;
            }
        }

        /* Small (≥576px) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            .lunaro-hero {
                flex-direction: column;
                max-width: 540px;
                text-align: center;
            }

            .lunaro-text h1 {
                font-size: 2.2rem;
            }

            .lunaro-image {
                max-width: 100%;
            }
        }

        /* Medium (≥768px) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .lunaro-hero {
                flex-direction: row;
                max-width: 720px;
                gap: 40px;
            }

            .lunaro-text h1 {
                font-size: 2.4rem;
            }
        }

        /* Large (≥992px) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .lunaro-hero {
                max-width: 960px;
                gap: 50px;
            }
        }

        /* X-Large (≥1200px) */
        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .lunaro-hero {
                max-width: 1140px;
            }
        }

        /* XX-Large (≥1400px) */
        @media (min-width: 1400px) {
            .lunaro-hero {
                max-width: 1320px;
            }
        }








        /* benefits section start here */


        .benefits-section {
            width: 100%;
            padding: 80px 0px;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            gap: 60px;
            /* Increased overall section gap */
        }

        .benefits-header h2 {
            font-size: 2.3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #FFF4E4;
            font-family: var(--font-family);
        }

        .benefits-header p {
            color: #bdbdbd;
            font-size: 1.05rem;
            line-height: 1.7;
            max-width: 480px;
        }

        .benefits-list {
            display: flex;
            flex-direction: column;
            gap: 35px;
            /* More space between each benefit */
            margin-top: 20px;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: 25px;
            /* Increased space between icon and text */
            color: #fff;
        }

        .benefit-icon {
            background-color: #bfa46f;
            color: #000;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
            flex-shrink: 0;
        }

        .benefit-text {
            font-size: 1.05rem;
            color: #eee;
            line-height: 1.6;
        }

        /* ========== SIDE BY SIDE ON LARGE SCREENS ========== */
        @media (min-width: 992px) {
            .benefits-section {
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-start;
                gap: 120px;
                /* MORE GAP BETWEEN LEFT & RIGHT */
            }

            .benefits-header {
                flex: 1;
            }

            .benefits-list {
                flex: 1;
                margin-top: 0;
            }
        }

        /* ========== RESPONSIVE BREAKPOINTS ========== */
        @media (max-width: 575.98px) {
            .benefits-header h2 {
                font-size: 1.7rem;
            }

            .benefit-item {
                align-items: flex-start;
            }

            .benefit-text {
                font-size: 0.95rem;
            }

            .benefits-section {
                gap: 50px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .benefits-section {
                padding: 0 10px;
                gap: 55px;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .benefits-section {
                flex-direction: column;
                gap: 70px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .benefits-section {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {
            .benefits-section {
                max-width: 1320px;
                gap: 150px;
                /* Even more breathing room on very large screens */
            }
        }

        .services-section {
            width: 100%;
            padding: 80px 0px;
        }

        .services-section h2 {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: #f5f4fa;
            margin-bottom: 50px;
        }

        .service-card {
            display: flex;
            align-items: center;

            border-radius: 16px;
            margin-bottom: 30px;
            overflow: hidden;
            transition: all 0.3s ease;
            gap: 39px;
        }


        .service-image {
            width: 45%;
            height: 230px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .service-content {
            width: 55%;
            padding: 30px;
        }

        .service-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #fff;
        }

        .service-content p {
            font-size: 0.95rem;
            color: #ccc;
            line-height: 1.6;
        }

        .service-content small {
            display: block;
            font-size: 0.8rem;
            color: #fff;
            margin-top: 8px;
        }

        /* ========= RESPONSIVE BREAKPOINTS ========= */

        @media (max-width: 575.98px) {
            .services-section h2 {
                font-size: 1.5rem;
            }

            .service-card {
                flex-direction: column;
            }

            .service-image,
            .service-content {
                width: 100%;
            }

            .service-image {
                height: 200px;
            }

            .service-content {
                padding: 20px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .service-card {
                flex-direction: column;
            }

            .service-image,
            .service-content {
                width: 100%;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .service-card {
                flex-direction: row;
            }

            .service-image {
                width: 40%;
            }

            .service-content {
                width: 60%;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .service-image {
                width: 45%;
            }

            .service-content {
                width: 55%;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .services-section {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {
            .services-section {
                max-width: 1320px;
            }
        }
        /* exclusive section css start here */



    .article {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
      padding: 20px;
      max-width: 1320px;
      margin: auto;
    }

    .article-feature {
      
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      display: flex;              
      align-items: flex-start;   
      gap: 20px;                 
    }

    .article-feature h2 {
      flex: 0 0 250px;           
      font-size: 1.5rem;
      margin: 0;
      color: #fff;
      line-height: 1.1; 
    }

    .article-feature p {
      flex: 1;                    
      font-size: 1rem;
      line-height: 1.6;
      color: #fff;
      margin: 0;
    }

   

    /* Extra small screens (≤576px) */
    @media (max-width: 576px) {
        .article{
            padding: 0;
        }
      .article-feature {
        flex-direction: column;   
        display: block;
        padding: 0;
      }
      .article-feature h2 {
        font-size: 1.2rem;
        margin-bottom: 20px;
      }
      .article-feature p {
        font-size: 0.9rem;
      }
    }

    /* Medium screens (≥768px) */
    @media (min-width: 768px) {
      .article {
        grid-template-columns: 1fr;
      }
    }

    /* Large screens (≥992px) */
    @media (min-width: 992px) {
      .article {
        grid-template-columns: 1fr ;
      }
    }

    /* Extra Large (≥1200px) */
    @media (min-width: 1200px) {
      .article {
        grid-template-columns: 1fr;
      }
    }










        .exclusive-services {
            width: 100%;
            max-width: 1320px;
            padding: 60px 0px;
            text-align: center;
        }

        .exclusive-services h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 50px;
            color: #f7f2e8;
        }


        .exclusive-services-cards {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
        }


        .exclusive-card {
            background-color: #FFF4E433;
            border-radius: 20px;
            flex: 1;
            min-width: 280px;
            padding: 40px 30px;
            text-align: left;
            transition: all 0.3s ease;
        }

        .exclusive-icon {
            background-color: #A89469;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .exclusive-icon img {
            width: 24px;
            height: 24px;
        }

        /* ===========================
       CARD TITLE & TEXT
    ============================ */
        .exclusive-card h3 {
            font-size: 26px;
            font-weight: 700;
            color: #FFF4E4;
            margin-bottom: 15px;
        }

        .exclusive-card p {
            font-size: 1rem;
            line-height: 1.6;
            color: #FFF4E4;
        }

        /* ===========================
       RESPONSIVE BREAKPOINTS
    ============================ */

        /* Extra Small Devices (<576px) */
        @media (max-width: 575.98px) {
            .exclusive-services {
                padding: 40px 15px;
            }

            .exclusive-services h2 {
                font-size: 1.5rem;
                margin-bottom: 30px;
            }

            .exclusive-services-cards {
                flex-direction: column;
                gap: 20px;
                align-items: center;
            }

            .exclusive-card {
                width: 100%;
                max-width: 100%;
                padding: 25px 20px;
            }

            .exclusive-card h3 {
                font-size: 1.1rem;
            }

            .exclusive-card p {
                font-size: 0.9rem;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .exclusive-services {
                max-width: 540px;
            }

            .exclusive-services-cards {
                flex-direction: column;
                gap: 25px;
                align-items: center;
            }

            .exclusive-card {
                max-width: 480px;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .exclusive-services {
                max-width: 720px;
            }

            .exclusive-services-cards {
                justify-content: center;
                flex-wrap: wrap;
            }

            .exclusive-card {
                flex: 1 1 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .exclusive-services {
                max-width: 960px;
            }

            .exclusive-services-cards {
                justify-content: space-between;
            }

            .exclusive-card {
                flex: 1 1 calc(33.333% - 20px);
            }
        }

        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .exclusive-services {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {
            .exclusive-services {
                max-width: 1320px;
            }
        }






























        .account-comparsion {
            background-color: #0d0f1a;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 40px 20px;
            width: 100%;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        p.subtitle {
            color: #aaa;
            margin-bottom: 40px;
            text-align: center;
            max-width: 600px;
        }

        .comparison-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1140px;
        }

        .card {
            flex: 1 1 45%;
            background-color: #1b1e2b;
            border-radius: 16px;
            padding: 30px;
            min-width: 300px;
            transition: all 0.3s ease;
        }

        .card.pro {
            background-color: #E6E7F0;
            color: #000;

        }

        .card h2 {
            font-size: 2.1rem;
            margin-bottom: 10px;
            font-weight: 700;
            font-family: var(--font-family);
            line-height: 1.1;
            letter-spacing: -3% !important;
        }

        .card p.desc {
            color: #bbb;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .card.pro p.desc {
            color: #555;
        }

        .card button {
            background: none;
            color: inherit;
            border: 1px solid currentColor;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 20px;
            width: 100%;
        }


        .account-information{
            margin-top: 30px;
        }

        .account-information p{
            color: #fff;
            line-height: 1.1;
            margin-bottom: 20px;
            font-style: italic;
            font-size: 10px;
            font-family: var(--font-family);

        }

        .professional-btn {
            background: #3C4066 !important;
            color: white !important;
        }

        .features {
            list-style: none;
            margin-top: 10px;
        }

        .features li {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 0.95rem;
            border-bottom: 1px solid white;
            padding: 10px 0px;
        }

        .lunaro-features li {
            border-bottom: 1px solid black;
            padding: 10px 0px;
        }

        .features li::before {
            content: "✔";
            margin-right: 10px;
            color: #000;
            width: 24px;
            height: 24px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .lunaro-features li::before {
            content: "✔";
            margin-right: 10px;
            color: #fff;
            width: 24px;
            height: 24px;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .footer-btn {
            background-color: #f5f4fa;
            color: #000;
            border: none;
            padding: 14px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 40px;
        }

        /* ========= RESPONSIVE BREAKPOINTS ========= */
        @media (max-width: 575.98px) {
            h1 {
                font-size: 1.6rem;
            }

            .comparison-container,
            .account-comparsion {
                flex-direction: column;
            }

            .card {
                flex: 1 1 100%;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .card {
                flex: 1 1 100%;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .card {
                flex: 1 1 48%;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .card {
                flex: 1 1 45%;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399.98px) {

            .comparison-container,
            .account-comparsion {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {

            .comparison-container,
            .account-comparsion {
                max-width: 1320px;
            }
        }





    </style>
</head>

<body>

<section class="lunaro-benefits-uk-body">
    <section class="lunaro-herocontainer">

        <div class="lunaro-hero">
            <!-- Left Content -->
            <div class="lunaro-text">
                <h1>Lunaro Pro</h1>
                <p>
                    Unlock Institutional-grade tools designed for professional
                    traders. Access enhanced leverage, reduced margins and dedicated
                    account support that serious traders demand
                </p>
            </div>

            <!-- Right Image -->
            <div class="lunaro-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lunaro-hero.png" alt="lunaro.png">

            </div>
        </div>
    </section>

    <section class="benefits-section">
        <div class="benefits-header">
            <h2>Lunaro Pro benefits</h2>
            <p>
                Experience the advantages that set professional traders apart from retail investors.
            </p>
        </div>

        <div class="benefits-list">
            <div class="benefit-item">
                <div class="benefit-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-circle.png" alt=""></div>
                <div class="benefit-text">Enhanced leverage up to 250:1 on major pairs</div>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bar-chart-07.png" alt=""></div>
                <div class="benefit-text">Reduced margin requirements from 0.4%</div>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-question-circle.png" alt="message-question-circle"></div>
                <div class="benefit-text">Dedicated relationship manager</div>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-check-01.png" alt="user-check"></div>
                <div class="benefit-text">Invites to exclusive events</div>
            </div>
        </div>
    </section>




      <div class="article">
    <div class="article-feature">
      <h2>Higher Leverage</h2>
      <p>Trade with enhanced leverage ratios up to 250:1 on
         major currency pairs and 250:1 on indices, allowing you to maximise
         capital efficiency and trading opportunities. Please note that while
         higher leverage increases profit potential, it equally amplifies potential
         losses</p>
    </div>

    <div class="article-feature">
      <h2>Reduced Margin Requirements</h2>
      <p>Benefit from significantly lower margin requirements starting from 0.4% on major forex pairs, enabling you to diversify positions and optimize portfolio allocation.</p>
    </div>

    <div class="article-feature">
      <h2>VIP Events & Hospitality</h2>
      <p>Enjoy exclusive access to premium lifestyle and entertainment experiences, alongside invitations to private trading seminars and market insight events. Designed to connect our professional clients through a blend of networking and world-class hospitality.</p>
    </div>
  </div>





    <section class="exclusive-services">
        <h2>Exclusive Services</h2>

        <div class="exclusive-services-cards">
            <!-- Card 1 -->
            <div class="exclusive-card">
                <div class="exclusive-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bank-note-03.png" alt="Cash Rebate Icon">
                </div>
                <h3>Cash Rebate Programs</h3>
                <p>
                    Earn monthly cash rebates based on trading volumne across forex and indices markets, with tiers starting from $5M monthly notional volumne, 
                    subject to conditions.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="exclusive-card">
                <div class="exclusive-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.png" alt="VIP Events Icon">
                </div>
                <h3>VIP Events & Hospitality</h3>
                <p>
                    Receive invitations to exclusive trading seminars, market outlook events, and networking opportunities with fellow professional traders.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="exclusive-card">
                <div class="exclusive-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coins-stacked-01.png" alt="Credit Facilities Icon">
                </div>
                <h3>Credit Facilities</h3>
                <p>
                    Subject to approval, access credit facilities to optimise your trading capital and enhance position
                    flexibility.
                </p>
            </div>
        </div>
    </section>

    <section class="services-section">
        <h2>Professional Support & Services</h2>

        <div class="service-card">
            <div class="service-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Relationship_manager.png" alt="Manager">
            </div>
            <div class="service-content">
                <h3>Dedicated Relationship Manager</h3>
                <p>Receive personalised service from your assigned relationship manager who understands your trading
                    style and provides tailored market insights and account optimisation.</p>
            </div>
        </div>

        <div class="service-card">
            <div class="service-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Trade_execution.png" alt="Trade Execution">
            </div>
            <div class="service-content">
                <h3>Enhanced Trade Execution</h3>
                <p>Benefit from fast order routing and deep liquidity access designed for consistent performance during
                    both normal and volatile market conditions.*</p>
                <small>*Execution speeds vary based on market conditions, order characteristics, and infrastructure
                    factors. Historical average execution speeds are approximately 67ms, though individual experiences
                    may differ. Past performance is not indicative of future results</small>
            </div>
        </div>

        <div class="service-card">
            <div class="service-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Trading_tools.png" alt="Trading Tools">
            </div>
            <div class="service-content">
                <h3>Advanced Trading Tools</h3>
                <p>Access professional-grade analysis tools, real-time market data feeds, and algorithmic trading
                    capabilities designed for sophisticated strategies.</p>
            </div>
        </div>

    </section>


    <section class="account-comparsion">
        <h1>Account Comparison</h1>
        <p class="subtitle">Compare the enhanced benefits and features available with Lunaro Pro versus our standard
            retail trading account.</p>

        <div class="comparison-container">
            <div class="card">
                <h2>Standard Account</h2>
                <p class="desc">For teams to grow with clarity, consistency, and cost efficiency.</p>
                <button>Get Started</button>
                <ul class="features">
                    <li>Maximum Leverage: 30:1 (FCA Retail Limit)</li>
                    <li>Minimum Spread: From 0.34 pips</li>
                    <li>Rebate: No rebate</li>
                    <li>Margin Requirements: 3.33% minimum</li>
                    <li>Account Manager: General Support</li>
                    <li>Advanced Tools: Basic Platform features</li>
                    <li>Market Access: All retail products</li>
                    <li>Negative Balance Protection: Protected</li>
                    <li>Regulatory Protection: Full FCA retail protection</li>
                </ul>
            </div>

            <div class="card pro">
                <h2>Lunaro Pro</h2>
                <p class="desc">For teams aiming with performance, precision, and strategy.</p>
                <button class="professional-btn">Create Professional Account</button>
                <ul class="features lunaro-features">
                    <li>Maximum Leverage: Up to 250:1</li>
                    <li>Minimum Spread: From 0.34 pips</li>
                    <li>Rebate: Up to 33.3%</li>
                    <li>Margin Requirements: From 0.4%</li>
                    <li>Account Manager: Dedicated relationship manager</li>
                    <li>Advanced Tools: Professional trading suite</li>
                    <li>Market Access: Additional professional products</li>
                    <li>Negative Balance Protection: Losses may exceed deposits</li>
                    <li>Regulatory Protection: Reduced professional protections</li>
                </ul>
            </div>
        </div>



        <div class="account-information">
            <p>*Professional Client Notice: As a professional client, you are not entitled to negative balance protection under FCA rules. This means you may lose more than your account balance if adverse market movements occur. You must have adequate risk management procedures in place and maintain sufficient capital to meet potential margin calls.</p>
            <p>****Important Regulatory Disclosure: Professional clients receive significantly reduced regulatory protections compared to retail clients under FCA rules (COBS 3.5). Key differences include: no negative balance protection - You may lose more than your deposits; Reduced appropriateness assessments - Less obligation on us to assess product suitability; Different best execution standards - Best execution appropriate to professional sophistication levels; Limited access to Financial Ombudsman Service - Complaints may not be eligible for FOS adjudication; FSCS protection limits may differ - Financial Services Compensation Scheme coverage may be reduced or unavailable for certain claim types; Risk warnings; higher leverage; different rules for communications and financial promotions; Assumed level of experience to this list. You must acknowledge in writing that you understand these reduced protections before we can categorise you as a professional client.</p>

        </div>

        <button class="footer-btn">Create Professional Account</button>

    </section>


    
</section>

        <?php
  load_country_footer();
    ?>
</body>

</html>