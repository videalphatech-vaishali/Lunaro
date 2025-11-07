<?php

/**
 * Template Name: Trading Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <title>Hero Section</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --font-primary: "DM Sans", sans-serif;
            --brand-color: #FFF4E4;
            --dark-brand-color: #A89469;
            --black-color: #0B0D16;
        }


        body {
            
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
            color: #111;
            background-color: #000;
        }

        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 70vh;
            padding: 0 10px;
            flex-wrap: wrap;
        }

        .hero-left {
            width: 50%;
            padding: 30px 50px;
        }

        .hero-left h1 {

            margin-bottom: 20px;
            color: #FFF;
            font-family: var(--font-primary);
            font-size: 41px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: -0.03px;
        }

        .hero-left p {
            color: #FFF;
            font-family: var(--font-primary);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.42px;
        }

        .hero-right {
            width: 50%;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-right img {
            width: 100%;
            height: auto;
            max-width: 600px;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-left h1 {
                font-size: 2rem;
            }

            .hero-left p {
                font-size: 0.95rem;
            }

            .hero-right img {
                max-width: 450px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column-reverse;
                text-align: center;
                padding: 20px;
            }

            .hero-left,
            .hero-right {
                width: 100%;
                padding: 20px;
            }

            .hero-right img {
                width: 90%;
                max-width: 400px;
            }
        }

        @media (max-width: 480px) {
            .hero-left h1 {
                font-size: 1.7rem;
            }

            .hero-left p {
                font-size: 0.9rem;
            }

            .hero-right img {
                max-width: 320px;
            }
        }


        /* hero section end here */




        /* trading options start here */
        .trade-options {
            padding: 80px 0px;
            background-color: black;
        }

        .option-heading>h2 {
            text-align: center;
            font-family: var(--font-primary);
            color: var(--brand-color);
            font-size: 41px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: -1.23px;
        }

        .option-heading>p {
            color: var(--brand-color);
            text-align: center;
            font-family: var(--font-primary);
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;

        }

        .trade-option-card {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 24px;
            padding: 40px 20px;
            font-family: var(--font-primary);
            flex-wrap: wrap;
        }

        .trade-option-card>.card-body {
            flex: 1 1 300px;
            max-width: 450px;
            background: rgba(255, 244, 228, 0.2);
            padding: 24px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            transition: all 0.3s ease;
            border-radius: 40px;
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.06);
        }

        .trade-option-card>.card-body:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .card-body h2 {

            margin-bottom: 12px;
            text-align: start;
            color: var(--brand-color);




            font-family: var(--font-primary);
            font-size: 26px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;

        }

        .card-body p {
            margin: 0;
            color: var(--brand-color);
            text-align: start;
            font-family: var(--font-primary);
            color: var(--Brand-contrast-neutra, #FFF4E4);
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.42px;
        }


        .card-body button {
            margin-top: 20px;
            border-radius: 100px;
            background: var(--brand-color);
            color: black;
            border: none;
            padding: 18px 26px;
            width: 100%;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .card-body button:hover {
            background-color: #ececcc;
        }

        @media (max-width: 768px) {
            .trade-option-card {
                gap: 20px;
                padding: 20px 10px;
            }

            .card-body {
                padding: 20px;
            }
        }

        /* trading options end here */








        /* Section Container */
        .kf-section {
            width: 100%;
            padding: 80px 60px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 40px;
            box-sizing: border-box;
        }

        /* Text Section */
        .kf-textsection {
            flex: 1 1 350px;
            display: flex;
            flex-direction: column;
            align-items: baseline;
            gap: 24px;
        }

        .kf-textsection h2 {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: clamp(24px, 2.5vw, 33px);
            font-weight: 700;
            line-height: 1.5;
            letter-spacing: -0.5px;
        }

        .kf-textsection p {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: clamp(12px, 1.2vw, 14px);
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: -0.4px;
        }

        .kf-textsection button {
            width: max-content;
            padding: 16px 32px;
            background: var(--brand-color);
            color: black;
            border-radius: 16px;
            font-size: 17px;
            font-weight: 600;
            line-height: 1.5;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .kf-textsection button:hover {
            background-color: #f0eae2;
            /* darker shade on hover */
        }

        /* Card Section */
        .kf-cardsection {
            text-align: start;
            flex: 1 1 350px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .kf-card {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .kf-card:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .kf-card .card-icon {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            display: flex;
            align-items: start;
            justify-content: center;
        }

        .kf-card .card-text h5 {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .kf-card .card-text p {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
        }

        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .kf-section {
                padding: 60px 40px;
            }

            .kf-textsection,
            .kf-cardsection {
                flex: 1 1 45%;
            }
        }

        @media (max-width: 768px) {
            .kf-section {
                flex-direction: column;
                padding: 40px 20px;
                gap: 32px;
            }

            .kf-textsection,
            .kf-cardsection {
                flex: 1 1 100%;
            }

            .kf-textsection button {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .kf-textsection h2 {
                font-size: 22px;
            }

            .kf-textsection p {
                font-size: 12px;
            }

            .kf-card .card-text h5 {
                font-size: 15px;
            }

            .kf-card .card-text p {
                font-size: 13px;
            }

            .kf-card {
                gap: 12px;
            }

            .kf-card .card-icon {
                width: 30px;
                height: 30px;
            }
        }




        /* Section container */
        .assets-section {
            width: 100%;
            padding: 80px 60px;
            box-sizing: border-box;
        }

        /* Heading and paragraph */
        .assets-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .assets-section-header h2 {
            font-family: var(--font-primary);
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 700;
            color: var(--brand-color);
            margin-bottom: 20px;
        }

        .assets-section-header p {
            font-family: var(--font-primary);
            font-size: clamp(14px, 1.5vw, 16px);
            color: var(--brand-color);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.5;
        }

        /* Cards container */
        .assets-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            justify-content: center;
        }

        /* Individual card */
        .assets-card {
            padding: 24px;
            flex: 1 1 calc(33.333% - 24px);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            gap: 12px;

            border-radius: 40px;
            background: rgba(230, 231, 240, 0.10);
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.06);
        }

        .assets-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Card text */
        .assets-card h5 {
            font-family: var(--font-primary);
            font-weight: 700;
            font-size: 26px;
            color: var(--brand-color);
            margin-bottom: 10px;
            line-height: 150%;
            letter-spacing: -0.78px;
        }

        .assets-card p {
            font-family: var(--font-primary);
            font-size: 14px;
            color: var(--brand-color);
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.42px;
            margin-bottom: 10px;
        }

        /* Button */
        .assets-card button {
            padding: 12px 24px;
            background: none;
            color: var(--brand-color);
            border: 1px solid var(--brand-color);
            /* defined with px */
            border-radius: 12px;
            font-family: var(--font-primary);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        /* .assets-card button:hover {
            background: #f1dcae;
            color: #fff;
        } */

        /* RESPONSIVE BREAKPOINTS */

        /* Tablets (2 cards per row) */
        @media (max-width: 1024px) {
            .assets-section {
                padding: 60px 40px;
            }

            .assets-card {
                flex: 1 1 calc(50% - 24px);
            }
        }

        /* Large Phones (1 card per row) */
        @media (max-width: 768px) {
            .assets-section {
                padding: 40px 20px;
            }

            .assets-card {
                flex: 1 1 100%;
            }

            .assets-card h5 {
                font-size: 22px;
            }

            .assets-card p {
                font-size: 13px;
            }
        }

        /* Small Phones (extra padding adjustment) */
        @media (max-width: 480px) {
            .assets-section {
                padding: 32px 16px;
            }

            .assets-card {
                padding: 20px;
                border-radius: 20px;
            }

            .assets-card button {
                padding: 10px 16px;
                font-size: 13px;
            }
        }




        /* start learn section */

        .learn-section {
            width: 100%;
            padding: 100px 60px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 60px;
            box-sizing: border-box;
        }

        /* Text container */
        .learn-txt-container {
            width: 45%;
            display: flex;
            flex-direction: column;
            gap: 24px;

        }

        /* Heading */
        .learn-txt-container>h2 {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: clamp(26px, 3vw, 36px);
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            letter-spacing: -0.99px;
        }

        /* Paragraphs */
        .learn-txt-container>div>p {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: 15px;
            font-weight: 400;
            line-height: 1.6;
            letter-spacing: -0.42px;
            margin-bottom: 16px;
        }

        /* Button */
        .learn-txt-container>button {
            font-family: var(--font-primary);
            color: var(--black-color);
            background: var(--brand-color);
            border: none;
            border-radius: 12px;
            font-size: 17px;
            font-weight: 600;
            line-height: 150%;
            letter-spacing: -0.51px;
            padding: 14px 26px;
            cursor: pointer;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .learn-txt-container>button:hover {
            background: var(--dark-brand-color);
            color: #fff;
        }

        .education-text>h2 {
            color: var(--brand-color);
            font-family: var(--font-primary);

            font-size: 17px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            letter-spacing: -0.51px;

        }

        /* List container */
        .learn-list-container {
            width: 35%;
        }

        /* Tablets (below 1024px) */
        @media (max-width: 1024px) {
            .trading-hero-section {
                padding:0;
            }
            .learn-section {
                flex-direction: column;
                align-items: center;
                padding: 60px 40px;
                gap: 40px;
            }

            .learn-txt-container,
            .learn-list-container {
                width: 100%;
            }

            .learn-txt-container {
                text-align: center;
                align-items: center;
            }

            .learn-txt-container>button {
                align-self: center;
            }
        }

        /* Large phones (below 768px) */
        @media (max-width: 768px) {
            .learn-section {
                padding: 40px 20px;
            }

            .learn-txt-container>h2 {
                font-size: 26px;
            }

            .learn-txt-container>div>p {
                font-size: 14px;
            }


        }

        /* Small phones (below 480px) */
        @media (max-width: 480px) {
            .learn-section {
                padding: 32px 16px;
                gap: 30px;
            }

            .learn-txt-container {
                gap: 16px;
            }

            .learn-txt-container>button {
                padding: 12px 20px;
                font-size: 15px;
            }
        }

        .fa-solid{
            color: #FFF4E4;
        }
    </style>
</head>

<body>

    <!-- hero section -->
    <!-- <div class="hero-section">
        <div class="hero-left">
            <h1>Learn how to trade with <br>confidence</h1>
            <p>
                Master the fundamentals of CFD trading and spread betting with Lunaro Markets' comprehensive educational
                resources. Whether you're new to financial markets or looking to enhance your trading skills, our
                expert-guided approach will help you trade with confidence.
            </p>
        </div>
        <div class="hero-right">
            <img src="./hero_bg.png" alt="Trading Education Image">
        </div>
    </div> -->


    <!-- TRADING OPTIONS -->
    <div class="trade-options">
        <div class="option-heading">
            <h2>Trading options</h2>
            <p>Discover the two primary ways to trade financial markets with Lunaro Markets. Each method offers unique
                advantages and is designed to suit different trading styles and objectives.</p>
        </div>

        <div class="trade-option-card">
            <!-- Card 1 -->
            <div class="card-body">
                <h2>CFD Trading</h2>
                <p>Explore our introductory materials for smarter money management.</p>
                <a href="/cfd-trading"><button>Learn more about CFD Trading</button></a>
            </div>

            <!-- Card 2 -->
            <div class="card-body">
                <h2>Exchange Trade Derivates</h2>
                <p>Schedule a consultation with one of our specialists to address all your inquiries.</p>
               <a href="/etd-trading"> <button>Learn more about ETDs</button></a>
            </div>
        </div>
    </div>

    <!-- KEY features -->
    <div class="kf-section">
        <!-- Text Section -->
        <div class="kf-textsection">
            <h2>Key features and benefits</h2>
            <p>New to trading? Check out our beginner's guide to get started with your first trade.</p>
            <button class="signup">Open an Account Today</button>
        </div>

        <!-- Card Section -->
        <div class="kf-cardsection">
            <div class="kf-card">
                <div class="card-icon">
                <i class="fa-solid fa-check-circle"></i>
                </div>
                <div class="card-text">
                    <h5>Comprehensive Learning Resources</h5>
                    <p>Access our library of trading guides, video tutorials, and market analysis reports created by
                        experienced professionals with decades of market expertise.</p>
                </div>
            </div>

            <div class="kf-card">
                <div class="card-icon">
                    <i class="fa-solid fa-check-circle"></i>
                </div>
                <div class="card-text">
                    <h5>Expert Market Analysis</h5>
                    <p>Get timely and in-depth market insights to help you make informed trading decisions, no matter
                        your experience level.</p>
                </div>
            </div>

            <div class="kf-card">
                <div class="card-icon">
                    <i class="fa-solid fa-check-circle"></i>
                </div>
                <div class="card-text">
                    <h5>Interactive Learning Tools</h5>
                    <p>Engage with our interactive tools and tutorials to practice strategies and learn at your own
                        pace.</p>
                </div>
            </div>
        </div>
    </div>
    <section style="background: linear-gradient(to bottom, #0B0D16 13.06%, #1E2F68 70.86%);">
    <!-- Assets to Trade -->
    <div class="assets-section">
        <div class="assets-section-header">
            <h2>Assets to Trade</h2>
            <p>Diversify your trading portfolio across multiple asset classes with Lunaro Markets. Our comprehensive
                range of tradable instruments provides opportunities in various market conditions and economic cycles.
            </p>
        </div>

        <div class="assets-grid">
            <div class="assets-card">
                <h5>Indices</h5>
                <p>Trade tge oerfirnabce if ebture sticj narjets ubckudubg UK100, US500, USTech100 and Germany40 with competitive spreads and flexible leverage.</p>
              <a href="/indices">  <button>Learn More</button></a>
            </div>
            <div class="assets-card">
                <h5>Forex</h5>
                <p>Trade gold, silver, oil, and agricultural products with transparent pricing and no hidden fees across
                    global commodity markets. </p>
                 <a href="/forex">  <button>Learn More</button></a>
            </div>
            <div class="assets-card">
                <h5>Commodities</h5>
                <p>Trade gold, silver, oil, and more with transparent pricing and no hidden fees.</p>
                  <a href="/commodities">  <button>Learn More</button></a>
            </div>
            <div class="assets-card">
                <h5>Shares</h5>
                <p>Individual company stocks from major global exchanges including US, UK, European, and Asian markets
                    with fractional trading available.</p>
                  <a href="/shares">  <button>Learn More</button></a>
            </div>
            <div class="assets-card">
                <h5>ETFs</h5>
                <p>Exchange-traded funds providing diversified exposure to sectors, regions, and investment themes with
                    low-cost access. </p>
                  <a href="/etfs">  <button>Learn More</button></a>
            </div>
            <div class="assets-card">
                <h5>Treasuries</h5>
                <p>Government bonds and interest rate products offering exposure to fixed income markets and interest
                    rate movements.</p>
                  <a href="/treasuries">  <button>Learn More</button></a>
            </div>
        </div>
    </div>

    <!-- Learn to trade -->
    <!-- <div class="learn-section">
        <div class="learn-txt-container">
            <h2>Learn to trade</h2>
            <div>
                <p class="first-txt">Building a solid foundation in trading principles is essential for long-term
                    success.
                    Our educational resources cover everything from basic market concepts to advanced trading
                    strategies,
                    designed to help you develop the knowledge and skills needed to navigate financial markets
                    effectively.
                </p>
                <p class="second-txt">Our step-by-step approach ensures you progress at your own pace while building
                    confidence in your trading abilities. From your first demo trade to developing advanced strategies,
                    we
                    provide the guidance and support you need to succeed.
                </p>
            </div>
            <button>Access Our Resources</button>
        </div>
        <div class="learn-list-container">
            <div class="kf-cardsection">
                <div class="education-text">
                    <h2>Educational Pathway</h2>
                </div>
                <div class="kf-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="card-text">
                        <h5>Market Fundamentals</h5>
                        <p>Understanding how financial markets operate</p>
                    </div>
                </div>

                <div class="kf-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="card-text">
                        <h5>Risk Management</h5>
                        <p>Protecting your capital with proper position sizing</p>
                    </div>
                </div>

                <div class="kf-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="card-text">
                        <h5>Technical Analysis</h5>
                        <p>Reading charts and identifying trading opportunities</p>
                    </div>
                </div>
                <div class="kf-card">
                    <div class="card-icon">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="card-text">
                        <h5>Trading Psychology</h5>
                        <p>Developing the mental discipline for consistent performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </section>
</body>
</html>