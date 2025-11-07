<style>
.market-category-section {
  background: #0B0D16 url('<?php echo get_template_directory_uri(); ?>/assets/images/bg.png') center/cover no-repeat;
  padding: 5rem 2rem;
  text-align: center;
  color: #fff;
  font-family: 'DM Sans', 'Calibri', sans-serif;
}

.mc-text-section {
  margin-bottom: 4rem;
}

.mc-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.mc-description {
  font-size: 1rem;
  line-height: 1.7;
  color: #cfcfcf;
  max-width: 700px;
  margin: 0 auto;
}


.mc-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  gap: 3rem;
}

.mc-item {
  text-align: center;
  width: 150px;
}

.circular-container-icon {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background-color: #A89469;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto 1rem;
}

.circular-container-icon img {
  width: 28px;
  height: 28px;
}

.mc-item h3 {
  font-size: 1.125rem;
  font-weight: 600;
  margin-bottom: 1rem;
  color: #fff;
}

.mc-item a {
  font-size: 0.95rem;
  color: #fff;
  text-decoration: none;
  font-weight: 400;
  display: inline-flex;
  align-items: center;
  transition: color 0.3s;
}

.mc-item a:hover {
  color: #A89469;
}

.mc-item a::after {
  content: "→";
  margin-left: 8px;
  transition: transform 0.3s;
}

.mc-item a:hover::after {
  transform: translateX(3px);
}
</style>

<section class="market-category-section">
  <div class="mc-text-section">
    <h2 class="mc-title">Market categories</h2>
    <p class="mc-description">
      Diversify your trading portfolio across multiple asset classes, each offering unique opportunities and risk characteristics.
      Our comprehensive market access ensures you can capitalize on global economic trends and market movements.<br>
      *Please note that all trading involves risk and you may lose some or all of your invested capital.
    </p>
  </div>

  <div class="mc-list">
    <div class="mc-item">
      <div class="circular-container-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Indices">
      </div>
      <h3>Indices</h3>
      <a href="#">Learn More</a>
    </div>

    <div class="mc-item">
      <div class="circular-container-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Forex">
      </div>
      <h3>Forex</h3>
      <a href="#">Learn More</a>
    </div>

    <div class="mc-item">
      <div class="circular-container-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Commodities">
      </div>
      <h3>Commodities</h3>
      <a href="#">Learn More</a>
    </div>

    <div class="mc-item">
      <div class="circular-container-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Shares">
      </div>
      <h3>Shares</h3>
      <a href="#">Learn More</a>
    </div>

    <div class="mc-item">
      <div class="circular-container-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="ETFs">
      </div>
      <h3>ETFs</h3>
      <a href="#">Learn More</a>
    </div>

    <div class="mc-item">
      <div class="circular-container-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Treasuries">
      </div>
      <h3>Treasuries</h3>
      <a href="#">Learn More</a>
    </div>
  </div>
</section>
