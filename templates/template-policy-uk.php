<?php

/**
 * Template Name: Policy UK Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
get_header('new');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Policy & Regulation</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg.png');
      background: #050B1C;


      color: #fff;
    }

    .policy-section {
      padding: 5rem 5rem;
    }

    /* Top Retail / Professional */
    .top-toggle {
      text-align: center;
      padding: 6px 0;
      font-size: 13px;
      display: flex;
      justify-content: center;
      gap: 25px;
      background: #0A122B;
    }

    .top-toggle span {
      cursor: pointer;
      opacity: 0.6;
    }

    .top-toggle span.active {
      opacity: 1;
      font-weight: 600;
    }

    /* NAVBAR */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 70px;
      background: #0B132E;
    }

    .nav-left,
    .nav-right {
      display: flex;
      align-items: center;
      gap: 35px;
    }

    .nav-left img {
      height: 38px;
    }

    .nav-link {
      font-size: 14px;
      cursor: pointer;
      opacity: 0.8;
    }

    .nav-link:hover {
      opacity: 1;
    }

    /* Buttons */
    .btn-login {
      border: 1px solid #fff;
      background: transparent;
      color: #fff;
      padding: 6px 20px;
      border-radius: 20px;
      cursor: pointer;
    }

    .btn-signup {
      background: #FAF3DD;
      color: #000;
      border-radius: 20px;
      padding: 6px 18px;
      border: none;
      cursor: pointer;
    }

    /* Head Title */
    .page-title {
      text-align: center;
      font-size: 40px;
      margin-top: 60px;
      font-weight: 600;
    }

    /* Layout */
    .section {
      display: flex;
      justify-content: space-evenly;

      margin-top: 45px;
    }

    /* Country side */
    .country-select {
      display: flex;
      flex-direction: column;
      width: 22%;
      gap: 18px;
    }

    .country-btn {
      background: #1A233C;
      border: none;
      padding: 12px 22px;
      border-radius: 20px;
      cursor: pointer;
      color: #fff;
      font-size: 14px;
    }

    .country-btn.active {
      background: #ffffff16;
      border: 1px solid #fff;
    }

    /* Policy List */
    .policy-box {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .policy-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      min-width: 400px;
      background: #0e1a32;
      padding: 14px 20px;
      border-radius: 8px;
      color: white;
      font-size: 17px;
      text-decoration: none;
      border: 1px solid #d2d6e2;
      transition: 0.3s;
    }

    .policy-item:hover {
      background: #13224a;
      transform: translateX(4px);
    }


    .policy-item span {
      font-weight: 500;
    }
  </style>
</head>

<body>
  <div class="policy-section">

    <!-- Page Title -->
    <div class="page-title">Legal and Regulatory</div>

    <!-- Main Section -->
    <div class="section">

      <!-- Country Selector -->
      <div class="country-select">
        <button class="country-btn">United Kingdom 1</button>
      </div>

      <!-- Policy List -->
      <div class="policy-box">
        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro_Complaints_Handling_Policy_v15.01_Final.pdf"
          target="_blank">
          <span>Complaint Handling Policy</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>
        <a class="policy-item" href="/wp-content/uploads/2025/11/Costs_and_Charges_Lunaro.pdf" target="_blank">
          <span>Costs and Charges</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>
        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro_Trading_Terms_EN_v12.0_RCEPC.pdf"
          target="_blank">
          <span>Terms & Conditions - Trading Account</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>

        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro_Risk_Disclosure_15.01-3.pdf" target="_blank">
          <span>Risk Disclosure</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>
        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro-Order-Execution-Policy-v-15.01__.pdf"
          target="_blank">
          <span> Order Execution Policy</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>Title Transfer Collateral Arrangements</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
      </div>

    </div>
    <div class="section">

      <!-- Country Selector -->
      <div class="country-select">
        <button class="country-btn">Key Information Documents (KIDs) <br>CFD and Spread Betting - Trading</button>
      </div>

      <!-- Policy List -->
      <div class="policy-box">
        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro_Complaints_Handling_Policy_v15.01_Final.pdf"
          target="_blank">
          <span>Commodities CFD</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>
        <a class="policy-item" href="/wp-content/uploads/2025/11/Costs_and_Charges_Lunaro.pdf" target="_blank">
          <span>Commodities Spread Betting</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>
        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro_Trading_Terms_EN_v12.0_RCEPC.pdf"
          target="_blank">
          <span>Currencies CFD</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>

        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro_Risk_Disclosure_15.01-3.pdf" target="_blank">
          <span>Currencies Spread Betting</span> <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
            class="arrow-icon" />
        </a>
        <a class="policy-item" href="/wp-content/uploads/2025/11/Lunaro-Order-Execution-Policy-v-15.01__.pdf"
          target="_blank">
          <span> ETF/ETC CFD</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg"
            alt="arrow" class="arrow-icon" />
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>ETF/ETC Spread Betting</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>Interest Rates CFD</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>Interest Rate Spread Betting</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>Single Stocks CFD</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>Single Stocks Spread Betting</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>Stock Indices CFD</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
          <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
            <span>Stock Indices Spread Betting</span> <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow"
              class="arrow-icon" />
          </a>
      </div>

    </div>
  </div>
  <?php
load_country_footer();
?>
</body>

</html>