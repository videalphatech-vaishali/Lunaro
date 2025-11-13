<?php

/** 
 * Template Name: Our Leadership Team
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>

  .forex-hero-section-body { 
      height: 300px;
      position: relative;  
      text-align: center;
      align-content: center;
      background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat;
      background-color: #000;
}


  .forex-hero-section-body h2 {
    font-family: 'Calibri', sans-serif;
    margin-bottom: 20px;
    font-weight:900;
    font-size: 50px;
    color: #fff;
  }

.forex-hero-section-body h4 {
  font-family: 'Calibri', sans-serif;
  margin-bottom: 10px;
  font-size: 15px;
  color: #fff;
  }

  </style>
</head>
<body>
  <div class="forex-hero-section-body">
  <h2>Trade Forex</h2>
    <?php 
    // get the country from session or default to 'uk'
    $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
    if ($country === 'uae') { 
  ?>
        <h4>
          The world's largest financial market offers unparalleled liquidity and 24/5 trading opportunities.
           Trade dozens of FX currency pairs including majors, minors, and exotics with spreads from 0.3 pips.
        </h4>
  <?php 
    } else { 
  ?>
          <h4>
          The world's largest financial market offers unparalleled liquidity and 24/5 trading opportunities.
           Trade dozens of FX currency pairs including majors, minors, and exotics with spreads from 0.7 pips.
        </h4>
        <?php 
    }?>

       
</div>
</body>
</html>
