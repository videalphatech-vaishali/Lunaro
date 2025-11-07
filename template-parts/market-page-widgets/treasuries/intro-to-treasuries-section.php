<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .what-is-treasuries-section {
            padding: 100px;
            text-align: center;
            background-color: #000;
        }

        .what-is-treasuries-section h2 {
            font-size: 40px;
            margin-bottom: 10px;
            font-family: 'Calibri', sans-serif;
            color: white;
        }

        .what-is-treasuries-section P {
            font-family: 'Calibri', sans-serif;
            margin-bottom: 10px;
            font-weight: 400;
            color: white;
        }

        .what-is-treasuries-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 80px;
        }

        .company-card {
            max-width: 500px;
            text-align: left;
        }

        /*  Mobile View: Treasury Section Responsive Styles */
        @media (max-width: 768px) {
            .what-is-treasuries-section {
                padding: 40px 20px !important;
                text-align: center;
            }

            .what-is-treasuries-cards {
                flex-direction: column;
                align-items: center;
                gap: 40px !important;
            }

            .company-card {
                max-width: 100% !important;
                text-align: justify !important;
            }

            .what-is-treasuries-section h2 {
                font-size: 35px !important;
                line-height: 1.3;
                text-align: center;
                margin: 25px !important;
            }

            .what-is-treasuries-section p {
                font-size: 15px !important;
                line-height: 1.7 !important;
                color: #e0e0e0 !important;
                text-align: justify !important;
            }

            .what-is-treasuries-cards img {
                width: 100% !important;
                max-width: 350px;
                height: auto;
                border-radius: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="what-is-treasuries-section">
        <div class="what-is-treasuries-cards">
            <!-- Left: Company Overview Text -->
            <div class="company-card">
                <h2>Introduction to Treasury Trading</h2>

                <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 

            if ($country === 'uae') { 
            ?>
                <!-- UAE content -->
                <p>
                    Government treasuries and bonds represent debt obligations issued by sovereign nations to finance
                    public spending. These fixed income instruments provide traders with exposure to interest rate
                    movements, macroeconomic trends, and safe-haven demand during periods of market uncertainty.
                    Treasury prices have an inverse relationship with interest rates: when central banks raise rates,
                    existing bond prices typically fall (as newer bonds offer higher yields), and when rates drop, bond
                    prices generally rise. This fundamental dynamic creates trading opportunities for those who
                    anticipate central bank policy shifts, inflation trends, or economic growth patterns.
                    Traders use treasuries for multiple purposes: portfolio diversification away from equities, hedging
                    against stock market volatility, expressing views on interest rate direction, or capitalising on
                    safe-haven flows during geopolitical tensions. Government bonds are generally considered lower-risk
                    than corporate debt or equities, though they still carry interest rate risk and inflation risk.
                    Trading treasuries via CFDs at Lunaro Markets gives you flexible access to government bond markets
                    without the complexity of direct bond ownership, settlement procedures, or large capital
                    requirements typical of institutional fixed income trading.

                </p>
                <?php 
            } else { 
            ?>
                <!-- UK content -->
                <p>
                    Government treasuries and bonds represent debt obligations issued by sovereign nations to finance
                    public spending. These fixed income instruments provide traders with exposure to interest rate
                    movements, macroeconomic trends, often used during periods of market uncertainty.
                    Trading treasuries via CFDs and spread bets at Lunaro gives you flexible access to government bond
                    markets without the complexity of direct bond ownership, settlement procedures, or large capital
                    requirements typical of institutional fixed income trading.
                </p>
                <?php } ?>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/treasuries-hero-pic.png"
                alt="treasuries">
        </div>
    </div>
</body>
</html>