
<style> 
    


        /* Section container */
        .assets-section {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/transparent-bg.png') center/cover no-repeat;
  background-color: #010101;
            width: 100%;
            padding: 80px 60px;
            box-sizing: border-box;
        }

        /* Heading and paragraph */
        .assets-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .assets-section-header h2 {
            font-family: var(--font-primary);
            font-size: clamp(28px, 3vw, 36px);
            font-weight: 700;
            color: var(--brand-color);
            margin-bottom: 20px;
        }

        .assets-section-header p {
            font-family: var(--font-primary);
            font-size: clamp(14px, 1.5vw, 16px);
            color: var(--brand-color);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.5;
        }

        /* Cards container */
        .assets-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            justify-content: center;
        }

        /* Individual card */
        .assets-card {
            padding: 24px;
            flex: 1 1 calc(33.333% - 24px);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            gap: 12px;

            border-radius: 40px;
            background: rgba(230, 231, 240, 0.10);
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.06);
        }

        .assets-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Card text */
        .assets-card h5 {
            font-family: var(--font-primary);
            font-weight: 700;
            font-size: 26px;
            color: var(--brand-color);
            margin-bottom: 10px;
            line-height: 150%;
            letter-spacing: -0.78px;
        }

        .assets-card p {
            font-family: var(--font-primary);
            font-size: 14px;
            color: var(--brand-color);
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.42px;
            margin-bottom: 10px;
        }

        /* Button */
        .assets-card button {
            padding: 12px 24px;
            background: none;
            color: var(--brand-color);
            border: 1px solid var(--brand-color);
            /* defined with px */
            border-radius: 12px;
            font-family: var(--font-primary);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        /* .assets-card button:hover {
            background: #f1dcae;
            color: #fff;
        } */

        /* RESPONSIVE BREAKPOINTS */

        /* Tablets (2 cards per row) */
        @media (max-width: 1024px) {
            .assets-section {
                padding: 60px 40px;
            }

            .assets-card {
                flex: 1 1 calc(50% - 24px);
            }
        }

        /* Large Phones (1 card per row) */
        @media (max-width: 768px) {
            .assets-section {
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
            .assets-section {
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
    <div class="assets-section">
        <div class="assets-section-header">
            <h2>Diversify Across Global Benchmark Markets</h2>
            <p>Gain exposure to the world's most liquid and transparent futures markets through Lunaro Markets. Our comprehensive CME Group access spans multiple asset classes, providing opportunities across various market conditions and economic cycles.
            </p>
        </div>

        <div class="assets-grid">
            <div class="assets-card">
                <h5>Equity Index Futures </h5>
                <p>Trade the performance of major stock indices including E-mini S&P 500, Nasdaq-100, and Russell 2000 with competitive margins and 23-hour market access.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Energy Futures</h5>
                <p>Access WTI crude oil, natural gas, and heating oil markets with transparent pricing and direct exposure to global energy benchmarks. </p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Metals Futures</h5>
                <p>Trade gold, silver, copper, and platinum futures with micro contract options for precise precious metals exposure and portfolio hedging.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Agricultural Futures</h5>
                <p>Gain exposure to corn, wheat, soybeans, and livestock markets with seasonal trading opportunities and risk management tools.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Interest Rate Futures </h5>
                <p>Futures Access Treasury bond futures and interest rate products for fixed-income exposure and portfolio duration management.</p>
                <!-- <button>Learn More</button> -->
            </div>
            <div class="assets-card">
                <h5>Currency Futures </h5>
                <p>Trade major and minor currency pairs through regulated futures markets with transparent pricing and central clearing benefits.</p>
                <!-- <button>Learn More</button> -->
            </div>
        </div>
    </div>