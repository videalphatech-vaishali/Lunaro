<?php

/**
 * Template Name: Lunaro Pro UAE
 * Template Post Type: post, page
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
  <title>Unlock Pro Access</title>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --font-family: 'DM Sans', sans-serif;
      --bg-gradient: #0B0D16;
      --text-color: #ffffff;
      --subtext-color: #d1d5db;
      --note-color: #9ca3af;
      --circle-bg: #ffffff;
      --circle-color: #0b1635;
      --line-color: #E6E7F0;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: var(--font-family);
      background: var(--bg-gradient);
      color: var(--text-color);
     
     
    }
    .pro-section{
 padding: 40px 20px;
    }

    .pro-access-container {
      display: flex;
      align-items: stretch;
      justify-content: center;
      gap: 40px;
      max-width: 1140px;
      width: 100%;
      margin: auto;
    }

    .pro-access-left {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .pro-access-left h1 {
      font-size: 52px;
      font-weight: 800;
      margin-bottom: 20px;
      font-family: var(--font-family);
    }

    .pro-access-left p {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 20px;
            font-family: var(--font-family);
      color: var(--subtext-color);
    }

    .pro-access-left .note {
      font-size: 0.85rem;
      font-style: italic;
      color: var(--note-color);
      margin-bottom: 30px;
    }

    /* STEPS WRAPPER */
    .steps {
      position: relative;
    }

    /* Vertical connecting line */
    .steps::before {
      content: "";
      position: absolute;
      top: 0;
      left: 16px;
      width: 4px;
      height: 100%;
      background: var(--line-color);
    }

    /* Single step */
    .step {
      position: relative;
      display: flex;
      align-items: flex-start;
      margin-bottom: 40px;
    }

    .step:last-child {
      margin-bottom: 0;
    }

    /* Step number circle */
    .step-number {
      position: absolute;
      left: 0;
      top: 0;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      background: var(--circle-bg);
      color: var(--circle-color);
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: 700;
      font-size: 17px;
      z-index: 1;
    }

    /* Step text */
    .step-content {
      margin-left: 60px;
    }

    .step-content h3 {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 6px;
    
    }

    .step-content p {
      color: #fff;
      font-family: var(--font-family);
      font-size: 1rem;
      line-height: 1.5;
      letter-spacing: -3%;
    }

    /* Right side image */
    .pro-access-right {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 540px;
      position: relative;
    }

    .pro-access-right img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
      .pro-access-container {
        flex-direction: column;
      }

      .pro-access-right {
        min-height: 420px;
      }
    }

    @media (max-width: 575.98px) {
      .pro-access-left h1 {
        font-size: 1.8rem;
      }

      .step-content h3 {
        font-size: 1rem;
      }

      .steps {
        padding-left: 40px;
      }

      .steps::before {
        left: 18px;
      }

      .step-number {
        width: 30px;
        height: 30px;
        font-size: 0.9rem;
      }

      .step-content {
        margin-left: 50px;
      }
    }




    .eligibility-section {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      max-width: 1200px;
      margin: 0 auto;
      padding: 80px 40px;
      gap: 40px;
    }

    /* LEFT CONTENT */
    .eligibility-content {
      flex: 1;
    }

    .eligibility-content h2 {
      font-size: 2.5rem;
      font-family: var(--font-family);
    }

    .eligibility-content p {
      margin-bottom: 16px;
      color: #FFF4E4;
       font-family: var(--font-family);
      font-size: 1rem;
      font-weight: 400;
    }

    .note {
      color: #999;
      font-style: italic;
    }
    .em{
        font-size: 10px;
        line-height: 150%;
        letter-spacing: -3%;
        color: #fff;
         font-family: var(--font-family);
    }

    .buttons {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      flex-direction: column;
    }

    .buttons button {
      border: none;
      font-size: 14px;
      font-weight: 600;
      padding: 12px 28px;
      border-radius: 30px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .btn-eligible {
      background-color: #f3e8d4;
      color: #0c0d14;
      width: 187px;
       font-family: var(--font-family);
    }

    .btn-eligible:hover {
      background-color: #e6dac0;
    }

    .btn-not {
      background-color: transparent;
      border: 1px solid #f3e8d4 !important;
      color: #fff;
      width: 187px;
    font-family: var(--font-family);
    }

    .btn-not:hover {
      background-color: #f3e8d4;
      color: #0c0d14;
    }

    /* RIGHT ACCORDION */
    .criteria {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    details {
      background-color: transparent;
      border: 1px solid #c0aa82;
      border-radius: 8px;
      padding: 16px 20px;
      transition: 0.3s ease;
    }

    summary {
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      list-style: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #f3e8d4;
       font-family: var(--font-family);
    }

    summary::after {
      content: "▾";
      transition: transform 0.3s ease;
    }

    details[open] summary::after {
      transform: rotate(180deg);
    }

    details p {
      margin-top: 10px;
      color: #b5b5b5;
      font-size: 0.95rem;
    }

    /* MEDIA QUERIES */
    @media (max-width: 1399.98px) {
      .eligibility-section {
        max-width: 1140px;
      }
    }

    @media (max-width: 1199.98px) {
      .eligibility-section {
        max-width: 960px;
      }
    }

    @media (max-width: 991.98px) {
      .eligibility-section {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      .criteria {
        width: 100%;
      }
      .eligibility-content {
        width: 100%;
      }
      .buttons {
        justify-content: center;
      }
    }

    @media (max-width: 767.98px) {
      .eligibility-content h2 {
        font-size: 2rem;
      }
    }

    @media (max-width: 575.98px) {
      .eligibility-section {
        padding: 60px 20px;
      }

      .eligibility-content h2 {
        font-size: 1.8rem;
      }

      .buttons button {
        width: 100%;
      }
    }
  </style>
</head>

<body>
    <section class="pro-section">

   
  <div class="pro-access-container">
    <div class="pro-access-left">
      <h1>Unlock Pro Access</h1>
      <p>
        Experienced traders who meet the required criteria may qualify to be categorised as
        Elective Professional Clients, gaining access to enhanced trading conditions and
        professional-grade services under the Lunaro Pro framework.
      </p>
      <p class="note">
       Professional clients are not subject to certain retail protections under applicable regulations. Please review the Professional Client Disclosure and Risk Notice carefully before applying.
      </p>

      <!-- Steps -->
      <div class="steps">
        <div class="step">
          <div class="step-number">1</div>
          <div class="step-content">
            <h3>Verify Eligibility</h3>
            <p>Confirm you meet at least two of the three FCA professional client criteria (see below).</p>
          </div>
        </div>

        <div class="step">
          <div class="step-number">2</div>
          <div class="step-content">
            <h3>Submit Application</h3>
            <p>If you are already a Retail client, complete our professional account application with 
               supporting documentation including portfolio statements and professional credentials.</p>
          </div>
        </div>

        <div class="step">
          <div class="step-number">3</div>
          <div class="step-content">
            <h3>Account Activation</h3>
            <p>Upon approval, your account will be upgraded with professional trading conditions and dedicated relationship manager assignment.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="pro-access-right">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-uae.png" alt="Eligibility Steps" />
    </div>
  </div>
   </section>



    <section class="eligibility-section">
    <div class="eligibility-content">
      <h2>Eligibility Criteria</h2>
      <p>The Firm is regulated by the FCA and requires adherence to strict qualification criteria to ensure trader sophistication and experience.</p>
      <p class="note">
        <em class="em">Regulatory Overview: Professional client classification requires meeting at least two of three criteria established by the Financial Conduct Authority (FCA) in addition to a qualitative assessment.</em>
      </p>
      <div class="buttons">
        <button class="btn-eligible">I am eligible</button>
        <button class="btn-not">I am not eligible</button>
      </div>
    </div>

    <div class="criteria">
      <details>
        <summary>Criterion 1: Financial Portfolio</summary>
        <p>Maintain a financial instrument portfolio exceeding a defined threshold as established by the FCA.</p>
      </details>

      <details>
        <summary>Criterion 2: Trading Experience</summary>
        <p>Demonstrate an active trading history of significant frequency within the past 12 months.</p>
      </details>

      <details>
        <summary>Criterion 3: Professional Experience</summary>
        <p>Possess relevant professional experience in the financial sector requiring knowledge of derivatives or similar products.</p>
      </details>
    </div>
  </section>
        <?php
    get_footer();
    ?>
</body>

</html>