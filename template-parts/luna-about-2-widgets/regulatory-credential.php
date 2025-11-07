
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
 

.regulatory-section {
  background: #0B0D16;
  padding: 100px 20px;
}

.regulatory-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 50px;
}

.regulatory-image {
  flex: 1 1 40%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.regulatory-image img {
  max-width: 100%;
  border-radius: 50%; 
  padding: 40px; 
}

/* Right content */
.regulatory-content {
  flex: 1 1 55%;
  text-align: left;
}

.regulatory-content h2 {
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 30px;
  color: #fff;
}

.content-block {
  margin-bottom: 25px;
}

.content-block h3 {
  font-size: 20px;
  color: #fff;
  margin-bottom: 8px;
}

.content-block p {
  color: #C6C8D0;
  font-size: 15px;
  line-height: 1.6;
}

.checklist {
  list-style: none;
  padding: 0;
  margin: 0;
}

.checklist li {
  position: relative;
  padding-left: 30px;
  color: #C6C8D0;
  font-size: 15px;
  line-height: 1.7;
}

.checklist li::before {
  content: "✔";
  color: #FBB034;
  position: absolute;
  left: 0;
  top: 0;
  font-weight: bold;
}

/* Responsive Design */
@media (max-width: 900px) {
  .regulatory-container {
    flex-direction: column;
    text-align: center;
  }

  .regulatory-image {
    order: 1;
  }

  .regulatory-content {
    order: 2;
  }

  .regulatory-content h2 {
    font-size: 22px;
  }
}


  </style>
</head>
<body>
<section class="regulatory-section">
  <div class="regulatory-container">
    
    <!-- Left Image -->
    <div class="regulatory-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testonomal.png" alt="Regulatory Illustration">
    </div>

    <!-- Right Text Content -->
    <div class="regulatory-content">
      <h2>Regulatory Credentials & Recognition</h2>

      <div class="content-block">
        <h3>FCA Regulated</h3>
        <p>
          FCA LunaroMarkets is authorised and regulated by the Financial Conduct Authority (FCA), ensuring 
          compliance with the UK’s stringent standards for client fund protection, operational integrity, 
          and market conduct.
        </p>
      </div>

      <div class="content-block">
        <h3>Client Fund Protection</h3>
        <p>
          All retail client funds are held in segregated accounts with tier-one banks, keeping your capital 
          separate from company operational funds in accordance with regulatory requirements.
        </p>
      </div>

      <div class="content-block">
        <h3>Industry Recognition</h3>
        <ul class="checklist">
          <li>Member of leading industry bodies and clearing partnerships (true for UAE)</li>
          <li>Certified for operational and technological excellence</li>
          <li>Trusted by retail and professional traders across global markets</li>
        </ul>
      </div>
    </div>
  </div>
</section>

</body>
</html>
