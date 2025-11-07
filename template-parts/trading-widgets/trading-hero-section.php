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
    .trading-hero-section {
      padding: 5rem 5rem;
      text-align: center;
      /* background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat; */
      background-color: #000;
    }

    .trading-hero-section h2 {
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 10px;
      font-family: 'Calibri', sans-serif;
      color: white;
    }

    .trading-hero-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 80px;
    }

    .trading-hero-company-card {
      max-width: 700px;
      text-align: left;
    }

    .trading-hero-company-card p {
      font-size: 16px;
      line-height: 1.7;
      font-weight: 400;
      color: white;
      margin: 0;
    }
  </style>
</head>

<body>
  <div class="trading-hero-section">
    <div class="trading-hero-cards">
      <!-- Left: Company Overview Text -->
      <div class="trading-hero-company-card">
        <h2>Learn how to trade with confidence</h2>
        <p>
          Master the fundamentals of CFD trading and ETDs with Lunaro’s comprehensive educational resources.
          Whether you're new to financial markets or looking to enhance your trading skills,
          our expert-guided approach will help you trade with confidence.
        </p>
      </div>

      <!-- Right: Image -->
      <div class="trading-hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trading-hero-pic.png" alt="Trading" />
      </div>
    </div>
  </div>
</body>
</html>
