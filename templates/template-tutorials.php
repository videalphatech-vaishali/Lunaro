<?php

/**
 * Template Name: Tutorial Market Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
get_header('new');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Market Insights</title>
  <link rel="stylesheet" href="tutorials.css" />
</head>
<style>
  .tutorial-section {
    background: #0b0f2a;
    color: #fff;
    font-family: "Poppins", sans-serif;
    margin: 0;
  }

  /* HERO */
  .hero {
    background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center bottom / cover no-repeat;
    
    display: flex;
    align-items: flex-end; 
  }

  .hero-content h1 {
    font-size: 2.2rem;
    margin-bottom: 8px;
  }

  .hero-content p {
    font-size: 1rem;
    color: #ccc;
  }

  /* SECTION HEADERS */
  .tutorial-section {
    padding: 40px;
  }

  .section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }

  .section-header h2 {
    font-size: 1.4rem;
  }

  .section-header a {
    color: #ccc;
    text-decoration: none;
    font-size: 0.9rem;
  }

  /* ARTICLE CARDS */
  .articles {
    display: grid;
    grid-template-columns: repeat(3, minmax(280px, 1fr));
    gap: 20px;
  }

  .card {
    background: #10143f;
    border-radius: 16px;
    overflow: hidden;
    transition: transform 0.2s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .image-container {
    position: relative;
    width: 100%;
    aspect-ratio: 16/9;
  }

  .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .card-body {
    padding: 20px;
  }

  .card-body h3 {
    margin: 0 0 8px;
    font-size: 1rem;
  }

  .card-body p {
    font-size: 0.7rem;
    color: #bbb;
    margin-bottom: 10px;
  }

  .card-body a {
    font-size: 0.6rem;
    color: #fff;
    text-decoration: none;
  }

  /* EXPLORE CATEGORIES */
  .explore {
    padding: 60px 40px;
    text-align: center;
  }

  .explore h2 {
    font-size: 1.8rem;
    margin-bottom: 30px;
  }

  .category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
    justify-items: center;
  }

  .category-card {
    background: #10143f;
    border: 1px solid #d9d9d9;
    border-radius: 20px;
    padding: 40px;
    font-weight: 500;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    min-height: 120px;
  }

  .category-card button {
    background: transparent;
    border: 1px solid #fff;
    border-radius: 40px;
    padding: 6px 16px;
    color: #fff;
    cursor: pointer;
    font-size: 0.85rem;
    margin-top: 10px;
    transition: background 0.3s ease;
  }

  .category-card button:hover {
    background: #fff;
    color: #0b0f2a;
  }

  /* START TRADING SECTION */
  .start-trading {
    background-color: #0b0f2a; 
    display: flex;
  }

  .start-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    border-radius: 20px;
    padding: 40px;
    width: 100%;
    color: #fff;
    gap: 40px;
  }

  /* LEFT COLUMN */
  .start-left {
    flex: 1;
  }

  .start-left h2 {
    font-size: 1.8rem;
    margin-bottom: 12px;
  }

  .start-left p {
    font-size: 1rem;
    color: #ccc;
    margin-bottom: 24px;
  }

  .btn-group {
    display: flex;
    gap: 12px;
  }

  .btn-primary {
    background-color: #f5d37d;
    color: #000;
    border: none;
    border-radius: 30px;
    padding: 10px 24px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #ffe49d;
  }

  .btn-outline {
    background: transparent;
    color: #f5d37d;
    border: 1px solid #f5d37d;
    border-radius: 30px;
    padding: 10px 24px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn-outline:hover {
    background: #f5d37d;
    color: #000;
  }

  /* RIGHT COLUMN */
  .start-right {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .start-feature {
    display: flex;
    align-items: flex-start;
    gap: 16px;
  }

  .icon-circle {
    background-color: #f5d37d;
    color: #0b0f2a;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    flex-shrink: 0;
  }

  .start-feature h4 {
    margin: 0;
    font-size: 1rem;
    font-weight: 600;
  }

  .start-feature p {
    margin: 4px 0 0;
    font-size: 0.9rem;
    color: #bbb;
  }



  /* RESPONSIVE */
  @media (max-width: 992px) {
    .articles {
      grid-template-columns: repeat(2, 1fr);
    }

    .start-container {
      flex-direction: column;
      text-align: center;
      align-items: center;
      padding: 30px;
    }

    .start-left,
    .start-right {
      width: 100%;
    }

    .start-right {
      margin-top: 30px;
      align-items: center;
    }

    .start-feature {
      text-align: left;
      justify-content: flex-start;
    }
  }

  @media (max-width: 600px) {
    .articles {
      grid-template-columns: 1fr;
    }

    .hero {
      height: 200px;
      padding: 20px;
    }

    .section-header {
      flex-direction: column;
      gap: 8px;
      text-align: center;
    }
  }
</style>

<body>
  <div class="tutorial-section">

    <!-- Header Section -->
    <header class="hero">
      <div class="hero-content">
        <h1>Tutorials</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
      </div>
    </header>

    <!-- Articles Section -->
    <!-- SECTION 1 -->
    <section class="tutorial-section">
      <div class="section-header">
        <h2>Getting started with MetaTrader 5</h2>
        <a href="#">All 'Getting Started' tutorials →</a>
      </div>

      <div class="articles">
        <div class="card">
          <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Tutorial Image">
          </div>
          <div class="card-body">
            <h3>Intro to Trading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
            <a href="#">Watch Tutorial →</a>
          </div>
        </div>

        <div class="card">
          <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Tutorial Image">
          </div>
          <div class="card-body">
            <h3>Intro to Trading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
            <a href="#">Watch Tutorial →</a>
          </div>
        </div>

        <div class="card">
          <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Tutorial Image">
          </div>
          <div class="card-body">
            <h3>Intro to Trading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
            <a href="#">Watch Tutorial →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 2 -->
    <section class="tutorial-section">
      <div class="section-header">
        <h2>Advanced charting and technical analysis</h2>
        <a href="#">All 'Advanced' tutorials →</a>
      </div>

      <div class="articles">
        <div class="card">
          <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Tutorial Image">
          </div>
          <div class="card-body">
            <h3>Intro to Trading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
            <a href="#">Watch Tutorial →</a>
          </div>
        </div>
        <div class="card">
          <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Tutorial Image">
          </div>
          <div class="card-body">
            <h3>Intro to Trading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
            <a href="#">Watch Tutorial →</a>
          </div>
        </div>
        <div class="card">
          <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Tutorial Image">
          </div>
          <div class="card-body">
            <h3>Intro to Trading</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
            <a href="#">Watch Tutorial →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- CATEGORY GRID -->
    <section class="explore">
      <h2>Explore Tutorials by Category</h2>
      <div class="category-grid">
        <div class="category-card">Getting Started with MetaTrader 5 <button>Learn more</button></div>
        <div class="category-card">Advanced charting and technical analysis <button>Learn more</button></div>
        <div class="category-card">Setting up automated trading strategies <button>Learn more</button></div>
        <div class="category-card">Mobile platform optimisation <button>Learn more</button></div>
        <div class="category-card">Cross–platform account management <button>Learn more</button></div>
      </div>
    </section>

    <!--START TRADING NOW-->

    <div class="start-trading">

      <div class="start-container">

        <div class="start-left">

          <h2>Start trading now</h2>

          <p>Create an account and start trading with Lunaro Markets.</p>

          <div class="btn-group">

            <button class="btn-primary">Start trading</button>

            <button class="btn-outline">Create demo account</button>

          </div>

        </div>

        <div class="start-right">

          <div class="start-feature">

            <div class="icon-circle">⚙️</div>

            <div>

              <h4>Industry-Leading Technology</h4>

              <p>MetaTrader 5 with advanced features and reliability</p>

            </div>

          </div>

          <div class="start-feature">

            <div class="icon-circle">📱</div>

            <div>

              <h4>Multi-Device Access</h4>

              <p>Trade seamlessly across desktop, web, and mobile platforms</p>

            </div>

          </div>

          <div class="start-feature">

            <div class="icon-circle">💬</div>

            <div>

              <h4>Professional Support</h4>

              <p>Expert guidance for platform setup and optimization</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>
</body>
    <?php
    get_footer();
    ?>
</html>