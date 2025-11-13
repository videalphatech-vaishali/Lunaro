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
                <h2>What Is Forex Trading?</h2>
                <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 

            if ($country === 'uae') { 
            ?>
                <!-- UAE content -->

                <p>
                    The foreign exchange market (Forex or FX) is the world's largest and most liquid financial
                    marketplace, with over $7.5 trillion traded daily. Forex trading involves buying one currency while
                    simultaneously selling another, with exchange rates determined by global supply and demand, economic
                    data releases, central bank policies, and geopolitical developments.
                    Unlike stock markets, Forex operates 24 hours a day, five days a week, across major financial
                    centres in London, New York, Tokyo, and Sydney. This continuous trading cycle means you can respond
                    to breaking news and market shifts in real time, regardless of your time zone.
                    Forex attracts traders of all experience levels, from short-term scalpers capturing pip movements to
                    long-term position traders analysing macroeconomic trends. Whether you're trading major pairs like
                    EUR/USD or exploring emerging market currencies, the Forex market provides deep liquidity, tight
                    spreads, and diverse opportunities.
                </p>
                <?php 
            } else { 
            ?>
                <!-- UK content -->
                <p>
                    The foreign exchange market (Forex or FX) is the world's largest and most liquid financial
                    marketplace, with over $7.5 trillion traded daily.
                    Forex trading involves buying one currency while simultaneously selling another, with exchange rates
                    determined by global supply and demand, economic data releases, central bank policies, and
                    geopolitical developments. Unlike stock markets, Forex operates 24 hours a day, five days a week,
                    across major financial centres in London, New York, Tokyo, and Sydney. This continuous trading cycle
                    means you can respond to breaking news and market shifts in real-time, regardless of your time zone.
                    Forex attracts traders of all experience levels, from short-term scalpers capturing pip movements to
                    long-term position traders analysing macroeconomic trends. Whether you're trading major pairs like
                    EUR/USD or exploring emerging market currencies, the Forex market provides deep liquidity, tight
                    spreads, and diverse opportunities.
                </p>
                <?php } ?>
            </div>


            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/forex.png" alt="buiding">
        </div>
    </div>
</body>

</html>