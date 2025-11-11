<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lunaro </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --gap: 1.5rem;
      --item-min-width: 220px;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background-color: #0b0b0b;
      color: #fff;
    }

    /* ========== HERO BASE STYLES ========== */
    .hero-section {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: #fff;
      width: 100%;
      position: relative;
      overflow: hidden;
    
    }

    /* ---------- Container width rules ---------- */
    .hero-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      width: 100%;
      margin: auto;
        
    }


    @media (min-width: 576px) {
      .hero-container {
        max-width: 540px;
        
      }
    }
    @media (max-width: 768px) {
      .hero-container {
       padding: 60px 0px 30px 0px;
      }
    }

    @media (min-width: 768px) {
      .hero-container {
        max-width: 720px;
        flex-direction: row;
        align-items: center;
      }
    }

    @media (min-width: 992px) {
      .hero-container {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .hero-container {
        max-width: 1140px;
      }
    }

    @media (min-width: 1400px) {
      .hero-container {
        max-width: 1380px;
      }
    }

    /* ========== TEXT CONTENT ========== */
    .hero-text {
      max-width: 100%;
      z-index: 10;
    }

    .hero-text h1 {
      font-weight: 800;
      line-height: 1.3;
      font-size: 32px;
      margin-bottom: 20px;
      color: #fff;
    }

    .hero-text p {
      color: #f0f0f0;
      font-size: 0.95rem;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .button-group {
      display: flex;
      justify-content: flex-start;
    }

    .btn-filled {
      background: #f5ede0;
      color: #000;
      border: none;
      border-radius: 50px;
      padding: 15px 40px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn-filled:hover {
      background: #fff;
    }

    .hero-image {
      width: 100%;
      display: flex;
      justify-content: center;
      position: absolute;
      right: 0;
    }

    .hero-image img {
      width: 100%;
      max-width: 480px;
      border-radius: 20px;
      object-fit: cover;
    }

    /* ========== MEDIA QUERIES ========== */
    @media (min-width: 768px) {
      .hero-text {
        max-width: 50%;
        text-align: left;
      }

      .hero-image {
        max-width: 40%;
      }

      .hero-text h1 {
        font-size: 38px;
      }
    }

    @media (min-width: 992px) {
      .hero-container {
        padding: 100px 0px 30px 0px;
        
      }

      .hero-text h1 {
        font-size: 44px;
      }

      .hero-text p {
        font-size: 1rem;
      }

      .hero-image img {
        max-width: 500px;
      }
    }

    @media (min-width: 1200px) {
      .hero-text h1 {
        font-size: 46px;
      }

      .hero-image img {
        max-width: 550px;
      }
    }

    @media (min-width: 1400px) {
      .hero-text h1 {
        font-size: 50px;
      }

      .hero-image {
        justify-content: end;
      }
    }

    /* ✅ MOBILE VIEW FIX — Remove absolute positioning */
    @media (max-width: 767px) {
      .hero-text {
        padding: 0px 20px;
      }

      .hero-image {
        position: relative;
        right: auto;
        margin-top: 20px;
      }
    }

    /* ========== CAROUSEL ========== */
 .carousel-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    margin: 60px auto 0;
    padding: 20px 0;
  }

  .carousel-track {
    display: flex;
    gap: var(--gap, 20px);
    width: max-content;
    will-change: transform;
    transition: transform 0.4s ease-out;
  }

  .carousel-item {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 12px 16px;
    display: flex;
    align-items: center;
    min-width: var(--item-min-width, 260px);
    gap: 10px;
    flex-shrink: 0;
    backdrop-filter: blur(8px);
  }

  .carousel-item img {
    width: 36px;
    height: 36px;
    border-radius: 8px;
  }

  .carousel-item .text {
    display: flex;
    flex-direction: column;

  }

  .symbol-div {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
  }

  .change {
    color: #00ff6a;
    font-size: 14px;
  }
  .ltp{
    margin-left: 10px;
  }

  /* Buttons */
  .carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    border: none;
    color: #fff;
    font-size: 20px;
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 3;
    transition: 0.3s;
    width: 50px;
    height: 50px;
  }

  .carousel-btn:hover {
    background: rgba(0, 0, 0, 0.7);
  }

  .carousel-btn.prev {
    left: 10px;
  }

  .carousel-btn.next {
    right: 10px;
  }

  .carousel-btn:disabled {
    opacity: 0.4;
    cursor: not-allowed;
  }

  </style>
</head>

<body>

  <section class="hero-section" style="background-image: url('/wp-content/uploads/2025/11/Hero-Background.png');">
    <div class="hero-container">
      <!-- Left Text -->
          <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
            if ($country === 'uae') { 
            ?>
      <div class="hero-text">
        <h1>Trade Forex, CFDs, ETDs and Global Markets with <br> Confidence</h1>
        <p>
          Access 80+ forex pairs, global indices, commodities, shares, and regulated exchange-traded
          derivatives through our advanced trading platforms. Experience competitive spreads, low-latency execution,
          and dedicated professional support, all under FSRA regulation.
        </p>
        <div class="button-group">
          <button class="btn-filled signup">Start Trading</button>
        </div>
      </div>
        <?php 
            } else { 
            ?>
      <div class="hero-text">
        <h1>Trade Forex, CFDs, Spread Bets and Global Markets <br>  with Confidence</h1>
        <p>
         Trade CFDs on 80+ forex pairs, global indices, commodities and shares through our award-winning trading platforms. Join thousands of traders who choose Lunaro for competitive spreads, fast execution and professional support.
        </p>
        <div class="button-group">
          <button class="btn-filled signup">Start Trading</button>
        </div>
      </div>

   <?php } ?>

      <!-- Right Image -->
      <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rectangle-66.png" alt="Trading Dashboard">
      </div>
    </div>

    <div class="carousel-container" id="marketTrack">
      <button class="carousel-btn prev">&#10094;</button>
      <div class="carousel-track">
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/EURUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">EURUSD</span><span class="ltp">353.54</span></div><div class="change">+0.15%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDJPY.png"><div class="text"><div class="symbol-div"><span class="symbol">USDJPY</span><span class="ltp">147.22</span></div><div class="change">+0.20%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GBPUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">GBPUSD</span><span class="ltp">353.54</span></div><div class="change">-0.10%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDCAD.png"><div class="text"><div class="symbol-div"><span class="symbol">USDCAD</span><span class="ltp">146.28</span></div><div class="change">+0.05%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/NZDUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">NZDUSD</span><span class="ltp">353.54</span></div><div class="change">+0.12%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/AUDUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">AUDUSD</span><span class="ltp">145.87</span></div><div class="change">+0.18%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/EURUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">EURUSD</span><span class="ltp">353.54</span></div><div class="change">+0.15%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDJPY.png"><div class="text"><div class="symbol-div"><span class="symbol">USDJPY</span><span class="ltp">147.22</span></div><div class="change">+0.20%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GBPUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">GBPUSD</span><span class="ltp">353.54</span></div><div class="change">-0.10%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDCAD.png"><div class="text"><div class="symbol-div"><span class="symbol">USDCAD</span><span class="ltp">146.28</span></div><div class="change">+0.05%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/NZDUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">NZDUSD</span><span class="ltp">353.54</span></div><div class="change">+0.12%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/AUDUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">AUDUSD</span><span class="ltp">145.87</span></div><div class="change">+0.18%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/EURUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">EURUSD</span><span class="ltp">353.54</span></div><div class="change">+0.15%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDJPY.png"><div class="text"><div class="symbol-div"><span class="symbol">USDJPY</span><span class="ltp">147.22</span></div><div class="change">+0.20%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GBPUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">GBPUSD</span><span class="ltp">353.54</span></div><div class="change">-0.10%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDCAD.png"><div class="text"><div class="symbol-div"><span class="symbol">USDCAD</span><span class="ltp">146.28</span></div><div class="change">+0.05%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/NZDUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">NZDUSD</span><span class="ltp">353.54</span></div><div class="change">+0.12%</div></div></div>
        <div class="carousel-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/AUDUSD.png"><div class="text"><div class="symbol-div"><span class="symbol">AUDUSD</span><span class="ltp">145.87</span></div><div class="change">+0.18%</div></div></div>
      </div>
      <button class="carousel-btn next">&#10095;</button>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/microsoft-signalr/7.0.5/signalr.min.js"></script>
<script>
  const track = document.querySelector('.carousel-track');
  const container = document.querySelector('.carousel-container');
  const prev = document.querySelector('.carousel-btn.prev');
  const next = document.querySelector('.carousel-btn.next');
  const items = [...document.querySelectorAll('.carousel-item')];

  // Duplicate items to make infinite loop illusion
  const clonesBefore = items.map(item => item.cloneNode(true));
  const clonesAfter = items.map(item => item.cloneNode(true));
  clonesBefore.forEach(c => track.prepend(c));
  clonesAfter.forEach(c => track.append(c));

  // Calculate width
  const step = items[0].offsetWidth + 20; // 20 = gap
  let position = -items.length * step; // start from the middle (real items)
  let manualOffset = 0;
  let autoSpeed = 0.8;
  let animationId;

  // Initialize
  track.style.transform = `translateX(${position}px)`;

  function loop() {
    position -= autoSpeed;
    if (position <= -(items.length * step * 2)) {
      position = -items.length * step;
    } else if (position >= 0) {
      position = -items.length * step;
    }
    track.style.transform = `translateX(${position - manualOffset}px)`;
    animationId = requestAnimationFrame(loop);
  }

  function startAuto() {
    cancelAnimationFrame(animationId);
    loop();
  }

  function stopAuto() {
    cancelAnimationFrame(animationId);
  }

  prev.addEventListener('click', () => {
    stopAuto();
    manualOffset -= step;
    if (manualOffset < -items.length * step) manualOffset = 0; // infinite wrap
    track.style.transform = `translateX(${position - manualOffset}px)`;
    startAuto();
  });

  next.addEventListener('click', () => {
    stopAuto();
    manualOffset += step;
    if (manualOffset > items.length * step) manualOffset = 0; // infinite wrap
    track.style.transform = `translateX(${position - manualOffset}px)`;
    startAuto();
  });

  container.addEventListener('mouseenter', stopAuto);
  container.addEventListener('mouseleave', startAuto);

  startAuto();


</script>

<script>
     const heroConnection = new signalR.HubConnectionBuilder()
    .withUrl("https://lunaromarket.vedakronos.com/dataHub")
    .withAutomaticReconnect()
    .build();

  heroConnection.on("ReceiveMessage", (symbol, data) => {
   
    
    try {
      const price = typeof data === "string" ? JSON.parse(data) : data;
      document.querySelectorAll(".symbol").forEach(symbolEl => {
        if (symbolEl.textContent.trim().toUpperCase() === symbol.toUpperCase()) {
          const symbolDiv = symbolEl.closest(".symbol-div");
          const ltpEl = symbolDiv.querySelector(".ltp");
          const textParent = symbolDiv.closest(".text");
          const changeEl = textParent.querySelector(".change");

          if (ltpEl && price.lastPrice !== undefined) {
            ltpEl.textContent = parseFloat(price.lastPrice).toFixed(5);
          }
          if (changeEl && price.changePercent !== undefined) {
            const change = parseFloat(price.changePercent);
            changeEl.textContent = `${change.toFixed(2)}%`;
            changeEl.className = `change ${change >= 0 ? "text-green-400" : "text-red-400"}`;
          }
        }
      });
    } catch (err) {
      console.error("❌ Error updating symbol:", err);
    }
  });

  heroConnection.start()
    .then(() => console.log("✅ Connected to SignalR"))
    .catch(err => console.error("❌ Connection failed:", err));
</script>
</body>
</html>
