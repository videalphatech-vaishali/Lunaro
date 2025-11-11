<?php

/**
 * Template Name: FAQ Page 
 * 
 * @package WordPress
 * @subpackage YourThemeName
 */

load_country_header();
?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <title>FAQs</title>
  <style>
    :root {
      --Brand-accent: #A89469;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "DM Sans", sans-serif;
    }

    .faq-section {
      color: #FFF;
      min-height: 100vh;
      line-height: 1.6;
      padding: 20px;
      background: #0B0D16;
      background-image: url('./Grossary_backgorund.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .header-row {
      width: 100%;
      padding: 40px 20px;
    }

    h1 {
      color: #FFF;
      font-size: 52px!important;
      font-weight: 800 !important;
      line-height: 130%;
    }

    .subtext {
      color: #cfcfcf;
      font-size: 16px;
      margin-top: 8px;
      max-width: 700px;
    }

    /* ---- MAIN CONTENT ---- */
    .main-container {
      display: flex;
      justify-content: flex-start;
      align-items: stretch;
      gap: 30px;
      width: 100%;
      flex: 1;
      min-height: 0; /* enables flex children to scroll */
    }

    /* Sidebar */
    .sidebar {
      position: sticky;
      top: 20px;
      flex: 0 0 30%;
      min-width: 30%;
      border-radius: 14px;
      padding: 20px;
      align-self: flex-start;
    }

    /* Sidebar buttons */
    .sidebar-buttons {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .sidebar button {
      padding: 12px 15px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      color: #fff;
      background-color: transparent;
      border: none;
      text-align: left;
      transition: all 0.3s ease;
      white-space: nowrap;
    }

    .sidebar button:hover,
    .sidebar button.active {
      background-color: #FFFFFF1A;
      color: white;
    }

    /* FAQ Container scrolls independently */
    .faq-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding-right: 10px;
      overflow-y: auto;
      min-height: 0; /* critical for flexbox scroll */
    }

    /* Scrollbar Styling */
    .faq-container::-webkit-scrollbar {
      width: 6px;
    }

    .faq-container::-webkit-scrollbar-thumb {
      background: var(--Brand-accent);
      border-radius: 10px;
    }

    .faq-container {
      scrollbar-width: thin;
      scrollbar-color: var(--Brand-accent) transparent;
    }

    .term-card {
      background: #0B0D16;
      padding: 20px;
      border-radius: 12px;
      border: 2px solid var(--Brand-accent);
      transition: all 0.3s ease;
    }

    .term-title {
      font-size: 20px;
      font-weight: 700;
      color: white;
      margin-bottom: 6px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .toggle-icon {
      font-size: 18px;
      color: #fff;
      transition: transform 0.3s ease;
    }

    .term-card.open .toggle-icon {
      transform: rotate(180deg);
    }

    .term-definition {
      font-size: 14px;
      color: #FFF;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s linear, opacity 0.3s ease;
      opacity: 0;
    }

    .term-card.open .term-definition {
      max-height: 200px;
      opacity: 1;
      margin-top: 10px;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 992px) {
      .main-container {
        flex-direction: column;
      }

      .sidebar {
        position: relative;
        width: 100%;
        padding: 0;
        margin-bottom: 20px;
      }

      .sidebar-buttons {
        flex-direction: row;
        overflow-x: auto;
        padding: 10px 0;
        gap: 10px;
      }

      .sidebar button {
        flex: 0 0 auto;
        text-align: center;
      }

      .faq-container {
        width: 100%;
        overflow-y: visible;
      }
    }
  </style>
</head>

<body>
    <div class="faq-section">
        
  <!-- HEADER -->
  <div class="header-row">
    <h1>FAQs</h1>
    <p class="subtext">
      Get instant answers to the most common questions about trading with Lunaro Markets. Our comprehensive FAQ section covers everything from account opening to platform features, helping you make informed decisions about your trading journey.
    </p>
  </div>

  <!-- MAIN: sidebar + FAQs -->
  <div class="main-container">
    <div class="sidebar">
      <div class="sidebar-buttons">
        <button class="active" data-category="all">All FAQs</button>
        <button data-category="account">Account opening and verification</button>
        <button data-category="platform">Platform features</button>
        <button data-category="deposit">Deposit and withdrawal</button>
        <button data-category="regulatory">Regulatory compliance and security</button>
        <button data-category="education">Educational resources</button>
        <button data-category="affiliate">Affiliate Program</button>
      </div>
    </div>

    <div class="faq-container">
      <!-- Example FAQ Cards -->
      <div class="term-card" data-category="account">
        <h2 class="term-title">How do I open a trading account? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">You can open a trading account by completing KYC verification and submitting your ID and address proof online.</p>
      </div>

      <div class="term-card" data-category="account">
        <h2 class="term-title">How long does verification take? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">Verification typically takes between 1–2 business days once all documents are submitted correctly.</p>
      </div>

      <!-- Duplicate more FAQs to show scrolling behavior -->
      <div class="term-card" data-category="platform">
        <h2 class="term-title">What features are available on the platform? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">Our platform provides live trading charts, portfolio management, and real-time market data.</p>
      </div>

      <div class="term-card" data-category="deposit">
        <h2 class="term-title">What deposit methods are supported? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">You can deposit via bank transfer, credit/debit cards, and supported e-wallets.</p>
      </div>

      <div class="term-card" data-category="deposit">
        <h2 class="term-title">Are there withdrawal fees? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">We do not charge fees for withdrawals; however, your bank or provider may apply their own charges.</p>
      </div>

      <div class="term-card" data-category="regulatory">
        <h2 class="term-title">Is my data secure on this platform? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">Yes, all user data and transactions are encrypted with industry-grade security protocols.</p>
      </div>

      <div class="term-card" data-category="education">
        <h2 class="term-title">Do you offer tutorials for beginners? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">Yes, we provide free learning materials, webinars, and demo trading accounts for new users.</p>
      </div>

      <div class="term-card" data-category="affiliate">
        <h2 class="term-title">How can I join the affiliate program? <span class="toggle-icon">▼</span></h2>
        <p class="term-definition">You can sign up through our affiliate portal and start earning commissions for every referred client.</p>
      </div>
    </div>
  </div>

    </div>
        <?php 
    load_country_footer();
    ?> 
  <script>
    // Accordion open/close (only one open at a time)
    document.querySelectorAll('.term-title').forEach(title => {
      title.addEventListener('click', () => {
        const currentCard = title.closest('.term-card');

        document.querySelectorAll('.term-card').forEach(card => {
          if (card !== currentCard) card.classList.remove('open');
        });

        currentCard.classList.toggle('open');
      });
    });

    // Sidebar filtering
    const sidebarButtons = document.querySelectorAll('.sidebar button');
    const faqCards = document.querySelectorAll('.term-card');

    sidebarButtons.forEach(button => {
      button.addEventListener('click', () => {
        sidebarButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const category = button.dataset.category;

        faqCards.forEach(card => {
          if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script>

</body>
</html>