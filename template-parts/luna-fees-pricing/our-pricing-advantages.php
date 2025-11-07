<?php
/**
 * Template Name: Our Pricing Advantages
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
 */
?>

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
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      font-family: 'DM Sans', sans-serif;
      color: #fff4e4;
    }

    .our-pricing-advantages-section {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 150px;
      padding: 5rem 5rem;
      flex-wrap: wrap;
      background-color: #0b0d16;
    }

    /* Left side */
    .left-side {
      flex: 1;
      min-width: 320px;
    }

    .left-side h2 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 20px;
      color: #fff4e4;
    }

    .left-side p {
      font-size: 1rem;
      line-height: 1.7;
      color: rgba(255, 244, 228, 0.9);
      margin: 0;
      max-width: 900px;
    }

    /* Right side */
    .right-side {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 18px;
      max-width: 550px;
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
      color: #ffd79f;
      font-size: 1rem;
      margin-top: 4px;
    }

    /* Responsive */
    @media (max-width: 900px) {
      .our-pricing-advantages-section {
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
  <div class="our-pricing-advantages-section">
    <div class="left-side">
      <h2>Our Pricing Advantages</h2>
      <p>
        We regularly review our pricing against industry benchmarks to ensure you
        receive exceptional value. Our detailed fee schedule covers everything from
        trading costs to funding methods, giving you complete visibility into your
        trading expenses.
      </p>
    </div>

    <div class="right-side">
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
        <span>Competitive spreads starting from 0.3 pips on major currency pairs</span>
      </div>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
        <span>No hidden fees or commissions on most instruments</span>
      </div>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
        <span>Transparent pricing across all trading instruments</span>
      </div>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
        <span>Volume–based pricing tiers for active traders</span>
      </div>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
        <span>No minimum deposit requirements</span>
      </div>
    </div>
  </div>
</body>
</html>
