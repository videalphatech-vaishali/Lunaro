<?php

/**
 * Register the Markets Table block pattern with WebSocket-based price updates.
 */
if (!function_exists('lr_register_markets_table_pattern')) {
    function lr_register_markets_table_pattern()
    {
        register_block_pattern(
            'apmwptheme/lr-markets-table',
            array(
                'title' => __('Markets Table Section', 'apmwptheme'),
                'description' => __('A section showing markets overview and a table of popular markets with live price updates.', 'apmwptheme'),
                'categories' => array('columns', 'text'),
                'content' => '
<!-- wp:group {"className":"lr-markets-section"} -->
<div class="wp-block-group lr-markets-section">

    <!-- wp:heading {"level":2} -->
    <h2>Markets</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link" href="/markets-overview">Markets overview</a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:heading {"level":3} -->
    <h3>Popular markets</h3>
    <!-- /wp:heading -->

    <!-- wp:table {"className":"lr-market-table"} -->
    <figure class="wp-block-table lr-market-table"><table><thead><tr>
    <th>Product</th><th>Min Spread</th><th>Margin</th><th>Price</th><th>Day</th><th>Week</th><th>Trend</th>
    </tr></thead><tbody>
    <tr><td><a href="#">US 30</a></td><td>2.2</td><td>5%</td><td>44409.88</td><td>-0.41%</td><td>-1.1%</td><td><img src="/path/to/trend1.png" alt="trend"/></td></tr>
    <tr><td><a href="#">Germany 40</a></td><td>1.2</td><td>5%</td><td>22327.07</td><td>1.06%</td><td>3.14%</td><td><img src="/path/to/trend2.png" alt="trend"/></td></tr>
    <tr><td><a href="#">US NDAQ 100</a></td><td>1</td><td>5%</td><td>21771.64</td><td>0.33%</td><td>0.5%</td><td><img src="/path/to/trend3.png" alt="trend"/></td></tr>
    <tr><td><a href="#">GBP/USD</a></td><td>0.9</td><td>3.34%</td><td>1.24</td><td>0%</td><td>-0.49%</td><td><img src="/path/to/trend4.png" alt="trend"/></td></tr>
    <tr><td><a href="#">Gold</a></td><td>0.3</td><td>5%</td><td>2904.02</td><td>0.22%</td><td>1.3%</td><td><img src="/path/to/trend5.png" alt="trend"/></td></tr>
    <tr><td><a href="#">Crude Oil West Texas</a></td><td>2.5</td><td>10%</td><td>71.47</td><td>-2.75%</td><td>-0.21%</td><td><img src="/path/to/trend6.png" alt="trend"/></td></tr>
    <tr><td><a href="#">Crude Oil Brent</a></td><td>2.5</td><td>10%</td><td>75.37</td><td>-0.01%</td><td>0.16%</td><td><img src="/path/to/trend7.png" alt="trend"/></td></tr>
    </tbody></table></figure>
    <!-- /wp:table -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const ws = new WebSocket("wss://ws.postman-echo.com/raw");

    const priceCells = document.querySelectorAll(".lr-market-table tbody tr td:nth-child(4)");
    const prices = Array.from(priceCells).map(cell => parseFloat(cell.textContent.replace(/,/g, "")) || 0);

    function fluctuate(price) {
        const percentChange = (Math.random() - 0.5) / 100; // ±0.5%
        return (price * (1 + percentChange)).toFixed(2);
    }

    ws.onopen = function () {
        setInterval(() => {
            const updatedPrices = prices.map(fluctuate);
            ws.send(JSON.stringify(updatedPrices));
        }, 2000);
    };

    ws.onmessage = function (event) {
        try {
            const data = JSON.parse(event.data);
            data.forEach((newPrice, index) => {
                if (priceCells[index]) {
                    priceCells[index].textContent = parseFloat(newPrice).toLocaleString(undefined, {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                    prices[index] = parseFloat(newPrice); // update local copy
                }
            });
        } catch (e) {
            console.error("WebSocket parse error:", e);
        }
    };

    ws.onerror = function (err) {
        console.error("WebSocket error:", err);
    };
});
</script>
<!-- /wp:html -->
',
            )
        );
    }
    add_action('init', 'lr_register_markets_table_pattern');
}
