<?php

/**
 * Template Name: Policy Regulations Page
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
  background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/bg.png');
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

.nav-left, .nav-right {
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
  justify-content: center;
  gap: 80px;
  margin-top: 45px;
}

/* Country side */
.country-select {
  display: flex;
  flex-direction: column;
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

.policy-item:last-child {
  border-bottom: none;
}
.policy-item span {
  font-weight: 500;
}
</style>
</head>

<body>
<div class="policy-section">

    <!-- Page Title -->
    <div class="page-title">Policy & Regulation</div>

<!-- Main Section -->
<div class="section">
    
    <!-- Country Selector -->
    <div class="country-select">
        <button class="country-btn">United Arab Emirates</button>
  </div>

  <!-- Policy List -->
<div class="policy-box">

   <a class="policy-item" href="/wp-content/uploads/2025/10/001.-Lunaro-Complaint-Handling-Policy.pdf" target="_blank">
    <span>Complaint Handling Policy</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/002.Lunaro-Fee-Schedules-for-Individual-Retail-for-DMA-and-CFD.pdf" target="_blank">
    <span>Fee Schedules for Individual Retail for DMA and CFD</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/003.-Lunaro-Retail-Client-Agreement.pdf" target="_blank">
    <span>Retail Client Agreement</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/004.-Lunaro-Website-Terms-Conditions.pdf" target="_blank">
    <span>Website Terms & Conditions</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/005.-Lunaro-Risk-Disclosure.pdf" target="_blank">
    <span>Risk Disclosure</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/006.-Lunaro-Order-Execution-Policy.pdf" target="_blank">
    <span> Order Execution Policy</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/007.-Lunaro-Fraud-Warning-Policy.pdf" target="_blank">
    <span>Fraud Warning Policy</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/008.-Lunaro-Data-Privacy-Policy.pdf" target="_blank">
    <span>Data Privacy Policy</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/009.-Lunaro-Cookie-Policy.pdf" target="_blank">
    <span>Cookie Policy</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/010.-Lunaro-Conflict-of-Interest.pdf" target="_blank">
    <span>Conflict of Interest</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>
  <a class="policy-item" href="/wp-content/uploads/2025/10/011.-FATCA-CRS-for-Individuals.pdf" target="_blank">
    <span>FATCA & CRS for Individual</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>

  <a class="policy-item" href="/wp-content/uploads/2025/10/012.-FATCA-CRS-for-Entity.pdf" target="_blank">
    <span>FATCA & CRS for entity</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="arrow" class="arrow-icon" />
  </a>

</div>

</div>
</div>
<?php
load_country_footer();
?>
</body>
</html>
