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
      max-width: 800px;
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
    }

    /* Right side */
    .right-side {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 18px;
      max-width: 550px;
    }
.right-side h2 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #fff4e4;

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
      color:#FFF4E4;
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
      <h2>Learn to trade</h2>
      <p>
        Master the fundamentals of financial market trading with comprehensive educational
        resources designed for traders of all experience levels. Our expert-created 
        content coers market analysis, risk management, and trading strategies across all asset 
        classes.<br><br>
        Build your trading knowledge systematically with structured learning paths that
        progress from basic market concepts to advanced trading strategies. Our educational approach
        combines theoretical knowledge with practical application.
      </p>
      
        <button class="btn-primary">Access Our Resources</button>
    </div>

    <div class="right-side">
        <h2>Educational Focus Areas:</h2>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
        <div class="column-right-text">
            <span>Market Analysis</span>
            <p>Technical and fundamental analysis techniques</p>
        </div>
      </div>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
        <div class="column-right-text">
            <span>Risk Management</span>
            <p>Technical and fundamental analysis techniques</p>
        </div>
      </div>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
         <div class="column-right-text">
            <span>Asset Class Education</span>
            <p>Technical and fundamental analysis techniques</p>
        </div>
      </div>
      <div class="advantage-item">
        <i class="fa-solid fa-check-circle"></i>
         <div class="column-right-text">
            <span>Platform Trading</span>
            <p>Technical and fundamental analysis techniques</p>
        </div>
      </div> 
    </div>
  </div>
</body>
</html>
