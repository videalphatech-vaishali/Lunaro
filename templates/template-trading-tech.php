<?php

/**
 * Template Name: Trading Tech Page
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
            color: var(--white-color);
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/platform/Backgrounds.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow-x: hidden;
        }

        /* ====================== HERO SECTION ====================== */
        .tt-section {
            background: linear-gradient(135deg, #0d0d0d, #1a1a1a);
        }

        .tt-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 5rem 5rem;
            gap: 2rem;
        }

        .tt-text {
            flex: 1;
            min-width: 280px;
        }

        .tt-text h1 {
            font-size: 2.5rem;
            color: #fff;
            line-height: 1.2;
        }

        .tt-text p {
            margin: 20px 0;
            color: #ccc;
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
            background: #e0b867;
        }

        .btn.secondary {
            border: 1px solid white;
            color: white;
        }

        .btn.secondary:hover {
            background: #c6a15b;
            color: #000;
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
            padding: 40px 5%;
            background: radial-gradient(circle at center, #0f0f1a, #0a0a0f);
            text-align: center;
        }

        .solution-section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
        }

        .solution-section .intro {
            color: #bbb;
            max-width: 900px;
            margin: 15px auto 40px;
            line-height: 1.6;
        }

        .solutions {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .solution-card {
            padding: 25px;
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
            color: #fff;
            font-size: 2.0rem;
        }

        .solution-card ul {
            text-align: left;
            color: #ccc;
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
            gap: 40px;
            display: flex;
            flex-wrap: wrap;
            background: linear-gradient(180deg, #0d0d0d, #1b1b28);
        }

        .tech-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }

        .left,
        .right {
            flex: 1;
            color: #FFF4E4;
            min-width: 300px;
        }

        .svg-list h2 {
            font-weight: 500;
            margin: 25px 0;
            color: #FFF4E4;
            font-size: 1.2rem;

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
            background: linear-gradient(180deg, #1b1b28, #1d1c1c);
            padding: 5rem 5rem;
            gap: 40px;
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
            color: #c6a15b;
        }

        .feature-box p {
            color: #bbb;
            font-size: 0.95rem;
        }

        /* ====================== PLATFORM SECTION ====================== */
        .platform-section {
            background: #0a0a0a;
            padding: 5rem 5rem;
            color: #fff;
        }

        .platform-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
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
            color: #ccc;
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
            background: white;
            border-radius: 26px;
        }

        .pt-buttons .btn.secondary {
            background: transparent;
            border: 2px solid white;
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
            color: #fff;
            font-family: "Inter", sans-serif;
        }

        /* Two-column layout */
        .platform-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 60px;
            /* space between left and right */
            max-width: 1200px;
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
            color: #b8b8c7;
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

        /* ====================== TT TRAINING + SUPPORT ====================== */
        .tt-training,
        .tt-support {
            background: #0a0a0a;
            color: #fff;
            padding: 80px 5%;
        }

        .tt-training .tt-container,
        .tt-support .tt-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
            margin: 0 auto;
        }

        .tt-text h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
        }

        .tt-text p {
            color: #ccc;
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
            padding: 14px 18px;
            margin-bottom: 12px;
            font-size: 0.95rem;
            color: #ccc;
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

        /* for accordian section*/
        .accordian-section {
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
            background-color: #000;
            background-size: cover;
            background-position: center;
        }

        .accordian-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 60px 80px;
            font-family: "DM Sans", sans-serif;
            color: #fff4e4;
            gap: 80px;
            flex-wrap: wrap;
        }

        /* Title Section */
        .accordian-title {
            flex: 1;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: #fff4e4;
            min-width: 250px;
        }

        /* left side (box list) */
        .left-side {
            flex: 1.5;
            display: flex;
            flex-direction: column;
            gap: 20px;
            min-width: 320px;
        }

        /* Right side (box list) */
        .right-side {
            flex: 1.5;
            display: flex;
            flex-direction: column;
            gap: 20px;
            min-width: 320px;
        }

        .white-text {
            color: #fff;
            font-size: 0.9rem;
        }

        /* Each accordion item */
        .accord-item {
            background-color: black;
            border: 1px solid rgba(255, 244, 228, 0.2);
            border-radius: 12px;
            padding: 18px 20px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .accord-item:hover {
            border-color: rgba(255, 244, 228, 0.4);
            background-color: rgba(255, 244, 228, 0.08);
        }

        .accord-item.active {
            border-color: #ffd79f;
        }

        /* Question text */
        .accord-question {
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            position: relative;
            padding-right: 30px;
            transition: color 0.3s ease;
        }

        .accord-question::after {
            content: "▼";
            position: absolute;
            right: 0;
            font-size: 1rem;
            transition: transform 0.3s ease;
        }

        .accord-item.active .accord-question {
            color: #ffd79f;
        }

        .accord-item.active .accord-question::after {
            content: "▲";
        }

        /* Answer text */
        .accord-answer {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            font-size: 0.95rem;
            line-height: 1.5;
            color: rgba(255, 244, 228, 0.8);
            transition: max-height 0.4s ease, opacity 0.4s ease;
            margin-top: 8px;
        }

        .accord-item.active .accord-answer {
            max-height: 300px;
            opacity: 1;
        }

        /* Responsive layout */
        @media (max-width: 900px) {
            .accordian-container {
                flex-direction: column;
                gap: 40px;
                padding: 40px 20px;
            }

            .accordian-title {
                text-align: center;
            }
        }

        /* for accordian section */
    </style>


</head>



<body>



    <!-- ======= HERO SECTION ======= -->

    <section class="tt-section">
        <div class="tt-content">
            <div class="tt-text">
                <h1>Trading Technologies<br><span>TT Platform</span></h1>
                <p>
                    Execute professional trading strategies on the world’s fastest commercially
                    available platform. Trading Technologies’ award-winning TT Platform delivers
                    unmatched speed, reliability, and advanced functionality for futures, options,
                    fixed income, FX, and cryptocurrency trading through Lunaro Markets’ ADGM-regulated
                    access.
                </p>

                <div class="tt-buttons">
                    <a href="https://id.tradingtechnologies.com/signin?returnUrl=%2Foauth%2Fauthorize%3Fresponse_type%3[…]Uri%3Dhttps%253A%252F%252Ftrade.tt%252Flive%252Fhome%26"
                        class="btn primary">Access TT Platform</a>
                </div>
            </div>

            <div class="tt-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tt.png"
                    alt="TT Platform Screenshot" />

            </div>
        </div>

        <!-- Trading Solutions Section -->
        <section class="solution-section">
            <h2>Choose Your TT Trading Solution</h2>
            <p class="intro">
                Experience the power of Trading Technologies through multiple platform interfaces designed for
                professional traders.
                Whether you need multi-monitor desktop setups or mobile trading capabilities, TT delivers
                institutional-grade tools
                with unprecedented speed and reliability.
            </p>

            <div class="solutions">
                <div class="solution-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tt-desktop.png"
                        alt="TT Desktop" />
                    <h3>TT Desktop</h3>
                    <p>Multi-monitor professional trading application</p>
                    <ul>
                        <li>Ultra-low latency execution with co-located servers</li>
                        <li>MD Trader ladder for rapid order entry</li>
                        <li>Advanced analytics and charting tools</li>
                        <li>Comprehensive technical analysis suite</li>
                    </ul>
                    <a href="#">Learn More about TT Desktop →</a>
                </div>

                <div class="solution-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ritrader-pro.png"
                        alt="TT Mobile" />
                    <h3>TT Mobile</h3>
                    <p>Professional trading on iOS and Android devices</p>
                    <ul>
                        <li>Real-time market data and order management</li>
                        <li>Full synchronization with desktop workspaces</li>
                        <li>Secure biometric authentication and push notifications</li>
                    </ul>
                    <a href="#">Learn More about TT Mobile →</a>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section class="technology-section">
            <div class="tech-content">
                <div class="left">
                    <h1>TT Platform – Revolutionary <br><span>Trading Technology</span></h1>
                    <p>
                        The TT Platform represents the evolution of professional trading technology, built on a
                        software-as-a-service (SaaS) framework that requires no client-side software installation. This
                        ultra-low latency platform connects traders to global derivatives markets with unprecedented
                        speed and reliability.
                    </p>

                    <h4>Why Choose TT Platform?</h4>
                    <p>
                        Trading Technologies revolutionised futures trading with innovative tools like MD Trader and
                        Autospreader, and continues to lead with cutting-edge technology. The platform's open
                        architecture enables unlimited customisation while maintaining the speed and reliability
                        demanded by professional traders. All orders execute on co-located servers for maximum
                        performance.
                    </p>
                </div>



                <ul class="svg-list">
                    <h2>Professional trading features:</h2>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>MD Trader Ladder</div>
                            <div class="bottom">Patented price ladder with one-click order entery and market depth
                                visualisation</div>
                        </div>

                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Advanced Order Types</div>
                            <div class="bottom">Market, limit, iceberg, stop, cross, and systhentic order capabilities
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Autospreader Technology</div>
                            <div class="bottom">Automated spread trading acros multiple exchanges simultaeously</div>
                        </div>
                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>ADL (Algo Design Lab)</div>
                            <div class="bottom">Visual algorithmic trading development without coding requirements</div>
                        </div>
                    </li>
                    <li>

                        <div class="bullets">
                            <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                    <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>Global Market Access</div>
                            <div class="bottom">Comprehensive coverage of futures, options, fixed income, FX, and crypto
                                markets</div>
                        </div>
                    </li>
                </ul>

            </div>
        </section>

        <!-- Desktop Professional Application -->
        <section class="desktop-section">
            <div class="left">
                <h2>TT Desktop Professional Application</h2>
                <p>
                    TT Desktop delivers maximum performance for demanding professional traders through a
                    Windows-based application optimized for multi-monitor setups. The platform processes
                    real-time data faster than web-based alternatives, providing seamless integration with
                    TT’s global infrastructure.
                </p>
            </div>



            <ul class="svg-list">
                <li>

                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Multi-Monitor Support</div>
                        <div class="bottom">Configure workspaces with up to 16 monitors.</div>
                    </div>

                </li>
                <li>

                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Superior Performance</div>
                        <div class="bottom">Multi-threaded design for optimal rendering speed</div>
                    </div>
                </li>
                <li>

                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Advanced Customization</div>
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
                            </svg>Automated Execution</div>
                        <div class="bottom">Server-side algorithm deployment for ultra-low latency</div>
                    </div>
                </li>
                <li>

                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Real-Time Integration </div>
                        <div class="bottom">Synchronised data across all platform interfaces</div>
                    </div>
                </li>
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Comprehensive Analytics</div>
                        <div class="bottom">Advanced charting and technical analysis tool</div>
                    </div>
                </li>
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Risk Management</div>
                        <div class="bottom">Sophisticated position monitoring and order management</div>
                    </div>
                </li>
                
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>API Integration</div>
                        <div class="bottom">Custom application development and third-party connections</div>
                    </div>
                </li>
            </ul>
            </ul>

        </section>


        <section class="desktop-section">
            <div class="left">
                <h2>TT Mobile Trading Anywhere</h2>
                <p>
                    TT Mobile extends the full power of the TT Platform to iOS and Android devices, providing
                    professional traders with complete market access and trading functionality on the go. The mobile
                    interface maintains the same advanced capabilities as desktop versions while optimising for
                    touch-screen interactions.
                </p>
            </div>



            <ul class="svg-list">
                
                <h2>Mobile Trading Advantages:</h2>
                <li>

                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Complete Functionality</div>
                        <div class="bottom">Full trading capabilities matching desktop platform</div>
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
                        <div class="bottom">Tailored mobile experience for serious traders</div>
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
                        <div class="bottom">Live market data and instant order execution</div>
                    </div>
                </li>
                <li>

                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Advanced Charting</div>
                        <div class="bottom">Technical analysis tools with historical data</div>
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
                        <div class="bottom">Biometric authentication and encrypted data transmission</div>
                    </div>
                </li>
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Portfolio Management</div>
                        <div class="bottom">Complete position monitoring and account oversight</div>
                    </div>
                </li>
                <h2>Advanced Mobile Features:</h2>
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Professional Order Entry </div>
                        <div class="bottom">Advanced order types with precise execution control</div>
                    </div>
                </li>
                
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Market Data Integration</div>
                        <div class="bottom">Real-time quotes, depth, and time & sales data</div>
                    </div>
                </li>
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Charting Suite</div>
                        <div class="bottom">Comprehensive technical analysis with multiple timeframes</div>
                    </div>
                </li>
                <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Alert System</div>
                        <div class="bottom">Customisable price and market condition notifications</div>
                    </div>
                </li>
                  <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Synchronised Trading</div>
                        <div class="bottom">Seamless integration with desktop and web platforms</div>
                    </div>
                </li>
                
                  <li>
                    <div class="bullets">
                        <div class="top"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#A89469" />
                                <path d="M17.3337 8L10.0003 15.3333L6.66699 12" stroke="#A89469" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Offline capabilities</div>
                        <div class="bottom">Order preparation and strategy planning without connectivity</div>
                    </div>
                </li>
            </ul>

        </section>



        <div class="accordian-section">

            <div class="accordian-container">
                <div class="left-side">
                    <h2 class="accordian-title">Professional Algorithm Development and Execution</h2>
                    <p>TT Platform provides sophisticated algorithmic trading capabilities through multiple development
                        environments, from visual programming tools to advanced APIs. Professional traders can create,
                        test, and deploy automated strategies with institutional-grade infrastructure support.
                    </p>
                </div>

                <div class="right-side">
                    <div class="accord-item">
                        <div class="accord-question">ADL (Algo Design Lab)</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>
                    <div class="accord-item">
                        <div class="accord-question">Autospreader Technology</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>

                    <div class="accord-item">
                        <div class="accord-question">Custom Development</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>

                    <div class="accord-item">
                        <div class="accord-question">Execution Infrastructure</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="accordian-section">

            <div class="accordian-container">
                <div class="left-side">
                    <h2 class="accordian-title">Comprehensive Asset Class Access</h2>
                    <p>Trade across diverse global markets with TT Platform's extensive exchange
                        connectivity and multi-asset trading capabilities. Access futures, options,
                        fixed income, foreign exchange, and cryptocurrency markets through a single
                        professional interface.</p>
                </div>

                <div class="right-side">
                    <div class="accord-item">
                        <div class="accord-question">Futures Markets</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>
                    <div class="accord-item">
                        <div class="accord-question">Options Markets</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>

                    <div class="accord-item">
                        <div class="accord-question">Fixed Income</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>

                    <div class="accord-item">
                        <div class="accord-question">Cryptocurrency Markets</div>
                        <div class="accord-answer">
                            We offer branding, digital marketing, performance campaigns, and content
                            strategy tailored to your business goals.
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- Master TT Platform Trading Section -->
        <section class="tt-training">
            <div class="tt-container">
                <div class="tt-text">
                    <h2>Master TT Platform Trading</h2>
                    <p>
                        Master the full capabilities of Trading Technologies’ platform through structured training
                        programs
                        covering basic functionality to advanced algorithmic trading strategies. Our expert-led
                        curriculum
                        ensures optimal platform utilization for professional trading success.
                    </p>
                    <p>
                        Build your trading knowledge systematically with structured learning paths that progress
                        from basic market
                        concepts to advanced trading strategies. Our educational approach combines theoretical
                        knowledge with
                        practical application.
                    </p>
                    <a href="https://id.tradingtechnologies.com/signin?returnUrl=%2Foauth%2Fauthorize%3Fresponse_type%3[…]Uri%3Dhttps%253A%252F%252Ftrade.tt%252Flive%252Fhome%26"
                        class="btn primary">Access TT Platform</a>
                </div>

                <ul class="tt-features">
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg> Platform navigation and workspace
                        customisation</li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg> MD Trader mastery and advanced order management
                    </li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg> Autospreader configuration and spread trading
                        strategies</li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>ADL algorithm development and deployment
                        procedures</li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg> Risk management tools and position monitoring
                        techniques</li>
                </ul>
            </div>
        </section>

        <!-- Professional Support Services Section -->
        <section class="tt-support">
            <div class="tt-container">
                <div class="tt-text">
                    <h2>Professional Support Services</h2>
                    <p>
                        Access comprehensive support resources including documentation, video tutorials, and direct
                        technical
                        assistance for all TT Platform features and functionality.
                    </p>

                    <div class="tt-buttons">
                        <a href="https://id.tradingtechnologies.com/signin?returnUrl=%2Foauth%2Fauthorize%3Fresponse_type%3[…]Uri%3Dhttps%253A%252F%252Ftrade.tt%252Flive%252Fhome%26"
                            class="btn primary">Open TT Account</a>
                    </div>
                </div>

                <ul class="tt-features">
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Platform installation and configuration guides
                    </li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-check.svg"
                            alt=""> Advanced feature tutorials and best practices
                    </li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-check.svg"
                            alt=""> Algorithm development resources and examples
                    </li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-check.svg"
                            alt=""> Troubleshooting guides and technical support
                    </li>
                    <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17L4 12" stroke="#A89469" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-check.svg"
                            alt=""> Market connectivity and exchange-specific
                        information</li>
                </ul>
            </div>
        </section>


        <section class="pt-content">
            <div class="pt-text">
                <h1>Access TT Platform Through Lunaro Markets</h1>
                <p>
                    Begin professional derivatives trading with institutional-grade technology through Lunaro Markets'
                    ADGM-regulated TT Platform access.</p>
                <h6>Platform Advantages:</h6>
                <ul style="list-style-type: disc;padding-left:20px">
                    <li>Industry-Leading Speed - Ultra-low latency execution with co-located infrastructure</li>
                    <li>Global Market Access - Comprehensive derivatives coverage across worldwide exchanges</li>
                    <li>Professional Support - Expert guidance for platform optimisation and strategy development</li>
                </ul>
                <div class="pt-buttons">
                    <a href="https://id.tradingtechnologies.com/signin?returnUrl=%2Foauth%2Fauthorize%3Fresponse_type%3[…]Uri%3Dhttps%253A%252F%252Ftrade.tt%252Flive%252Fhome%26"
                        class="btn primary">Access TT Platform</a>
                </div>
            </div>

            <div class="pt-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access-tt.png"
                    alt="TT Platform Screenshot" />
            </div>
        </section>
    </section>

    <?php
    get_footer();
    ?>
    <script>
        const items = document.querySelectorAll(".accord-item");
        items.forEach((item) => {
            item.addEventListener("click", () => {
                item.classList.toggle("active");
            });
        });
    </script>
</body>



</html>