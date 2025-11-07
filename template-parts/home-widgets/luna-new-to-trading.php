<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trading Sections</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
  >

  <style>
    /* ====== BASE STYLES ====== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --font-primary: "DM Sans", sans-serif;
      --bg-color: #0b0d16;
      --text-light: #ffffff;
      --text-muted: #cfcfcf;
      --highlight: #fff4e4;
    }

    body {
      background-color: var(--bg-color);
      font-family: var(--font-primary);
      color: var(--text-light);
      line-height: 1.6;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
      border-radius: 10px;
    }

    /* ====== FLEX LAYOUT ====== */
    .trading-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: flex-start;
      gap: 60px;
      padding: 5rem 5rem;
      background-color: #000;
    }

    .trading-card {
      flex: 1 1 45%;
      background: transparent;
    }

    .trading-card h2 {
      font-size: 1.8rem;
      font-weight: 600;
      margin: 20px 0;
      color: var(--highlight);
    }

    .info-block {
      margin-bottom: 30px;
    }

    .info-block h3 {
      font-size: 1.6rem;
      font-weight: 600;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
      color: var(--highlight);
    }

    .info-block p {
      color: var(--text-muted);
      font-size: 1rem;
      margin-bottom: 10px;
    }

    .info-block a {
      color: var(--highlight);
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      border-radius: 8px;
      display: inline-block;
    }

    .info-block a:hover {
      background: #1d1d1d;
      padding: 8px 16px;
    }

    /* ====== EXTRA LARGE SCREENS (≥1440px) ====== */
    @media (min-width: 1440px) {
      .trading-section {
        padding: 6rem 8rem;
        gap: 80px;
      }

      .trading-card h2 {
        font-size: 2.2rem;
      }

      .info-block h3 {
        font-size: 1.8rem;
      }

      .info-block p {
        font-size: 1.1rem;
      }

      .info-block a {
        font-size: 1rem;
      }
    }

    /* ====== LARGE SCREENS (1024px–1439px) ====== */
    @media (max-width: 1439px) and (min-width: 1024px) {
      .trading-section {
        padding: 4rem 4rem;
        gap: 50px;
      }

      .trading-card h2 {
        font-size: 1.9rem;
      }

      .info-block h3 {
        font-size: 1.4rem;
      }

      .info-block p {
        font-size: 1rem;
      }
    }

    /* ====== MEDIUM SCREENS (768px–1023px) ====== */
    @media (max-width: 1023px) and (min-width: 768px) {
      .trading-section {
        flex-direction: column;
        padding: 4rem 3rem;
        gap: 40px;
      }

      .trading-card {
        flex: 1 1 100%;
      }

      .trading-card h2 {
        font-size: 1.6rem;
      }

      .info-block h3 {
        font-size: 1.3rem;
      }

      .info-block p {
        font-size: 0.95rem;
      }
    }

    /* ====== MOBILE DEVICES (≤767px) ====== */
    @media (max-width: 767px) {
      .trading-section {
        flex-direction: column;
        padding: 3rem 1.5rem;
        gap: 30px;
      }

      .trading-card {
        flex: 1 1 100%;
      }

      .trading-card h2 {
        font-size: 1.4rem;
      }

      .info-block h3 {
        font-size: 1.1rem;
      }

      .info-block p {
        font-size: 0.9rem;
      }
    }

    /* ====== SMALL MOBILE (≤480px) ====== */
    @media (max-width: 480px) {
      .trading-section {
        padding: 2rem 1rem;
        gap: 25px;
      }

      .trading-card h2 {
        font-size: 1.2rem;
      }

      .info-block h3 {
        font-size: 1rem;
      }

      .info-block p {
        font-size: 0.85rem;
      }

      .info-block a {
        font-size: 0.85rem;
      }

      .trading-card img {
        border-radius: 12px;
      }
    }
  </style>
</head>

<body>
  <section class="trading-section">
    <!-- ====== New to Trading Card ====== -->
    <div class="trading-card">
      <img src="http://localhost/wordpress/wp-content/uploads/2025/11/for-expert-trader.png" alt="Laptop Trading"style="height: 300px;">
      <h2>New to Trading?</h2>

      <div class="info-block">
        <h3>  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-closed.svg" alt="" class="w-8 h-8"> Learning Resources</h3>
        <p>Explore our introductory materials for smarter risk management.</p>
        <a href="tutorial/">Go to our tutorials →</a>
      </div>

      <div class="info-block">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square-1.svg" alt="" class="w-8 h-8"> Guidance and advice</h3>
        <p>Schedule a consultation with one of our specialists to address all your inquiries.</p>
        <a href="#">Book a consultation →</a>
      </div>
    </div>

    <!-- ====== For Expert Traders Card ====== -->
    <div class="trading-card">
     <img src="/wp-content/uploads/2025/11/ntt-scaled.png" alt="Laptop Trading" style="height: 300px;">
      <h2>For Expert Traders</h2>

      <div class="info-block">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tablet-01.svg" alt="" class="w-8 h-8"> Our Platforms</h3>
        <p>Learn about our platforms and their advantages.</p>
        <a href="platforms/">Go to our platforms →</a>
      </div>

      <div class="info-block">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-02.svg" alt="" class="w-8 h-8"> Professional Trading with Lunaro Pro</h3>
        <p>Advanced tools, institutional spreads, and priority execution for serious traders.</p>
        <a href="trading/">Register as professional trader →</a>
      </div>
    </div>
  </section>
</body>
</html>