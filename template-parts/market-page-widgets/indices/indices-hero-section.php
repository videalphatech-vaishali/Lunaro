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

  .indices-hero-section-body { 
      height: 300px;
      position: relative;  
      text-align: center;
      align-content: center;
      background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat;
      background-color: #000;
}


  .indices-hero-section-body h2 {
    font-family: 'Calibri', sans-serif;
    margin-bottom: 20px;
    font-weight:900;
    font-size: 50px;
    color: #fff;
  }

.indices-hero-section-body h4 {
  font-family: 'Calibri', sans-serif;
  margin-bottom: 10px;
  font-size: 15px;
  color: #fff;
  }
  /* Responsive */
        @media (max-width: 900px) {
        
        }
  </style>
</head>
<body>
  <div class="indices-hero-section-body">
  <h2>Trade Global Indices</h2>
        <h4>Trade the performance of entire stock markets including UK 100, US 500,US Tech 100,
            and Germany 40, Indices reflect the overall health of an economy or sector, making them
            ideal for broader market exposure.
        </h4>
       
</div>
</body>
</html>
