<?php

/**
 * Template Name: Lunaro Pro Benefits UAE
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
    <title>Lunaro Benefits UAE</title>
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

        .lunaro-benefits-uae-body {
            background-color: #0d0f1a;
            color: #fff;
            display: flex; 
            align-items: center;
            flex-direction: column; 
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
    </style>
</head>

<body>

<section class="lunaro-benefits-uae-body">

    <section class="lunaro-herocontainer">
        <div class="lunaro-hero">
            <!-- Left Content -->
            <div class="lunaro-text">
                <h1>Lunaro Pro</h1>
                <p>
                    Unlock professional-grade tools designed for active traders. Access enhanced leverage, reduced
                    margins,
                    and dedicated account support that serious traders demand.
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
                <div class="benefit-text">Enhanced leverage up to 1:500 on major pairs</div>
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
      <p>Trade with enhanced leverage ratios up to 150:1 on major currency pairs and 1500:1 on indices, allowing you to maximize capital efficiency and trading opportunities. Please note that while higher leverage increases profit potential, it equally amplifies potential losses.</p>
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





  

    <section class="services-section">
        <h2>Professional Support & Services</h2>

        <div class="service-card">
            <div class="service-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Relationship_manager.png" alt="Manager">
            </div>
            <div class="service-content">
                <h3>Dedicated Relationship Manager</h3>
                <p>Receive personalized service from your assigned relationship manager who understands your trading
                    style and provides tailored market insights and account optimization.</p>
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


</section>  
    <?php
  get_footer();
    ?>
  
</body>

</html>  