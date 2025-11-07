<?php
/**
 * Template Name: Company Overview
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
*/ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
     <link rel="preload" href="./style.css" as="style">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
     .about-company-overview-section {
         padding: 100px;
         text-align: center;
         background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat;
         background-color: #000;
     }

     .about-company-overview-section h2 {
         font-size: 40px;
         margin-bottom: 10px;
         font-family: 'Calibri', sans-serif;
         color: white;
     }

     .about-company-overview-cards {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-around;
         gap: 80px;
     }

     .company-card {
         max-width: 500px;
         text-align: left;
     }

    .center-square {
      width: 550px;
      height: 550px;
      position: relative;
      border-radius: 30px;
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.4);
      background: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png') center/cover no-repeat;
    }

    /* Top-left floating rectangle */
    .top-rectangle {
      top: -40px;
      left: 0px;
      color: #000;
      width: 160px;
      height: 100px; 
      display: flex;
      padding: 20px;
      border-radius: 20px;
      position: absolute;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      font-family: 'Calibri', sans-serif;
      border: 20px;
      background: white; 
      box-shadow: 
        13px 0 0 0 #000,
        0 13px 0 0 #000,
        13px 13px 0 0 #000,
       -13px 13px 0 0 #000;
    }

    .top-rectangle h3 {
      margin: 0;
      font-size: 30px;
      font-weight: bold;
    }

    .top-rectangle p {
      margin: 5px 0 0;
      color: #555;
      font-size: 16px;
    }

    /* Bottom-right floating rectangle */
    .bottom-rectangle {
      position: absolute;
      bottom: -1px;
      right: 0px;
      background: white;
      color: #000;
      width: 240px;
      height: 150px;
      border-radius: 20px;
      padding: 15px 20px;
      display: flex;
      flex-direction: column;
      justify-content: center; 
      font-family: 'Calibri', sans-serif;
      border: 20px; 
      box-shadow: 
        -13px 0 0 0 #000,
        0 -13px 0 0 #000,
        -13px -13px 0 0 #000,
         13px -13px 0 0 #000;
    }

    .bottom-rectangle h4 {
      font-size: 20px;
      margin: 0 0 6px;
    }

    .bottom-rectangle .progress {
      margin-top: 8px;
      height: 10px;
      width: 100%;
      background: #E0E0E0;
      border-radius: 10px;
      overflow: hidden;
    }

    .bottom-rectangle .progress span {
      display: block;
      height: 100%;
      width: 0;
      background: #000;
      border-radius: 10px;
      transition: width 2s ease;
    }

    .bottom-rectangle.active .progress span {
      width: 80%;
    }

    .cta-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .cta-label {
      font-weight: bold;
      font-size: 16px;
      color: #333;
    }

    .cta-badge {
      background: #2979FF;
      color: #fff;
      border-radius: 30px;
      padding: 4px 12px;
      font-size: 14px;
      font-weight: bold;
      line-height: 1;
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
  </style>
</head>
<body>

<div class="about-company-overview-section">
  <div class="about-company-overview-cards">
    
    <!-- Left: Company Overview Text -->
    <div class="company-card">
      <h2>Empowering traders with institutional-grade tools and boutique-level care.</h2>
      <p>
        At Lunaro Markets, trading is buit on three pillars: transparency, security, and accessibility.<br>
        We combine the precision of institutional infrastructure with a client-first philosophy, ensuring every trader,
        whether you're taking your first position or managing a sophisticated<br>
 portfolio, can navigate global markets with complete confidence.</p>
    </div>

    <!-- Right: Info Card -->
    <div class="center-square">

      <!-- Top Rectangle -->
      <div class="top-rectangle">
        <div class="title-row">
          <div class="icon-circle">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3 id="roi-value">0x</h3>
        </div>
        <p>Boosted ROI</p>
      </div>

      <!-- Bottom Rectangle -->
      <div class="bottom-rectangle" id="bottom-rect">
        <div class="title-row">
          <div class="icon-circle">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h4>Grow Your Brand Fast</h4>
        </div>

        <div class="cta-row">
          <span class="cta-label">CTR ↑</span>
          <span class="cta-badge">+122%</span>
        </div>

        <div class="progress">
          <span></span>
        </div>
      </div>

    </div>
    
  </div>
</div>

<script>
  // Animate ROI number
  function animateNumber(id, start, end, duration) {
    const element = document.getElementById(id);
    let startTime = null;

    function update(currentTime) {
      if (!startTime) startTime = currentTime;
      const progress = Math.min((currentTime - startTime) / duration, 1);
      const current = (start + (end - start) * progress).toFixed(1);
      element.textContent = current + "x";
      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  }

  // Animate progress bar
  window.addEventListener('load', () => {
    document.getElementById('bottom-rect').classList.add('active');
    animateNumber('roi-value', 0, 4.2, 2000);
  });
</script>

</body>
</html>
