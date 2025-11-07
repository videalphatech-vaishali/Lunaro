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
            <h2>Key Benefits of Share Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Direct Exposure to Company Performance</span>
                    <p>Your position reflects the success or failure of specific businesses. Backing companies you understand and believe in can be more engaging than trading broader market instruments.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Potential for Higher Returns Through Active Trading</span>
                    <p>Individual shares often move more dramatically than indices, creating opportunities for traders who can identify mispriced stocks or capitalise on earnings momentum.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Responsive to Earnings and Company News</span>
                    <p>Share prices react immediately to quarterly results, guidance updates, product announcements, and sector developments, providing numerous catalysts for informed trading decisions.
                    </p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Multiple Access Methods: Exchange Traded Derivatives and CFDs</span>
                    <p>Trade shares through tax-efficient ETDs (UAE) or flexible CFD trading, both offering leverage, short-selling capability, and no stamp duty on purchases. </p>
                </div>
            </div>
        </div>
        <div class="right-side">
            <h2>Key Risks of Share Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Individual Company Volatility Can Lead to Significant Losses</span>
                    <p>Unlike diversified indices, a single company's shares can plummet on disappointing news or competitive threats, potentially causing substantial losses.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>High Price Swings Can Result in Rapid Position Changes</span>
                    <p>
                       Shares frequently experience intraday volatility, especially for growth stocks or during earnings season, requiring careful position sizing and risk management.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Earnings Announcements Can Cause Sharp Movements</span>
                    <p>
                       Quarterly results often trigger immediate price moves. Trading through earnings carries elevated risk and requires appropriate stop-loss strategies.</p>
                </div>
            </div>
             <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Leverage Magnifies Both Gains and Losses</span>
                    <p>While leverage allows you to control larger positions with less capital, adverse price movements are equally amplified. </p>
                </div>
            </div>
        </div>
    </div>
</body>