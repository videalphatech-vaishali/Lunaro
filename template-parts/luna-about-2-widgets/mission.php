
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>

.mission-vision-section {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
  background-color: #000;
  padding: 50px 20px; !important;
  position: relative;
}

.container {
  margin: 0 auto;
  max-width: 1000px;
  text-align: center;
}

.section-title { 
  display: inline-block; 
  padding: 16px 40px; 
  font-weight: 600;
  font-size: 50px;
  color: #fff;
}

.mission-vision-boxes {
  gap: 30px;
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 40px;
  justify-content: center;
}

.box {
  border: 1px solid #A89469;
  background-color: #101430;
  border-radius: 12px;
  padding: 30px 24px;
  text-align: left;
  flex: 1 1 420px;
}

.box h3 {
  color: #fff;
  font-size: 20px;
  margin-bottom: 10px;
}

.box p {
  color: #C6C8D0;
  line-height: 1.6;
  font-size: 15px;
}

/* Core Values Section */
.core-values {
  border: 1px solid #A89469;
  background-color: #101430;
  padding: 35px 30px;
  border-radius: 12px;
  text-align: left;
}

.core-values h3 {
  color: #fff;
  font-size: 20px;
  margin-bottom: 20px;
}

.value-item {
  margin-bottom: 20px;
}

.value-item strong {
  color: #fff;
  display: block;
  font-size: 16px;
  margin-bottom: 6px;
}

.value-item p {
  line-height: 1.6;
  font-size: 15px;
  color: #C6C8D0;
}

/* Responsive */
@media (max-width: 768px) {
  .mission-vision-boxes {
    flex-direction: column;
  }

  .section-title {
    font-size: 20px;
    padding: 12px 30px;
  }
}

  </style>
</head>
<body>
<section class="mission-vision-section">
  <div class="container">
    <h2 class="section-title">Our Mission, Vision & Values</h2>

    <div class="mission-vision-boxes">
      <div class="box">
        <h3>Our Mission</h3>
        <p>
          To create a trading environment where integrity, transparency, and performance define every client interaction, from account opening to order execution.
        </p>
      </div>

      <div class="box">
        <h3>Our Vision</h3>
        <p>
          To become the benchmark for boutique financial services: balancing cutting-edge innovation with regulatory discipline, while expanding fair access to global markets for traders worldwide.
        </p>
      </div>
    </div>

    <div class="core-values">
      <h3>Our Core Values</h3>
      <div class="value-item">
        <strong>Trust</strong>
        <p>Your capital and data are protected through segregated accounts, tier-one banking partnerships, and strict regulatory oversight.</p>
      </div>

      <div class="value-item">
        <strong>Discipline</strong>
        <p>We operate with institutional rigor, a long-term focus, and a commitment to sustainable growth.</p>
      </div>

      <div class="value-item">
        <strong>Clarity</strong>
        <p>No hidden fees. No confusing jargon. Just straightforward pricing, transparent terms, and honest communication at every touchpoint.</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>
