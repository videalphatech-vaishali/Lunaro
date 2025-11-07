
<style> 
    


        /* Section container */
  .trade-options-section {
  background: 
    linear-gradient(white,black),
    url('<?php echo get_template_directory_uri(); ?>/assets/images/trans-style.png') center/cover no-repeat;
  background-blend-mode: multiply;
  box-sizing: border-box;
  background-color: #0B0D16;
  padding: 80px 60px;
  width: 100%;
  color: #FFF4E4; /* text color visible on dark bg */
}


        /* Heading and paragraph */
        .trade-options-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .trade-options-section-header h2 {
            font-size: clamp(28px, 3vw, 36px);
            font-family: var(--font-primary);
            color: var(--brand-color);
            margin-bottom: 20px;
            font-weight: 700;
        }

        .trade-options-section-header p {
            font-size: clamp(14px, 1.5vw, 16px);
            font-family: var(--font-primary);
            color: var(--brand-color);
            line-height: 1.5;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Cards container */
        .assets-grid {
            gap: 24px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        /* Individual card */
        .assets-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.06);
            background: #141829;
            flex: 1 1 calc(33.333% - 24px);
            align-items: flex-start;
            flex-direction: column;
            box-sizing: border-box;
            border-radius: 40px;
            display: flex;
            padding: 24px;
            gap: 12px;
        }

        .assets-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Card text */
        .assets-card h5 {
            font-family: var(--font-primary);
            color: var(--brand-color);
            letter-spacing: -0.78px;
            margin-bottom: 10px;
            line-height: 150%;
            font-weight: 700;
            font-size: 26px;
        }

        .assets-card p {
            font-size: 14px;
            font-weight: 400;
            line-height: 150%;
            margin-bottom: 10px;
            letter-spacing: -0.42px;
            color: var(--brand-color);
            font-family: var(--font-primary);
        }

        /* Button */
        .assets-card button {
            border: 1px solid var(--brand-color);
            font-family: var(--font-primary);
            color: var(--brand-color);
            transition: all 0.3s ease;
            border-radius: 12px;
            padding: 12px 24px;
            background: none;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            width: 100%;
        }

        /* Tablets (2 cards per row) */
        @media (max-width: 1024px) {
            .trade-options-section {
                padding: 60px 40px;
            }

            .assets-card {
                flex: 1 1 calc(50% - 24px);
            }
        }

        /* Large Phones (1 card per row) */
        @media (max-width: 768px) {
            .trade-options-section {
                padding: 40px 20px;
            }

            .assets-card {
                flex: 1 1 100%;
            }

            .assets-card h5 {
                font-size: 22px;
            }

            .assets-card p {
                font-size: 13px;
            }
        }

        /* Small Phones (extra padding adjustment) */
        @media (max-width: 480px) {
            .trade-options-section {
                padding: 32px 16px;
            }

            .assets-card {
                padding: 20px;
                border-radius: 20px;
            }

            .assets-card button {
                padding: 10px 16px;
                font-size: 13px;
            }
        }
</style>



   <!-- Assets to Trade -->
    <div class="trade-options-section">
        <div class="trade-options-section-header">
            <h2>Trade Options Across Global Benchmark Markets</h2>
            <p>Access options on the world's most liquid futures markets through Lunaro Markets. Our comprehensive CME Group options coverage spans multiple asset classes, providing
                 strategic opportunities for portfolio enhancement, risk management, and income generation.
            </p>
        </div>

        <div class="assets-grid">
            <div class="assets-card">
                <h5>Equity Index Options</h5>
                <p>Trade options on E-mini S&P 500, Nasdaq-100, and Russell 2000 futures with daily, weekly, and monthly expirations for tactical positioning.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Energy Options</h5>
                <p>Access crude oil, natural gas, and gasoline options for energy sector exposure and commodity price hedging strategies.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Metals Options</h5>
                <p>Trade gold, silver, and copper options with micro contract availability for precious metals portfolio management and inflation hedging.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Agricultural Options</h5>
                <p>Gain exposure to corn, wheat, and soybean options for agricultural commodity strategies and seasonal trading opportunities.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Interest Rate Options</h5>
                <p>Access Treasury bond and note options for fixed-income portfolio management and interest rate risk hedging.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Currency Options</h5>
                <p>Trade options on major currency pairs for foreign exchange hedging and international portfolio risk management.</p>
                <!-- <button>Learn More</button> -->
            </div>
        </div>
    </div>