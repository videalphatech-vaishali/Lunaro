<style>
    .etd-trade-with-us-body {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
  background-color: #000;
  padding: 5rem 5rem;
  display: flex;
  flex-direction: column; 
}
.etd-trade-with-us-body h1{
  font-size: 2.6rem;
  font-weight: 700; 
  text-align: center;
}
/* ===== Shared Background ===== */
.etd-content-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 6rem;
}

/* ===== FAQ Section ===== */
.etd-faq-section {
  display: flex;
  padding: 2rem;
  align-items: center;
  justify-content: center;
  gap: 9rem;
  flex-wrap: wrap;
  text-align: left;
}

.etd-faq-left img {
  width: 200px;
  max-width: 100%;
}

.etd-faqs-right-side {
  max-width: 800px;
}

.etd-faqs-right-side h2 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
  color: #fff;
}

.etd-faqs-right-side p {
  font-size: 1.1rem;
  font-weight: 400;
  color: #ccc;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.etd-faqs-btn-primary {
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

.etd-faqs-btn-primary:hover {
  background-color: #4e538a;
}

/* ===== Start Trading Section ===== */
.etd-start-trading-section { 
  color: #fff; 
  display: flex;
  justify-content: center;
}

.etd-start-trading-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 80px;
  /* max-width: 1200px; */
  width: 100%;
}

/* Left Side */
.etd-start-trading-left  {
  max-width: 700px;
}
.etd-start-trading-left h1 {
  font-size: 2.6rem;
  text-align: start;
  font-weight: 700;
  margin-bottom: 15px;
}

.etd-start-trading-left p {
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

/* Right Side Features */
.etd-start-trading-right {
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
  line-height: 1.5;
  font-weight: 400;
  color: #fff;
  max-width: 400px;
}
/* ===== Section: Feature Cards ===== */
.feature-grid {
  display: grid;
  gap: 2.5rem;
  padding: 3rem 0;
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
  .etd-faq-section,
  .etd-start-trading-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 3rem;
  }

  .etd-start-trading-right {
    align-items: center;
  }

  .feature {
    justify-content: center;
    text-align: left;
  }
}

</style>
<div class="etd-trade-with-us-body">
<!-- why spread betting with us  Cards Section  -->
<h1>Why Trade Exchange-Traded Derivatives with Lunaro Markets?</h1>
<div class="feature-grid">
  <!-- Card 1 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="Lightning Fast Icon">
    </div>
    <h3 class="feature-title">Top-Tier Access</h3>
    <p class="feature-description">
         Connect directly to major global exchanges with top-tier infrastructure, providing speed, security, and transparent execution.
    </p>
  </div>

  <!-- Card 2 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Trusted and Regulated Icon">
    </div>
    <h3 class="feature-title">Advanced Technology & Reilability</h3>
    <p class="feature-description">
      Experience ultra-low latency performance and robust clearing integration via industry-leading systems, ensuring efficient and compliant trade execution.
    </p>
  </div>
    <!-- Card 2 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Trusted and Regulated Icon">
    </div>
    <h3 class="feature-title">Expert Support & Market Insight</h3>
    <p class="feature-description">
      Our specialist team provides end-to-end assistance, from onboarding and compliance guidance to platform training and post-trade support.
    </p>
  </div>
  </div>
<!--  -->
  

<!-- Spread Betting Section -->
<section class="etd-content-section">
  <div class="etd-faq-section">
    <div class="etd-faq-left">
      <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/images/faq-question.png" 
        alt="Coins Illustration">
    </div>

    <div class="etd-faqs-right-side">
      <h2>FAQs</h2>
      <p>
        Find answers to common questions about ETD trading, contract specifications, margining, and clearing procedures.
         Learn how Lunaro supports compliant, secure access to global derivatives markets.

      </p>
      <a href="faqs/" > <button class="etd-faqs-btn-primary">Read CFD Trading FAQs</button></a>
    </div>
  </div>
</section>

<!-- Start Trading Section -->
<section class="etd-start-trading-section">
  <div class="etd-start-trading-container">

    <div class="etd-start-trading-left">
      <h1>Start Trading ETDs Today</h1>
      <p>
        Open your Lunaro account and access global derivatives markets through a regulated, transparent, and professional trading environment.
      </p>
      <div class="button-group">
        <button class="signup btn-primary">Start trading</button>
      </div>
    </div>

    <div class="etd-start-trading-right">
      <div class="feature">
        <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="" class="w-3 h-3">
        </div>
        <p><strong>Direct access to regulated global exchanges</strong>
      </div>

      <div class="feature">
        <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="" class="w-3 h-3">
        </div>
        <p><strong>Secure, compliant infrastructure with central clearing</strong></p>
      </div>

      <div class="feature">
        <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="" class="w-3 h-3">
        </div>
        <p><strong>Dedicated professional guidance and relationship support</strong></p>
      </div>
    </div>
  </div>
</section>

</div>