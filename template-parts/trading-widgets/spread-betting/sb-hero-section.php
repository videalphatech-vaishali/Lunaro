<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <style>
    .sb-betting-hero-section {
      padding: 5rem 5rem;
      text-align: center;
      /* background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat; */
      background-color: #000;
    }

    .sb-betting-hero-section h2 {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 10px;
      font-family: 'Calibri', sans-serif;
      color: white;
    }

    .sb-betting-hero-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 80px;
    }

    .sb-betting-hero-company-card {
      max-width: 700px;
      text-align: left;
    }

    .sb-betting-hero-company-card p {
      font-size: 16px;
      line-height: 1.7;
      font-weight: 400;
      color: white;
      margin: 0;
    }

    
        /*  */
        .what-is-sb-secion {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 150px;
            padding: 5rem 5rem;
            flex-wrap: wrap;

            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/tranparent-bg.png') center/cover no-repeat;
            background-color: #0b0d16;

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
            color: #FFF4E4;
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
            .what-is-sb-secion {
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
  </style>
</head>

<body>
  <div class="sb-betting-hero-section">
    <div class="sb-betting-hero-cards">
      <!-- Left: Company Overview Text -->
      <div class="sb-betting-hero-company-card">
        <h2>Spread Betting</h2>
        <p>
          Spread betting enables you to speculate on price movements across global financial 
          markets without owning the underlying asset. Go long (buy) when you expect prices 
          to rise, or short (sell) when you anticipate a decline. Your profit or loss depends
           on how far the market moves in your chosen direction and how much you stake per point.
        </p>
      </div>

      <!-- Right: Image -->
      <div class="sb-betting-hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sb-hero-pic.png" alt="Trading" />
      </div>
    </div>
  </div>

  
    <div class="what-is-sb-secion">
        <div class="left-side">
            <h2>What is Spread Betting?</h2>
            <p>
                Spread betting is a tax-efficient way to access shares, indices, forex, commodities, and bonds with complete flexibility. You determine your stake per point of market movement, giving you direct control over both risk exposure and potential returns. It's a popular choice for UK traders seeking capital gains tax exemption and commission-free trading on most instruments. Unlike traditional investing, you never own the asset itself; you're simply taking a position on whether its price will move up or down. This means you can profit in both rising and falling markets.
            </p>

        </div>

        <div class="right-side">
            <h2>Key features / benefits</h2>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>Tax-free trading in the UK (capital gains tax exempt)</span>
                    <p>Spread betting profits are currently exempt from Capital Gains Tax (CGT) and stamp duty in the UK, making it one of the most tax-efficient ways to trade.</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>Flexible Stake Sizes from £1 Per Point</span>
                    <p>Whether you're testing a strategy or scaling a position, you control your risk with precise stake sizing, starting from just £1 per point.</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>No Commission on Most Markets</span>
                    <p>Trade thousands of instruments with transparent spread-only pricing. No hidden commission charges on the majority of our markets. Plus, there’s no currency variation risk: your account is protected by automatically converting profits and losses back into your base currency, so exchange rate fluctuations won’t affect your balance.</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>Access to Global Instruments</span>
                    <p>Gain direct exposure to shares, indices, forex pairs, commodities, interest rates, and more, all from a single spread betting account.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
