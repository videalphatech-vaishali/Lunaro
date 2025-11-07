<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Financial Glossary</title>

    <style>
        :root {
            --Brand-accent: #A89469;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: #FFF;
            min-height: 100vh;
            line-height: 1.6;
            background: #0B0D16;
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/grossary-backgorund.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto 25px;
            margin-top: 5rem;
            flex-wrap: wrap;
            gap: 16px;
        }

        h1 {
            color: #FFF;
            font-size: 52px;
            font-weight: 800;
            line-height: 130%;
            letter-spacing: -1.56px;
        }

        .search-container {
            max-width: 400px;
            flex: 1;
        }

        #searchInput {
            width: 100%;
            padding: 10px 16px;
            border: none;
            color: #000;
            border-radius: 50px;
            font-size: 1rem;
        }

        .main-container {
            display: flex;
            gap: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .alphabet-sidebar {
            flex: 0 0 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            gap: 8px;
            height: 550px;
            overflow-y: auto;
        }

        .alphabet-sidebar a {
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            border-radius: 50%;
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .alphabet-sidebar a:hover,
        .alphabet-sidebar a.active {
            background-color: #3b3b3b;
        }

        .glossary-container {
            flex: 1;
            display: grid;
            gap: 20px;
            margin-bottom: 5rem;
            grid-template-columns: 1fr;
            /* only 1 item per row */
            height: 1500px;
            /* adjust as needed */
            overflow-y: auto;
            /* vertical scroll if content overflows */
            padding-right: 10px;
            /* optional: prevent content hiding under scrollbar */
        }

        .term-card {
            background: #0B0D16;
            padding: 20px;
            border-radius: 12px;
            border: 2px solid var(--Brand-accent);
        }

        .term-title {
            font-size: 20px;
            font-weight: 700;
            color: white;
            margin-bottom: 6px;
        }

        @media (max-width: 992px) {
            .main-container {
                flex-direction: column;
            }

            .alphabet-sidebar {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                height: auto;
            }

            .glossary-container {
                grid-template-columns: 1fr;
            }
        }

        /* Extra small screens */
        @media (max-width: 600px) {
            .alphabet-sidebar {
                flex-direction: row;
                justify-content: center;
                gap: 4px;
            }

            .alphabet-sidebar a {
                width: 28px;
                height: 28px;
                line-height: 28px;
                font-size: 12px;
            }

            .term-card {
                max-height: 200px;
                padding: 12px;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header-row">
        <h1>Glossary</h1>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search for a term..." />
        </div>
    </div>

    <!-- MAIN -->
    <div class="main-container">
        <div class="alphabet-sidebar">
            <a href="#" data-letter="A">A</a>
            <a href="#" data-letter="B">B</a>
            <a href="#" data-letter="C">C</a>
            <a href="#" data-letter="D">D</a>
            <a href="#" data-letter="E">E</a>
            <a href="#" data-letter="F">F</a>
            <a href="#" data-letter="G">G</a>
            <a href="#" data-letter="H">H</a>
            <a href="#" data-letter="I">I</a>
            <a href="#" data-letter="J">J</a>
            <a href="#" data-letter="K">K</a>
            <a href="#" data-letter="L">L</a>
            <a href="#" data-letter="M">M</a>
            <a href="#" data-letter="N">N</a>
            <a href="#" data-letter="O">O</a>
            <a href="#" data-letter="P">P</a>
            <a href="#" data-letter="Q">Q</a>
            <a href="#" data-letter="R">R</a>
            <a href="#" data-letter="S">S</a>
            <a href="#" data-letter="T">T</a>
            <a href="#" data-letter="U">U</a>
            <a href="#" data-letter="V">V</a>
            <a href="#" data-letter="W">W</a>
            <a href="#" data-letter="X">X</a>
            <a href="#" data-letter="Y">Y</a>
            <a href="#" data-letter="Z">Z</a>
        </div>

        <div class="glossary-container" id="glossary"></div>
    </div>

    <!--  Load DATA (can be external file) -->
    <script>
        const glossaryData = new Map([
            ["ADGM", "Means the Abu Dhabi Global Markets"],
            ["Alpha", "A measure of how much an investment outperforms or underperforms a benchmark."],
            ["AML", "Anti-Money Laundering and Sanctions Rulebook"],
            ["Amortisation", "Process of spreading loan repayments or asset cost over a period."],
            ["Arbitrage", "Profit from price differences across markets."],
            ["Aggregate", "Total sum of financial assets or market value."],
            ["Ask price", "Minimum price a seller accepts."],
            ["Asset Allocation", "Strategy of dividing investments across asset categories."],
            ["Automated trading", "Executing trades via computer algorithms."],
            ["Accumulation fund", "Fund that reinvests profits instead of paying dividends."],
            ["AGM", "Annual General Meeting of shareholders."],
            ["At the money", "Option whose strike price equals current market value."],
            ["Appreciation", "Increase in an asset's value over time."],
            ["Asset", "Resource that provides future economic benefit."],
            ["Ask", "Lowest price a seller accepts."],
            ["Auction", "Market where prices are determined via bids."],
            ["Asset Class", "Category of financial instruments."],
            ["Agricultural Commodities", "Raw farming and livestock products."],
            ["Authorised Person", "Approved entity allowed to perform regulated financial tasks."],

            // ---------------------- B ----------------------
            ["Bull market", "A bull market refers to a financial market or asset on a sustained upward trend, marked by investor confidence and optimism."],
            ["Bear market", "bear market describes a prolonged downward trend, driven by pessimism and declining prices."],
            ["Bar chart", "A bar chart showing an asset’s open, high, low, and close prices over a period."],
            ["Broker", "A broker is a licensed individual or firm that executes financial transactions on behalf of clients across assets like stocks, forex, and real estate. Brokers may offer market data, guidance, or simply execute trades, typically charging a commission for their services."],
            ["Bearish", "bearish in trading refers to anticipating a decline in the value of a market, asset, or financial instrument. Traders with a bearish outlook seek to profit from falling prices, making it essential to identify downward trends for effective risk management and strategic decision-making."],
            ["Bollinger Bands", "A technical indicator showing price volatility using a moving average and standard deviation bands."],
            ["Bond", "A fixed-income security where an investor lends funds to a government or company in exchange for periodic interest payments and repayment of principal at maturity."],
            ["Bid Price", "The bid price is the highest price a buyer is willing to pay for a financial instrument at a given time."],
            ["Breakout", "A breakout occurs when an asset’s price moves beyond a defined support or resistance level, signaling a potential strong trend in the direction of the move."],
            ["CME", "CME, short for Chicago Mercantile Exchange, is a leading global derivatives marketplace offering futures and options across commodities, equities, and cryptocurrencies."],
            ["Commodity market", "A marketplace for trading raw or primary products like oil, gold, and agricultural goods, either through physical transactions or financial derivatives."],
            ["Commodity", "A basic good used in commerce that is interchangeable with other goods of the same type, such as crude oil, wheat, or gold."],
            ["Call option", "A contract that gives the buyer the right, without the obligation, to buy an asset at a predetermined price within a specific time period."],
            ["CPI", "CPI, short for Consumer Price Index, tracks changes in the prices of goods and services purchased by consumers, serving as a key measure of inflation."],
            ["Current ratio", "A liquidity metric comparing a company’s current assets to current liabilities, showing its ability to meet short-term obligations."],
            ["Candlestick Chart", "A chart used in technical analysis displaying an asset’s open, high, low, and close prices over time."],
            ["Candlestick patterns", "Specific formations in candlestick charts that traders analyze to anticipate potential market movements."],
            ["Central Bank", "The national authority managing monetary policy, regulating banks, controlling inflation, and stabilizing the currency."],
            ["Capitulating meaning", "The act of selling off assets in panic during a market downturn, often signaling the end of a decline."],
            ["Cash flow", "The movement of money into and out of a business, reflecting its liquidity and operational health."],
            ["Client", "Means a Retail Client or Professional Client as defined in COBS 2."],
            ["Client Assets", "Means Client Money and Client Investments."],
            ["Client Money", "Means money of any currency which an Authorised Person holds on behalf of a Client."],
            ["Closing price", "The final trading price of an asset at the end of a trading session, used as a reference for future activity."],
            ["Credit rating", "A measure of a borrower’s ability to repay debt, helping traders assess risk in bonds and other fixed-income investments."],
            ["Calmar ratio", "The Calmar Ratio measures an investment’s risk-adjusted performance by comparing its annualized returns to the largest peak-to-trough loss over a specific period."],
            ["Capital Loss", "A loss incurred when an asset is sold for less than its purchase price."],
            ["Capital Gain", "A profit realized when an asset is sold for more than its purchase price."],

            // ---------------------- D ----------------------
            ["Day order", "An instruction to buy or sell a financial instrument that remains active only for the trading day and expires at market close."],
            ["Discount rate", "The interest rate used to calculate the present value of future cash flows, reflecting both risk and the cost of capital."],
            ["Delivery date", "The specified date on which the underlying asset in a futures or forward contract must be delivered, completing the contract obligation."],
            ["Dividend", "A share of company profits distributed to shareholders, typically in cash or stock."],
            ["Devaluation", "A deliberate reduction in a nation’s currency value to improve trade competitiveness."],
            ["Deficit", "A condition where expenses exceed income over a period."],
            ["Derivation", "The calculation or basis from which a financial value or instrument is determined."],
            ["Digital options", "A derivative that provides a fixed payout if the underlying asset meets a condition at expiration; also known as binary options."],
            ["Direct Market Access", "An arrangement allowing members or their clients to transmit orders directly to a trading facility."],
            ["Drawdown", "The decline in portfolio value from peak to trough, used to measure investment risk."],
            ["Delta one", "Instruments closely mirroring the price movement of an underlying asset on a one-to-one basis."],
            ["Dark pools", "Private trading venues where large orders are executed anonymously to minimize market impact."],
            ["Developed markets", "Countries with advanced financial systems and stable economies, offering lower risk."],
            ["Day Trading", "Buying and selling financial instruments within the same day to profit from short-term movements."],
            ["Dividend Yield", "A ratio showing annual dividend payout as a percentage of the share price."],
            ["Dollar Index", "A benchmark measuring the value of the U.S. dollar against a basket of major currencies."],

            // ---------------------- E ----------------------
            ["Earnings per share definition", "EPS represents the portion of company profit allocated to each outstanding share, used to measure profitability."],
            ["EBITDA", "Earnings Before Interest, Taxes, Depreciation, and Amortization — a measure of operational profitability."],
            ["eKYC", "Verification of customer identity through non-face-to-face electronic means."],
            ["Emerging markets", "Countries experiencing rapid economic growth but higher volatility and risk."],
            ["ETF (Exchange-Traded Fund)", "A diversified investment fund traded on exchanges, offering access to multiple assets in one instrument."],
            ["Exchange Rate", "The price at which one currency can be exchanged for another."],
            ["Exchange", "A structured marketplace for trading financial instruments in a regulated environment."],
            ["Equity", "Ownership in a company through shares, providing dividends and appreciation potential."],
            ["Economic indicator", "A statistical measure signalling economic health, such as GDP or inflation."],
            ["Exposure", "The amount of capital at risk in a trade or investment."],
            ["Economic calendar", "A schedule of major economic releases and events used by traders to anticipate market movements."],
            ["Energy Commodities", "Physical assets like oil, gas, and electricity that drive global economies."],

            ["Fiat currency definition", "Currency that a government declares as legal tender but is not backed by a physical commodity. Its value derives from public confidence and government stability."],
            ["Fixed costs", "Business expenses that remain unchanged regardless of production or sales levels, including rent, contractual obligations, and licenses."],
            ["Fill", "The execution of a trade order, either fully or partially, at a specified price."],
            ["FOMC", "The U.S. Federal Reserve committee responsible for setting monetary policy, including interest rates and money supply."],
            ["Fractional share", "A portion of a whole share of stock, allowing investors to buy less than one unit and enabling diversification at any investment level."],
            ["FSMR", "Means the Financial Services and Markets Regulations 2015."],
            ["FSRA", "Means the Financial Services Regulatory Authority."],
            ["Futures Contract", "A standardized agreement to buy or sell an asset at a predetermined price on a future date, used for hedging and speculation."],

            // // ---------- G ----------
            ["Gross profit margin", "The percentage of revenue remaining after deducting the cost of assets sold."],
            ["Gross margin", "Sales revenue minus the cost of goods sold, expressed as a percentage, showing operational profit efficiency."],
            ["Gross asset value", "The total value of all assets in a portfolio or company before liabilities."],
            ["Gold silver ratio", "The number of silver ounces needed to buy one ounce of gold."],
            ["GDP", "Gross Domestic Product—the total value of all goods and services produced within a country."],
            ["Gearing ratio", "A measure of financial leverage comparing company debt to shareholders’ equity."],
            ["Gross spread", "The difference between the IPO price received by a company and the price paid by investors."],

            // // ---------- H ----------
            ["Hedging", "A strategy to protect investments from potential market losses while maintaining growth opportunities."],
            ["Hyperinflation", "An extremely rapid rise in prices that erodes purchasing power."],
            ["Hard currency", "A stable and widely accepted currency, typically from economically strong nations."],
            ["Holding Period", "The duration an investor holds an asset, impacting returns, risk, and taxes."],
            ["Hybrid Fund", "A fund that invests across equities, bonds, and cash to balance risk and returns."],
            ["Historical Price Data", "A record of past market prices and trading activity used for trend analysis."],
            ["Hedge Ratio", "The proportion of an investment that should be hedged to effectively manage risk."],
            ["Hidden Orders", "Order types that conceal all or part of the order quantity while maintaining order book priority."],
            ["Hourly Candle", "A candlestick representing open, high, low, and close prices over one hour."],
            ["HFT", "High-Frequency Trading—strategies using advanced algorithms to execute trades in milliseconds."],

            // // ---------- I ----------
            ["Interest rate swaps", "Agreements where two parties exchange interest payments, typically fixed for floating, to manage interest rate exposure."],
            ["Inflation", "A sustained rise in prices of goods and services that reduces purchasing power."],
            ["Intrinsic value", "The true or perceived worth of an asset, used in valuation and options pricing."],
            ["IPO", "Initial Public Offering—the first sale of a company’s shares to the public."],
            ["Interest", "The cost of borrowing money or a shareholder’s ownership stake in a company."],
            ["Investment grade", "Low-risk bonds with high confidence of meeting interest and principal payments (rated AAA to BBB)."],
            ["Index providers", "Organizations that create and maintain financial indices, guiding passive investment products."],
            ["Inception date", "The date when a fund, security, or investment product was first launched."],
            ["In the money", "An options term indicating intrinsic value—call options above strike price, put options below."],
            ["Income fund", "A fund designed to generate regular income through dividends or interest."],
            ["Intraday Trading", "Buying and selling financial instruments within the same trading day."],
            ["Implied Volatility", "Market-derived expectation of future volatility in an asset, reflected through options prices."],
            ["Investment Risk", "The potential for loss or underperformance due to market volatility, economic conditions, or asset-specific factors."],

            ["Liability", "A liability is a financial obligation or debt owed by an individual or company, typically arising from borrowing, contracts, or legal commitments."],
            ["Limit order", "A limit order is an instruction to buy or sell a financial instrument at a specified price or better, providing control over entry and exit points in trading."],
            ["Lot", "A lot is the standardized quantity of units of an asset being traded, ensuring consistency and efficiency in transactions."],
            ["Leveraged ETFs", "Leveraged Exchange-Traded Funds are designed to amplify the daily returns of an underlying index, typically using derivatives and debt to achieve higher gains but with greater risk."],
            ["Leading Indicator", "A leading indicator is economic data that predicts future economic activity and trends before they occur."],
            ["Lagging Indicator", "Market or economic data that reflects past trends, used to confirm patterns and evaluate previous decisions."],
            ["Leverage Ratio", "A metric measuring the proportion of debt used to finance assets, indicating financial risk relative to equity."],
            ["Liquidity pool", "A collection of funds locked in a platform to facilitate trading, ensuring efficient transactions between buyers and sellers."],
            ["Liquidity Trap", "A liquidity trap occurs when low interest rates fail to stimulate borrowing or spending, limiting monetary policy effectiveness."],
            ["Long Position", "A long position is when a trader buys an asset expecting its price to rise, reflecting a bullish outlook."],
            ["Long squeeze", "A long squeeze occurs when falling prices force long holders to sell, amplifying downward pressure—especially risky for leveraged traders."],
            ["Loss ratio", "A measure used by insurers, calculated as claims paid divided by premiums earned, indicating profitability and risk efficiency."],
            ["Low-margin securities", "Financial instruments offering minimal profit per trade, often requiring high volume or leverage to generate returns."],
            ["Listed Entity", "Means the issuer of securities admitted to the official list of the exchange."],

            // // ---------- M ----------
            ["Market capitalisation", "The total value of a company’s outstanding shares, calculated by multiplying share price by total shares."],
            ["Moving average", "A technical indicator that smooths price data over time to reveal underlying trends."],
            ["Maintenance margin", "The minimum capital required in a trading account to keep a leveraged position open."],
            ["Maturity", "The date on which a debt instrument expires and its principal is repaid to investors."],
            ["Market maker", "A participant that buys and sells assets to provide liquidity and maintain smooth market operations."],
            ["Mid cap", "Companies with a market value typically between $2 billion and $10 billion."],
            ["MACD", "A momentum indicator (Moving Average Convergence Divergence) revealing price trends and potential reversals."],
            ["Market value", "The current worth of an asset or company based on market trading prices."],
            ["Margin deposit", "Initial collateral required to open a leveraged trade, amplifying both gains and losses."],
            ["MIRR", "Modified Internal Rate of Return, measuring a project’s profitability while factoring in financing and reinvestment rates."],
            ["Market maker", "Firms that provide continuous bid and ask prices to maintain market liquidity across assets."],
            ["Moving average", "A smoothing tool that reveals price trends by reducing short-term fluctuations."],
            ["Market Order", "An order to buy or sell a security immediately at the best available current price."],
            ["Metals", "Tradable commodities such as gold, silver, platinum, and copper used for investment and hedging."],

            // ---------- N ----------
            ["Not held basis order", "A broker order allowing discretion on timing and pricing when buying or selling securities."],
            ["Net income", "The total profit after all expenses and taxes are deducted from revenue."],
            ["Net asset value (NAV)", "The per-share value of a fund’s holdings after subtracting liabilities from total assets."],
            ["Negative balance protection", "A safeguard that prevents traders from losing more than their account balance, even during extreme volatility."],
            ["Net change", "How much an asset’s closing price has moved compared to the previous session."],
            ["Net income", "A company’s total profit after expenses, also known as earnings."],
            ["Nominal", "The minimum or par value at which shares can be issued by a company."],
            ["Nominee", "A person or firm appointed to manage assets or transactions on behalf of the true owner."],
            ["Non-current assets", "Long-term assets such as land, property, and intangible items not fully realised within a year."],
            ["Non-farm payrolls (NFP)", "A key U.S. economic indicator measuring employment in major sectors excluding farming and households."],

            // // ---------- O ----------
            ["Off book", "A trade conducted directly between parties outside a formal exchange, often via OTC markets."],
            ["Option spread", "A strategy involving the simultaneous buying and selling of options with different strike prices or expirations."],
            ["On exchange", "Trading executed directly on a regulated exchange’s order book."],
            ["On-balance volume (OBV)", "A technical indicator using volume to predict price movement."],
            ["Ongoing charges figure (OCF)", "Recurring charges covering fund management, administration, and operational costs."],
            ["OPEC", "The Organization of the Petroleum Exporting Countries coordinating policies to stabilize global oil markets."],
            ["Open positions", "Active trades that may gain or lose value until closed."],
            ["Order", "An instruction to buy or sell a financial instrument, including market, limit, and stop orders."],
            ["Out of the money", "An option with no intrinsic value (call: strike > price, put: strike < price)."],
            ["Overexposure", "Allocating excessive capital to one position or market, increasing risk."],
            ["Over-the-counter (OTC) derivatives", "Private trades between parties outside regulated exchanges, offering flexibility but higher risk."],
            ["OTC Leveraged Product", "An OTC derivative such as leveraged CFDs or rolling spot forex contracts."],

            // ---------- P ----------
            ["PE ratio", "The price-to-earnings ratio comparing share price to earnings per share to evaluate valuation."],
            ["Post market", "Trading activity occurring after regular exchange hours."],
            ["Put option", "A contract giving the right to sell an asset at a set price before expiration."],
            ["Purchasing Power Parity", "An economic theory stating exchange rates adjust so identical goods cost the same across countries."],
            ["Parity", "A condition where two assets, currencies, or contracts have equal value."],
            ["Profit margin", "The percentage of revenue left as profit after all expenses."],
            ["Pivot point", "A technical indicator identifying potential support and resistance levels."],
            ["Peer to Peer lending", "Direct lending between individuals or businesses through online platforms."],
            ["Penny Stocks", "Low-priced shares that are high risk but offer potential for significant gains."],
            ["Price action trading", "A strategy based on analyzing price movements rather than indicators."],
            ["Portfolio", "A collection of financial assets held to achieve investment objectives."],
            ["Participating shares", "Shares providing dividends plus a portion of additional company profits."],

            // // ---------- Q ----------
            ["Quantitative easing", "A monetary policy where central banks buy assets to stimulate lending and economic growth."],
            ["Quote currency", "The second currency in a forex pair, showing how much is needed to buy one unit of the base currency."],
            ["Quote price", "The current market price at which an asset can be bought or sold."],

            // ---------- R ----------
            ["Retail sales", "Consumer spending on goods and services, a key indicator of market health."],
            ["Rights issue", "Allows existing shareholders to buy additional shares at a discount before public offering."],
            ["RPI", "The Retail Price Index tracking inflation and changes in the cost of living."],
            ["Rollover", "Extending a contract or portfolio to a later date, often used for futures or retirement accounts."],
            ["Recession", "A prolonged decline in economic activity, typically marked by falling GDP and rising unemployment."],
            ["Recognised Body", "A Recognised Investment Exchange or Recognised Clearing House."],
            ["Risk management", "Identifying and managing potential investment downsides."],
            ["Rally definition", "A period of sustained increases in asset prices, often rapid."],
            ["Rho", "Measures the sensitivity of an option’s price to changes in interest rates."],
            ["ROCE", "Return on Capital Employed — measures profitability and capital efficiency."],
            ["REIT", "A Real Estate Investment Trust investing in income-producing properties and distributing earnings to shareholders."],
            ["ROE", "Return on Equity — profitability ratio comparing net income to shareholders’ equity."],
            ["Range", "The difference between an asset’s highest and lowest prices over a period."],
            ["RSI", "Relative Strength Index — a momentum oscillator used to identify overbought or oversold conditions."],


            ["Stop loss", "A stop loss is an order placed to automatically sell an asset when it reaches a predetermined price, helping traders limit potential losses."],
            ["Spread", "The spread is the difference between the bid and ask price of a financial instrument, reflecting trading costs and market liquidity."],
            ["Spot trade", "A spot trade is the purchase or sale of a financial instrument for immediate delivery at the current market price."],
            ["S&P 500", "The S&P 500 is a benchmark index tracking 500 of the largest publicly traded US companies, widely used to gauge market trends."],
            ["Shadow stock", "A shadow stock is a publicly listed company with low trading volumes and limited analyst coverage."],
            ["Share price", "Share price is the current market value of a single unit of a company's stock."],
            ["Shares", "Shares represent ownership in a company, giving investors rights to profits, dividends, and a claim on company assets."],
            ["Short Selling", "Means the sale of a security by a person who does not own it at the time of entering into the contract."],
            ["Swing Trading", "A strategy aiming to capture short- to medium-term price movements by holding assets for days to weeks."],
            ["Scalping trading", "A high-frequency strategy seeking profit from small price movements, often executing multiple trades within minutes."],
            ["SPAIN 35", "Spain 35, or IBEX 35, is Spain’s benchmark index tracking the 35 most liquid Spanish companies."],

            // ---------- T ----------
            ["Tick", "The smallest possible price movement of a financial instrument."],
            ["Time value", "The portion of an option’s price that reflects potential future profit based on time until expiration."],
            ["Technical analysis", "A method of predicting future market movements by analyzing historical price data and chart patterns."],
            ["Theta", "A measure of an option’s sensitivity to time decay."],
            ["Trend", "The general direction of an asset’s price movement — upward, downward, or sideways."],
            ["Tangible assets", "Physical assets such as property, machinery, or inventory that hold measurable value."],

            // ---------- U ----------
            ["Unborrowable stock", "A stock that cannot be borrowed for short selling due to limited supply."],
            ["Unit", "A bundle of assets sold as one investment, often used in unit trusts."],
            ["Unit trust", "A fund pooling investor money to manage a diversified portfolio of stocks, bonds, and other assets."],
            ["Undervaluation", "A condition where an asset's market price is believed to be below its intrinsic value."],
            ["US_2000", "A stock market index representing 2,000 small-cap US companies."],

            // ---------- V ----------
            ["Value at risk (VaR)", "A metric estimating the maximum expected loss of a portfolio over a specified period at a given confidence level."],
            ["Variable cost", "Expenses that fluctuate based on trading activity, such as transaction fees and commissions."],
            ["Vega", "A measure of an option's sensitivity to changes in implied volatility."],
            ["VIX", "The Volatility Index measuring expected 30-day market volatility of the S&P 500, known as the 'Fear Gauge'."],
            ["Volume", "The total number of shares or contracts traded over a specific period."],
            ["VWAP (volume-weighted average price)", "A benchmark showing the average price of a security weighted by volume over a trading period."],
            ["Variation Margin", "Funds required to cover daily gains or losses on an open position."],
            ["Variance inflation Factor (VIF)", "A metric identifying multicollinearity in regression models."],
            ["Volatility", "A statistical measure of how much an asset's price changes over time."],
            ["Volatility risk", "Risk of unpredictable price swings due to market volatility."],
            ["Volume risk", "Risk that large orders cannot be executed without moving market prices due to low liquidity."],

            // ---------- W ----------
            ["Weekend trading", "Trading certain financial instruments outside regular market hours during weekends."],
            ["West Texas Intermediate (WTI)", "A premium crude oil benchmark widely used in global energy pricing."],
            ["Working order", "An instruction to execute a trade when an asset reaches a specified price."],
            ["Weighted Average Price (WAP)", "Another name for VWAP — the average trading price weighted by volume."],
            ["Witching hour", "The final trading hour when options and futures expire, often causing high volatility."],

            // ---------- Y ----------
            ["Yield", "The income earned from an investment, expressed as a percentage."],
            ["Yield curve", "A graph showing interest rates across different bond maturities."],
            ["Yield on cost", "The annual income from an investment divided by its original purchase price."],

            // ---------- Z ----------
            ["Zero-Day Option", "An options contract that expires on the same day it is traded, used for ultra-short-term speculation."]

        ]);
    </script>


    <!--  Rendering + Search + Filtering -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const container = document.getElementById("glossary");

            //  Render items
            glossaryData.forEach((definition, title) => {
                const card = document.createElement("div");
                card.className = "term-card";
                card.innerHTML = `
                    <h2 class="term-title">${title}</h2>
                    <p class="term-definition">${definition}</p>
                `;
                container.appendChild(card);
            });

            //  Enable search + alphabet filtering
            const searchInput = document.getElementById('searchInput');
            const alphabetLinks = document.querySelectorAll('.alphabet-sidebar a');

            searchInput.addEventListener('input', function () {
                const searchTerm = this.value.toLowerCase();
                document.querySelectorAll('.term-card').forEach(card => {
                    const title = card.querySelector('.term-title').textContent.toLowerCase();
                    const definition = card.querySelector('.term-definition').textContent.toLowerCase();
                    card.style.display = title.includes(searchTerm) || definition.includes(searchTerm) ? 'block' : 'none';
                });
                alphabetLinks.forEach(a => a.classList.remove('active'));
            });

            alphabetLinks.forEach(link => {
                link.addEventListener('click', e => {
                    e.preventDefault();
                    const letter = link.dataset.letter.toLowerCase();

                    alphabetLinks.forEach(a => a.classList.remove('active'));
                    link.classList.add('active');

                    document.querySelectorAll('.term-card').forEach(card => {
                        const title = card.querySelector('.term-title').textContent.trim().toLowerCase();
                        card.style.display = title.startsWith(letter) ? 'block' : 'none';
                    });

                    searchInput.value = '';
                });
            });
        });
    </script>

</body>

</html>