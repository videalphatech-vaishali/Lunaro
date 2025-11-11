<style>
    /* ======= COMPANY OVERVIEW  ======= */

    /* ========== Section Styling ========== */
    .comapny-overview-advanced {
        width: 100%;
        padding: 80px 20px;
        display: flex;
        justify-content: center;
    }

    /* Bootstrap-like responsive width container */
    .comapny-overview-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 50px;
        margin: 0 auto;
        width: 100%;
    }

    .company-bottom-tag {
        margin-top: 16px;
    }

    /* Bootstrap-style widths */
    @media (max-width: 575.98px) {
        .comapny-overview-section {
            width: 100%;
            flex-direction: column;
        }
    }

    @media (min-width: 576px) {
        .comapny-overview-section {
            width: 540px;
        }
    }

    @media (min-width: 768px) {
        .comapny-overview-section {
            width: 720px;
        }
    }

    @media (min-width: 992px) {
        .comapny-overview-section {
            width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .comapny-overview-section {
            width: 1140px;
        }
    }

    @media (min-width: 1400px) {
        .comapny-overview-section {
            width: 1320px;
        }
    }

    /* ========== Text Section ========== */
    .comapny-overview-text {
        flex: 1;
        text-align: left;
    }

    .comapny-overview-text h3 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #fff;
        position: relative;
        font-weight: 700;
    }

    .comapny-overview-text p {
        font-size: 1rem;
        color: #fff;

        font-weight: 400;
    }

    /* ========== Image Section ========== */
    .comapny-overview-section img {
        flex: 1;
        max-width: 550px;
        border-radius: 12px;
        object-fit: cover;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* ========== Responsive Adjustments ========== */

    /* Medium (≤992px): Adjust text/image balance */
    @media (max-width: 992px) {
        .comapny-overview-section {
            gap: 30px;
            flex-direction: column;
            text-align: center;
        }

        .comapny-overview-text h3::after {
            margin: 8px auto 0 auto;
        }

        .comapny-overview-section img {
            max-width: 100%;
        }

        .comapny-overview-text p {
            text-align: start;
        }
    }

    /* Small (≤576px): Compact layout */
    @media (max-width: 576px) {
        .comapny-overview-advanced {
            padding: 60px 15px;
        }

        .comapny-overview-text h3 {
            font-size: 1.6rem;
        }

        .comapny-overview-text p {
            font-size: 0.95rem;
        }

        .comapny-overview-section img {
            width: 100%;
            height: auto;
        }
    }

    /* Extra Large (≥1400px): Add breathing space */
    @media (min-width: 1400px) {
        .comapny-overview-text h3 {
            font-size: 2.2rem;
        }

        .comapny-overview-text p {
            font-size: 1.05rem;
        }

        .comapny-overview-section img {
            max-width: 600px;
        }
    }
</style>
<section class="comapny-overview-advanced">

    <div class="comapny-overview-section">
        <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
            if ($country === 'uae') { 
            ?>
        <div class="comapny-overview-text">
            <h3>Company Overview </h3>
            <p>
                Lunaro is a regulated CFD and Exchange Traded Derivatives provider dedicated to delivering transparent,
                reliable access to global financial markets. We serve both retail and professional traders who value
                clear
                pricing, advanced technology, and genuinely responsive support. Using industry-leading platforms, such
                as
                Meta Trader 5, Trading Technologies (TT), Rithmic and CQG.
                Our clients trade CFDs on shares, indices, forex, commodities, and interest rate products, all supported
                by
                low-latency execution, competitive spreads, and institutional-grade liquidity.
                For Exchange Traded Derivatives (ETDs), Lunaro provides access to the Global Markets with DMA to
                exchanges
                such as; CMEG, LME, SGX, CBOE, ICE (NY and Europe), Euronext & Eurex
                Our approach is simple: Combine robust regulatory compliance with a personalised service model. We're
                not
                just a partner, we're your trading partner.
            </p>

            <p class="company-bottom-tag">

                For Exchange-Traded Derivatives (ETDs), ...
            </p>
        </div>
        <?php 
            } else { 
            ?>
        <!-- UK content -->
        <div class="comapny-overview-text">
            <h3>Company Overview </h3>
            <p>
                Lunaro is a regulated CFD and spread betting provider dedicated to delivering transparent, reliable
                access to global financial markets. We serve both retail and professional traders who value clear
                pricing, advanced technology, and genuinely responsive support. Using the industry-leading MetaTrader 5
                platform, our clients - Leverage up to 30:1 for amplified market exposure all backed by low-latency
                execution, competitive spreads, and institutional-grade liquidity.<br>
                Our approach is simple: Combine robust regulatory compliance with a personalised service model. We're
                not just a partner, we're your trading partner.

            </p>
        </div>
        <?php } ?>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/building.png" alt="buiding">
    </div>
</section>