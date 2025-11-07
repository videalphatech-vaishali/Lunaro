<style>
    .expertise-section {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
  background-color: #000;
  color: #FFF4E4;
  padding: 5rem 5rem;
}

    /*  */
        .our-pricing-advantages-section {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 150px;
      padding: 5rem 0;
      flex-wrap: wrap;
    }

    /* Left side */
    .left-side {
      flex: 1;
      max-width: 800px;
    }

    .left-side h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      color: #fff4e4;
    }

    .left-side p {
      font-size: 1rem;
      line-height: 1.7;      
      font-weight: 400;
      color: rgba(255, 244, 228, 0.9);
      margin: 0;
    }

    /* Right side */
    .right-side {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 18px;
      max-width: 600px;
    }
.right-side h2 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #fff4e4;

}

    .right-side p {
      font-size: 1rem;
      line-height: 1.7;
      font-weight: 400;
      color: rgba(255, 244, 228, 0.9);
      margin: 0;
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
      color:#FFF4E4;
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
      .our-pricing-advantages-section {
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
  display: table-column;
  text-align: center;
  /* flex-wrap: wrap; */
  gap: 10px;
}

.btn-primary {
  color: #000;
  background-color: #fff0d6;
  font-size: 1rem;
  font-weight: 600;
  padding: 14px 36px;
  border-radius: 40px;
  width: 320px;
  margin-bottom: 10px;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: #ffe8b5;
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
/* ===== Mobile Responsive Styles ===== */
@media (max-width: 768px) {

  /* --- General Section Wrappers --- */
  .expertise-section,
  .cfd-trade-with-us-body {
    padding: 3rem 1.5rem;
    background-size: cover;
    background-position: center;
  }

  /* --- Heading adjustments --- */
  .left-side h2,
  .cfd-trade-with-us-body h1,
  .cfd-start-trading-left h1,
  .right-side h2,
  .cfd-faqs-right-side h2 {
    font-size: 1.6rem;
    line-height: 1.3;
    text-align: center;
  }

  .left-side p,
  .right-side p,
  .cfd-start-trading-left p,
  .cfd-faqs-right-side p {
    font-size: 0.95rem;
    line-height: 1.6;
    text-align: center;
  }

  /* --- Layout Stack (Columns → Vertical) --- */
  .our-pricing-advantages-section,
  .cfd-faq-section,
  .cfd-start-trading-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 2.5rem;
    padding: 3rem 1rem;
  }

  .left-side,
  .right-side {
    max-width: 100%;
    padding: 0;
  }

  /* --- Advantage Items --- */
  .advantage-item {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 10px;
  }

  .advantage-item img {
    width: 20px;
    height: 20px;
  }

  .advantage-item .column-right-text span {
    font-size: 1rem;
    font-weight: 600;
  }

  .advantage-item .column-right-text p {
    font-size: 0.9rem;
    line-height: 1.5;
  }

  /* --- Feature Grid Cards --- */
  .feature-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
    padding: 2rem 0;
    margin-bottom: 3rem;
  }

  .feature-card {
    padding: 1.25rem;
    border-radius: 1rem;
  }

  .feature-title {
    font-size: 1.2rem;
    line-height: 1.4;
  }

  .feature-description {
    font-size: 0.9rem;
  }

  /* --- Button Group --- */
  .button-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    text-align: center;
    margin-top: 1.5rem;
  }

  .btn-primary {
    width: 100%;
    max-width: 280px;
    padding: 12px 20px;
    font-size: 0.95rem;
  }

  .button-group p {
    font-size: 0.9rem;
    color: rgba(255, 244, 228, 0.8);
    max-width: 90%;
    line-height: 1.6;
  }

  /* --- Icons and Features --- */
  .feature {
    flex-direction: column;
    align-items: center;
    gap: 15px;
  }

  .feature .icon {
    width: 35px;
    height: 35px;
  }

  .feature p {
    font-size: 0.9rem;
    text-align: center;
    max-width: 90%;
  }

  /* --- FAQ Section --- */
  .cfd-faq-left img {
    width: 150px;
  }

  .cfd-faqs-right-side {
    text-align: center;
    padding: 0 10px;
  }

  /* --- Section Spacing Fixes --- */
  .cfd-content-section {
    margin-bottom: 3rem;
  }

  .cfd-start-trading-right {
    align-items: center;
  }
}

</style>

<div class="building-expertise-section">
    <div class="cfd-trade-with-us-body">
        <div class="our-pricing-advantages-section">
            <div class="left-side">
                <h2>Master Advanced Derivatives for Portfolio Enhancement</h2>
                <p>
                  Options trading requires specialised knowledge of Greeks, volatility dynamics,
                   and time decay management. Our comprehensive education program covers essential
                    concepts from basic options mechanics to sophisticated multi-leg strategies, 
                    designed to help you harness the precision and flexibility that options provide.<br>
Our systematic approach ensures you understand both the mathematical foundations and practical
 applications of options trading. From your first protective put to developing sophisticated
  volatility strategies, we provide the knowledge and tools needed for effective options portfolio management.
</p>
            </div>

            <div class="right-side">
                <h2>Educational Pathway:</h2>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Options Fundamentals </span>
                        <p>Strike prices, expiration dates, and intrinsic vs. time value</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Volatility Analysis</span>
                        <p>Implied volatility interpretation and volatility trading strategies</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Greeks Mastery </span>
                        <p>Delta, gamma, theta, and vega for position management</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Advanced Combinations</span>
                        <p>Spreads, straddles, and synthetic positions for complex market views</p>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <!-- why spread betting with us  Cards Section  -->
        <h1>Why Trade CME Options with Lunaro Markets</h1>
        <div class="feature-grid">
            <!-- Card 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg"
                        alt="Lightning Fast Icon">
                </div>
                <h3 class="feature-title">Defined Risk Management Precise Capital Protection</h3>
                <p class="feature-description">
                    Options provide built-in risk limits, allowing you to define maximum losses before entering positions while maintaining unlimited profit potential on many strategies.
                   </p>
            </div>

            <!-- Card 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                        alt="Trusted and Regulated Icon">
                </div>
                <h3 class="feature-title">Micro Options Precision	Smaller Contract Flexibility</h3>
                <p class="feature-description">
                    Access the same CME markets with micro options contracts, providing fine-tuned position sizing and lower capital requirements for sophisticated strategy implementation.
                  </p>
            </div>
            <!-- Card 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                        alt="Trusted and Regulated Icon">
                </div>
                <h3 class="feature-title">Volatility Trading Opportunities Professional Volatility Tools</h3>
                <p class="feature-description">
                    Capitalise on market uncertainty through volatility-focused strategies, with access to real-time implied volatility data and advanced options analytics.
  </p>
            </div>
        </div>
        <!--  -->
        <div class="button-group">
            <button class="btn-primary">Open Options Trading Account</button> <br>
           <p>Ready to enhance your portfolio? Discover how options can provide income generation and risk management for your existing positions.</p>
        </div>
    </div>
    </div> 
</div>