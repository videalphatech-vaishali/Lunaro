<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #000;
        font-family: 'DM Sans', sans-serif;
        color: #fff4e4;
    }

    .our-pricing-advantages-section {
        justify-content: space-between;
        background-color: #0b0d16;
        align-items: flex-start;
        padding: 5rem 5rem;
        flex-wrap: wrap;
        display: flex;
        gap: 150px;
    }

    /* Left side */
    .left-side {
        flex: 1;
        max-width: 800px;
    }

    .left-side h2 {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        color: #fff4e4;
    }

    .left-side p {
        font-size: 1rem;
        line-height: 1.7;
        color: rgba(255, 244, 228, 0.9);
        margin: 0;
    }

    /* Right side */
    .right-side {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 18px;
        max-width: 550px;
    }

    .right-side h2 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #fff4e4;

    }

    .advantage-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255, 244, 228, 0.9);
    }

    .advantage-item i {
        color: #FFF4E4;
        font-size: 1rem;
        margin-top: 4px;
    }


    /* Responsive */
    @media (max-width: 900px) {
        .left-side h2 {
            text-align: center;
        }

        .left-side p {
            text-align: center;
        }

        .right-side {
            padding-left: 10px;
        }
    }
</style>

<body>
    <div class="our-pricing-advantages-section">
        <div class="left-side">
            <h2>Key Benefits of Forex Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>$7.5 Trillion Daily Trading Volume</span>
                    <p>
                        The Forex market's massive liquidity ensures you can enter and exit positions efficiently, even
                        with large orders, without significantly impacting price.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>24-Hour Market Access, 5 Days a Week</span>
                    <p>Trade around the clock from Sunday evening to Friday night (GMT), giving you flexibility to
                        respond to global events and fit trading around your schedule.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>High Liquidity and Tight Spreads</span>
                    <p>Major currency pairs like EUR/USD and GBP/USD offer some of the tightest spreads in financial
                        markets, starting from just 0.3 pips, keeping your trading costs low
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Responsive to Economic Data and Events</span>
                    <p>Forex reacts instantly to central bank decisions, employment reports, inflation data, and
                        geopolitical developments, providing numerous trading opportunities for informed traders.
                    </p>
                </div>
            </div>
        </div>
        <div class="right-side">
            <h2>Key Risks of Forex Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Currency Volatility Can Lead to Rapid Losses</span>
                      <?php 
                   // get the country from session or default to 'uk'
                   $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
                   if ($country === 'uae') { 
                 ?>
                    <p>Exchange rates can move sharply in response to unexpected news or data releases, potentially
                        resulting in significant losses if positions aren't managed carefully.
                    </p>
                 <?php 
                   } else { 
                 ?>
                      <p>Exchange rates can move sharply in response to unexpected news or data releases, potentially resulting in significant losses.</p>
                 <?php 
                   }
                 ?>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Economic and Political Events Create Unpredictable Movements</span>
                    <p>Elections, policy changes, trade tensions, and central bank surprises can trigger sudden price
                        swings that challenge even experienced traders.

                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Leverage Can Amplify Both Gains and Losses</span>
                    <p>While leverage allows you to control larger positions with less capital, it also magnifies losses
                        if the market moves against you. Always use appropriate risk management.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>24-Hour Trading Requires Diligent Monitoring</span>
                    <p>The Forex market never sleeps. Significant moves can happen overnight or during off-peak hours,
                        making risk management tools like stop-loss orders essential.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>