<style>
.cme-hero-section-body {
  height: 500px;
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-img-2.png') center/cover no-repeat;
  background-color: #000;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 40px;
}

.cme-hero-section-body img {
  max-width: 200px;
  margin-bottom: 20px;
}

.cme-body-content {
  max-width: 900px;
  text-align: center;
}

.cme-hero-section-body h2 {
  font-family: 'Calibri', sans-serif;
  margin-bottom: 20px;
  font-weight: 900;
  font-size: 38px; /* reduced size */
  line-height: 1.3; /* better readability */
  color: #fff;
  white-space: normal; /* allow wrapping */
}

.cme-hero-section-body h4 {
  font-family: 'Calibri', sans-serif;
  margin-bottom: 10px;
  font-size: 17px;
  color: #fff;
  line-height: 1.6;
  text-align: center;
}

.button-group {
  display: inline-grid;
  gap: 18px;
}

.btn-primary {
  color: #000;
  border: none;
  font-size: 1rem;
  cursor: pointer;
  font-weight: 600;
  padding: 14px 36px;
  border-radius: 40px;
  background-color: #fff0d6;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: #ffe8b5;
}

.btn-outline {
  transition: all 0.3s ease;
  background: transparent;
  border: 1.5px solid #fff;
  border-radius: 40px;
  padding: 14px 36px;
  font-weight: 500;
  font-size: 1rem;
  cursor: pointer;
  color: #fff;
}

.btn-outline:hover {
  background: #fff;
  color: #000;
}
 
	/* 🌐 Mobile Responsive Styles */
@media (max-width: 768px) {

  .cme-hero-section-body {
    height: auto; /* allow natural height */
    padding: 60px 20px; /* reduce side padding */
    background-position: center;
    background-size: cover;
  }

  .cme-hero-section-body img {
    max-width: 140px; /* smaller logo */
    margin-bottom: 15px;
  }

  .cme-body-content {
    max-width: 100%;
  }

  .cme-hero-section-body h2 {
    font-size: 22px; /* smaller heading */
    line-height: 1.4;
    margin-bottom: 15px;
    padding: 0 10px;
  }

  .cme-hero-section-body h4 {
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 20px;
    padding: 0 10px;
  }

  .button-group {
    gap: 12px;
  }

  .btn-primary,
  .btn-outline {
    font-size: 0.9rem;
    padding: 10px 22px;
    border-radius: 30px;
  }
}

/* 📱 Extra small screens */
@media (max-width: 480px) {
  .cme-hero-section-body {
    padding: 50px 15px;
  }

  .cme-hero-section-body img {
    max-width: 110px;
  }

  .cme-hero-section-body h2 {
    font-size: 20px;
  }

  .cme-hero-section-body h4 {
    font-size: 13px;
  }
}

	
</style>

<div class="cme-hero-section-body">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lu-cme-img.png" alt="Forex">
    <div class="cme-body-content">
        <h2>Trade Futures on CME Group Exchanges
Access Global Benchmark Contracts with Professional Tools
</h2>
        <h4>
          Master futures trading across equity indices, commodities, energy, and metals through Lunaro Markets'
           ADGM-regulated platform. Whether you're seeking exposure to the S&P 500, managing portfolio risk,
            or capitalising on commodity price movements, CME Group’s provides institutional-grade access with
             retail-friendly
             micro contract sizes.
    </h4>
    </div>
</div>
