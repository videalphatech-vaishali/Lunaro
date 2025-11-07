<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .itc-section {
            padding: 100px;
            text-align: center;
            background-color: #000;
        }

        .itc-section h2 {
            font-size: 40px;
            margin-bottom: 10px;
            font-family: 'Calibri', sans-serif;
            color: white;
        }

        .itc-section P {
            font-family: 'Calibri', sans-serif;
            margin-bottom: 10px;
            font-weight: 400;
            color: white;
        }

        .itc-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 80px;
        }

        .company-card {
            max-width: 500px;
            text-align: left;
        }

        .center-square {
            width: 550px;
            height: 550px;
            position: relative;
            border-radius: 30px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.4);
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png') center/cover no-repeat;
        }

        /* Top-left floating rectangle */
        .top-rectangle {
            top: -40px;
            left: 0px;
            color: #000;
            width: 160px;
            height: 100px;
            display: flex;
            padding: 20px;
            border-radius: 20px;
            position: absolute;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            font-family: 'Calibri', sans-serif;
            border: 20px;
            background: white;
            box-shadow:
                13px 0 0 0 #000,
                0 13px 0 0 #000,
                13px 13px 0 0 #000,
                -13px 13px 0 0 #000;
        }

        .top-rectangle h3 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
        }

        .top-rectangle p {
            margin: 5px 0 0;
            color: #555;
            font-size: 16px;
        }

        /* Bottom-right floating rectangle */
        .bottom-rectangle {
            position: absolute;
            bottom: -1px;
            right: 0px;
            background: white;
            color: #000;
            width: 240px;
            height: 150px;
            border-radius: 20px;
            padding: 15px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: 'Calibri', sans-serif;
            border: 20px;
            box-shadow:
                -13px 0 0 0 #000,
                0 -13px 0 0 #000,
                -13px -13px 0 0 #000,
                13px -13px 0 0 #000;
        }

        .bottom-rectangle h4 {
            font-size: 20px;
            margin: 0 0 6px;
        }

        .bottom-rectangle .progress {
            margin-top: 8px;
            height: 10px;
            width: 100%;
            background: #E0E0E0;
            border-radius: 10px;
            overflow: hidden;
        }

        .bottom-rectangle .progress span {
            display: block;
            height: 100%;
            width: 0;
            background: #000;
            border-radius: 10px;
            transition: width 2s ease;
        }

        .bottom-rectangle.active .progress span {
            width: 80%;
        }

        .cta-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .cta-label {
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }

        .cta-badge {
            background: #2979FF;
            color: #fff;
            border-radius: 30px;
            padding: 4px 12px;
            font-size: 14px;
            font-weight: bold;
            line-height: 1;
        }

        .title-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        .icon-circle {
            width: 32px;
            height: 32px;
            background: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-circle i {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="itc-section">
        <div class="itc-cards">
            <div class="company-card">
                <h2>Introduction to Trading Commodities</h2>

                <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 

            if ($country === 'uae') { 
            ?>
                <!-- UAE content -->
                <p>
                    Commodities represent the foundational building blocks of the global economy, precious metals like
                    gold and silver, energy resources such as crude oil and natural gas, and agricultural products
                    including wheat, coffee, and corn.
                    Unlike stocks or currencies, commodity prices are driven by tangible factors: weather patterns
                    affecting crop yields, OPEC production decisions influencing oil supply, mining output impacting
                    metal availability, and geopolitical tensions disrupting trade routes. These real-world dynamics
                    create unique trading opportunities for those who understand supply and demand fundamentals.

                    Many traders turn to gold and silver as safe-haven assets during economic uncertainty, market
                    volatility, or currency devaluation. Others focus on energy markets to capitalise on seasonal demand
                    shifts or geopolitical developments. Agricultural commodities offer exposure to weather-dependent
                    price swings and global food demand trends.
                    Trading commodities via CFDs or spread bets gives you access to these markets without the
                    complexities of physical ownership, storage, or delivery, allowing you to speculate on price
                    movements with leverage and flexibility across global exchanges.
                </p>
                <?php 
            } else { 
            ?>
                <!-- UK content -->
                <p>
                    Commodities represent the foundational building blocks of the global economy, precious metals like
                    gold and silver, energy resources such as crude oil and natural gas,
                    and agricultural products including wheat, coffee, and corn.
                    Unlike stocks or currencies, commodity prices are driven by tangible factors: weather patterns
                    affecting crop yields, OPEC production decisions influencing oil supply, mining output
                    impacting metal availability, and geopolitical tensions disrupting trade routes. These real-world
                    dynamics create unique trading opportunities for those who understand supply and demand
                    fundamentals.
                    Many traders use gold and silver to gain exposure to precious metals during economic uncertainty,
                    market volatility, or currency devaluation.<br>
                    Storage and Transportation Costs Affect Pricing<br>
                    While CFD and spread bets traders don't physically hold commodities, underlying storage, insurance,
                    and logistics costs are reflected in futures prices and can impact your positions.
                </p>
                <?php } ?>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/commodity-hero.png" alt="buiding">
        </div>
    </div>
</body>

</html>