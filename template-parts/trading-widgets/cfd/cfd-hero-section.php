<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CFD Trading & Pricing Advantages</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --font-family: 'DM Sans', sans-serif;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #000;
            color: #fff;
        }

        .cfd-section {
            background: #0B0D16;
        }

        .advantages-section {
            width: 100%;
            background-color: #0B0D16;
        }

        /* ---------- CFD HERO SECTION ---------- */
        .cfd-hero-section {
            display: flex;
            justify-content: space-between;
            gap: 80px;
            padding: 5rem 0rem;
            flex-direction: row;
        }

        .cfd-hero-company-card {
            max-width: 700px;
            margin-top: 100px;
            /* replaced align-items:center with margin-top */
        }

        .cfd-hero-company-card h2 {
            font-size: 40px;
            font-weight: 800;
            color: #fff4e4;
            margin-bottom: 10px;
            font-family: var(--font-family);
        }

        .cfd-hero-company-card p {
            font-size: 16px;
            line-height: 1.7;
            color: rgba(255, 244, 228, 0.9);
            font-family: var(--font-family);
        }

        .center-square img {
            width: 550px;
            height: 550px;
            border-radius: 20px;
            object-fit: cover;
            display: block;
        }

        /* ---------- PRICING ADVANTAGES SECTION ---------- */
        .our-pricing-advantages-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 150px;
            padding: 5rem 0rem;
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/tranparent-bg.png') center/cover no-repeat;
            background-color: #0b0d16;
            flex-direction: row;
        }

        .left-side {
            flex: 1;
            max-width: 800px;
        }

        .left-side h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff4e4;
            font-family: var(--font-family);
            margin-bottom: 20px;
        }

        .left-side p {
            font-size: 1rem;
            line-height: 1.7;
            color: rgba(255, 244, 228, 0.9);
            font-family: var(--font-family);
        }

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
            color: #fff4e4;
            margin-bottom: 10px;
            font-family: var(--font-family);
        }

        .advantage-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .advantage-item img {
            width: 22px;
            height: 22px;
            margin-top: 5px;
        }

        .advantage-item span {
            font-weight: 600;
            color: #fff4e4;
            font-family: var(--font-family);
        }

        .advantage-item p {
            font-size: 1rem;
            line-height: 1.6;
            color: rgba(255, 244, 228, 0.9);
            margin-top: 4px;
            font-family: var(--font-family);
        }

        .advantage-para {
            text-align: start;
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

        /* -------------------------
       Responsive Media Queries
       (Bootstrap Container Widths)
    ------------------------- */

        /* Extra small devices (<576px) */
        @media (max-width: 575.98px) {

            .cfd-hero-section,
            .our-pricing-advantages-section {
                flex-direction: column;
                text-align: center;
                gap: 40px;
                padding: 2rem 1rem;
            }

            .cfd-hero-company-card {
                margin-top: 20px;
            }

            .center-square img {
                width: 100%;
                height: auto;
            }

            .cfd-hero-company-card h2 {
                font-size: 24px;
            }

            .cfd-hero-company-card p {
                font-size: 14px;
            }

            .left-side h2 {
                font-size: 22px;
            }

            .left-side p,
            .right-side p {
                font-size: 14px;
            }
        }

        /* Small devices (≥576px and <768px) */
        @media (min-width: 576px) and (max-width: 767.98px) {

            .cfd-hero-section,
            .our-pricing-advantages-section {
                flex-direction: column;
                padding: 3rem 2rem;
                gap: 50px;
            }

            .center-square img {
                width: 100%;
                height: auto;
            }

            .cfd-hero-company-card {
                margin-top: 30px;
            }

            .cfd-hero-company-card h2 {
                font-size: 28px;
            }

            .cfd-hero-company-card p {
                font-size: 15px;
            }
        }

        /* Medium devices (≥768px and <992px) */
        @media (min-width: 768px) and (max-width: 991.98px) {

            .cfd-hero-section,
            .our-pricing-advantages-section {
                flex-direction: column;
                align-items: center;
                padding: 4rem 3rem;
                gap: 60px;
            }

            .center-square img {
                width: 480px;
                height: 480px;
            }

            .cfd-hero-company-card {
                margin-top: 40px;
            }

            .left-side h2 {
                font-size: 2rem;
            }
        }

        /* Large devices (≥992px and <1200px) */
        @media (min-width: 992px) and (max-width: 1199.98px) {

            .cfd-hero-section,
            .our-pricing-advantages-section {
                max-width: 960px;
                margin: auto;
            }

            .center-square img {
                width: 500px;
                height: 500px;
            }
        }

        /* X-Large devices (≥1200px and <1400px) */
        @media (min-width: 1200px) and (max-width: 1399.98px) {

            .cfd-hero-section,
            .our-pricing-advantages-section {
                max-width: 1140px;
                margin: auto;
            }
        }

        /* XX-Large devices (≥1400px) */
        @media (min-width: 1400px) {

            .cfd-hero-section,
            .our-pricing-advantages-section {
                max-width: 1380px;
                margin: auto;
            }

            .center-square img {
                width: 550px;
                height: 550px;
            }
        }
    </style>
</head>

<body>

    <section class="cfd-section">
        <div class="cfd-hero-section">
            <div class="cfd-hero-company-card">
                <h2>CFD Trading</h2>
                <p>
                    Contracts for Difference (CFDs) enable you to speculate on price movements across global financial
                    markets
                    without owning the underlying asset. Trade rising or falling markets with flexibility, precision,
                    and capital
                    efficiency across shares, indices, forex, and commodities.
                </p>
            </div>
            <div class="center-square">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/webps/hero-pic-1.webp"
                    alt="Ready to start trading">
            </div>
        </div>
    </section>

    <section class="advantages-section">

        <?php
            
                $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
                if ($country === 'uae') { 
                    ?>
        <!-- UAE -->
        <div class="our-pricing-advantages-section">
            <div class="left-side">
                <h2>Introduction to CFD Trading</h2>
                <p>
                    CFD trading is simple: you agree to exchange the difference in an asset's price between open and
                    close positions.
                    You never own the asset itself — just trade its price movement. This allows access to global markets
                    with lower
                    capital, leverage, and the ability to profit in both rising and falling markets.
                </p>
            </div>

            <div class="right-side">
                <h2>Key Features / Benefits</h2>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <span>Access Global Markets Without Ownership</span>
                        <p>Trade thousands of instruments across asset classes without needing to physically own or
                            store them.</p>
                    </div>
                </div>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <span>Leverage Up to 1:30 for Amplified Exposure</span>
                        <p>Control larger positions with less capital, maximizing capital efficiency while managing risk
                            responsibly.</p>
                    </div>
                </div>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <span>Trade Both Rising and Falling Markets</span>
                        <p>Go long when expecting prices to rise or short when expecting a decline — trade any market
                            condition.</p>
                    </div>
                </div>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <span>Tight Spreads from 0.3 Pips</span>
                        <p>Benefit from competitive spreads starting from 0.3 pips to keep your trading costs
                            transparent and low.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }else{
                ?>
        <!--UK-->
        <div class="our-pricing-advantages-section">
            <div class="left-side">
                <h2>Introduction to CFD Trading</h2>
                <p>
                    CFD trading allows you to speculate on price movements in global markets without owning the
                    underlying asset.
                    When you trade a CFD, you agree to exchange the difference in an asset’s price between the opening
                    and closing of your position.
                    CFDs are complex instruments and may not be suitable for all investors.
                </p>
            </div>

            <div class="right-side">
                <h2>Key Risks:</h2>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <p>Market volatility can cause rapid price movements, and you may lose part or all of your
                            invested capital if markets move against your position.</p>
                    </div>
                </div>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <p>Leverage amplifies both profits and losses. Even small market movements can result in
                            significant losses, and you may lose more than your initial investment.</p>
                    </div>
                </div>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <p>Trading in both directions increases complexity and exposure to market risk. Sudden reversals
                            or volatility can result in unexpected losses.</p>
                    </div>
                </div>

                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="">
                    <div class="advantage-para">
                        <p>While tight spreads reduce entry costs, trading fees and financing charges can still affect
                            your overall returns, especially on leveraged positions</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
            ?>

    </section>

</body>

</html>