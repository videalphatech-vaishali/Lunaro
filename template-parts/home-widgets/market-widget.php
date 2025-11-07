<style>
    /* Responsive container */
    .markets-table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .markets-section {
        padding: 40px 50px;
        font-family: sans-serif;
    }

    .markets-header {
        margin-bottom: 30px;
    }

    .section-title {
        font-size: 28px;
        font-weight: bold;
    }

    .section-description {
        margin: 10px 0;
        font-size: 14px;
    }

    .markets-btn {
        display: inline-block;
        padding: 10px 20px;
        color: #65558f;
        border: 1px solid #888;
        border-radius: 20px;
        text-decoration: none;
        font-size: 14px;
    }

    .markets-btn:hover {
        background: #555;
        color: #fff;
    }

    .popular-title {
        font-size: 20px;
        margin: 20px 0 10px;
        font-weight: bold;
    }

    .markets-table {
        min-width: 800px;
        /* or whatever the minimum required width is */
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        font-size: 14px;
    }

    .markets-table thead {
        background: #f2f2f2;
    }

    .markets-table th,
    .markets-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #ddd;
    }

    .markets-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .up {
        color: green;
    }

    .down {
        color: #f9f9f9;
    }

    .neutral {
        color: orange;
    }

    .trend {
        font-size: 18px;
        /* placeholder, replace with real chart/image if needed */
    }

    /* Optional: Better spacing and font adjustments on smaller screens */
    @media (max-width: 768px) {
        .markets-section {
            padding: 20px;
        }

        .section-title {
            font-size: 22px;
        }

        .markets-btn {
            padding: 8px 16px;
            font-size: 13px;
        }

        .popular-title {
            font-size: 18px;
        }
    }
</style>

<section class="markets-section">
    <div class="markets-header">
        <h2 class="section-title">Markets</h2>
        <p class="section-description">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
        <a href="market/" class="markets-btn">Markets overview</a>
    </div>

    <h3 class="popular-title">Popular markets</h3>
    <div class="markets-table-responsive">
        <table class="markets-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Min Spread</th>
                    <th>Margin</th>
                    <th>Price</th>
                    <th>Day</th>
                    <th>Week</th>
                    <th>Trend</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $markets = [
                    ["product" => "US 30", "spread" => "2.2", "margin" => "5%", "price" => "44,409.88", "day" => "-0.41%", "week" => "-1.1%", "trend" => "📈"],
                    ["product" => "Germany 40", "spread" => "1.2", "margin" => "5%", "price" => "22,327.07", "day" => "1.06%", "week" => "3.14%", "trend" => "📈"],
                    ["product" => "US NDAq 100", "spread" => "1", "margin" => "5%", "price" => "21,771.64", "day" => "0.33%", "week" => "0.5%", "trend" => "📈"],
                    ["product" => "GBP/USD", "spread" => "0.9", "margin" => "3.34%", "price" => "1.24", "day" => "0%", "week" => "-0.49%", "trend" => "📉"],
                    ["product" => "Gold", "spread" => "0.3", "margin" => "5%", "price" => "2,904.02", "day" => "0.22%", "week" => "1.3%", "trend" => "📈"],
                    ["product" => "Crude Oil West Texas", "spread" => "2.5", "margin" => "10%", "price" => "71.47", "day" => "-2.75%", "week" => "-0.21%", "trend" => "📉"],
                    ["product" => "Crude Oil Brent", "spread" => "2.5", "margin" => "10%", "price" => "75.37", "day" => "-0.01%", "week" => "0.16%", "trend" => "📉"],
                ];

                foreach ($markets as $market) {
                    $dayColor = strpos($market['day'], '-') !== false ? 'down' : (strpos($market['day'], '0%') !== false ? 'neutral' : 'up');
                    $weekColor = strpos($market['week'], '-') !== false ? 'down' : (strpos($market['week'], '0%') !== false ? 'neutral' : 'up');

                    echo "<tr>
          <td>{$market['product']}</td>
          <td>{$market['spread']}</td>
          <td>{$market['margin']}</td>
          <td>{$market['price']}</td>
          <td class='{$dayColor}'>{$market['day']}</td>
          <td class='{$weekColor}'>{$market['week']}</td>
          <td class='trend'>{$market['trend']}</td>
        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>