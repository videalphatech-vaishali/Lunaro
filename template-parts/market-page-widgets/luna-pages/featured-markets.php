<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Featured Markets</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        .container {
            padding: 0 5rem;
            width: 100%;
            text-align: center;
        }

        .title {
            font-size: 2.3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #B0B3C0;
            font-size: 0.95rem;
            line-height: 1.6;
            max-width: 650px;
            margin: 0 auto 30px;
        }

        .tabs {
            display: flex;
            justify-content: start;
            gap: 15px;
            margin-bottom: 25px;
        }

        .tab {
            border: none;
            color: #B0B3C0;
            padding: 10px 18px;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 0.9rem;
        }

        .tab.active {
            background: #2D3042;
            color: #fff;
        }

        .tab:hover {
            background: #25283A;
        }

        .table-container {
            background: #141824;
            border-radius: 10px;
            padding: 10px 20px 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #fff;
        }

        th,
        td {
            text-align: left;
            padding: 18px 12px;
            border-bottom: 1px solid #1F2231;
        }

        th {
            color: #9FA3B9;
            font-weight: 500;
            font-size: 0.85rem;
        }

        td {
            font-size: 0.9rem;
            font-weight: 500;
        }

        td img {
            width: 30px;
            height: 30px;
            margin-right: 1px;
            vertical-align: middle;
            border-radius: 50%;
        }

        .up {
            color: #5CD85C;
        }

        .down {
            color: #FF5C5C;
        }

        .featured-market-section {
            background-color: #0D1019;
            color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 60px 20px;
        }

        td:first-child {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        td:first-child img {
            width: 22px;
            height: 22px;
        }

/* === MOBILE VIEW IMPROVED TABLE RESPONSIVE STYLES === */
@media (max-width: 768px) {

  .container {
    padding: 0 1rem !important;
  }

  .featured-market-section {
    padding: 30px 10px !important;
  }

  h1 {
    font-size: 1.4rem !important;
  }

  .subtitle {
    font-size: 0.8rem !important;
    padding: 0 8px;
    line-height: 1.5;
  }

  .tabs {
    flex-wrap: wrap;
    justify-content: center !important;
    gap: 6px;
  }

  .tab,
  .tabs button {
    font-size: 0.75rem !important;
    padding: 6px 12px !important;
  }

  /* Keep table contained and scrollable if needed */
  .table-container {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    border-radius: 8px;
    padding: 8px !important;
    margin: 0 auto;
    width: 100%;
  }

  table {
    width: 100% !important;
    min-width: unset !important;
    font-size: 0.75rem !important;
    border-spacing: 0;
  }

  th,
  td {
    padding: 10px 6px !important;
    font-size: 0.75rem !important;
    word-break: break-word;
  }

  td:first-child {
    gap: 5px !important;
  }

  td img {
    width: 16px !important;
    height: 16px !important;
  }

  thead {
    font-size: 0.7rem !important;
  }
}

        
    </style>
</head>
<body style="background-color:#0D1019; color:white; font-family:Inter, sans-serif;">
    <div class="featured-market-section">
  <div class="container" style="padding:40px;">
    <h1 style="font-size:2rem; font-weight:700; margin-bottom:10px;">Featured Markets</h1>
    <p style="color:#b0b3c0; font-size:0.95rem; line-height:1.6; max-width:650px;">
      Monitor real-time pricing and performance across our most popular trading instruments.
    </p>
    <div class="tabs" style="display:flex; gap:10px; margin:20px 0;">
      <button style="background:#252542; color:white; padding:10px 18px; border:none; border-radius:25px;">Major Currency Pairs</button>
    </div>
    <table id="forexTable" style="width:100%; border-collapse:collapse; background:#141824; border-radius:12px; overflow:hidden;">
      <thead style="background:#252542; color:#b0b3c0; text-transform:uppercase; font-size:0.85rem;">
        <tr>
            
          <th style="padding:18px 12px; text-align:left;">Instrument ↓</th>
          <th style="padding:18px 12px; text-align:left;">Spread ↓</th>
          <th style="padding:18px 12px; text-align:left;">Margin ↓</th>
          <th style="padding:18px 12px; text-align:left;">Current Price ↓</th>
          <th style="padding:18px 12px; text-align:left;">Daily Changes ↓</th>
        </tr>
      </thead>
      <tbody id="forexBody" style="font-size:0.95rem;"></tbody>
    </table>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/microsoft-signalr/8.0.0/signalr.min.js"></script>
  <script>
    const connection = new signalR.HubConnectionBuilder()
      .withUrl("https://lunaromarket.vedakronos.com/dataHub")
      .withAutomaticReconnect()
      .build();
    connection.on("ReceiveMessage", (symbol, data) => {
      const info = typeof data === "string" ? JSON.parse(data) : data;
      const sym = info.symbol;
      if (!sym) return;
      // find or create a new row dynamically
      let row = document.querySelector(`tr[data-symbol="${sym}"]`);
      if (!row) {
        row = document.createElement("tr");
        row.setAttribute("data-symbol", sym);
        row.innerHTML = `
          <td><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png"  alt="icon"> ${sym}</td>
          <td style="padding:16px 12px; font-weight:600; color:#fff;">${sym}</td>
          <td class="price" style="padding:16px 12px;">--</td>
          <td class="spread" style="padding:16px 12px;">--</td>
          <td class="change" style="padding:16px 12px;">0.00%</td>
        `;
        document.getElementById("forexBody").appendChild(row);
      }
      // update values
      const bid = info.bidPrice || 0;
      const spread = info.minSpread || 0;
      const change = info.changePercent || 0;
      row.querySelector(".price").textContent = bid.toFixed(5);
      row.querySelector(".spread").textContent = spread.toFixed(5);
      const changeEl = row.querySelector(".change");
      changeEl.textContent = `${change.toFixed(2)}%`;
      changeEl.style.color = change >= 0 ? "#4ADE80" : "#F87171"; // green or red
    });
    connection
      .start()
      .then(() => console.log(":white_check_mark: Connected to SignalR Hub"))
      .catch(err => console.error(":x: Connection failed:", err));
  </script>
</body>

</html>