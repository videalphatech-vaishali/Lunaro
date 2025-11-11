<?php



/**

 * Template Name: Platform Page

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
      --brand-light: #FFF4E4;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: var(--font-primary);
      background-color: var(--brand-color);
      color: var(--white-color);
      background-repeat: no-repeat;
      background-size: 100% 100%; 
    }

    /* ===== HERO SECTION ===== */
    .hero-section {
      text-align: center;
      padding: 100px 5% 80px;
      width: 100%;
    }

    .hero-section h1 {
      font-size: 2.8rem;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .hero-section p {
      color: var(--text-color);
      font-size: 1rem;
      line-height: 1.7;
      max-width: 90%;
      margin: 0 auto 50px;
    }

    .hero-section h2 {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .hero-section .overview {
      color: var(--text-color);
      font-size: 1rem;
      line-height: 1.6;
      max-width: 90%;
      margin: 0 auto;
    }

    /* ===== PLATFORM SECTION ===== */
    .platform-section {
      width: 100%;
      padding: 0 5% 80px;
    }

    .platform-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .platform-card {
      padding: 25px;
      transition: transform 0.3s ease;
    }

    .platform-card:hover {
      transform: translateY(-5px);
    }

    .platform-card img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .platform-card h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
    }

    .platform-card p,
    .platform-card ul {
      color: var(--text-color);
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .platform-card a {
      display: block;
      color: var(--accent-color);
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
      margin-bottom: 10px;
    }

    .platform-card a:hover {
      color: #9ab4ff;
    }

    /* ===== ADVANCED SECTION ===== */
    .main-advanced {
      width: 100%;
      padding: 60px 5%;
    }

    .advanced-section {
      border-radius: 12px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 30px;
    }

    .advanced-text {
      flex: 1 1 400px;
    }

    .advanced-text h2 {
      font-size: 1.8rem;
      margin-bottom: 15px;
    }

    .advanced-text p {
      color: var(--text-color);
      line-height: 1.6;
    }

    .advanced-img {
      flex: 1 1 300px;
      display: flex;
      justify-content: end;
    }

    .advanced-img img {
      width: 100%;
      max-width: 450px;
      border-radius: 10px;
    }

    /* ===== TOOLS SECTION ===== */
    .main-tool {
      width: 100%;
      padding: 60px 5%;
    }

    .tools-section h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 50px;
    }

    .tools-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 25px;
    }

    .tool-card {
      background: var(--card-bg);
      border: 1px solid var(--border-color);
      border-radius: 12px;
      padding: 25px;
      transition: transform 0.3s ease;
    }

    .tool-card:hover {
      transform: translateY(-5px);
    }

    .tool-card h3 {
      font-size: 1.2rem;
      margin-bottom: 12px;
    }

    .tool-card ul {
      padding-left: 18px;
      color: var(--text-color);
      line-height: 1.6;
    }

    .main-faq {
      width: 100%;
      padding: 80px 20px;
      display: flex;
      justify-content: center;
    }

    .faq-tutorials {
      max-width: 90%;
      width: 100%;
    }

    .faq-tutorials h2 {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 600;
      margin-bottom: 50px;
      color: white;

    }

    .faq-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
    }

    .faq-card {
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease-in-out;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      overflow: hidden;
    }

    /* .faq-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 15px;
      margin-bottom: 20px;
    } */

    .faq-card h3 {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: white;
    }

    .faq-card p {
      color: white;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .faq-card ul {
      list-style: disc;
      padding-left: 20px;
      color: #444;
      margin-bottom: 15px;
    }

    .faq-card ul li {
      margin-bottom: 8px;
      font-size: 0.95rem;
      color: white;
    }

    .faq-card a {
      text-decoration: none;
      font-weight: 500;
      color: var(--brand-light);
      transition: color 0.3s ease;
    }

    @media (max-width: 768px) {
      .faq-tutorials h2 {
        font-size: 1.8rem;
      }

      .faq-card {
        padding: 20px;
      }
    }

    @media (min-width: 1400px) {
      .faq-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
      }
    }

    /* ===== START TRADING ===== */
    /* ===== START TRADING ===== */
    .start-trading {
      background-color: #0d0e14;
      padding: 80px 5%;
      width: 100%;
    }

    .start-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 50px;
    }

    .start-left {
      flex: 1 1 60%;
    }

    .start-left h2 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .start-left p {
      color: #c9ccd6;
      margin-bottom: 30px;
    }

    .btn-group {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
      width: 100%;
      max-width: 280px;
    }

    .btn-primary,
    .btn-outline {
      width: 100%;
      padding: 16px 0;
      font-weight: bold;
      font-size: 1rem;
      border-radius: 12px;
      cursor: pointer;
      text-align: center;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background-color: #f9f9f9;
      color: #0b0d16;
      border: none;
    }

    .btn-primary:hover {
      background-color: #e0e0e0;
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid #c9ccd6;
      color: #fff;
    }

    .btn-outline:hover {
      background: #1c1c28;
      border-color: #fff;
    }

    .start-right {
      flex: 1 1 30%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 55px;
    }

    .start-feature {
      display: flex;
      align-items: flex-start;
      gap: 15px;
    }

    .icon-circle {
      background-color: #bfa86f;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .start-feature h4 {
      margin-bottom: 5px;
      font-size: 1.1rem;
    }

    .start-feature p {
      color: #c9ccd6;
      font-size: 0.95rem;
      line-height: 1.5;
    }

    /* ===== MEDIA QUERIES ===== */
    @media (max-width: 1024px) {
      .hero-section h1 {
        font-size: 2.3rem;
      }

      .advanced-section {
        flex-direction: column;
      }
    }

    @media (max-width: 768px) {
      .hero-section {
        padding: 70px 5%;
      }

      .hero-section h1 {
        font-size: 1.9rem;
      }

      .tools-grid,
      .faq-grid {
        grid-template-columns: 1fr;
      }

      .start-container {
        flex-direction: column;
        text-align: center;
      }

      .start-feature {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
    }

    @media (min-width: 1400px) {

      .hero-section,
      .platform-section,
      .main-advanced,
      .main-tool,
      .main-faq,
      .start-trading {
        padding-left: 8%;
        padding-right: 8%;
      }
    }
  </style>
</head>

<body style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png);">
  <!-- HERO SECTION -->
  <section class="hero-section">
    <h1>Our Platforms</h1>
    <p>Trade Anytime, Anywhere with Our Advanced Platforms. Access professional-grade trading technology through
      MetaTrader 5, CQG, TT and Rithmic, designed to give you complete control over your trading experience across all
      devices and markets.</p>
    <h2>Overview</h2>
    <p class="overview">Choose from our comprehensive suite of trading platforms designed to meet every trading style
      and preference. Whether you prefer the advanced capabilities of MetaTrader 5 or the convenience of mobile trading,
      our platforms deliver institutional-quality tools with user-friendly interfaces.</p>
  </section>

  <!-- PLATFORM SECTION -->
  <section class="platform-section">
    <div class="platform-grid">
      <div class="platform-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mt5.png" alt="Meta Trader 5">
        <h1 style="margin-bottom: 10px;">Meta Trader 5</h1>
        <p>Advanced charting tools and automated trading capabilities.</p>
        <h3 style="margin-top: 10px; color: white;">Key Features:</h3>
        <ul>
          <li>30 technical indicators and 24 graphical objects for analysis</li>
          <li>Strategy tester for automated trading development</li>
          <li>One-click trading with advanced order types</li>
        </ul>
        <a href="meta-trader-5/">Learn about Meta Trader 5 →</a>
      </div>

      <div class="platform-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other-platforms.png" alt="Other Platforms">
        <h1 style="margin-bottom: 10px;">Other Platforms</h1>
        <p>Multi-asset support, real-time notifications, and intuitive design.</p>
        <a href="rithmic/" style="margin-bottom: 20px;">Learn about Rithmic →</a>
        <a href="trading-technologies/" style="margin-bottom: 20px;">Learn about Trading Technologies →</a>
        <a href="cqg/" style="margin-bottom: 20px;">Learn about CQG →</a>
      </div>
    </div>
  </section>

  <!-- ADVANCED SECTION -->
  <section class="main-advanced">
    <div class="advanced-section">
      <div class="advanced-text">
        <h2>Advanced Platform Capabilities</h2>
        <p>Our trading platforms are designed to provide institutional-grade functionality with retail-friendly accessibility, ensuring you have every tool needed for successful trading across all market conditions.</p>
      </div>
      <div class="advanced-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advanced-platforms.png" alt="Advanced Features">
      </div>
    </div>
  </section>

  <!-- TOOLS SECTION -->
  <section class="main-tool">
    <div class="tools-section">
      <h2>Professional Trading Tools</h2>
      <div class="tools-grid">
        <div class="tool-card">
          <h3>Automated Trading Support</h3>
          <ul>
            <li>Expert Advisors (EAs) for algorithmic trading strategies</li>
            <li>Custom indicator development and implementation</li>
            <li>Script functionality for automated platform operations</li>
            <li>Strategy testing and optimisation capabilities</li>
          </ul>
        </div>
        <div class="tool-card">
          <h3>Market Analysis Features</h3>
          <ul>
            <li>
              Real-time news feeds integrated directly into platforms
            </li>
            <li>
              Economic calendar with major macroeconomic indicators
            </li>
            <li>
              Market depth functionality for advanced order book analysis
            </li>
            <li>
              Advanced charting with multiple timeframe analysis
            </li>
          </ul>
        </div>
        <div class="tool-card">
          <h3>Risk Management Tools</h3>
          <ul>
            <li>
              Multiple order types including stop-loss and take-profit
            </li>
            <li>
              Trailing stop functionality for dynamic position management
            </li>
            <li>
              Position sizing calculators and risk assessment tools
            </li>
            <li>
              Account monitoring and trade history analysis
            </li>
          </ul>
        </div>
        <div class="tool-card">
          <h3>Seamless Integration</h3>
          <ul>
            <li>
              Account synchronisation across all devices and platforms
            </li>
            <li>
              Chart settings and preferences maintained across platforms.
            </li>
            <li>
              Expert Advisors and custom indicators sync automatically.
            </li>
            <li>
              Real-time account updates regardless of platform used
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="main-faq">
    <div class="faq-tutorials">
      <h2>FAQs and Tutorials</h2>
      <div class="faq-grid">

        <!-- FAQ Card -->
        <div class="faq-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq-question.png" alt="FAQs Image">
          <h3>FAQs</h3>
          <p>Get instant answers to common questions about our trading platforms, from basic navigation to advanced
            features. Our comprehensive FAQ section covers platform installation, account setup, trading functionality,
            and troubleshooting guidance. </p>
          <ul>
            <li>Platform installation and setup</li>
            <li>Account synchronization across devices</li>
            <li>Expert Advisor installation and configuration</li>
            <li>Chart customization and indicator usage</li>
            <li>
              Mobile app features and functionality

            </li>
          </ul>
          <a href="faqs/">Read FAQs →</a>
        </div>

        <!-- Tutorials Card -->
        <div class="faq-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mask2.png" alt="Tutorials Image">
          <h3>Tutorials</h3>
          <p>Master our trading platforms with step-by-step tutorials covering everything from basic navigation to advanced trading strategies. Our expert-created guides help you maximize platform capabilities and trading efficiency. 

</p>
          <ul>
            <li>Getting started with MetaTrader 5</li>
            <li>Advanced charting and technical analysis</li>
            <li>Setting up automated trading strategies</li>
            <li>Mobile platform optimization</li>
            <li> Cross-platform account management</li>

          </ul>
          <a href="#">Read more →</a>
        </div>

      </div>
    </div>
  </section>

  <!-- START TRADING -->
  <div class="start-trading">
    <div class="start-container">
      <div class="start-left">
        <h2>Start trading now</h2>
        <p>Create an account and start trading today.</p>
        <div class="btn-group">
          <button class="btn-primary signup">Start trading</button> 
        </div>
      </div>

      <div class="start-right">
        <div class="start-feature">
          <div class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt=""></div>
          <div>
            <h4>Industry-Leading Technology</h4>
            <p>MetaTrader 5 with advanced features and reliability</p>
          </div>
        </div>
        <div class="start-feature">
          <div class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt=""></div>
          <div>
            <h4>Multi-Device Access</h4>
            <p>Trade seamlessly across desktop, web, and mobile platforms</p>
          </div>
        </div>
        <div class="start-feature">
          <div class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt=""></div>
          <div>
            <h4>Professional Support</h4>
            <p>Expert guidance for platform setup and optimisation</p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php

   load_country_footer();

    ?> 
</body>

</html> 




