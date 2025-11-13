<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .what-is-shares-section {
            padding: 100px;
            text-align: center;
            background-color: #000;
        }

        .what-is-shares-section h2 {
            font-size: 40px;
            margin-bottom: 10px;
            font-family: 'Calibri', sans-serif;
            color: white;
        }

        .what-is-shares-section P {
            font-family: 'Calibri', sans-serif;
            margin-bottom: 10px;
            font-weight: 400;
            color: white;
        }

        .what-is-shares-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 80px;
        }

        .note {
            font-size: 0.7em; 
            line-height: 1;
        }

        .company-card {
            max-width: 500px;
            gap: 1rem;
            text-align: left;
        }

        .company-card a {
            color: #c6a15b;
            text-decoration: none;
            font-weight: 500;
        }

        /* button */
        .button-column {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 20px;
            align-items: start;
            justify-content: start;
        }

        .btn-outline {

            background: transparent;
            border: 1.5px solid #fff;
            border-radius: 40px;
            padding: 14px 36px;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            color: #fff;
        }

        .btn-outline:hover {
            background: #fff;
            color: #000;
        }
    </style>
</head>

<body>

    <div class="what-is-shares-section">
        <div class="what-is-shares-cards">
            <!-- Left: Company Overview Text -->
            <div class="company-card">
                <h2>Introduction to Shares Trading</h2>
                <!-- below one is for uae -->
                <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 

            if ($country === 'uae') { 
            ?>
                <!-- UAE content -->
                <p>
                    Share trading gives you ownership stakes in individual companies, allowing you to trade on their
                    performance and potentially profit from price movements. Whether you're interested in technology
                    giants like Apple, Nvidia and Microsoft, electric vehicle innovators like Tesla, or established
                    blue-chip corporations, Trading CFDs on Shares provides direct exposure to company-specific growth
                    and market dynamics.
                    Share prices respond to numerous factors: quarterly earnings reports, product launches, management
                    changes, competitive positioning, industry trends, and macroeconomic conditions. This creates
                    opportunities for traders who conduct fundamental analysis, follow corporate news, and understand
                    sector-specific drivers.
                    Unlike broad market indices, individual shares can experience significant volatility based on
                    company-specific events. A strong earnings beat might send a stock soaring, while disappointing
                    guidance could trigger sharp declines. This volatility creates both opportunity and risk for active
                    traders.
                    You can trade shares via CFDs or EDTs at Lunaro, giving you flexibility to go long or short, use
                    leverage to amplify positions, and access thousands of global companies without the administrative
                    burden of traditional stock ownership.
                </p>
                <?php 
            } else { 
            ?>
                <!-- UK content -->
                <p>
                    Share trading gives you ownership stakes in individual companies, allowing you to trade on their
                    performance and potentially profit from price movements. Whether you're interested in technology
                    giants like Apple, Nvidia and Microsoft, electric vehicle innovators like Tesla, or established
                    blue-chip corporations, Trading CFDs and spread bets on Shares provides direct exposure to
                    company-specific growth and market dynamics.<br>

                    Multiple Access Methods: Spread Betting and CFDs<br>
                    Trade shares through tax-efficient spread betting (UK) or flexible CFD* trading, both offering
                    leverage, short-selling capability, and no stamp duty on purchases.<br>
                    <span class="note">
                        *Please note that the tax treatment for CFD and SB may differ. CFDs are not exempt from CGT.
                        Spread Betting is currently free from Capital Gains Tax (CGT) and there is no stamp duty in the
                        United Kingdom. It should be noted that tax treatment depends on your individual circumstances
                        and
                        may be subject to change in the future. Tax law can be changed or may differ if you pay tax in a
                        jurisdiction other than the UK.
                    </span>
                </p>
                <?php } ?>

                <!-- <div class="button-column">
                    <button class="btn-outline">Read More in Our Resources Section</button>
                </div> -->
            </div>


            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shares-hero-pic.png" alt="shares">
        </div>
    </div>
</body>

</html>