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
  width: 250px;
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

	@media (max-width: 768px) {
  /* ===== General Container Adjustments ===== */
  .cfd-trade-with-us-body,
  .expertise-section {
    padding: 3rem 1.5rem;
  }

  h1, h2 {
    font-size: 1.8rem !important;
    text-align: center !important;
    line-height: 1.3;
  }

  p {
    font-size: 0.95rem !important;
    line-height: 1.6;
  }

  /* ===== Section: Our Pricing Advantages ===== */
  .our-pricing-advantages-section {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 2rem;
    padding: 2rem 1.5rem;
  }

  .left-side, 
  .right-side {
    max-width: 100%;
    padding: 0;
  }

  .right-side {
    align-items: flex-start;
    text-align: left;
    gap: 1.2rem;
  }

  .advantage-item {
    flex-direction: row;
    align-items: flex-start;
    gap: 10px;
  }

  .advantage-item img {
    width: 18px;
    height: 18px;
  }

  .advantage-item span {
    font-weight: 600;
    display: block;
  }

  /* ===== Section: Why Choose Cards ===== */
  .feature-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
    padding: 2rem 0;
    margin-bottom: 2.5rem;
  }

  .feature-card {
    padding: 1.2rem;
    border-radius: 1rem;
    text-align: center;
  }

  .feature-icon {
    margin: 0 auto 0.8rem;
  }

  .feature-title {
    font-size: 1.2rem;
  }

  .feature-description {
    font-size: 0.9rem;
    line-height: 1.6;
  }

  /* ===== FAQ & Start Trading ===== */
  .cfd-faq-section,
  .cfd-start-trading-container {
    flex-direction: column;
    text-align: center;
    gap: 2.5rem;
    padding: 2rem 0;
  }

  .cfd-start-trading-left,
  .cfd-start-trading-right {
    max-width: 100%;
  }

  .cfd-start-trading-left h1 {
    font-size: 1.8rem;
  }

  .feature {
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    gap: 15px;
  }

  .feature p {
    max-width: 100%;
    font-size: 0.9rem;
  }

  /* ===== Buttons & CTAs ===== */
  .button-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    text-align: center;
  }

  .btn-primary {
    width: 200px;
    padding: 12px 24px;
    font-size: 0.95rem;
  }

  .button-group p {
    font-size: 0.9rem;
    max-width: 320px;
  }
}

</style>

<div class="building-expertise-section">
    <div class="cfd-trade-with-us-body">
        <div class="our-pricing-advantages-section">
            <div class="left-side">
                <h2>Building Expertise in Derivatives Markets</h2>
                <p>
                  Understanding futures markets requires specialised knowledge beyond traditional stock or forex trading. 
                  Our educational pathway covers essential concepts from contract specifications to advanced hedging strategies, 
                  designed to help you navigate CME Group markets with confidence and precision.<br>
                  Our comprehensive approach ensures you understand both the opportunities and risks inherent in futures trading.
                   From your first micro contract to developing sophisticated trading strategies, 
                   we provide the education and support needed at every stage of your futures trading journey.
                </p>
            </div>

            <div class="right-side">
                <h2>Educational Pathway:</h2>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Futures Fundamentals</span>
                        <p>Contract specifications, margin requirements, and settlement procedures</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Market Analysis</span>
                        <p>Technical analysis specific to futures markets and seasonal patterns</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Risk Management</span>
                        <p>Position sizing, stop-loss strategies, and portfolio hedging techniques</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="" class="w-3 h-3">
                    <div class="column-right-text">
                        <span>Advanced Strategies</span>
                        <p>Spread trading, calendar spreads, and cross-market arbitrage</p>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <!-- why spread betting with us  Cards Section  -->
        <h1>Why Choose Lunaro Markets and CME Group Futures
Paragraph</h1>
        <div class="feature-grid">
            <!-- Card 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg"
                        alt="Lightning Fast Icon">
                </div>
                <h3 class="feature-title">ADGM Regulation & Security</h3>
                <p class="feature-description">
                    Trade with confidence knowing your CME futures positions are backed by Abu Dhabi Global Market regulation and CME Group's central clearing, providing multiple layers of security and risk mitigation.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                        alt="Trusted and Regulated Icon">
                </div>
                <h3 class="feature-title">Precision Position Management</h3>
                <p class="feature-description">
                    Access the same liquid CME markets with smaller capital commitments through Micro E-mini contracts, allowing for precise risk control and portfolio fine-tuning.
                </p>
            </div>
            <!-- Card 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                        alt="Trusted and Regulated Icon">
                </div>
                <h3 class="feature-title">MetaTrader 5 CME Access</h3>
                <p class="feature-description">
                    Execute CME futures trades directly through MetaTrader 5 with advanced charting, algorithmic trading capabilities, and real-time market data integration.
                </p>
            </div>
        </div>
        <!--  -->
        <div class="button-group">
            <button class="btn-primary">Start trading</button> <br>
           <p>Ready to enhance your portfolio? Discover how options can provide income generation and risk management for your existing positions.</p>
        </div>
    </div>
    </div> 
</div>