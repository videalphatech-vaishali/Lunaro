
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Trading Now</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}
 

/* Section Container */
.market-start-trading-section {
  background: radial-gradient(circle at top left, #0b1440 0%, #0a0c19 60%, #0a0c19 100%);
  justify-content: center;
  align-items: center;
  padding: 5rem 5rem;
  display: flex;
}

.market-start-trading-container {
  justify-content: space-between;
  align-items: start; 
  padding-right:5rem;
  display: flex;
  width: 100%;
  gap: 60px;
}

/* Left Side */
.market-start-trading-left h1 {
  font-size: 2.6rem;
  font-weight: 700;
  margin-bottom: 15px;
}

.market-start-trading-left p {
  color: #b6b8c7;
  font-size: 1rem;
  margin-bottom: 35px;
}

.button-group {
  display: inline-grid;
  gap: 18px;
}

.btn-primary {
  color: #000;
  border: none;
  font-size: 1rem;
  cursor: pointer;
  font-weight: 600;
  padding: 14px 36px;
  border-radius: 40px;
  background-color: #fff0d6;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: #ffe8b5;
}

.btn-outline {
  transition: all 0.3s ease;
  background: transparent;
  border: 1.5px solid #fff;
  border-radius: 40px;
  padding: 14px 36px;
  font-weight: 500;
  font-size: 1rem;
  cursor: pointer;
  color: #fff;
}

.btn-outline:hover {
  background: #fff;
  color: #000;
}

/* Right Side Features */
.market-start-trading-right {
  flex-direction: column;
  display: flex;
  gap: 25px;
}

.feature {
  align-items: center;
  display: flex;
  gap: 15px;
}

.feature .icon {
  color: #fff;
  width: 40px;
  height: 40px;
  display: flex;
  font-size: 1rem;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
  background-color: #A89469;
}

.feature p {
  font-size: 0.95rem;
  line-height: 1.5;
  text-align: left;
  color: #fff;
}

/* Responsive */
@media (max-width: 900px) {
  .market-start-trading-container {
    flex-direction: column;
    text-align: center;
  }

  .market-start-trading-right {
    align-items: center;
    margin-top: 40px;
  }

  .feature {
    justify-content: center;
  }
}

@media (max-width: 768px) {

  .market-start-trading-section {
    padding: 2rem 1rem; /* reduce padding */
  }

  .market-start-trading-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 40px;
    padding-right: 0;
  }

  /* Left Side */
  .market-start-trading-left h1 {
    font-size: 1.8rem;
    line-height: 1.3;
  }

  .market-start-trading-left p {
    font-size: 0.95rem;
    margin-bottom: 25px;
  }

 

  /* Right Side Features */
  .market-start-trading-right {
    align-items: center;
    gap: 20px;
    width: 100%;
  }

  .feature {
    flex-direction: row;
    text-align: center;
    gap: 10px;
  }

  .feature .icon {
    width: 45px;
    height: 45px;
  }

  .feature p {
    font-size: 0.9rem;
    line-height: 1.4;
    color: #fff;
    max-width: 320px;
  }
}

    </style>
<section class="market-start-trading-section">
  <div class="market-start-trading-container">
    <!-- Left Content -->
    <div class="market-start-trading-left">
      <h1>Start trading now</h1>
      <p>Create an account and start trading with Lunaro Markets.</p>
      <div class="button-group">
        <button class="signup btn-primary">Start trading</button>
        <!-- <button class="btn-outline">Create demo account</button> -->
      </div>
    </div>

    <!-- Right Features -->
    <div class="market-start-trading-right">
      <div class="feature">
        <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
        </div>
        
   
        <p><strong>Competitive Spreads</strong> – From 0.3 pips on major forex pairs</p>
      </div>

      <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
        </div>
        <p><strong>Professional Platforms</strong> – MetaTrader 5 and mobile applications</p>
      </div>

      <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
        </div>
        <p><strong>Expert Support</strong> – 24/5 customer service and market guidance</p>
      </div>
    </div>
  </div>
</section>
</body>
</html>
