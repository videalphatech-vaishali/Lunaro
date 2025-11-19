<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indices Overview</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
  <style>
    :root {
      --font-family: 'DM Sans', sans-serif;
      --text-color: #fff;
      --bg-color: #0B0D16;
      --border-color: #fff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: var(--font-family);
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    /* ====== Section indices-container ====== */
    .about-company-overview-section {
      padding: 100px 20px;
      display: flex;
      justify-content: center;
      background:var(--bg-color)
    }

    .indices-container {
      width: 100%;
      max-width: 1380px;
      margin: 0 auto;
    }

    /* ====== Flex Layout ====== */
    .about-company-overview-cards {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 80px;
    }

    .company-card {
      flex: 1;
      max-width: 600px;
    }

    .company-card h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      line-height: 1.3;
    }

    .company-card p {
      font-size: 1rem;
      line-height: 1.7;
      color: #fff;
    }

    .about-company-overview-cards img {
      flex: 1;
      max-width: 600px;
      height: auto;
      border-radius: 10px;
    }

    /* ====== Button (Optional) ====== */
    .button-column {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 20px;
      align-items: flex-start;
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid var(--border-color);
      border-radius: 40px;
      padding: 14px 36px;
      font-weight: 500;
      font-size: 1rem;
      cursor: pointer;
      color: #FFF4E4;
      transition: all 0.3s ease;
    }

    .btn-outline:hover {
      background: #fff;
      color: #000;
    }

    /* ====== RESPONSIVE BREAKPOINTS ====== */
    @media (max-width: 1399.98px) {
      .indices-container { max-width: 1380px; }
    }

    @media (max-width: 1199.98px) {
      .indices-container { max-width: 960px; }
    }

    @media (max-width: 991.98px) {
      .indices-container { max-width: 720px; }
      .about-company-overview-cards {
        flex-direction: column;
        text-align: center;
        gap: 60px;
      }
      .company-card {
        max-width: 100%;
      }
      .about-company-overview-cards img {
        width: 80%;
      }
      .company-card h2 {
        font-size: 2.2rem;
      }
    }

    @media (max-width: 767.98px) {
      .indices-container { max-width: 540px; }
      .about-company-overview-section { padding: 60px 20px; }
      .company-card h2 {
        font-size: 1.8rem;
      }
      .company-card p {
        font-size: 0.95rem;
      }
    }

    @media (max-width: 575.98px) {
      .indices-container { max-width: 100%; }
      .about-company-overview-section { padding: 50px 15px; }
      .about-company-overview-cards img {
        width: 100%;
      }
      .btn-outline {
        width: 100%;
        font-size: 0.9rem;
        padding: 10px 22px;
      }
    }
  </style>
</head>
<body>

  <section class="about-company-overview-section">
    <div class="indices-container">
      <div class="about-company-overview-cards">

        <div class="company-card">
          <h2>What are indices, and how to trade them</h2>
          <p>
            An index tracks the collective performance of a basket of shares, typically representing a specific market, region, or sector. 
            For example, the US 500 measures 500 of the largest publicly traded companies in the United States, while the Germany 40 captures the leading firms on the Frankfurt Stock Exchange. 
            When you trade an index, you are speculating on the overall movement of that market rather than betting on individual company performance. 
            This provides instant diversification and makes indices a popular choice for traders seeking broad exposure without the need to research dozens of individual stocks.
            Indices can be traded via CFDs or Spread bets, giving you the flexibility to go long or short depending on your market outlook and access to 24-hour trading on major global benchmarks.
          </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/indices-hero-pic.png" alt="Indices">
      </div>
    </div>
  </section>

</body>
</html>
