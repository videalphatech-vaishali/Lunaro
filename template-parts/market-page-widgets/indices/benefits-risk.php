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

        font-weight: 400;
        color: rgba(255, 244, 228, 0.9);
        margin: 0;
    }

    .right-side p {
        font-size: 1rem;
        line-height: 1.7;

        font-weight: 400;
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

    /* Mobile Responsive */
    @media (max-width: 900px) {
        .our-pricing-advantages-section {
            flex-direction: column;
            align-items: center;
            padding: 3rem 1.5rem;
            gap: 60px;
        }

        .left-side,
        .right-side {
            max-width: 100%;
        }

        .left-side h2,
        .right-side h2 {
            text-align: center;
            font-size: 2rem;
        }

        .left-side p,
        .right-side p,
        .advantage-item p {
            text-align: justify;
        }

        .advantage-item {
            flex-direction: row;
            align-items: flex-start;
        }

        .advantage-item i {
            margin-bottom: 6px;
        }

        .column-right-text span {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            text-align: justify;
        }
    }
</style>

<body>
    <div class="our-pricing-advantages-section">
        <div class="left-side">
            <h2>Key Benefits</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Exposure to multiple companies with one trade.</span>
                    <p>Instead of picking individual stocks, an index position gives you
                        instant exposure to an entire market or sector, diversifying risk
                        across dozens or hundreads of companies.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Less volatile than individual shares.</span>
                    <p>Index movements tend to be smoother than individual stock prices,
                        as gains and losses across constituent companies offset each other,
                        reducing short-term price swings.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Reflects economic and sector performance.</span>
                    <p>Indices respond to macroeconomic trends, central bank decisions, earning
                        seasons, and geopolitical events, making them ideal for traders who
                        analyze broader market conditions.

                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Available 24 hours on major indices.</span>
                    <p>Trade key benchmarks around the clock, including out-of-hours sessions, allowing you to react
                        to global news and manage positions across time zones.

                    </p>
                </div>
            </div>
        </div>
        <div class="right-side">
            <h2>Key risks of trading indices:</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Market Wide Downturns can Affect Entire Index Value</span>
                    <p>Since indices represent broad markets, a general downturn impacts the entire basket. You can't
                        isolate youreself from sector-wide or economic risks.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Less Control Over Individual Company Performance</span>
                    <p>Strong performance by a single company may be iluted across the broader index.
                        You're exposed to the collective movement, not individual stock stories.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Leverage Can Amplify Both Gains and Losses</span>
                    <p>Trading indices with leverage magnifies yur exposure. While this increases profit potential, it
                        also heightens risk
                        if the market moves against your position.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>