<?php

/**
 * Template Name: Meta Trader 5 Page
 *
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
    <title>MT5 Platform</title>
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



        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/Backgrounds.png');

        background-repeat: no-repeat;

        background-size: 100% 100%;

        /* stretch width, height auto */

    }

    /* ======= MT5 PLATFORM  ======= */

    .MT5Platform-advanced {

        max-width: 90%;
        margin: auto;


    }

    .MT5Platform-section {
        border-radius: 12px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-end;
        gap: 50px;
    }




    .MT5Platform-text {

        flex: 1 1 550px;

    }



    .MT5Platform-text h1 {

        font-size: 2.75rem;
        font-weight: 800;
        margin-bottom: 15px;
    }



    .MT5Platform-text p {

        color: var(--text-color);

        line-height: 1.6;

        max-width: 550px;

    }

    .MT5Platform-img {

        display: flex;
        justify-content: flex-end;
        padding-left: 2rem;

    }

    .MT5Platform-img img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
    }

    /* =======META TRADER5 ======= */

    .main-meta {

        max-width: 1280px;


    }

    .meta-section {

        border-radius: 12px;

        padding: 5rem 5rem;

        display: flex;

        flex-wrap: wrap;

        align-items: center;

        justify-content: space-between;

        gap: 30px;

    }

    .meta-text {

        flex: 1 1 400px;

    }

    .meta-text h3 {

        font-size: 1.8rem;

        margin-bottom: 15px;

    }

    .meta-text p {

        color: var(--text-color);

        line-height: 1.6;

        max-width: 550px;

    }

    .meta-btn {
        background: transparent;
        border: 1.5px solid #c9ccd6;
        color: #fff;
        padding: 12px 30px;
        font-size: 1rem;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 20px;
        display: inline-block;
        max-width: none;
        flex: 0 0 auto;
    }

    /* ======= PROFESSIONAL TRADING FEATURE ======= */
    .professional-trading-feature {

        padding: 5rem 5rem;
        display: flex;
        flex-direction: column;
    }

    .professional-trading-feature h1 {
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: center;
    }

    /* ===== Shared Background ===== */
    .professional-trading-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 6rem;
    }

    /* ===== FAQ Section ===== */
    .cfd-faq-section {
        display: flex;
        align-items: center;
        padding: 2rem;
        justify-content: center;
        gap: 9rem;
        flex-wrap: wrap;
        text-align: left;
    }

    .cfd-faq-left img {
        width: 200px;
        max-width: 100%;
    }

    .cfd-faqs-right-side {
        max-width: 800px;
    }

    .cfd-faqs-right-side h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    .cfd-faqs-right-side p {
        font-size: 1.1rem;
        font-weight: 400;
        color: #ccc;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .cfd-faqs-btn-primary {
        color: #fff;
        background-color: #3C4066;
        border: none;
        font-size: 1rem;
        cursor: pointer;
        font-weight: 600;
        padding: 14px 36px;
        border-radius: 40px;
        transition: all 0.3s ease;
    }

    .cfd-faqs-btn-primary:hover {
        background-color: #4e538a;
    }

    /* ===== Start Trading Section ===== */
    .cfd-start-trading-section {
        color: #fff;
        display: flex;
        justify-content: center;
        padding: 5rem 5rem;
    }

    .cfd-start-trading-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 80px;
        /* max-width: 1200px; */
        width: 100%;
    }

    /* Left Side */
    .cfd-start-trading-left {
        max-width: 700px;
    }

    .cfd-start-trading-left h1 {
        font-size: 2.6rem;
        font-weight: 700;
        text-align: start;
        margin-bottom: 15px;
    }

    .cfd-start-trading-left p {
        color: #b6b8c7;
        font-size: 1.05rem;
        font-weight: 400;
        margin-bottom: 35px;
    }

    .button-group {
        display: column;
        /* flex-wrap: wrap; */
        gap: 18px;
    }

    .btn-primary {
        color: #000;
        background-color: #fff0d6;
        font-size: 1rem;
        font-weight: 600;
        padding: 14px 36px;
        border-radius: 40px;
        width: 250px;
        margin-bottom: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ffe8b5;
    }

    .btn-outline {
        background: transparent;
        border: 1.5px solid #fff;
        border-radius: 40px;
        width: 250px;
        padding: 14px 36px;
        font-weight: 600;
        font-size: 1rem;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-outline:hover {
        background: #fff;
        color: #000;
    }

    /* Right Side Features */
    .cfd-start-trading-right {
        max-width: 1000px;
        display: flex;
        flex-direction: column;
        gap: 35px;
    }

    .feature {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .feature .icon {
        width: 40px;
        height: 40px;
        background-color: #A89469;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .feature p {
        font-size: 0.95rem;
        font-weight: 400;
        line-height: 1.5;
        color: #fff;
        max-width: 400px;
    }

    /* ===== Section: Feature Cards ===== */
    .feature-grid {
        display: grid;
        gap: 2.5rem;

        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        margin-bottom: 4rem;
    }

    .feature-card {
        background-color: rgba(255, 244, 228, 0.2);
        padding: 1.5rem;
        border-radius: 1.5rem;
        border: 1px solid rgb(55, 65, 81);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease, transform 0.3s ease;
    }

    .feature-card:hover {
        border-color: rgb(168, 85, 247);
        transform: translateY(-5px);
    }

    .feature-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background-color: #a89469;
        margin-bottom: 1rem;
    }

    .feature-icon img {
        width: 1.5rem;
        height: 1.5rem;
    }

    .feature-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        letter-spacing: -0.78px;
        color: #fff;
    }

    .feature-description {

        font-weight: 400;
        font-size: 0.875rem;
        line-height: 1.625;
        color: rgb(209, 213, 219);
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


    .web-platform {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 150px;
        padding: 5rem 5rem;
        flex-wrap: wrap;

    }

    /* Left side */
    .left-side {
        flex: 1;
        max-width: 800px;
    }

    .left-side h2 {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        color: #fff4e4;
    }

    .left-side p {
        font-size: 1rem;
        line-height: 1.7;
        color: rgba(255, 244, 228, 0.9);
        margin: 0;
    }

    /* Right side */
    .right-side {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 18px;
        max-width: 550px;
    }

    .right-side h2 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #fff4e4;

    }

    .advantage-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255, 244, 228, 0.9);
    }

    .advantage-item i {
        color: #FFF4E4;
        font-size: 1rem;
        margin-top: 4px;
    }

    .btn-primary {
        color: #000;
        border: none;
        font-size: 1rem;
        width: 300px;
        cursor: pointer;
        font-weight: 600;
        padding: 14px 36px;
        margin-top: 10px;
        border-radius: 40px;
        background-color: #fff0d6;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ffe8b5;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .web-platform {
            flex-direction: column;
            gap: 40px;
            padding: 50px 6%;
        }

        .left-side h2 {
            text-align: center;
        }

        .left-side p {
            text-align: center;
        }

        .right-side {
            padding-left: 10px;
        }
    }


    .web-platform-img-img {
        flex: 1 1 auto;
        display: flex;
        justify-content: flex-start;
        margin-left: auto;
    }



    .get-started {
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/platform/trading-tool.png');

        background-repeat: no-repeat;

        background-size: 100%;
        padding: 5rem 5rem;
        display: flex;
        flex-direction: column;
    }

    .get-started h1 {
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: center;
    }
</style>

<body>
    <section class="MT5Platform-advanced">

        <div class="MT5Platform-section">

            <div class="MT5Platform-text">

                <h1>MetaTrader 5 - World's
                    <br>
                    Leading Trading
                    <br>
                    Platform
                </h1>

                <p>

                    MetaTrader 5 is one of the world's leading trading platforms, allowing trading on financial markets
                    without any additional software, from any device. Lunaro Markets offers both web browser and desktop
                    versions of MT5, with mobile applications ideal for both iOS and Android users.

                </p>

            </div>


            <div class="MT5Platform-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/mockup Desktop.png" alt="Laptop with charts">
            </div>



        </div>


    </section>

    <section class="main-meta">

        <div class="meta-section">

            <div class="meta-text">

                <h3>Why Meta Trader 5?</h3>

                <p>
                    The MetaTrader 5 platform provides exceptional features to help you in your trading journey,
                    delivering fast processing times, advanced order entry capabilities, and the latest analytical
                    tools. Whether you're developing automated strategies or conducting detailed market analysis, MT5
                    offers endless possibilities for traders of all experience levels.

                </p>
                <div class="meta-btn">
                    Download Meta Trader 5
                </div>
            </div>


        </div>


    </section>

    <div class="professional-trading-feature">

        <h1>Professional Trading Features</h1>
        <div class="feature-grid">
            <!-- Card 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/puzzle-piece-01.png" alt="puzzle Icon">
                </div>
                <h3 class="feature-title">Strategy Tester</h3>
                <p class="feature-description">
                    For those interested in automating and testing their own trading strategies
                </p>
            </div>

            <!-- Card 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/loading-01.png" alt="Loading Icon">
                </div>
                <h3 class="feature-title">Intuitive Interface</h3>
                <p class="feature-description">
                    Highly intuitive and easy-to-use design for seamless navigation
                </p>
            </div>
            <!-- Card 3 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/pie-chart-01.png" alt="Pie-chart Icon">
                </div>
                <h3 class="feature-title">Advanced Charting</h3>
                <p class="feature-description">
                    Advanced order and charting options with comprehensive analytical tools
                </p>
            </div>
            <!-- Card 4 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/message-chat-square.png" alt="Message Icon">
                </div>
                <h3 class="feature-title">Multi-Asset Support</h3>
                <p class="feature-description">
                    Trade forex, stocks, commodities, and indices from one platform
                </p>
            </div>
        </div>




    </div>

    <div class="web-platform">
        <div class="left-side">
            <h2>MetaTrader 5 Web Platform</h2>
            <p>
                MetaTrader 5 web platform is a universal trading solution for macOS, Linux and Windows users. Use your
                favourite browser for analysis and trading anywhere, anytime. The web version is fully adapted for iOS
                and Android OS, ensuring consistent functionality across all devices.
            </p>

           <a href="https://www.metatrader5.com/en/trading-platform/web-trading"> <button class="btn-primary">Launch MT5 Web</button></a>

            <div class="web-platform-img">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/webPlatform.png" alt="web platform" class="main-image">

            </div>
        </div>

        <div class="right-side">
            <h2>Web Platform Features</h2>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Demo and Real Accounts</span>
                    <p>Practice with virtual funds or trade live markets</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Advanced Order Types</span>
                    <p>MetaTrader 5 trade orders, including pending and stop orders</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>One-Click Trading</span>
                    <p>Execute trades instantly with single-click functionality</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Technical Analysis</span>
                    <p>30 indicators and 24 graphical objects for comprehensive analysis</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Multi-Timeframe Charts</span>
                    <p>3 chart types and 9 timeframes for detailed market analysis</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Real-Time Data</span>
                    <p>Live quotes in Market Watch with instant updates</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Touch Optimised</span>
                    <p>Adapted for touch screens and mobile devices</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Night Theme</span>
                    <p>Cutting-edge interface with comfortable night theme for extended trading</p>
                </div>
            </div>
        </div>
    </div>

    <div class="web-platform">
        <div class="left-side">
            <h2>MetaTrader 5 Mobile</h2>
            <p>
                MetaTrader 5 Mobile supports two position accounting systems (netting and hedging), enabling
                professional technical analysis through the built-in set of indicators and analytical objects. With
                MetaTrader 5 Mobile, you can control your account, monitor trade history, and execute trades across
                multiple asset classes.
            </p>

            <button class="btn-primary">Download Mobile App</button>

            <div class="web-platform-img">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/mobile.png" alt="mobile platform" class="main-image">

            </div>
        </div>

        <div class="right-side">
            <h2>Web Platform Features</h2>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Universal Compatibility</span>
                    <p>Install on any iOS and Android powered smartphone or tablet PC</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Complete Functionality</span>
                    <p>Full trading capabilities matching desktop version</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Professional Analysis</span>
                    <p>Built-in technical indicators and analytical objects</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Account Management</span>
                    <p>Complete control over account monitoring and trade execution</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Multi-Asset Trading</span>
                    <p>Trade currencies, stocks, commodities, and indices on the go</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check Icon">
                <div class="column-right-text">
                    <span>Portable Trading</span>
                    <p>Take professional trading capabilities wherever you go</p>
                </div>
            </div>
        </div>
    </div>


    <div class="get-started">

        <h1>How to Get Started</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/getStarted.png" alt="started stairs">
    </div>


    <section class="cfd-start-trading-section">
        <div class="cfd-start-trading-container">

            <div class="cfd-start-trading-left">
                <h1>Start trading now</h1>
                <p>
                    Create an account and start trading with Lunaro Markets.
                </p>
                <div class="button-group">
                    <button class="signup btn-primary">Start trading</button> <br>
                </div>
            </div>

            <div class="cfd-start-trading-right">
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="" class="w-3 h-3">
                    </div>
                    <p><strong>Simple and Secure Account Opening</strong><br> Get started in minutes with our
                        streamlined onboarding process.</p>
                </div>

                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/tablet-01.png" alt="" class="w-3 h-3">
                    </div>
                    <p><strong>Practice Risk-Free with a Demo Account</strong><br> Test strategies, explore markets,
                        and familiarise yourself with our platforms before committing capital.</p>
                </div>

                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5platform/message-chat-square.png" alt="" class="w-3 h-3">
                    </div>
                    <p><strong>Local Support & Fast Funding</strong><br> Enjoy responsive client service and
                        multiple secure payment options for quick deposits and withdrawals.</p>
                </div>
            </div>
        </div>
    </section>

<?php
    load_country_footer();
    ?>
</body>

</html> 
