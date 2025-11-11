

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trading Section</title>

    <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
  >
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .start-trading-section {
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  color: #fff;
  padding: 80px 20px;
  text-align: center;
}

/* ---------- Container Widths ---------- */
.start-container {
  width: 100%;
  margin: 0 auto;
  max-width: 100%;
}

@media (min-width: 576px) {
  .start-container { max-width: 540px; }
}

@media (min-width: 768px) {
  .start-container { max-width: 720px; }
}

@media (min-width: 992px) {
  .start-container { max-width: 960px; }
}

@media (min-width: 1200px) {
  .start-container { max-width: 1140px; }
}

@media (min-width: 1400px) {
  .start-container { max-width: 1380px; }
}

/* ---------- Layout ---------- */
.trading-content {
  display: flex;
  flex-direction: column;
  gap: 60px;
}

.trading-text {
  max-width: 100%;
}

.trading-text h2 {
  font-size: 2rem;
  font-weight: 600;
  text-align:start;
  margin-bottom: 10px;
}

.trading-text p {
  color: #ccc;
  font-size: 0.95rem;
  margin-bottom: 20px;
  text-align:start;
}

.button-group {
  display: flex;
  flex-direction: column;
  gap: 10px;

}

.btn-primary {
  background: #f5ede0;
  color: #000;
  border: none;
  border-radius: 50px;
  padding: 15px 30px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.3s;
  width: 200px;
}

.btn-primary:hover {
  background: #fff;
}

.btn-secondary {
  background: transparent;
  color: #A89469;
  border: 1px solid #A89469;
  border-radius: 50px;
  padding: 15px 30px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.3s;
  width: 200px;
}

.btn-secondary:hover {
  background: rgba(168, 148, 105, 0.1);
}

/* ---------- Features ---------- */
.trading-features {
  display: flex;
  flex-direction: column;
  gap: 35px;
  width: 100%;
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 15px;
}

.feature-item .icon {
  background: #b49a6c;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.feature-item img {
  width: 28px;
  height: 28px;
}

.feature-item p {
  font-size: 1rem;
  margin: 0;
}

/* ---------- Responsive Layout ---------- */
@media (min-width: 768px) {
  .trading-content {
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    text-align: left;
  }

  .trading-text {
    max-width: 400px;
  }

  .button-group {
    align-items: flex-start;
  }

  .trading-features {
    width: auto;
  }
}

@media (min-width: 992px) {
  .trading-text h2 {
    font-size: 2.2rem;
  }
}

@media (min-width: 1200px) {
  .trading-text h2 {
    font-size: 2.5rem;
  }
}

@media (min-width: 1400px) {
  .trading-text h2 {
    font-size: 2.7rem;
  }
}

.btn-mobile{
    background: #f5ede0;
  color: #000;
  border: none;
  border-radius: 50px;
  padding: 15px 30px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.3s;
  width: 100%;
  display:none;
}
@media(max-width:568px){
  .btn-primary{
    display:none;
  }
  .btn-mobile{
    display:block;
  }
}




  </style>
  <body>
<section class="start-trading-section">
  <div class="start-container">
    <div class="trading-content">
      <!-- Left side -->
      <div class="trading-text">
        <h2>Start trading now</h2>
        <p>Create an account and start trading with Lunaro.</p>

        <div class="button-group">
          <button class="btn-primary signup">Start trading</button>
          <!-- <button class="btn-secondary">Create demo account</button> -->
        </div>
      </div>

      <!-- Right side -->
      <div class="trading-features">
        <div class="feature-item">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
          </div>
          <p>Ultra-fast execution</p>
        </div>

        <div class="feature-item">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wallet.svg" alt="">
          </div>
          <p>Competitive spreads from 0.3 pips</p>
        </div>

        <div class="feature-item">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
          </div>
          <p>Professional support 24/5</p>
        </div>

      </div>


    </div>
  </div>
</section>
</body>
</html>
