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
.contact-boxes-section {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
 background-color: #000;
  padding: 100px 20px;
  /* background: #0B0D16; */
  text-align: center;
  display: column;
}
.contact-boxes-section h2{
  font-size: 36px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 20px;
}
.contact-row-body {
  gap: 20px;
  display: flex;
    flex-wrap: wrap;
    margin-top: 40px;
    align-items: center;
    justify-content: center;
}
.contact-row-roundedContainer { 
    background-color: rgba(255, 255, 255, 0.4);
    box-sizing: border-box;
    border-radius: 20px;
    text-align: left;
    flex: 1 1 30%;
    padding: 30px;
    margin: 20px;
}





  </style>
</head>
<div class="contact-boxes-section"> 
    <div class="contact-row-body">
    

            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 mb-16">
        <!-- Card 1 -->
        <div class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
          </div>
          <h3 class="text-2xl font-bold mb-4" style="letter-spacing: -0.78px;">FAQs</h3>
          <p class="text-gray-300 text-sm leading-relaxed">
          Your Capital is Protected under FCA and ADGM regulations. Funds are segregated into top-tier
                bank accounts, with negative balance protection for retail clients and transparent risk disclosures.
          </p>
        </div>
        <!-- Card 2 -->
        <div class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
          </div>
          <h3 class="text-2xl font-bold mb-4">Supported Email</h3>
          <p class="text-gray-300 text-sm leading-relaxed">
         Access the same technology used by professional trading desks: ultra-low latency execution, deep liquidity from multiple providers, and enterprise-level platform stability,
                build to perform during high volatility.
          </p>
        </div>
        <!-- Card 3 -->
        <div class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
          <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469]  mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
          </div>
          <h1 class="text-2xl font-bold mb-4">Live Chat</h1>
          <p class="text-gray-300 text-sm leading-relaxed">
        Trade on MetaTrader 5, the world's leading multi-asset platform, featuring advanced charting, algorithmic trading capabilities, real-time market data,
                and seamless mobile/web/desktop synchronization.
          </p>
        </div>
      </div>
    </div>
      <h3>We're here to make your trading journey simpler, ever step of the way.</h3>
</div>
<body>


</body>
</html>
