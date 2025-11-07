<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Trading Now</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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
    .shares-start-trading-section {
      background: radial-gradient(circle at top left, #0b1440 0%, #0a0c19 60%, #0a0c19 100%);
      justify-content: center;
      align-items: center;
      padding: 5rem 5rem;
      display: flex;
    }

    .shares-start-trading-container {
      justify-content: space-between;
      align-items: start;
      display: flex;
      width: 100%;
      gap: 60px;
      margin: 0 auto;
    }

    /* Left Side */
    .shares-start-trading-left h1 {
      font-size: 2.6rem;
      font-weight: 700;
      margin-bottom: 15px;
      color: #fff;
    }

    .shares-start-trading-left p {
      color: #b6b8c7;
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 35px;
    }

    .button-group {
      display: flex;
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

    /* Right Side Features */
    .shares-start-trading-right {
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
      width: 42px;
      height: 42px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #A89469;
      border-radius: 50%;
    }

    .feature .icon img {
      width: 22px;
      height: 22px;
      object-fit: contain;
    }

    .feature p {
      font-size: 0.95rem;
      line-height: 1.5;
      font-weight: 400;
      text-align: left;
      color: #fff;
    }

    /* ---------- MOBILE VIEW ---------- */
@media (max-width: 900px) {
  .shares-start-trading-section {
    padding: 3rem 2rem;
  }

  .shares-start-trading-container {
    flex-direction: column;
    gap: 40px;
    align-items: center;
    text-align: center;
  }

  .shares-start-trading-left h1 {
    font-size: 2rem;
  }

  .shares-start-trading-left p {
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 25px;
  }

  .button-group {
    justify-content: center;
  }

  .shares-start-trading-right {
    align-items: center;
    gap: 20px;
  }

  .feature {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 12px;
  }

  .feature .icon {
    width: 48px;
    height: 48px;
  }

  .feature .icon img {
    width: 24px;
    height: 24px;
  }

  .feature p {
    font-size: 0.9rem;
    line-height: 1.5;
    max-width: 320px;
  }
}

@media (max-width: 600px) {
  .shares-start-trading-section {
    padding: 2.5rem 1.2rem;
  }

  .shares-start-trading-left h1 {
    font-size: 1.7rem;
  }

  .shares-start-trading-left p {
    font-size: 0.9rem;
  }

  .btn-primary {
    padding: 12px 28px;
    font-size: 0.9rem;
  }

  .feature p {
    font-size: 0.85rem;
    line-height: 1.4;
  }
}



  </style>

  <section class="shares-start-trading-section">
    <div class="shares-start-trading-container">
      <!-- Left Content -->
      <div class="shares-start-trading-left">
        <h1>Invest in Treasuries</h1>
        <p>
          Open your Lunaro Markets account today and gain access to global government bond markets with
          institutional-style execution.
        </p>
        <div class="button-group">
          <button class="btn-primary">Start trading</button>
        </div>
      </div>

      <!-- Right Features -->
      <div class="shares-start-trading-right">
        <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
          </div>
          <p>
            <strong>Access to Global ETFs Across Sectors and Themes</strong><br>
            Trade US Treasuries, UK Gilts, German Bunds, and other sovereign bonds from a single account.
          </p>
        </div>

        <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
          </div>
          <p>
            <strong>Portfolio Diversification and Hedging</strong><br>
            Use fixed income instruments to balance equity exposure and manage overall portfolio risk.
          </p>
        </div>

        <div class="feature">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
          </div>
          <p>
            <strong>Demo Environment Available for Practice</strong><br>
            Clear spreads and competitive pricing on government bond CFDs with no hidden fees.
          </p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
