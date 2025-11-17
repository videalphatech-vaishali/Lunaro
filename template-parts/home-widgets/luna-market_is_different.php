<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lunaro Markets</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --bg-dark: #0B0D16;
      --card-bg: #FFF4E4;
      --text-light: #fff;
      --text-muted: #d1d1d1;
      --accent: #A89469;
      --table-bg: #141829;
      --border-color: #333;
    }

    body {
      margin: 0;
      font-family: "DM Sans", sans-serif;
      background-color: var(--bg-dark);
      color: var(--text-light);
    }



    /* SECTION BASE */
  .why-section {
    text-align: center;
    padding: 80px 20px;
    
  }

  .why-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 50px;
    color: #fff;
  }

  /* CONTAINER (Bootstrap-style width system) */
  

  /* WHY CARDS */
  .why-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
    width: 100%;
  }

  .why-card {
    background: #FFF4E433 !important;
    border-radius: 20px;
    padding: 30px;
    flex: 1 1 calc(33.333% - 25px);
    max-width: 400px;
    text-align: left;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: var(--accent);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
  }

  .icon img {
    width: 24px;
    height: 24px;
  }

  .why-card h3 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 10px;
    color: #fff;
  }

  .why-card p {
    color: var(--text-muted);
    font-size: 0.95rem;
    line-height: 1.5;
  }

  /* ========== RESPONSIVE QUERIES ========== */

  /* Large devices (≥1200px) */
  @media (min-width: 1200px) {
    .why-title {
      font-size: 2.3rem;
    }

    .why-card h3 {
      font-size: 1.25rem;
    }

    .why-card p {
      font-size: 1rem;
    }
  }

  /* X-Large devices (≥992px) */
  @media (max-width: 1200px) and (min-width: 992px) {
    .why-card {
      flex: 1 1 calc(45% - 25px);
    }
  }

  /* Medium devices (≤992px) */
  @media (max-width: 992px) {
    .why-cards {
      justify-content: center;
    }

    .why-card {
      flex: 1 1 calc(45% - 20px);
      text-align: center;
    }

    /* .icon {
      margin: 0 auto 15px auto;
    } */
  }

  /* Small devices (≤768px) */
  @media (max-width: 768px) {
    .why-section {
      padding: 60px 15px;
    }

    .why-title {
      font-size: 1.8rem;
      margin-bottom: 35px;
    }

    .why-card {
      flex: 1 1 100%;
      max-width: 500px;
      margin: 0 auto;
      text-align: center;
    }

    .why-card p {
      font-size: 0.9rem;
    }
  }

  /* Extra small devices (≤576px) */
  @media (max-width: 576px) {
    .why-card {
      padding: 20px;
      border-radius: 15px;
    }

    .why-card h3 {
      font-size: 1.1rem;
     text-align: start;
    }

    .why-card p {
      font-size: 0.9rem;
      text-align: start;
    }

    .icon {
      width: 40px;
      height: 40px;
    }

    .icon img {
      width: 20px;
      height: 20px;
    }
  }

  /* Ultra wide screens (≥1400px) */
  @media (min-width: 1400px) {
    .why-title {
      font-size: 2.5rem;
    }

    .why-cards {
      gap: 35px;
    }

    .why-card {
      max-width: 33.33%;
      padding: 40px;
    }
  }

    .market-container {
      width: 100%;
      margin: 0 auto;
      padding: 0 15px;
      text-align:center;
    }
    .market-container >h2{
      font-size:41px;
      font-weight:700;
    }

    @media (min-width: 576px) {
      .market-container {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {
      .market-container {
        max-width: 720px;
      }
    }

    @media (min-width: 992px) {
      .market-container {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .market-container {
        max-width: 1140px;
      }
    }

    @media (min-width: 1400px) {
      .market-container {
        max-width: 1380px;
      }
    }

    /* SECTION STYLES */


 

    .icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: var(--accent);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #000;
      font-size: 1.3rem;
      margin-bottom: 15px;
    }

   

    .markets-section p {
      color: var(--text-muted);
      margin: 10px 0 30px;
    }

    .market-btn {
      background-color: var(--text-light);
      color: #000;
      border: none;
      padding: 10px 25px;
      border-radius: 30px;
      cursor: pointer;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    .market-btn:hover {
      background-color: var(--accent);
    }

    /* TABLE */
    .table-container {
      overflow-x: auto;
      margin-top: 40px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: var(--table-bg);
      border-radius: 12px;
      overflow: hidden;
      min-width: 900px;
    }

    thead {
      color: var(--text-light);
      background-color: #1c2033;
    }

    th,
    td {
      padding: 26px 20px;
      text-align: left;
      border-bottom: 1px solid var(--border-color);
      font-size: 0.95rem;
      white-space: nowrap;
      min-width: 120px;
    }

    th div {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    th img {
      width: 14px;
      opacity: 0.7;
    }

    td img {
      width: 25px;
      vertical-align: middle;
      margin-right: 8px;
    }

    td span {
      vertical-align: middle;
    }

    .price-cell {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .arrow {
      font-size: 1rem;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .arrow.up {
      color: #00ff99;
      transform: rotate(0deg);
    }

    .arrow.down {
      color: #ff4d4d;
      transform: rotate(180deg);
    }

    .positive {
      color: #00ff99;
    }

    .side-cell {
      font-weight: 600;
      color: var(--accent);
    }

    @media (max-width: 768px) {
      

      th,
      td {
        padding: 20px 10px;
        font-size: 0.85rem;
        min-width: 100px;
      }
    }

    @media (max-width: 480px) {
      .market-btn {
        width: 100%;
      }

      th,
      td {
        font-size: 0.8rem;
        min-width: 90px;
      }
    }
  </style>
</head>

<body>

<section style="background: linear-gradient(
  to bottom,
  #0B0D16 10%,      
  #192C6E 50%,     
  #0B0D16 100%    
);
">


  <!-- WHY SECTION -->
  <section class="why-section">
    <div class="market-container">
      <h2 class="why-title">Why Lunaro is Different</h2>
      <div class="why-cards">
        <div class="why-card">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
          </div>
          <h3>Lightning-Fast Execution</h3>
          <p>Our cutting-edge infrastructure delivers trades in under 30ms with 99.9% uptime. Experience institutional-grade technology with retail-friendly pricing.</p>
        </div>
        <div class="why-card">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
          </div>
          <h3>Trusted & Regulated</h3>
          <?php
                  // get the country from session or default to 'uk'
                  $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
                  if ($country === 'uae') {

          ?>
          <p>Fully licensed and regulated across multiple jurisdictions. Your funds are protected with segregated accounts and negative balance protection as standard.</p>
       <?php
            }else{
        ?>
          <p> Fully licensed and regulated across multiple jurisdictions. Retail funds are protected via segregated accounts.</p>
        <?php } ?>
        </div>
        <div class="why-card">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
          </div>
          <h3>24/5 Professional Support</h3>
          <p>Get guidance from qualified market analysts and account managers. Access live chat, phone support, and dedicated relationship management when you need it most.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MARKETS SECTION -->
  <section class="markets-section">
    <div class="market-container">
      <h2>Markets</h2>
      <p>Trade the world’s most popular financial instruments with competitive spreads and flexible leverage.</p>
      <button class="market-btn">Markets Overview</button>

      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>
                <div>PRODUCT <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt=""></div>
              </th>
              
              <th>
                <div>MIN SPREAD <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt=""></div>
              </th>
              <th>
                <div>RETAIL MARGIN <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt=""></div>
              </th>
              <th>
                <div>BUY PRICE <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt=""></div>
              </th>
              <th>
                <div>DAY <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt=""></div>
              </th>
              <th>
                <div>WEEK <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt=""></div>
              </th>
              <!-- <th>
                <div>TREND <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt=""></div>
              </th> -->
            </tr>
          </thead>

          <tbody id="marketTable">
            <tr data-symbol="GBPUSD">
              <td style="display:flex; align-items:center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GBPUSD.png" alt=""> <span>GBPUSD</span></td>
              <td class="minSpread">0.00</td>
              <td>3.33%</td>
              <td class="price">
                <div class="price-cell"><span>0.00</span><span class="arrow down">▼</span></div>
              </td>
              <td class="day">+0.00%</td>
              <td class="week">+0.00%</td>
             
            </tr>
            <tr data-symbol="USDCAD">
              <td style="display:flex; align-items:center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDCAD.png" alt=""> <span>USDCAD</span></td>
              <td class="minSpread">0.00</td>
              <td>3.33%</td>
              <td class="price">
                <div class="price-cell"><span>0.00</span><span class="arrow down">▼</span></div>
              </td>
              <td class="day">+0.00%</td>
              <td class="week">+0.00%</td>
             
            </tr>
            <tr data-symbol="EURUSD">
              <td style="display:flex; align-items:center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/EURUSD.png" alt=""> <span>EURUSD</span></td>
              <td class="minSpread">0.00</td>
              <td>3.33%</td>
              <td class="price">
                <div class="price-cell"><span>0.00</span><span class="arrow down">▼</span></div>
              </td>
              <td class="day">+0.00%</td>
              <td class="week">+0.00%</td>
             
            </tr>
            <tr data-symbol="USDJPY">
              <td style="display:flex; align-items:center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDJPY.png" alt=""> <span>USDJPY</span></td>
              <td class="minSpread">0.00</td>
              <td>3.33%</td>
              <td class="price">
                <div class="price-cell"><span>0.00</span><span class="arrow down">▼</span></div>
              </td>
              <td class="day">+0.00%</td>
              <td class="week">+0.00%</td>
             
            </tr>
            <tr data-symbol="AUDUSD">
              <td style="display:flex; align-items:center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/AUDUSD.png" alt=""> <span>AUDUSD</span></td>
              <td class="minSpread">0.00</td>
              <td>3.33%</td>
              <td class="price">
                <div class="price-cell"><span>0.00</span><span class="arrow down">▼</span></div>
              </td>
              <td class="day">+0.00%</td>
              <td class="week">+0.00%</td>
             
            </tr>
            <tr data-symbol="USDCHF">
              <td style="display:flex; align-items:center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/USDCHF.png" alt=""> <span>USDCHF</span></td>
              <td class="minSpread">0.00</td>
              <td>3.33%</td>
              <td class="price">
                <div class="price-cell"><span>0.00</span><span class="arrow down">▼</span></div>
              </td>
              <td class="day">+0.00%</td>
              <td class="week">+0.00%</td>
             
            </tr>
            <tr data-symbol="NZDUSD">
              <td style="display:flex; align-items:center"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/NZDUSD.png" alt=""> <span>NZDUSD</span></td>
              <td class="minSpread">0.00</td>
              <td>3.33%</td>
              <td class="price">
                <div class="price-cell"><span>0.00</span><span class="arrow down">▼</span></div>
              </td>
              <td class="day">+0.00%</td>
              <td class="week">+0.00%</td>
             
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/microsoft-signalr/7.0.5/signalr.min.js"></script>
<script>
  const hubUrl = "https://lunaromarket.vedakronos.com/dataHub";
  const FALLBACK_API = "https://lunaromarket.vedakronos.com/api/data/live";
  const FALLBACK_TIMEOUT = 5000; 

  const connection = new signalR.HubConnectionBuilder()
    .withUrl(hubUrl)
    .withAutomaticReconnect()
    .build();

  const tableBody = document.getElementById("marketTable");
  const previousPrices = {};
  let lastUpdateTime = Date.now();

  async function start() {
    try {
      await connection.start();
      console.log(" Connected to SignalR Hub");
    } catch (err) {
      console.error(" Connection failed:", err);
      setTimeout(start, 5000);
    }
  }

  function updateRow(symbol, data) {
    if (!symbol || !data) return;

    const minSpread = data.minSpread?.toFixed?.(5) ?? "0.00000";
    const lastPrice = parseFloat(data.askPrice ?? 0).toFixed(5);
    const dayChange = parseFloat(data.dayChangePercent ?? 0);
    const weekChange = parseFloat(data.weeklyChangePercent ?? 0);

    const row = tableBody.querySelector(`tr[data-symbol="${symbol.toUpperCase()}"]`);
    if (!row) return;

    const spreadCell = row.querySelector(".minSpread");
    const priceValue = row.querySelector(".price-cell span:first-child");
    const dayCell = row.querySelector(".day");
    const weekCell = row.querySelector(".week");
    const arrow = row.querySelector(".arrow");

    if (spreadCell) spreadCell.textContent = minSpread;

    const prev = previousPrices[symbol] || 0;
    priceValue.textContent = lastPrice;

    // Main price arrow
    if (parseFloat(lastPrice) > parseFloat(prev)) {
      arrow.textContent = "▲";
      arrow.classList.remove("down");
      arrow.classList.add("up");
    } else if (parseFloat(lastPrice) < parseFloat(prev)) {
      arrow.textContent = "▼";
      arrow.classList.remove("up");
      arrow.classList.add("down");
    }

    previousPrices[symbol] = lastPrice;

    // Day change arrow
    if (dayCell) {
      dayCell.textContent = `${Math.abs(dayChange * 100).toFixed(2)}% ${dayChange >= 0 ? "▲" : "▼"}`;
      dayCell.style.color = dayChange >= 0 ? "#00ff99" : "#ff4d4d";
    }

    // Week change arrow
    if (weekCell) {
      weekCell.textContent = `${Math.abs(weekChange * 100).toFixed(2)}% ${weekChange >= 0 ? "▲" : "▼"}`;
      weekCell.style.color = weekChange >= 0 ? "#00ff99" : "#ff4d4d";
    }
  }

  connection.on("ReceiveMessage", (symbol, data) => {
    lastUpdateTime = Date.now();
    updateRow(symbol, data);
  });

  start();

  // Fallback API
  async function checkSignalRHealth() {
    if (Date.now() - lastUpdateTime > FALLBACK_TIMEOUT) {
      console.warn("⚠️ SignalR inactive — fetching fallback API data...");
      await fetchFromAPI();
      lastUpdateTime = Date.now();
    }
  }

  async function fetchFromAPI() {
    try {
      const res = await fetch(FALLBACK_API);
      if (!res.ok) throw new Error("API fetch failed");
      const apiData = await res.json();

      apiData.forEach(item => {
        updateRow(item.Symbol, {
          askPrice: item.LTP,
          minSpread: item.MinSpread, // fallback, as API has no minSpread
          dayChangePercent: item.DayChangePercent,
          weeklyChangePercent: item.WeeklyChangePercent
        });
      });

      console.log(" Table updated from API fallback");
    } catch (err) {
      console.error(" API Fallback Error:", err);
    }
  }

  setInterval(checkSignalRHealth, 10000);
</script>


</body>

</html>
