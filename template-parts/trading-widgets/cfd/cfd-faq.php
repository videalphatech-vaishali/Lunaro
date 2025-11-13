<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Why Trade CFDs with Lunaro Markets?</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

<style>
/* ========== Base Styles ========== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'DM Sans', sans-serif;
  background-color: #000;
  color: #fff;
}

/* ========== CFD Trade With Us Section ========== */
.cfd-trade-with-us-body {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
  background-color: #000;
  padding: 5rem 0rem;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.cfd-trade-with-us-body h1 {
  font-size: 2.6rem;
  font-weight: 700;
  margin-bottom: 3rem;
  text-align: center;
  color: #fff4e4;
}

/* ========== Feature Cards Section ========== */
.feature-grid {
  display: grid;
  gap: 2.5rem;
  width: 100%;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  margin-bottom: 6rem;
}
.feature-card {
  background-color: rgba(255, 244, 228, 0.2);
  padding: 1.8rem;
  border-radius: 1.5rem;
  border: 1px solid rgb(55, 65, 81);
  transition: all 0.3s ease;
}
.trade-cfd{
  width: 100%;
}
.feature-card:hover {
  border-color: #a89469;
  transform: translateY(-5px);
}
.feature-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #a89469;
  border-radius: 50%;
  width: 3rem;
  height: 3rem;
  margin-bottom: 1rem;
}
.feature-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
  color: #fff;
}
.feature-description {
  font-size: 1rem;
  color: #ccc;
  line-height: 1.6;
}

/* ========== FAQ Section ========== */
.cfd-faq-section {
  display: flex;
  justify-content: center;
  gap: 9rem;
  align-items: center;
  flex-wrap: wrap;
  padding: 5rem 1rem;
}
.cfd-faq-left img {
  width: 220px;
  max-width: 100%;
}
.cfd-faqs-right-side {
  max-width: 700px;
}
.cfd-faqs-right-side h2 {
  font-size: 2.4rem;
  margin-bottom: 1rem;
  color: #fff4e4;
}
.cfd-faqs-right-side p {
  font-size: 1rem;
  line-height: 1.6;
  color: #ccc;
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

/* ========== Start Trading Section ========== */
.cfd-start-trading-section {
  color: #fff;
  display: flex;
  justify-content: center;
}
.cfd-start-trading-section{
  width:100%
}
.cfd-start-trading-container {
  display: flex;
  justify-content: space-between;
  gap: 80px;
  width: 100%;
}
.cfd-start-trading-left {
  max-width: 600px;
  margin-top: 20px;
}
.cfd-start-trading-left h1 {
  font-size: 2.6rem;
  font-weight: 700;
  margin-bottom: 15px;
  color: #fff4e4;
  text-align:start
}
.cfd-start-trading-left p {
  color: #b6b8c7;
  font-size: 1.05rem;
  margin-bottom: 35px;
}
.button-group {
  display: flex;
  flex-direction: column;
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
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
}
.btn-primary:hover {
  background-color: #ffe8b5;
}
.cfd-start-trading-right {
  display: flex;
  flex-direction: column;
  gap: 35px;
  margin-top: 20px;
}
.feature {
  display: flex;
  align-items: flex-start;
  gap: 20px;
}
.feature .icon {
  width: 40px;
  height: 32px;
  background-color: #A89469;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.feature p {
  color: #fff;
  line-height: 1.6;
  font-size: 0.95rem;
}

/* ========== RESPONSIVE MEDIA QUERIES ========== */

/* Extra small (<576px) */
@media (max-width: 575.98px) {
  .cfd-trade-with-us-body { padding: 3rem 1.2rem; }
  .feature-grid { grid-template-columns: 1fr; gap: 1.8rem; }
  .cfd-faq-section, .cfd-start-trading-container {
    flex-direction: column;
    text-align: center;
    gap: 2.5rem;
  }
  .cfd-start-trading-left h1 { font-size: 2rem;    text-align: start; }
  .cfd-start-trading-left p, .cfd-faqs-right-side p { font-size: 0.9rem;text-align: start; }
  .cfd-faqs-right-side h2 { font-size: 1.8rem; }

  .cfd-start-trading-right>.feature>p{
    text-align:start
  }
}

/* Small (≥576px and <768px) */
@media (min-width: 576px) and (max-width: 767.98px) {
  .cfd-trade-with-us-body { padding: 3.5rem 2rem; }
  .feature-grid { grid-template-columns: 1fr 1fr; gap: 2rem; }
  .cfd-faq-section, .cfd-start-trading-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 3rem;
  }
}

/* Medium (≥768px and <992px) */
@media (min-width: 768px) and (max-width: 991.98px) {
  .cfd-faq-section,.feature-grid{ max-width: 720px; margin: auto; }
  .feature-grid ,.cfd-faq-section{ grid-template-columns: 1fr 1fr; }
  .cfd-faq-section, .cfd-start-trading-container { flex-direction: column; }
}

/* Large (≥992px and <1200px) */
@media (min-width: 992px) and (max-width: 1199.98px) {
 .feature-grid,.cfd-faq-section,.cfd-start-trading-container { max-width: 960px; margin: auto; }
}

/* X-Large (≥1200px and <1400px) */
@media (min-width: 1200px) and (max-width: 1399.98px) {
 .feature-grid,.cfd-faq-section,.cfd-start-trading-container { max-width: 1140px; margin: auto; }
}

/* XX-Large (≥1400px) */
@media (min-width: 1400px) {
 .feature-grid,.cfd-faq-section,.cfd-start-trading-container{ max-width: 1380px; margin: auto; }
}
</style>
</head>

<body>
<div class="cfd-trade-with-us-body">

<section class="trade-cfd">
    <h1>Why Trade CFDs with Lunaro Markets?</h1>

  <!-- Feature Cards -->
  <div class="feature-grid">
    <div class="feature-card">
      <div class="feature-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="Transparent Pricing">
      </div>
      <h3 class="feature-title">Transparent Pricing</h3>
      <p class="feature-description">
        No hidden fees or surprise charges. Our spreads are clearly displayed, and you'll always know what you're paying before you trade.
      </p>
    </div>

    <div class="feature-card">
      <div class="feature-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Reliable Execution">
      </div>
      <h3 class="feature-title">Reliable Execution</h3>
      <p class="feature-description">
        Low-latency execution, deep liquidity, and stable platforms ensure consistent performance — even during volatility.
      </p>
    </div>

    <div class="feature-card">
      <div class="feature-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-01.png" alt="Guidance">
      </div>
      <h3 class="feature-title">Comprehensive Guidance</h3>
      <p class="feature-description">
        Get demo accounts, tutorials, and support to build confidence and refine your strategy.
      </p>
    </div>
  </div>
</section>

  <!-- FAQ Section -->
  <section class="cfd-faq-section">
    <div class="cfd-faq-left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq-question.png" alt="FAQ Illustration">
    </div>
    <div class="cfd-faqs-right-side">
      <h2>FAQs</h2>
      <p>Get answers to the most common questions about CFD trading, margin requirements, and leverage.</p>
      <a href="/faqs"><button class="cfd-faqs-btn-primary">Read CFD Trading FAQs</button></a>
    </div>
  </section>

  <!-- Start Trading Section -->
  <section class="cfd-start-trading-section">
    <div class="cfd-start-trading-container">
      <div class="cfd-start-trading-left">
        <h1>Start Trading CFDs Today</h1>
        <p>Open your Lunaro Markets account and experience transparent pricing, reliable execution, and professional support.</p>
        <div class="button-group">
          <button class="btn-primary">Start trading</button>
        </div>
      </div>

      <div class="cfd-start-trading-right">
        <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="">
          </div>
          <p><strong>Simple and Secure Account Opening</strong><br>Get started in minutes with our streamlined process.</p>
        </div>

        <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="">
          </div>
          <p><strong>Practice Risk-Free</strong><br>Explore markets and test strategies with a demo account.</p>
        </div>

        <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-filled-check.png" alt="">
          </div>
          <p><strong>Fast Funding & Local Support</strong><br>Quick deposits, secure withdrawals, and responsive help.</p>
        </div>
      </div>
    </div>
  </section>

</div>
</body>
</html>
