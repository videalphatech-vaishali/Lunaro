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
    
  .our-leadership-team-section {
      padding: 32px;
      text-align: center;
      background-color: #000;
      display: flex;
      align-items: center;
      justify-content: center;
  }
 
  .get-in-touch-section-body { 
      height: 300px;
      text-align: center;
      position: relative;  
      align-content: center;
      background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat;
      background-color: #000;
}

  .get-in-touch-section-body h2 {
    font-size: 50px;
    margin-bottom: 20px;
    font-weight:900;
    font-family: 'Calibri', sans-serif;
    color: #fff;
  }

.get-in-touch-section-body h4 {
    font-size: 15px;
    margin-bottom: 10px;
    font-family: 'Calibri', sans-serif;
    color: #fff;
  }
  
  </style>
</head>
<body>
  <div class="get-in-touch-section-body">
  <h2>Get in touch</h2>
        <h4>No question is too small, and no issue too big; we're always happy to help. Reach out to us in<br>
        the way that's easiest for you, and our team will make sure you get the support you need.
        </h4>
</div>
</body>
</html>
