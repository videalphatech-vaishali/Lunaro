<style>
    .contact-body{

  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
  background-color: #000;
  
    }
/* ===== Section: Feature Cards ===== */
.feature-grid {
  display: grid;
  gap: 2.5rem;
  padding: 5rem 5rem;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  margin-bottom: 4rem; 
}

.feature-card {
  background-color: rgba(255, 244, 228, 0.2);
  padding: 1.5rem;
  border-radius: 1.5rem;
  border: 1px solid rgb(55, 65, 81);
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
              0 4px 6px -4px rgba(0, 0, 0, 0.1);
  transition: border-color 0.3s ease, transform 0.3s ease;
}

.feature-card:hover {
  border-color: rgb(168, 85, 247);
  transform: translateY(-5px);
}

.feature-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
  background-color: #a89469;
  margin-bottom: 1rem;
}

.feature-icon img {
  width: 1.5rem;
  height: 1.5rem;
}

.feature-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
  letter-spacing: -0.78px;
  color: #fff;
}

.feature-description {
  font-size: 0.875rem;
  line-height: 1.625;
  color: rgb(209, 213, 219);
}
/* ===== Contact Section ===== */
.contact-section {
  padding: 0 2rem;
  padding-bottom: 4rem;
  color: #fff;
}

.contact-container {
  display: flex;
  flex-wrap: wrap;
  gap: 3rem;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
}

/* ===== Left Side ===== */
.contact-info {
  flex: 1 1 45%;
}

.contact-info h2 {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.contact-info p {
  color: #e2e2e2;
  line-height: 1.6;
  margin-bottom: 2rem;
  max-width: 500px;
}

.contact-image img {
  width: 100%;
  max-width: 450px;
  border-radius: 1rem;
  display: block;
}

/* ===== Right Side ===== */
.contact-form {
  flex: 1 1 45%;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact-form label {
  font-size: 0.9rem;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
  margin-bottom: 0.3rem;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  background: #fff;
  color: #000;
  border: none;
  padding: 0.9rem 1rem;
  border-radius: 0.5rem;
  font-size: 1rem;
  outline: none;
}

.contact-form textarea {
  min-height: 120px;
  resize: vertical;
}

/* ===== Button ===== */
.contact-form button {
  align-self: flex-end;
  background-color: #fff4e4;
  color: #000;
  border: none;
  padding: 0.9rem 2rem;
  border-radius: 9999px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  margin-top: 1rem;
}

.contact-form button:hover {
  background-color: #f5d7a7;
  transform: translateY(-2px);
}

/* ===== Responsive ===== */
@media (max-width: 900px) {
  .contact-container {
    flex-direction: column;
    align-items: center;
  }

  .contact-info, .contact-form {
    flex: 1 1 100%;
  }

  .contact-form {
    width: 100%;
    max-width: 500px;
  }
}

</style>
<div class="contact-body">

<!-- ===== Feature Cards Section ===== -->
<div class="feature-grid">
  <!-- Card 1 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="Lightning Fast Icon">
    </div>
    <h3 class="feature-title">Lightning-Fast Execution</h3>
    <p class="feature-description">
      Our cutting-edge infrastructure delivers trades in under 30ms, allowing traders to benefit from fast execution.
      State-of-the-art technology with a user-friendly interface.
    </p>
  </div>

  <!-- Card 2 -->
  <div class="feature-card">
    <div class="feature-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="Trusted and Regulated Icon">
    </div>
    <h3 class="feature-title">Trusted & Regulated</h3>
    <p class="feature-description">
      Highly transparent and regulated across multiple jurisdictions. Your funds are protected with segregated accounts,
      ensuring peace of mind and professional support.
    </p>
  </div>
<!--  -->
  

</div>
<section class="contact-section">
  <div class="contact-container">
    <!-- Left Side -->
    <div class="contact-info">
      <h2>Contact us</h2>
      <p>
        Connect with our experienced professionals for direct access to personalised support 
        and guidance with your trading needs and goals.
      </p>
      <div class="contact-image">
        <img src="your-image.jpg" alt="Contact professionals">
      </div>
    </div>

    <!-- Right Side -->
    <form class="contact-form">
      <label>NAME</label>
      <input type="text" placeholder="John Doe" />

      <label>EMAIL</label>
      <input type="email" placeholder="hello@mail.com" />

      <label>PHONE</label>
      <input type="text" placeholder="+447777777777" />

      <label>MESSAGE</label>
      <textarea placeholder="I’d love to learn more about your services"></textarea>

      <button type="submit">Send Now</button>
    </form>
  </div>
</section>

</div>
    
</div>