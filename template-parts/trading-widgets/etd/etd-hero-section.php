<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .etd-hero-section {
            padding: 5rem 5rem;
            text-align: center;
            /* background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat; */
            background-color: #000;
        }

        .etd-hero-section h2 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 10px;
            font-family: 'Calibri', sans-serif;
            color: white;
        }

        .etd-hero-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 80px;
        }

        .etd-hero-company-card {
            max-width: 700px;
            text-align: left;
        }

        .etd-hero-company-card p {
            font-size: 16px;
            line-height: 1.7;
            font-weight: 400;
            color: white;
            margin: 0;
        }

        .center-square {
            width: 550px;
            height: 550px;
            position: relative;
            border-radius: 30px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.4);
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/etd-trading-hero.png') center/cover no-repeat;
        }


        .cta-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
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

        /*  */
        .our-pricing-advantages-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 150px;
            padding: 5rem 5rem;
            flex-wrap: wrap;

            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/tranparent-bg.png') center/cover no-repeat;
            background-color: #0b0d16;

        }

        /* Left side */
        .left-side {
            flex: 1;
            max-width: 800px;
        }

        .left-side h2 {
            font-size: 2.5rem;
            font-weight: 700;
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

        /* Right side */
        .right-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 18px;
            max-width: 600px;
        }

        .right-side h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #fff4e4;

        }

        .right-side p {
            font-size: 1rem;
            line-height: 1.7;
            font-weight: 400;
            color: rgba(255, 244, 228, 0.9);
            margin: 0;
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

        .btn-primary {
            color: #000;
            border: none;
            font-size: 1rem;
            width: 300px;
            cursor: pointer;
            font-weight: 600;
            padding: 14px 36px;
            margin-top: 10px;
            border-radius: 40px;
            background-color: #fff0d6;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ffe8b5;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .our-pricing-advantages-section {
                flex-direction: column;
                gap: 40px;
                padding: 50px 6%;
            }

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
</head>

<body>

    <div class="etd-hero-section">
        <div class="etd-hero-cards">

            <!-- Left: Company Overview Text -->
            <div class="etd-hero-company-card">
                <h2>Exchange-Traded Derivatives Trading</h2>
                <p>
                    Exchange-Traded Derivatives (ETDs) offer transparent, regulated access to global futures and options
                    markets.<br>
                    Trade standardised contracts on recognised exchanges to manage risk, gain exposure, or diversify
                    across asset classes all within a regulated, exchange-cleared environment.
                </p>
            </div>
            <!-- Right: Info Card -->
            <div class="center-square"></div>
        </div>
    </div>

    <div class="our-pricing-advantages-section">
        <div class="left-side">
            <h2>Introduction to ETD Trading</h2>
            <p>
                Exchange-Traded Derivatives (ETDs) are standardised futures and options contracts traded on regulated
                exchanges such as CME Group, Eurex, or ICE.
                Each contract follows fixed specifications, contract size, expiry, and underlying asset, and is
                centrally cleared through a Clearing House, reducing counterparty risk and ensuring transparent
                settlement.
                ETDs are widely used by institutions and professional investors to hedge exposure, speculate on market
                direction, or manage portfolio risk across equities, interest rates, commodities, and indices.
                Through Lunaro, clients gain access to leading global exchanges via CME Direct, Eurex T7, and other
                recognised trading systems, supported by top grade infrastructure and expert guidance.
            </p>

        </div>

        <div class="right-side">
            <h2>Key features / benefits</h2>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>Regulated and Transparent Markets</span>
                    <p>All ETD contracts are traded on licensed global exchanges under international regulatory
                        standards, ensuring transparency, fair pricing, and compliance at every level.</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>Efficient Risk Management</span>
                    <p>Use ETDs to hedge portfolio exposure, manage market volatility, or diversify across asset classes
                        with confidence in a regulated, exchange-cleared framework.</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>Central Clearing for Reduced Counterparty Risk</span>
                    <p>Each transaction is processed through a Central Counterparty (CCP), providing enhanced settlement
                        integrity and protection against counterparty default.</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt=""
                    class="w-3 h-3">
                <div class="column-right-text">
                    <span>Global Market Access</span>
                    <p>Access a wide range of global markets, including commodities, indices, equities, and interest
                        rate derivatives, through a single, secure connection.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>