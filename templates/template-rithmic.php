<?php



/**

 * Template Name: Rithmic Page

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

    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        --font-primary: "DM Sans", sans-serif;
        --white-color: #fff;
        --brand-color: #0b0d16;
        --text-color: #c9ccd6;
        --accent-color: #fff4e4;
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
        background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/about/Backgrounds.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center ;
      }

      /* ====================== HERO SECTION ====================== */
      .tt-section {
        padding: 60px 80px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/Backgrounds.png');
        background-size: cover;         /* Makes the image cover the whole section */
    background-position: center ;    /* Centers the image */
    background-repeat: no-repeat;   /* Prevents the image from repeating */
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
        gap: 14px;
        flex-direction: column;
        flex-wrap: wrap;
        padding: 2px 3px;
      }

      .btn-rithmic {
        padding: 12px 24px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
        text-align: center;
      }

      .btn-rithmic.primary {
        background: white;
        color: #000;
        width: 238px;
        height: 58px;
        align-content: center;
      }

      .btn-rithmic.primary:hover {
        background: #e0b867;
      }

      .btn-rithmic.secondary {
        border: 1px solid white;
        color: white;
        width: 238px;
        height: 58px;
        align-content: center;
      }

      .btn-rithmic.secondary:hover {
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
        border-radius: 16px; 
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
        font-size: 1.25rem;
      }

      .solution-card ul {
        text-align: left;
        color: #ccc;
        margin: 15px 0;
        padding-left: 0;
      }

      .solution-card ul li {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
      }

      .solution-card a {
        color: #c6a15b;
        text-decoration: none;
        font-weight: 500;
      }

      .solution-card a:hover {
        text-decoration: underline;
      }

      /* ====================== TECHNOLOGY SECTION ====================== */
     .technology-section {
        padding: 60px 80px;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Background2.png');
    background-size: cover;         /* Makes the image cover the whole section */
    background-position: center;    /* Centers the image */
    background-repeat: no-repeat;   /* Prevents the image from repeating */
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
      }

      .left h1 {
        color: #fff;
        margin-bottom: 15px;
        
      }
      .left h2{
        font-size: revert; font-weight: bold;
      }

      .left p {
        color: #ccc;
        line-height: 1.6;
      }

      .svg-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
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
        color: #fff;
      }

      .bullets .bottom {
        color: #ccc;
        font-size: 0.95rem;
        line-height: 1.5;
      }

      /* ====================== DESKTOP SECTION ====================== */
      .desktop-section {
        display: flex;
        flex-wrap: wrap;
         
            padding: 60px 80px;
        gap: 40px;
      }
      section#rethmic-mobile.desktop-section {
background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Background2.png') !important;
          background-size: cover;         /* Makes the image cover the whole section */
    background-position: center;    /* Centers the image */
    background-repeat: no-repeat;   /* Prevents the image from repeating */
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
        padding: 60px 5%;
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

            padding: 60px 80px;
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

      .pt-buttons .btn-rithmic.primary {
        background: white;
        border-radius: 26px;
      }

      .pt-buttons .btn-rithmic.secondary {
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
        margin: 0 auto;
      }

      /* Left column */
      .platform-container .left {
        flex: 1;
        gap: 16px;
      }

      .platform-container .left h2 {
        font-size: 2rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 20px;
      }

      .platform-container .left p {
        font-size: 16px;
        color: #b8b8c7;
        line-height: 1.6;
      }

      /* Right column (accordion-style boxes) */
      .platform-container .right {
        flex: 1;
        display: flex;
        justify-items: space-between;
        padding: 16px 24px;
        flex-direction: column;
        gap: 12px;
      }
      #diamond-api{
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/trading-tool.png');
        background-size: cover;         /* Makes the image cover the whole section */
        background-position: center;    /* Centers the image */
        background-repeat: no-repeat;   /* Prevents the image from repeating */
            }
      .accordion-item {
        background: #121221;
        border: 1px solid #7a691e;
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
        text-align:center;
        gap: 15px;
        margin-top: 20px;
        width: 35%;
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
        background: white;
        border: none;
        border-radius: 60px;
      }

      .tt-btn-outline {
        background: transparent;
        border: 2px solid white;
        color: white;
        border-radius: 60px;
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
        color: #ccc;
      }

      .resources-section {
            padding: 60px 80px;
        display: flex;
        flex-direction: column;
        gap: 60px;
      }

      .resources-row {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        justify-content: space-between;
        gap: 40px;
      }

      .resources-text {
        flex: 1 1 45%;
      }

      .resources-text h2 {
        color: var(--white);
        font-size: 1.6rem;
        margin-bottom: 15px;
        font-weight: 600;
      }

      .resources-text p {
        line-height: 1.6;
        font-size: 1rem;
      }

      .resources-card {
        flex: 1 1 5%;
        background: var(--card-bg);
        padding: 30px;
        border-radius: 16px;
          background: linear-gradient(180deg, #192C6E, #24235a);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      }

      .resources-card h3 {
        color: var(--white);
        font-size: 1.1rem;
        margin-bottom: 20px;
      }

      .resources-card ul {
        list-style: disc;
        margin-left: 20px;
        margin-bottom: 25px;
        line-height: 1.7;
        font-size: 0.95rem;
      }

      .btn-rithmic {
        display: inline-block;
        background: var(--btn-bg);
        color: var(--btn-text);
        padding: 10px 22px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .btn-rithmic:hover {
        background: #ffe2a9;
        transform: translateY(-2px);
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

        .pt-buttons .btn-rithmic {
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
    </style>
  </head>

  <body>
    <!-- ======= HERO SECTION ======= -->

    <section class="tt-section">
      <div class="tt-content">
        <div class="tt-text">
          <h1>Rithmic Direct Market <br /><span>Access Platform</span></h1>
          <p>
            Access institutional-grade direct market access through Rithmic's
            award-winning trade execution platform. Designed for high-frequency
            trading, algorithmic strategies, and professional market makers,
            Rithmic delivers unmatched speed, reliability, and customisation
            capabilities through Lunaro Markets' ADGM-regulated access.
          </p>
          <p>Platform Advantages:</p>
          <ul style="list-style-type: disc;padding-left:20px">
            <li>
              Ultra-Low Latency - Sub-250 microsecond execution with Diamond API
            </li>
            <li>
              Direct Market Access - Unfiltered exchange connectivity and market
              data
            </li>
            <li>
              Advanced APIs - Comprehensive development tools for custom
              strategies
            </li>
            <li>
              Global Exchange Coverage - Access to major derivatives and futures
              markets
            </li>
          </ul>
          <div class="tt-buttons">
            <a href="https://www.rithmic.com/rtraderpro" class="btn primary">Access Rithmic Platform</a> 
          </div>
        </div>

        <div class="tt-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rithmic-image.png" alt="TT Platform Screenshot" />
        </div>
      </div>
    </section>
    <!-- Trading Solutions Section -->
    <section class="solution-section">
      <h2>Choose Your Rithmic Trading Solution</h2>
      <p class="intro">
        Experience the power of Trading Technologies through multiple platform
        interfaces designed for professional traders. Whether you need
        multi-monitor desktop setups or mobile trading capabilities, TT delivers
        institutional-grade tools with unprecedented speed and reliability.
      </p>

      <div class="solutions">
        <div class="solution-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ritrader-pro.png" alt="R|Trader Pro" />
          <h2>R|Trader Pro</h2>
          <p>Professional front-end trading platform with advanced features</p>
          <strong>Key Features:</strong>
          <ul style="list-style-type:disc !important; padding-left:20px">
            <li>Real-time streaming quotes and market depth visualisation</li>
            <li>Advanced charting with over 100 technical studies</li>
            <li>Excel integration for custom indicator development</li>
            <li>Server-side order management with brackets and OCOs</li>
           <li>Mobile trading app for iOS and Android devices</li>
          </ul>
          <a href="https://www.rithmic.com/rtraderpro">Learn more about R|Trader Pro →</a>
        </div>

        <div class="solution-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-cqg.png" alt="Rithmic APIs" />
          <h2>Rithmic APIs</h2>
          <p>Professional development interfaces for algorithmic trading</p>
          <strong>Key Features:</strong>
          <ul  style="list-style-type: disc!important;padding-left:20px">
            <li>R|API+ for comprehensive platform integration</li>
            <li> Diamond API for ultra-low latency execution</li>
            <li>Protocol API for web and mobile applications</li>
            <li>FIX API support for institutional connectivity</li>
            <li>Microsecond timestamp granularity for latency analysis</li>
           
          </ul>
          <a href="#">Learn more about Rithmic APIs →</a>
        </div>
      </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
      <div class="tech-content">
        <div class="left">
          <h2>
            R|Trader Pro - Professional<br /><span> Trading Platform</span>
          </h2>
          <p>
            R|Trader Pro represents the evolution of professional futures
            trading, combining real-time risk management with advanced charting
            capabilities and seamless Excel integration. This comprehensive
            platform delivers the tools needed for sophisticated market analysis
            and execution.
          </p>
          <br />
          <h2>Why Choose R|Trader Pro?</h2>
          <p>
            R|Trader Pro provides institutional-quality trading tools with
            unprecedented integration capabilities. The platform's real-time
            interface to Microsoft Excel enables custom indicator development
            and automated trading strategies, while advanced order management
            features ensure precise execution control across global markets.
          </p>
        </div>

        <div class="right">
          <h4>Professional trading features:</h4>

          <ul class="svg-list">
            <li>
              <div class="bullets">
                <div class="top">
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="0.5"
                      y="0.5"
                      width="23"
                      height="23"
                      rx="11.5"
                      stroke="#A89469"
                    />
                    <path
                      d="M17.3337 8L10.0003 15.3333L6.66699 12"
                      stroke="#A89469"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    /></svg
                  >Advanced Order Management
                </div>
                <div class="bottom">
                 Trailing stops, brackets, OCOs, and group orders
                </div>
              </div>
            </li>
            <li>
              <div class="bullets">
                <div class="top">
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="0.5"
                      y="0.5"
                      width="23"
                      height="23"
                      rx="11.5"
                      stroke="#A89469"
                    />
                    <path
                      d="M17.3337 8L10.0003 15.3333L6.66699 12"
                      stroke="#A89469"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    /></svg
                  >Real-Time Risk Management 
                </div>
                <div class="bottom">
                  Position monitoring and pre-trade risk controls
                </div>
              </div>
            </li>
            <li>
              <div class="bullets">
                <div class="top">
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="0.5"
                      y="0.5"
                      width="23"
                      height="23"
                      rx="11.5"
                      stroke="#A89469"
                    />
                    <path
                      d="M17.3337 8L10.0003 15.3333L6.66699 12"
                      stroke="#A89469"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    /></svg
                  >Market Data Integration
                </div>
                <div class="bottom">
                  Unfiltered Level 2 data with institutional speeds
                </div>
              </div>
            </li>
            <li>
              <div class="bullets">
                <div class="top">
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="0.5"
                      y="0.5"
                      width="23"
                      height="23"
                      rx="11.5"
                      stroke="#A89469"
                    />
                    <path
                      d="M17.3337 8L10.0003 15.3333L6.66699 12"
                      stroke="#A89469"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    /></svg
                  >Excel Connectivity
                </div>
                <div class="bottom">
                  Real-time two-way interface for custom development
                </div>
              </div>
            </li>
            <li>
              <div class="bullets">
                <div class="top">
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="0.5"
                      y="0.5"
                      width="23"
                      height="23"
                      rx="11.5"
                      stroke="#A89469"
                    />
                    <path
                      d="M17.3337 8L10.0003 15.3333L6.66699 12"
                      stroke="#A89469"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    /></svg
                  >Mobile Trading
                </div>
                <div class="bottom">
                 Full-featured iOS and Android applications
                </div>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </section>

    <!-- Desktop Professional Application -->
    <section class="desktop-section">
      <div class="left">
        <h2>R|Trader Pro Web Platform</h2>
        <p>
          Access R|Trader Pro through any modern web browser with full platform
          functionality maintained across devices. The web-based interface
          provides the same advanced features as desktop applications while
          ensuring flexibility and accessibility.
        </p>
      </div>
      <div class="right">
      <h4>Web Platform Features</h4>
      <ul class="svg-list">
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Browser-Based Access
            </div>
            <div class="bottom">
              No software installation required
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Real-Time Market Data 
            </div>
            <div class="bottom">
              Streaming quotes and market depth
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              Advanced Order Entry
            </div>
            <div class="bottom">
              Professional order types and execution control
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Portfolio Management
            </div>
            <div class="bottom">
              Real-time position and P&L monitoring
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Chart Integration
            </div>
            <div class="bottom">
              Technical analysis with multiple timeframes
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Mobile Optimisation
            </div>
            <div class="bottom">
              Responsive design for tablet and smartphone access
            </div>
          </div>
        </li>
         <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Account Synchronisation
            </div>
            <div class="bottom">
              Seamless integration across all interfaces
            </div>
          </div>
        </li>
         <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Security Features
            </div>
            <div class="bottom">
              Professional-grade authentication and encryption
            </div>
          </div>
        </li>
      </ul>
      </div>
    </section>

    <section class="desktop-section" id="rethmic-mobile">
      <div class="left">
        <h2>Mobile Trading Applications</h2>
        <p>
          R|Trader Pro mobile applications extend full platform functionality to
          iOS and Android devices, ensuring professional traders maintain
          complete market access and control regardless of location.
        </p>
      </div>
      <div class="right">
      <h4>Mobile Features:</h4>
  
      <ul class="svg-list">
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Professional Interface
            </div>
            <div class="bottom">
              Optimised for touch-screen trading
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Real-Time Data
            </div>
            <div class="bottom">
              Live quotes, charts, and market depth
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              Complete Order Management
            </div>
            <div class="bottom">
              Create complex layouts with multiple trading windowsFull trading capabilities with advanced order types
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Portfolio Monitoring
            </div>
            <div class="bottom">
              Real-time position tracking and analysis
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Secure Authentication
            </div>
            <div class="bottom">
              Professional-grade security protocols
            </div>
          </div>
        </li>
        <li>
          <div class="bullets">
            <div class="top">
              <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <rect
                  x="0.5"
                  y="0.5"
                  width="23"
                  height="23"
                  rx="11.5"
                  stroke="#A89469"
                />
                <path
                  d="M17.3337 8L10.0003 15.3333L6.66699 12"
                  stroke="#A89469"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
              >Push Notifications
            </div>
            <div class="bottom">
              Customisable alerts for market conditions and orders
            </div>
          </div>
        </li>
      </ul>
      </div>
    </section>

    <section class="platform-section">
      <div class="platform-container">
        <div class="left">
          <h2>Rithmic APIs - <br>Professional <br>Development <br>Infrastructure</h2>
          <p>
            Rithmic's comprehensive API suite provides developers with
            unprecedented access to ultra-low latency market data and trade
            execution capabilities. These professional-grade interfaces enable
            the creation of sophisticated algorithmic trading systems and custom
            applications.
          </p>
        </div>

        <div class="right">
          <div class="accordion-item">R|API+ (Enhanced API)</div>
          <div class="accordion-item">R|Diamond API (Ultra-Low Latency)</div>
          <div class="accordion-item">R|Protocol API (Web/Mobile)</div>
          <div class="accordion-item">Advanced Development Features</div>
        </div>
      </div>
    </section>

    <section class="platform-section" id="diamond-api">
      <div class="platform-container">
        <div class="left">
          <h2>Diamond API - Sub- <br>Microsecond <br>Performance</h2>
          <p>
            Rithmic's Diamond API represents the pinnacle of algorithmic trading
            technology, providing direct access to exchange-facing gateways with
            execution speeds previously available only to the largest trading
            houses and hedge funds.
          </p>
        </div>

        <div class="right">
          <div class="accordion-item">Ultra-Low Latency Architecture</div>
          <div class="accordion-item">High-Frequency Trading Support</div>
          <div class="accordion-item">Performance Advantages</div>
          <div class="accordion-item">Professional Implementation</div>
        </div>
      </div>
    </section>
   
    <section class="platform-section">
      <div class="platform-container">
        <div class="left">
          <h2 style="font-size: revert;">Unfiltered Exchange Connectivity</h2>
          <p>
            Rithmic provides true direct market access with unfiltered exchange
            connectivity, delivering the transparency and speed required for
            professional algorithmic trading and market making strategies.
          </p>
        </div>

        <div class="right">
          <div class="accordion-item">Exchange Connectivity</div>
          <div class="accordion-item">Data Quality and Reliability</div>
          <div class="accordion-item">Trading Infrastructure</div>
          <div class="accordion-item">Risk Management Integration</div>
        </div>
      </div>
    </section>
  
    <section class="tt-support">
      <div class="tt-container">
        <div class="tt-text">
          <h2 >Comprehensive <br> Software Compatibility</h2>
           <p>Rithmic's open architecture supports integration with dozens of professional trading platforms, ensuring traders can use their preferred software while benefiting from Rithmic's superior data quality and execution speed.</p>
          <h6>Supported platforms:</h6>
          <ul style="list-style-type: disc;padding-left:20px">
          <li>Professional Charting - Sierra Chart, Investor/RT, MotiveWave, Trade Navigator</li>
          <li>Order Management - MultiCharts, Quantower, Jigsaw Trading, ATAS</li>
          <li>Algorithmic Trading - Agena Trader, EdgeProX, QST, Bookmap</li>
          <li>Specialised Tools - Various proprietary and third-party trading applications</li>
          </ul>
        </div>

        <ul class="tt-features">
          <li>
         <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="40" height="40" rx="20" fill="#A89469"/>
<path d="M28 14L17 25L12 20" stroke="#FFF4E4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

           Unified Data <br>Consistent market data across all platforms 
          </li>
          <li>
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="40" height="40" rx="20" fill="#A89469"/>
<path d="M28 14L17 25L12 20" stroke="#FFF4E4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-check.svg" alt="" /> Order Synchronisation <br>Real-time position and order updates
          </li>
          <li>
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="40" height="40" rx="20" fill="#A89469"/>
<path d="M28 14L17 25L12 20" stroke="#FFF4E4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-check.svg" alt="" /> Performance Optimisation<br>Reduced latency through direct connectivity
          </li>
          <li>
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="40" height="40" rx="20" fill="#A89469"/>
<path d="M28 14L17 25L12 20" stroke="#FFF4E4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-check.svg" alt="" />Cost Efficiency<br>Single data feed serving multiple applications
          </li>
          
        </ul>
      </div>
    </section>
  
    <section class="resources-section">
      <!-- Row 1 -->
      <div class="resources-row">
        <div class="resources-text">
          <h2>Comprehensive Development<br> Resources</h2>
          <p>
            Access detailed documentation, code examples, and integration guides
            for all <br>Rithmic API interfaces. Our comprehensive resources ensure
            successful <br>implementation of algorithmic trading strategies and
            custom applications.
          </p>
        </div>

        <div class="resources-card">
          <h3>Documentation Categories:</h3>
          <ul>
            <li>RIAPI+ integration guides and code samples</li>
            <li>Diamond API implementation and optimisation techniques</li>
            <li>Protocol API development for web and mobile applications</li>
            <li>Risk management integration and compliance procedures</li>
            <li>Performance monitoring and latency optimisation strategies</li>
          </ul>
          <a href="#" class="btn">Access API Documentation</a>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="resources-row">
        <div class="resources-text">
          <h2>Professional Technical Support</h2>
          <p>
            Receive expert technical support for all aspects of Rithmic platform
            integration, from initial setup through advanced algorithm
            development and optimisation.
          </p>
        </div>

        <div class="resources-card">
          <h3>Support Categories:</h3>
          <ul>
            <li>Platform installation and configuration assistance</li>
            <li>API integration and development support</li>
            <li>Performance optimisation and latency analysis</li>
            <li>Third-party platform connectivity guidance</li>
            <li>Colocation services and infrastructure consultation</li>
          </ul>
          <a href="#" class="btn">Get Technical Support</a>
        </div>
      </div>
    </section>

    <section class="pt-content">
      <div class="pt-text">
        <h1>Access TT Platform Through Lunaro Markets</h1>
        <p>
          Begin professional algorithmic trading with industry-leading direct market access technology through Lunaro Markets' ADGM-regulated Rithmic platform access.</p>
         <h6>Platform Advantages:</h6>  
         <ul style="list-style-type: disc;padding-left:20px">
          <li>Industry-Leading Speed - Ultra-low latency execution with sub-250 microsecond performance</li>
          <li>Direct Market Access - Unfiltered exchange connectivity and institutional-grade data</li>
          <li>Professional Development - Comprehensive API suite for custom strategy implementation</li>
        </ul>
        <div class="pt-buttons" style="margin-top: 10px;" >
          <a href="#" class="btn-rithmic primary">Open Rithmic Account</a> 
        </div>
      </div>

      <div class="pt-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_rithmic.png" alt="TT Platform Screenshot" />
      </div>
    </section>
    
    <!-- Master TT Platform Trading Section -->

<?php 

load_country_footer();
?> 

  </body>
</html>