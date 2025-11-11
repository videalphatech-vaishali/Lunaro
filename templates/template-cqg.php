<?php



/**

 * Template Name: CQG Professional

 *

 * @package WordPress

 * @subpackage YourThemeName

 */


load_country_header();

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Trading Platforms</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600&display=swap" rel="stylesheet">
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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-primary);
        }

        /* ====================== GLOBAL ====================== */
        body {
            background-color: var(--brand-color);
            color:  #FFF4E4;
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/platform/Backgrounds.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
        }

        /* ====================== HERO SECTION ====================== */
        .tt-section {
            padding: 5rem 5rem;
            background: linear-gradient(135deg, #0d0d0d, #1a1a1a);
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Backgrounds.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .tt-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .tt-text {
            flex: 1;
            min-width: 280px;
        }

        .tt-text h1 {
            font-size: 2.5rem;
            color: #FFF4E4;
            line-height: 1.2;
        }

        .tt-text p {
            margin: 20px 0;
            color: #FFF4E4;
            line-height: 1.6;
            max-width: 600px;
        }

        .tt-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
            text-align: center;
        }

        .btn.primary {
            margin-top: 20px;
            background: #FFF4E4;
            color: #000;
        }

        .btn.primary:hover {
            background: #FFF4E4;
        }

        .tt-image {
            text-align: center;
        }

        .tt-image img {
            width: 100%;
            max-width: 450px;
            border-radius: 15px;
        }

        /* ====================== SOLUTIONS SECTION ====================== */
        .solution-section {
            padding: 5rem 5rem;
            background: radial-gradient(circle at center, #0f0f1a, #0a0a0f);
            text-align: center;
        }

        .solution-section h2 {
            font-size: 2rem;
            color: #FFF4E4;
        }

        .solution-section .intro {
            color: #FFF4E4;
            max-width: 900px;
            margin: 15px auto 40px;
            line-height: 1.6;
        }

        .solutions {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            gap: 25px;
        }

        .solution-card {
            padding: 25px;
            border-radius: 16px;
            max-width: 900px;
            transition: transform 0.3s ease;
            text-align: left;
        }

        .solution-card:hover {
            transform: translateY(-5px);
        }

        .solution-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .solution-card h3 {
            margin: 10px 0;
            color: #FFF4E4;
            font-size: 1.25rem;
        }

        .solution-card ul {
            text-align: left;
            color: #FFF4E4;
            margin: 15px 0;
            padding-left: 0;
            list-style: none;
        }

        .solution-card ul li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        .solution-card a {
            color: #FFF4E4;
            text-decoration: none;
            font-weight: 500;
        }

        .solution-card a:hover {
            text-decoration: underline;
        }

        /* ====================== TECHNOLOGY SECTION ====================== */
        .technology-section {
            padding: 5rem 5rem;
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Background2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }


        .tech-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }

        .left,
        .right {
            flex: 1;
            min-width: 300px;
            gap: 20px;
        }

        .left h1 {
            color: #FFF4E4;
            font-size: 2.0rem;
            margin-bottom: 15px;
        }

        .left h4 {
            font-weight: 500;
            margin: 25px 0;
            color: #FFF4E4;
            font-size: 1.2rem;

        }

        .left h2 {
            font-weight: 500;
            margin: 25px 0;
            color: #FFF4E4;
            font-size: 1.5rem;

        }

        .left p {
            color: #FFF4E4;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .svg-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
            list-style: none;
        }

        .bullets {
            padding: 15px 18px;
            border-radius: 10px;
            transition: background 0.3s ease;
        }

        .bullets:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .bullets .top {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #FFF4E4;
        }

        .bullets .bottom {
            color: #FFF4E4;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* ====================== DESKTOP SECTION ====================== */
        .desktop-section {
            display: flex;
            flex-wrap: wrap; 
            padding: 5rem 5rem;
            gap: 40px;

        }

        #cqg-mobile {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Background2.png');
            background-size: cover;
            /* Makes the image cover the whole section */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
        }

        .desktop-section .left {
            flex: 1;
            min-width: 300px;
        }

        .features {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .feature-box h4 {
            color: #FFF4E4;
        }

        .feature-box p {
            color: #FFF4E4;
            font-size: 0.95rem;
        }

        /* ====================== PLATFORM SECTION ====================== */
        .platform-section {
            background: #0a0a0a;
            padding: 5rem 5rem;
            color: #FFF4E4;
        }

        .platform-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
        }

        #professional-algo {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/trading-tool.png');
            background-size: cover;
            /* Makes the image cover the whole section */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
        }

        /* --- PT Section --- */
        .pt-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background: linear-gradient(180deg, #1b1b28, #24235a);
            justify-content: space-between;
            gap: 40px;


            padding: 5rem 5rem;
        }

        .pt-text {
            flex: 1;
            min-width: 280px;
        }

        .pt-text h1 {
            font-size: 2.3rem;
            margin-bottom: 15px;
        }

        .pt-text p {
            color: #FFF4E4;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .pt-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 240px;
        }

        .pt-buttons .btn.primary {
            background:  #FFF4E4;
            border-radius: 26px;
        }



        .pt-image {
            text-align: center;
        }

        .pt-image img {
            max-width: 100%;
            height: auto;
        }

        /* Container setup */
        .platform-section {
            background-color: #0b0b14;
            /* dark background */
            padding: 60px 80px;
            color: #FFF4E4;
            font-family: "Inter", sans-serif;
        }

        /* Two-column layout */
        .platform-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 60px;
            /* space between left and right */
            margin: 0 auto;
        }

        /* Left column */
        .platform-container .left {
            flex: 1;
        }

        .platform-container .left h2 {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .platform-container .left p {
            font-size: 1rem;
            color: #FFF4E4;
            line-height: 1.6;
        }

        /* Right column (accordion-style boxes) */
        .platform-container .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .accordion-item {
            background: #121221;
            border: 1px solid #343454;
            border-radius: 8px;
            padding: 18px 22px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .accordion-item:hover {
            border-color: #9a6aff;
            transform: translateY(-3px);
        }

        /* Responsive for tablets and mobile */
        @media (max-width: 992px) {
            .platform-container {
                flex-direction: column;
                gap: 40px;
            }

            .platform-container .left h2 {
                font-size: 1.6rem;
            }

            .accordion-item {
                font-size: 0.95rem;
            }
        }

        /* ====================== CQG TRAINING + SUPPORT ====================== */
        .tt-training,
        .tt-support {
            background: #0a0a0a;
            color: #FFF4E4;
            padding: 80px 5%;
        }

        .tt-training .tt-container,
        .tt-support .tt-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .tt-text h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #FFF4E4;
            margin-bottom: 20px;
        }

        .tt-text p {
            color: #FFF4E4;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .tt-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        .tt-btn,
        .tt-btn-outline {
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tt-btn {
            background: #0073e6;
            color: #fff;
            border: none;
        }

        .tt-btn-outline {
            background: transparent;
            border: 2px solid #0073e6;
            color: #0073e6;
        }

        .tt-features {
            flex: 1;
            min-width: 280px;
            list-style: none;
            padding: 0;
        }

        .tt-features li {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #141414;
            border-radius: 8px;
            padding: 14px 18px;
            margin-bottom: 12px;
            font-size: 0.95rem;
            color: #FFF4E4;
        }

        .faq-tutorials {
            text-align: center;
            padding: 5rem 5rem;
            position: relative;
        }

        .faq-tutorials h2 {
            color:  #FFF4E4;
            font-size: 2rem;
            margin-bottom: 60px;
            font-weight: 600;
        }

        .faq-tutorials-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            gap: 60px;
        }

        .card {
            background: transparent;
            width: 300px;
            text-align: left;
        }

        .card-image {
            width: 220px;
            height: 220px;
            margin-bottom: 20px;
            border-radius: 50%;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card h3 {
            color: #FFF4E4;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .card p {
            color: #FFF4E4;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .read-link {
            color: #FFF4E4;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .read-link:hover {
            color: var(--accent);
        }

        /* ====================== RESPONSIVE ====================== */
        @media (max-width: 1024px) {

            .tt-content,
            .platform-container,
            .pt-content,
            .tt-training .tt-container,
            .tt-support .tt-container {
                flex-direction: column;
                text-align: center;
            }

            .tt-text,
            .tt-image,
            .pt-text,
            .pt-image {
                text-align: center;
            color: #FFF4E4;
            }

            .btn,
            .tt-btn,
            .tt-btn-outline {
                width: 100%;
            }
        }

        @media (max-width: 768px) {

            .tt-text h1,
            .pt-text h1,
            .tt-text h2 {
                font-size: 1.7rem;
            }

            .solution-card {
                max-width: 90%;
            }

            .tt-section,
            .desktop-section,
            .platform-section,
            .solution-section {
                padding: 40px 4%;
            }

            .tech-content {
                flex-direction: column;
            }

            .tt-features li {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {

            .tt-text h1,
            .pt-text h1,
            .tt-text h2 {
                font-size: 1.4rem;
            }

            .pt-buttons {
                width: 100%;
                align-items: center;
            }

            .pt-buttons .btn {
                width: 100%;
            }

            .solutions {
                flex-direction: column;
                align-items: center;
            }

            .solution-card {
                width: 100%;
                max-width: 340px;
            }

            .tt-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        /* button */
        .button-column {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: start;
            justify-content: start;
        }

        /* === Filled Button === */
        .btn-filled {
            background-color: #FFF4E4;
            color: #000;
            border: none;
            border-radius: 50px;
            padding: 0.9rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 250px;
        }

        .btn-filled:hover {
            transform: translateY(-2px);
        }

        /* === Outline Button === */
        .btn-outline {
            background: transparent;
            color: #FFF4E4;
            border: 2px solid #FFF4E4;
            border-radius: 50px;
            padding: 0.9rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 250px;
        }

        .btn-outline:hover {
            transform: translateY(-2px);
        }
    </style>


</head>



<body>



    <!-- ======= HERO SECTION ======= -->

    <section class="tt-section">
        <div class="tt-content">
            <div class="tt-text">
                <h1>CQG Professional <br><span>Trading Platform</span></h1>
                <p>
                    Trade Futures and Options with Institutional-Grade Technology
                    Access next-generation trading and data visualisation through CQG's professional platform suite.
                    Trusted by global traders for over 35 years, CQG delivers advanced charting, analytics, and
                    execution capabilities for futures and options markets through Lunaro Markets' ADGM-regulated
                    access.
                </p>

                <div class="button-column">
                   <a href="https://m.cqg.com/cqg/desktop/main"> <button class="btn-filled">Start Trading CQG</button></a>
                </div>
            </div>

            <div class="tt-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tt.png"
                    alt="CQG Platform Screenshot" />

            </div>
        </div>
    </section>

    <!-- Trading Solutions Section -->
    <section class="solution-section">
        <h2>Choose Your CQG Trading Solution</h2>
        <p class="intro">
            Select from CQG's comprehensive suite of professional trading platforms designed to meet institutional
            and active trader requirements. Whether you prefer the advanced capabilities of CQG Desktop or the
            convenience of mobile trading, our platforms deliver professional-grade tools with customisable
            interfaces.
        </p>

        <div class="solutions">
            <div class="solution-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DESKTOP-CQG.png"
                    alt="CQG Desktop" />
                <h3>Desktop</h3>
                <p>Multi-monitor professional trading application</p>
                <ul>
                    <li>Ultra-low latency execution with co-located servers</li>
                    <li>MD Trader ladder for rapid order entry</li>
                    <li>Advanced analytics and charting tools</li>
                    <li>Comprehensive technical analysis suite</li>
                </ul>
                <a href="https://m.cqg.com/cqg/desktop/main">Learn More about CQG Desktop →</a>
            </div>

            <div class="solution-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-cqg.png" alt="CQG Mobile" />
                <h3>Mobile</h3>
                <p>Professional trading on iOS and Android devices</p>
                <ul>
                    <li>Real-time market data and order management</li>
                    <li>Full synchronization with desktop workspaces</li>
                    <li>Secure biometric authentication and push notifications</li>
                </ul>
                <a href="#">Learn More about CQG Mobile →</a>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
        <div class="tech-content">
            <div class="left">
                <h1>CQG Desktop - Next-Generation<br><span>Trading Technology</span></h1>
                <p>
                    CQG Desktop represents the evolution of professional trading technology, combining decades of
                    market data expertise with modern web-based architecture. This comprehensive platform delivers
                    trading, market data, charting, and analytics in a single customisable solution designed for
                    serious futures and options traders.
                </p>

                <h4>Why Choose CQG Platform?</h4>
                <p>
                    CQG Desktop provides institutional-quality features with unprecedented customisation options.
                    The HTML5 framework eliminates software downloads while delivering fast processing times,
                    advanced order entry capabilities, and comprehensive analytical tools. Whether developing
                    automated strategies or conducting detailed market analysis, CQG Desktop offers professional
                    traders the tools needed for sophisticated market participation.
                </p>
            </div>

            <div class="right">
                <h4>Professional trading features:</h4>

                <ul class="svg-list">
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Advanced Analytics</div>
                            <div class="bottom">Comprehensive charting tools with technical indicators and drawing
                                objects</div>
                        </div>

                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Customisable Interface</div>
                            <div class="bottom">Personalised workspace configuration with multiple layout options</div>
                        </div>
                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Global Market Coverage</div>
                            <div class="bottom">Access to futures and options markets worldwide</div>
                        </div>
                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Real-Time Data Integration</div>
                            <div class="bottom">Live market data with news feeds and economic calendar</div>
                        </div>
                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Risk Management Tools </div>
                            <div class="bottom">Advanced order types and position monitoring capabilities</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Desktop Professional Application -->
    <section class="desktop-section">
        <div class="left">
            <h2>CQG Desktop Web Platform</h2>
            <p>
                CQG Desktop web-based architecture provides universal access across Windows, macOS, and Linux systems.
                Access professional trading capabilites
                through any modern browser without software installations or updates. The platform maintains full
                functionality across devices while ensuring consistent performance and reliability.

            </p>
        </div>



        <ul class="svg-list">
            <h2>Web Platform Features</h2>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>No Downloads Required</div>
                    <div class="bottom">Instant access through web browser</div>
                </div>

            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Cross-Platform Compatibility</div>
                    <div class="bottom">Windows, macOS, and Linux support</div>
                </div>
            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Advanced Order Management</div>
                    <div class="bottom">Professional order types including bracket orders</div>
                </div>
            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Technical Analysis Suite</div>
                    <div class="bottom">Comprehensive charting and analytical</div>
                </div>
            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Account Integration</div>
                    <div class="bottom">Real-time account monitoring and trade history</div>
                </div>
            </li>
            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>News and Data Feeds</div>
                    <div class="bottom">Integrated market news and economic indicators</div>
                </div>
            </li>

            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Mobile Optimisation</div>
                    <div class="bottom">Responsive design for tablet and mobile access </div>
                </div>
            </li>

            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Professional Interface</div>
                    <div class="bottom">Customisable layouts with night theme options</div>
                </div>
            </li>
        </ul>

    </section>


    <section class="desktop-section" id="cqg-mobile">
        <div class="left">
            <h2>CQG Mobile - Professional Trading Anywhere</h2>
            <p>
                CQG Mobile extends the full power of the cqg Platform to iOS and Android devices, providing
                professional traders with complete market access and trading functionality on the go. The mobile
                interface maintains the same advanced capabilities as desktop versions while optimising for
                touch-screen interactions.
            </p>
        </div>



        <ul class="svg-list">
            <li>
                <h2>Mobile Trading Advantages:</h2>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Universal Compatibility</div>
                    <div class="bottom">Native apps for iOS and Android devices</div>
                </div>

            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Complete Functionality</div>
                    <div class="bottom">Full Trading capabilities matching desktop platform</div>
                </div>
            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Professional Analysis</div>
                    <div class="bottom">Create complex layouts with multiple trading windows</div>
                </div>
            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Account Synchronisation</div>
                    <div class="bottom">Seamless integration with CQG Desktop accounts</div>
                </div>
            </li>
            <li>

                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Secure Access</div>
                    <div class="bottom">TouchID/FaceID authentication with CQG Desktop accounts</div>
                </div>
            </li>
            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Real-Time Performance</div>
                    <div class="bottom">Live quotes, charts, and order execution</div>
                </div>
            </li>

            <h2>Advanced Mobile Advantages:</h2>
            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Biometric Security</div>
                    <div class="bottom">Fast login with TouchID/FaceID authentication</div>
                </div>
            </li>

            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Smart Notifications</div>
                    <div class="bottom">Customisable push alerts for price and order updates</div>
                </div>
            </li>

            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Professional Charting</div>
                    <div class="bottom">Real-time charts with technical analysis tools</div>
                </div>
            </li>
            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Order Management</div>
                    <div class="bottom">Complete trading and position monitoring capabilites</div>
                </div>
            </li>
            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Bracket Orders</div>
                    <div class="bottom">Server-side advanced orer types for risk management</div>
                </div>
            </li>
            <li>
                <div class="bullets">
                    <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                            <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>Account Control</div>
                    <div class="bottom">Full account monitoring and trade history access</div>
                </div>
            </li>
        </ul>

    </section>



    <section class="platform-section" id="professional-algo">
        <div class="platform-container">
            <div class="left">
                <h2>Professional Trading Tools for Institutional Performance</h2>
                <p>
                    CQG platforms are engineered to provide institutional-grade functionality with user-friendly
                    accessibility, ensuring professional traders have every tool needed for sophisticated market
                    analysis and execution across global futures and options markets.
                </p>
            </div>

            <div class="right">
                <div class="accordion-item">Advanced Analytics Support</div>
                <div class="accordion-item">Execution Capabilities: Risk Management Features</div>
                <div class="accordion-item">Custom Development</div>
                <div class="accordion-item">Data and Analytics Integration</div>
            </div>
        </div>
    </section>

    <section class="faq-tutorials">
        <h2>FAQs and Tutorials</h2>
        <div class="faq-tutorials-container">
            <!-- FAQs Card -->
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MASK.png" alt="FAQs Image">
                </div>
                <h3>FAQs</h3>
                <p>
                    Get instant answers to common questions about CQG trading platforms, from basic navigation to
                    advanced features.
                    Our comprehensive FAQ section covers platform access, account setup, trading functionality, and
                    technical support guidance.
                </p>
                <a href="/faqs" class="read-link">Read FAQs →</a>
            </div>

            <!-- Tutorials Card -->
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mask2.png"
                        alt="Tutorials Image">
                </div>
                <h3>Tutorials</h3>
                <p>
                    Master CQG’s professional trading platforms with comprehensive tutorials covering everything
                    from basic navigation to advanced trading strategies.
                    Our expert-created guides help you maximise platform capabilities for enhanced trading
                    performance.
                </p>
                <a href="#" class="read-link">Read More →</a>
            </div>
        </div>
    </section>

    <section class="pt-content">
        <div class="pt-text">
            <h1>Begin Professional Trading with CQG</h1>
            <p>
                Access institutional-grade trading technology through Lunaro Markets' ADGM-regulated CQG platform
                access.</p>
            <h6>Platform Advantages:</h6>
            <ul style="list-style-type: disc;padding-left:20px">
                <li>Institutional Technology - CQG platform with 35+ years of market expertise</li>
                <li>Global Market Access - Trade futures and options across worldwide exchanges</li>
                <li>Professional Support - Expert guidance for platform optimisation and strategy development</li>
            </ul>
            <div class="pt-buttons">
                <a href="https://m.cqg.com/cqg/desktop/main"
                    class="btn primary">Access CQG Platform</a>
            </div>
        </div>

        <div class="pt-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/begin-pro.png"
                alt="CQG Platform Screenshot" />
        </div>
    </section>
    <?php
        load_country_footer();
        ?>
</body>

</html>