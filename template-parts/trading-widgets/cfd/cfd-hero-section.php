
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
     .cfd-hero-section {
         padding: 5rem 5rem;
         text-align: center;
         /* background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat; */
         background-color: #000;
     }

     .cfd-hero-section h2 {
         font-size: 40px;
         margin-bottom: 10px;
         font-family: 'Calibri', sans-serif;
         color: white;
     }

      .cfd-hero-company-card p {
      font-size: 16px;
      line-height: 1.7;
      font-weight: 400;
      color: white;
      margin: 0;
    }

     .cfd-hero-cards {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
         gap: 80px;
     }

     .cfd-hero-company-card {
         max-width: 700px;
         text-align: left;
     }

    .center-square {
      width: 550px;
      height: 550px;
      position: relative;
      border-radius: 30px;
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.4);
      background: url('<?php echo get_template_directory_uri(); ?>/assets/images/webps/hero-pic-1.webp') center/cover no-repeat;
    }


    .cta-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }


    .title-row {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 8px;
    }

    .icon-circle {
      width: 32px;
      height: 32px;
      background: #000;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .icon-circle i {
      color: #fff;
    }
    /*  */
        .our-pricing-advantages-section {
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

<div class="cfd-hero-section">
  <div class="cfd-hero-cards">
    
    <!-- Left: Company Overview Text -->
    <div class="cfd-hero-company-card">
      <h2>CFD Trading</h2>
      <p>
        Contracts for Difference (CFDs) enables you to seperate on price movements across global financial
            markets without ownng the underlying asset. Trading rising or falling markets
            with flexibility, precision, and capital efficiency, taking positions
            on shares, indices, forex, commodities, and more</p>
    </div>
    <!-- Right: Info Card -->
    <div class="center-square"></div>
  </div>
</div>

  <div class="our-pricing-advantages-section">
    <div class="left-side">
      <h2>Introduction to CFD Trading</h2>
      <p>
       CFD trading is straightforward: you agree to exchange the difference in an asset's price between  your open and close  positions. You never own the asset itself, you're simply trading its price movement.
       This approach offers significant advantages. You can access global markets with lower capital requirements than traditional investing, use leverage* to amplify your exposure, and profit in both bull and bear markets by going long or short.
       Whether you're trading the UK100, EUR/USD, crude oil, or individual shares, CFDs give you direct market access with the flexibility to scale positions to match your strategy and risk appetite.
      </p>
      
    </div>

    <div class="right-side">
        <h2>Key features / benefits</h2>
      <div class="advantage-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-3 h-3">
        <div class="column-right-text">
            <span>Access Global Markets Without Ownership</span>
            <p>Trade thousands of instruments across multiple asset classes, shares, indices, forex, commodities, bonds, without the need to physically own or store them.</p>
        </div>
      </div>
      <div class="advantage-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-3 h-3">
        <div class="column-right-text">
            <span>Leverage Up to 1:30 for Amplified Exposure</span>
            <p>Control larger positions with less capital. Retail clients can access leverage up to 1:30 on major forex pairs, allowing you to maximise capital efficiency while managing risk.</p>
        </div>
      </div>
      <div class="advantage-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-3 h-3">
         <div class="column-right-text">
            <span>Leverage Up to 1:30 for Amplified Exposure</span>
            <p>Control larger positions with less capital. Retail clients can access leverage up to 1:30 on major forex pairs, allowing you to maximise capital efficiency while managing risk.</p>
        </div>
      </div>
      <div class="advantage-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="" class="w-3 h-3">
         <div class="column-right-text">
            <span>Trade Both Rising and Falling Markets</span>
            <p>Go long when you expect prices to rise, or short when you anticipate a decline. CFDs give you the freedom to act on any market condition.</p>
        </div>
      </div> 
    </div>
  </div>
</body>
</html>
