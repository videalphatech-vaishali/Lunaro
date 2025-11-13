<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .market-hero-section {
            padding: 100px;
            text-align: center;
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat;
            background-color: #000;
        }

        .market-hero-section h2 {
            font-size: 40px;
            margin-bottom: 10px;
            font-family: 'Calibri', sans-serif;
            color: white;
        }

        .market-hero-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 80px;
        }

        .company-card {
            max-width: 500px;
            text-align: left;
        }

        @media (max-width: 768px) {

            .market-hero-section {
                padding: 60px 20px;
                /* reduce padding for small screens */
                text-align: center;
            }

            .market-hero-section h2 {
                font-size: 1.8rem;
                line-height: 1.3;
                margin-bottom: 15px;
            }

            .market-hero-cards {
                flex-direction: column;
                /* stack text and image */
                align-items: center;
                gap: 40px;
            }

            .company-card {
                max-width: 100%;
                text-align: center;
                /* center text */
            }

            .company-card p {
                font-size: 1rem;
                text-align: justify;
                line-height: 1.6;
                color: #f5f5f5;
            }

            .market-hero-cards img {
                width: 100%;
                max-width: 340px;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="market-hero-section">
        <div class="market-hero-cards">
            <!-- Left: Company Overview Text -->
            <div class="company-card">
                <h2>Explore Global Financial Markets</h2>
                <p>Access a comprehensive range of financial markets with Lunaro Markets. From major forex
                    pairs and global indices to commodities and government bonds, our platform provides the
                    tools and expertise you need to trade diverse asset classes via derivatives with confidence.

                </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/market-hero-pic.png" alt="Market pic">
        </div>
    </div>
</body>
</html>