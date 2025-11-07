<style>
    .cfd-trade-with-us-body {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
  background-color: #000;
  padding: 5rem 5rem;
  display: flex;
  flex-direction: column; 
}
.cfd-trade-with-us-body h1{
  font-size: 2.6rem;
  font-weight: 700;
  margin-bottom: 15px;
  text-align: center;
}
/* ===== Shared Background ===== */
.cfd-content-section {
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
.cfd-start-trading-left  {
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

</style>
<div class="cfd-trade-with-us-body">
<!-- why spread betting with us  Cards Section  -->
<h1>Why Trade CFDs with Lunaro Markets?</h1>
<div class="feature-grid">
  <!-- Card 1 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="Lightning Fast Icon">
    </div>
    <h3 class="feature-title">Transparent Pricing</h3>
    <p class="feature-description">
         No hidden fees or surprise charges. Our spreads are clearly displayed, and you'll always know exactly what you're paying before you execute a trade.
    </p>
  </div>

  <!-- Card 2 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Trusted and Regulated Icon">
    </div>
    <h3 class="feature-title">Reliable Execution</h3>
    <p class="feature-description">
      Our institutional-grade infrastructure delivers low-latency execution and access to deep liquidity pools. Fast fills, stable platforms, and consistent performance, even during volatile market conditions.
    </p>
  </div>
    <!-- Card 2 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Trusted and Regulated Icon">
    </div>
    <h3 class="feature-title">Comprehensive Guidance & Resources</h3>
    <p class="feature-description">
      New to CFD trading? We provide demo accounts, educational tutorials, market analysis, and dedicated client support to help you build confidence and refine your strategy.
    </p>
  </div>
  </div>
<!--  -->
  

<!-- Spread Betting Section -->
<section class="cfd-content-section">
  <div class="cfd-faq-section">
    <div class="cfd-faq-left">
      <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/images/faq-question.png" 
        alt="Coins Illustration">
    </div>

    <div class="cfd-faqs-right-side">
      <h2>FAQs</h2>
      <p>
        Get clear answers to the most common questions about CFD trading, margin requirements, leverage*, and getting started with Lunaro Markets.
      </p>
      <a href="/faqs" ><button class="cfd-faqs-btn-primary">Read CFD Trading FAQs</button></a>
    </div>
  </div>
</section>

<!-- Start Trading Section -->
<section class="cfd-start-trading-section">
  <div class="cfd-start-trading-container">

    <div class="cfd-start-trading-left">
      <h1>Start Trading CFDs Today</h1>
      <p>
        Open your Lunaro Markets account and experience transparent pricing, reliable execution, and professional support.
      </p>
      <div class="button-group">
        <button class="signup btn-primary">Start trading</button> <br>
        <!-- <button class="btn-outline">Create demo account</button> -->
      </div>
    </div>

    <div class="cfd-start-trading-right">
      <div class="feature">
        <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="" class="w-3 h-3">
        </div>
        <p><strong>Simple and Secure Account Opening</strong><br> Get started in minutes with our streamlined onboarding process.</p>
      </div>

      <div class="feature">
        <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="" class="w-3 h-3">
        </div>
        <p><strong>Practice Risk-Free with a Demo Account</strong><br>  Test strategies, explore markets, and familiarise yourself with our platforms before committing capital.</p>
      </div>

      <div class="feature">
        <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="" class="w-3 h-3">
        </div>
        <p><strong>Local Support & Fast Funding</strong><br>  Enjoy responsive client service and multiple secure payment options for quick deposits and withdrawals.</p>
      </div>
    </div>
  </div>
</section>

</div>