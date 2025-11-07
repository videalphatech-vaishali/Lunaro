
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
  gap:20px;
 }

	@media (max-width: 768px) {
  .market-strategy-section {
    padding: 60px 20px; /* tighter padding */
  }

  .market-strategy-section .container {
    padding: 0; /* remove extra padding for small screens */
  }

  .market-strategy-section .section-title {
    font-size: 1.6rem;
    line-height: 1.3;
    margin-bottom: 12px;
  }

  .market-strategy-section .section-subtitle {
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 40px;
    padding: 0 10px;
  }

  .market-grid {
    flex-direction: column; /* stack cards vertically */
    gap: 24px;
    align-items: center;
  }

  .market-card {
    width: 100%;
    padding: 24px;
    border-radius: 16px;
    text-align: left;
  }

  .market-card h3 {
    font-size: 1.3rem;
    margin-bottom: 8px;
  }

  .market-card h4 {
    font-size: 1rem;
    margin-top: 16px;
  }

  .market-card p {
    font-size: 0.95rem;
    line-height: 1.6;
  }

  .market-card ul {
    padding-left: 0;
  }

  .market-card li {
    font-size: 0.9rem;
    line-height: 1.5;
  }

  .kb {
    gap: 10px;
    align-items: flex-start;
    flex-wrap: wrap;
  }

  .kb img {
    width: 18px;
    height: 18px;
  }
}

</style>







<section class="market-strategy-section">
  <div class="container">
    <h2 class="section-title">Powerful Strategies with Tailored Risk Management</h2>
    <p class="section-subtitle">
       Explore the sophisticated world of options trading through CME Group's deep liquidity markets.
       Each strategy offers unique risk-reward profiles designed to match different market outlooks and
       portfolio objectives.
    </p>

    <div class="market-grid">
      <!-- Micro E-mini Futures -->
      <div class="market-card">
        <h3>Directional Options Strategies</h3>
        <p>Capitalise on market movements with defined risk</p>
        <div class="kb"> 
          
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-02.svg" alt="" class="w-1 h-1">
        <h4>Key Benefits:</h4>
        </div>
        <ul>
               <div class="kb"> 

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
          <li>Limited downside risk with unlimited upside potential</li></div>
                <div class="kb">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
        <li>Lower capital requirements compared to futures positions</li></div>
          <div class="kb">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
          <li>Leverage market movements in both directions</li>
        </div>
           <div class="kb">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
          <li>Time decay management for strategic positioning</li>
        </div>
        </ul>
      </div>

      <!-- Standard CME Futures -->
      <div class="market-card">
        <h3>Income Generation Strategies</h3>
        <p>Collect premiums while managing portfolio exposure</p>
    <div class="kb"> 
          
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-02.svg" alt="" class="w-1 h-1">
        <h4>Key Benefits:</h4>
        </div>
        <ul>
         <div class="kb"> 

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
          <li>Generate income from existing market positions</li>
        </div>
         <div class="kb"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
         <li>Premium collection through covered call strategies</li></div>
         <div class="kb"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
         <li>Cash-secured put writing for entry opportunities</li>
        </div>
         <div class="kb"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-1 h-1">
         <li>Systematic income generation with controlled risk</li>
        </div>
       </ul>
      </div>
    </div>
  </div>
</section>
