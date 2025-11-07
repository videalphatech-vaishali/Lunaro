<style>
    .market-strategy-section {
        background: radial-gradient(ellipse at center, #0B0D16 0%, #090A12 100%);
        color: #FFF4E4;
        padding: 80px 20px;
        text-align: center;
    }

    .market-strategy-section .container {
        padding: 5rem 5rem;
        margin: 0 auto;
    }

    .market-strategy-section .section-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .market-strategy-section .section-subtitle {
        color: #ccc;
        max-width: 700px;
        margin: 0 auto 50px;
        line-height: 1.6;
    }

    .market-grid {
        display: flex;
        gap: 30px;
        justify-content: space-between;
    }

    .market-card {
        border-radius: 20px;
        padding: 30px;
        text-align: left;
        transition: all 0.3s ease;
    }


    .market-card h3 {
        color: #FFF4E4;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .market-card h4 {
        color: #A89469;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .market-card ul {
        list-style: none;
        padding: 0;
    }

    .market-card li {
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
        color: #ccc;
    }

    .kb {
        display: flex;
        gap: 20px;
    }
	
	@media (max-width: 768px) {
  .market-strategy-section {
    padding: 50px 20px;
  }

  .market-strategy-section .container {
    padding: 0 15px;
  }

  .market-strategy-section .section-title {
    font-size: 1.6rem;
    line-height: 1.3;
  }

  .market-strategy-section .section-subtitle {
    font-size: 0.95rem;
    margin-bottom: 40px;
  }

  .market-grid {
    flex-direction: column;
    gap: 25px;
  }

  .market-card {
    padding: 25px;
    text-align: left;
  }

  .market-card h3 {
    font-size: 1.3rem;
  }

  .market-card h4 {
    font-size: 1rem;
    margin-top: 15px;
  }

  .market-card p {
    font-size: 0.95rem;
  }

  .kb {
    flex-direction: row;
    align-items: center;
    gap: 10px;
  }

  .market-card li {
    font-size: 0.9rem;
    margin-bottom: 10px;
  }

  .kb img {
    width: 16px;
    height: 16px;
  }
}

</style>







<section class="market-strategy-section">
    <div class="container">
        <h2 class="section-title">Choose Your Market Exposure Strategy</h2>
        <p class="section-subtitle">
            Discover the comprehensive range of CME Group futures available through Lunaro Markets.
            Each market category offers unique opportunities designed to suit different trading objectives and risk
            management needs.
        </p>

        <div class="market-grid">
            <!-- Micro E-mini Futures -->
            <div class="market-card">
                <h3>Micro E-mini Futures</h3>
                <p>Precision trading with smaller capital requirements.</p>
                <div class="kb">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-02.svg" alt=""
                        class="w-1 h-1">
                    <h4>Key Benefits:</h4>
                </div>
                <ul>
                    <div class="kb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                            alt="" class="w-1 h-1">
                        <li>Contract sizes 1/10th of standard E-mini futures</li>
                    </div> 
                    <div class="kb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                            alt="" class="w-1 h-1">
                        <li>Lower margin requirements for better capital efficiency</li>
                    </div>
                    <div class="kb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                            alt="" class="w-1 h-1">
                        <li>Trade S&P 500, Nasdaq-100, Russell 2000 with precision</li>
                    </div>
                    <div class="kb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                            alt="" class="w-1 h-1">
                        <li>Seamless conversion to standard contracts when needed</li>
                    </div>

                </ul>
            </div>

            <!-- Standard CME Futures -->
            <div class="market-card">
                <h3>Standard CME Futures</h3>
                <p>Access deeper markets and greater volatility opportunities.</p>
                <div class="kb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-02.svg" alt=""
                        class="w-1 h-1">
                    <h4>Key Benefits:</h4>
                </div>
                <ul>
                    <div class="kb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                            alt="" class="w-1 h-1">
                        <li>Greater leverage and position flexibility</li>
                    </div>
                    <div class="kb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                            alt="" class="w-1 h-1">
                        <li>Ideal for professional traders</li>
                    </div>
                    <div class="kb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                            alt="" class="w-1 h-1">
                        <li>Direct connectivity to CME Globex</li>
                    </div>

                </ul>
            </div>
        </div>
    </div>
</section>