<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #000;
        font-family: 'DM Sans', sans-serif;
        color: #fff4e4;
    }

    .treasuries-body-section {
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


    /* ---------- MOBILE VIEW ---------- */
    @media (max-width: 1024px) {
        .treasuries-body-section {
            flex-direction: column;
            padding: 3rem 2rem;
            gap: 60px;
        }

        .left-side h2, 
        .right-side h2 {
            text-align: center;
            font-size: 1.8rem;
        }

        .advantage-item {
            flex-direction: row;
            align-items: flex-start;
        }

        .advantage-item i {
            font-size: 1.2rem;
        }

        .advantage-item p {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 600px) {
        .treasuries-body-section {
            padding: 2.5rem 1.5rem;
            gap: 50px;
        }

        .left-side h2, 
        .right-side h2 {
            font-size: 1.5rem;
        }

        .advantage-item {
            gap: 10px;
        }

        .advantage-item i {
            font-size: 1rem;
        }

        .advantage-item p {
            font-size: 0.9rem;
            line-height: 1.5;
        }
    }
</style>

<body>
    <div class="treasuries-body-section">
        <div class="left-side">
            <h2>Key Benefits of Treasury Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Interest Rate Sensitivity for Hedging</span>
                    <p>Treasury positions can offset equity exposure during market downturns or rate-driven volatility, as bonds often rise when stocks fall, providing natural portfolio protection.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Lower Risk Compared to Equities</span>
                    <p>Government bonds from developed nations typically exhibit lower volatility than stocks, offering more stable price movements and reduced drawdown risk.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Portfolio Diversification Benefits</span>
                    <p>Treasuries often move independently from equities, commodities, and currencies, providing genuine diversification that can smooth overall portfolio returns across market cycles.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Macroeconomic Trend Exposure</span>
                    <p>Bond markets respond directly to inflation data, GDP releases, central bank communications, and fiscal policy, making treasuries ideal for traders who analyse macroeconomic fundamentals.</p>
                </div>
            </div>
        </div>
        <div class="right-side">
            <h2>Key Risks of Treasury Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Interest Rate Changes Drive Price Volatility</span>
                    <p>Unexpected central bank decisions or shifts in rate expectations can cause significant bond price movements, particularly for longer-duration instruments.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Inflation Erodes Real Returns Over Time</span>
                    <p>
                       While nominal bond prices may remain stable, high inflation reduces the purchasing power of future coupon payments and principal repayment, impacting real returns.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Credit Risk Exists Even with Government Bonds</span>
                    <p>Though rare in developed markets, sovereign debt can face downgrades or restructuring during fiscal crises. Emerging market bonds carry higher credit risk.</p>
                </div>
            </div>
             <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Leverage Amplifies Both Gains and Losses</span>
                    <p>Trading bond CFDs with leverage magnifies exposure. Adverse rate movements can result in losses exceeding your initial capital without appropriate risk management.</p>
                </div>
            </div>
        </div>
    </div>
</body>