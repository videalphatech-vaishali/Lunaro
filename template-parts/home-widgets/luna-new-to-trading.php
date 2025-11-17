<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trading Section</title>

    <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
  >

  <style>
    :root {
      --font-primary: "DM Sans", sans-serif;
      --card-bg: #fffaf3;
      --border-color: #ddd;
      --shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    body {
      margin: 0;
      font-family: var(--font-primary);
      background-color: black;
    }

    /* ===== Trading Section ===== */
    .trading-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
      margin: 0 auto;
      padding: 2rem 1rem;
      gap: 2rem;
      width: 100%;
      max-width: 1320px;
    }

    .trading-card {
      border-radius: 1.5rem;
      box-shadow: var(--shadow);
      padding: 1.5rem;
      flex: 1 1 45%;
      max-width: 650px;
      display: flex;
      flex-direction: column;
      align-items: start;
      text-align: start;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .trading-card img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 10px;
    }

    .trading-card h2 {
      font-size: 41px;
      margin-top:1rem;
      margin-bottom: 1rem;
      color: #fff4e4;
        font-weight: 700;

    }

    .info-block {
      border-radius: 1rem;
      margin: 1rem 0;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      text-align: left;
    }

    .info-block h3 {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size:26px;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: #fff4e4;
    }

    .info-block img {
      width: 24px;
      height: 24px;
    }

    .info-block p {
      color: #fff4e4;
      margin-bottom: 0.5rem;
      font-size: 0.95rem;
    }

    .info-block a {
      color: #fff4e4;
      margin-top: 10px;
      font-weight: 600;
      text-decoration: none;
      font-size: 0.95rem;
    }

    .info-block a:hover {
      text-decoration: underline;
    }

    /* ===== Responsive Widths (like Bootstrap containers) ===== */
    @media (min-width: 1400px) {
      .trading-section { max-width: 90%; }
    }
    @media (min-width: 1200px) and (max-width: 1399px) {
      .trading-section { max-width: 1140px; }
    }
    @media (min-width: 992px) and (max-width: 1199px) {
      .trading-section { max-width: 960px; }
    }
    @media (min-width: 768px) and (max-width: 991px) {
      .trading-section { max-width: 720px; }
    }
    @media (min-width: 576px) and (max-width: 767px) {
      .trading-section { max-width: 540px; }
      .trading-card { flex: 1 1 100%; }
    }
    @media (max-width: 575px) {
      .trading-section { max-width: 100%; padding: 1rem; }
      .trading-card { flex: 1 1 100%; padding: 1rem; }
      .trading-card h2 { font-size: 1.4rem; }
      .info-block h3 { font-size: 1rem; }
      .info-block p, .info-block a { font-size: 0.9rem; }
    }
  </style>
</head>
<body>

  <section class="trading-section">
    <!-- ====== New to Trading Card ====== -->
    <div class="trading-card">
      <img src="/wp-content/uploads/2025/11/ntt-scaled.png" alt="Laptop Trading" style="height: 300px;">
      <h2>New to Trading?</h2>

      <div class="info-block">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/book-closed.svg" alt=""> Learning Resources</h3>
        <p>Explore our introductory materials for smarter risk management.</p>
        <p>Coming soon</p>
      </div>

      <div class="info-block">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square-1.svg" alt=""> Guidance and advice</h3>
        <p>Schedule a consultation with one of our specialists to address all your inquiries.</p>
      
                    <?php
                             $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
                if ($country === 'uae') { 
             ?>
                   <a href="mailto:cs@lunaro.com?subject=Book%20a%20consultation&body=Hi%2C%20I%20need%20help%20with..." target="_blank"
                    rel="noopener">Book a consultation →</a>
            <?php }else{
             ?>
                   <a href="mailto:cs.uk@lunaro.com?subject=Book%20a%20consultation&body=Hi%2C%20I%20need%20help%20with..." target="_blank"
                    rel="noopener">Book a consultation →</a>
            <?php }
             ?>
      </div>
    </div>

    <!-- ====== For Expert Traders Card ====== -->
    <div class="trading-card">
      <img src="/wp-content/uploads/2025/11/for-expert-trader.png" alt="Laptop Trading" style="height: 300px;">
      <h2>For Expert Traders</h2>

      <div class="info-block">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tablet-01.svg" alt=""> Our Platforms</h3>
        <p>Learn about our platforms and their advantages.</p>
        <a href="platforms/">Go to our platforms →</a>
      </div>

      <div class="info-block">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/diamond-02.svg" alt=""> Professional Trading with Lunaro Pro</h3>
        <p>Advanced tools, institutional spreads, and priority execution for serious traders.</p>
        <a href="trading/">Register as professional trader →</a>
      </div>
    </div>
  </section>

</body>
</html>
