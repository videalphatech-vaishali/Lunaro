<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #000;
        font-family: 'DM Sans', sans-serif;
        color: #fff4e4;
    }

    .etf-body-section {
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
    <div class="etf-body-section">
        <div class="left-side">
            <h2>Key Benefits of ETF Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Instant Diversification with Single Trades</span>
                    <p>One ETF position provides exposure to dozens or hundreds of securities, spreading risk across multiple companies and reducing the impact of individual stock volatility.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Sector and Thematic Exposure</span>
                    <p>Access targeted investment themes such as technology innovation, banking, energy, healthcare breakthroughs, renewable energy transition, or emerging market growth without picking individual winners.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Cost-Effective Market Access</span>
                    <p>ETFs typically charge lower management fees than actively managed funds, and trading them via CFDs eliminates stamp duty and simplifies portfolio construction.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Professional Management with Transparent Structures</span>
                    <p>ETFs publish daily holdings and track established indices or strategies, giving you clear visibility into what you own and how the fund operates.</p>
                </div>
            </div>
        </div>
        <div class="right-side">
            <h2>Key Risks of ETFs Trading</h2>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Sector-Wide Downturns Affect Entire ETF Value</span>
                    <p>If you hold a technology sector ETF and tech stocks decline broadly, your entire position suffers; diversification within the sector doesn't protect against sector-wide weakness.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Tracking Errors May Cause Performance Deviation</span>
                    <p>
                       ETFs may not perfectly replicate their underlying index due to management fees, trading costs, dividend timing, or sampling methods, creating slight performance gaps.</p>
                </div>
            </div>
            <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Management Fees Reduce Overall Returns</span>
                    <p>While typically lower than mutual funds, ETF expense ratios still erode returns over time, particularly in low-yield or flat market environments.</p>
                </div>
            </div>
             <div class="advantage-item">
                <i class="fa-solid fa-check-circle"></i>
                <div class="column-right-text">
                    <span>Leverage Magnifies Both Gains and Losses</span>
                    <p>Trading ETF CFDs with leverage amplifies exposure. Adverse sector or market moves can result in losses exceeding your initial capital without proper risk controls.</p>
                </div>
            </div>
        </div>
    </div>
</body>