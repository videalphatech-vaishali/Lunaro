<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .about-company-overview-section {
            padding: 100px;
            text-align: center; 
            background-color: #000;
        }

        .about-company-overview-section h2 {
            font-size: 40px;
            margin-bottom: 10px;
            font-family: 'Calibri', sans-serif;
            color: white;
        }

        .about-company-overview-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 80px;
        }

        .company-card {
            max-width: 500px;
            text-align: left;
        }

        .company-card p {
            font-size: 1rem;
            line-height: 1.7;
            font-weight: 400;
            color: #fff;
            margin: 0;

        }

        /* ✅ Mobile Responsive */
        @media (max-width: 900px) {
            .about-company-overview-section {
                padding: 60px 20px;
                text-align: center;
            }

            .about-company-overview-cards {
                flex-direction: column;
                gap: 40px;
                align-items: center;
            }

            .company-card {
                text-align: justify;
                max-width: 100%;
            }

            .about-company-overview-cards img {
                width: 90%;
                max-width: 400px;
            }
        }
    </style>
</head>

<body>

    <div class="about-company-overview-section">
        <div class="about-company-overview-cards">
            <div class="company-card">
                <h2>What are indices, and how to trade them</h2>
                <p>
                    An index tracks the collective performance of a basket of shares, typically representing a
                    specific market, region, or sector, For example, the US 500 measures 500 of the largest
                    publicly traded companies in the United States, while the Germany 40 coptures the
                    locale_get_display_languagefirms on the Frankfurt
                    Stock Exchange. Whe you trade an index, your're speculating on the overall movement of
                    that market rather than bettin on individual company performance. This provides instant
                    diversification and
                    makes indices a popular choice for traders seeking broad exposure without the need to research
                    dozens of individual stocks. Indices can be traded via CFDs or spread bets, giving you the
                    flexibility to goto
                    long or short depending on your market outlook-and access to 24-hour trading on major global
                    benchmarks.
                </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/indices-hero-pic.png" alt="Indices">
        </div>
    </div>
</body>
</html>