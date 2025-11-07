<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .what-is-forex-section {
            padding: 100px;
            text-align: center;
            background-color: #000;
        }

        .what-is-forex-section h2 {
            font-size: 40px;
            margin-bottom: 10px;
            font-family: 'Calibri', sans-serif;
            color: white;
        }

        .what-is-forex-section P {
            font-family: 'Calibri', sans-serif;
            margin-bottom: 10px;
            font-weight: 400;
            color: white;
        }

        .what-is-forex-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 80px;
        }

        .company-card {
            max-width: 500px;
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="what-is-forex-section">
        <div class="what-is-forex-cards">
            <!-- Left: Company Overview Text -->
            <div class="company-card">
                <h2>Introduction to ETF Trading?</h2>
                <p>
                 Exchange-Traded Funds (ETFs) combine the diversification benefits of mutual funds with the trading flexibility of individual shares. A single ETF position can give you exposure to entire sectors (technology, healthcare, energy), geographic regions (emerging markets, Europe, Asia), or investment themes (clean energy, robotics, dividend income).
ETFs track underlying indices or baskets of assets, offering instant portfolio diversification without the need to research and purchase dozens of individual securities. You can trade ETFs throughout the day at market prices, unlike traditional mutual funds which settle only at end-of-day valuations.
This makes ETFs popular among both long-term investors seeking low-cost, passive exposure and active traders capitalising on sector rotations, thematic trends, or market-wide movements. Whether you want broad market coverage through an S&P 500 ETF or targeted exposure to artificial intelligence stocks, the ETF universe provides numerous options.
Trading ETFs via CFDs at Lunaro Markets offers additional flexibility: go long or short, use leverage to amplify positions, and access international ETFs without currency conversion complexities or foreign brokerage accounts.

                </p>
            </div>


            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/etf-hero-pic.png" alt="etf">
        </div>
    </div>
</body>
</html>