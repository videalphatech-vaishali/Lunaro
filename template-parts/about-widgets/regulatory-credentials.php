<style>
    /* ===== REGULATORY SECTION STYLES ===== */
    .regulatory-advanced {
        width: 100%;
        padding: 80px 0;
        color: #fff;
    }

    .regulatory-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        flex-wrap: wrap;
    }

    .regulatory-img {
        flex: 1 1 45%;
        display: flex;
        justify-content: center;
    }

    .regulatory-img img {
        width: 100%;
        max-width: 550px;
        border-radius: 10px;
    }

    .regulatory-text {
        flex: 1 1 50%;
    }

    .regulatory-text h3 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .regulatory-text h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-top: 25px;
        margin-bottom: 10px;
    }

    .regulatory-text p {
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.85);
        max-width: 600px;
    }

    /* ====== RESPONSIVE DESIGN ====== */

    /* Tablet screens (≤992px) */
    @media (max-width: 992px) {
        .regulatory-section {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .regulatory-text,
        .regulatory-img {
            flex: 1 1 100%;
            width: 100%;
        }

        .regulatory-text h3 {
            font-size: 1.8rem;
        }

        .regulatory-text p {
            max-width: 100%;
            margin: 0 auto;
        }

        .advantage-item {
            justify-content: center;
        }
    }

    /* Mobile (≤576px) */
    @media (max-width: 576px) {
        .regulatory-advanced {
            padding: 50px 0;
        }

        .regulatory-text h3 {
            font-size: 1.6rem;
        }

        .regulatory-text h4 {
            font-size: 1.1rem;
        }

        .regulatory-text p {
            font-size: 0.95rem;
        }

        .advantage-item img {
            width: 18px;
            height: 18px;
        }
    }
</style>

<body>
    <section class="regulatory-advanced container-custom">
        <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
            if ($country === 'uae') { 
            ?>
        <div class="regulatory-section">
            <div class="regulatory-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/regulatory.png"
                    alt="regulatory">
            </div>
            <div class="regulatory-text">
                <h3>Regulatory Credentials & Recognition
                </h3>
                <br>
                <h4 style="font-weight: 700;">
                    FSRA Regulated
                </h4>
                <p>
                    Lunaro is authorised and regulated by the Financial Services Regulatory Authority in the Abu Dhabi
                    Global Market: FSP Number 200034.
                </p>
                <h4 style="font-weight: 700;">
                    Client Fund Protection
                </h4>
                <p>
                    All retail client funds and ETD clients funds are held in segregated (non title transfer) accounts,
                    keeping your capital separate from company operational funds in accordance with regulatory
                    requirements.
                </p>
                <h4 style="font-weight: 700;">
                    Industry Recognition
                </h4>
                <br>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="check Icon">
                    <div class="column-right-text">
                        <span>Trusted by retail and professional traders across global markets</span>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            } else { 
            ?>
        <!-- UK content -->

        <div class="regulatory-section">
            <div class="regulatory-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/regulatory-uk.png"
                    alt="regulatory">
            </div>
            <div class="regulatory-text">
                <h3>Regulatory Credentials & Recognition
                </h3>
                <br>
                <h4 style="font-weight: 700;">
                    FSRA Regulated
                </h4>
                <p>
                    Lunaro is authorised and regulated by the Financial Conduct Authority (FCA), ensuring compliance
                    with the UK's stringent standards for client fund protection, operational integrity, and market
                    conduct.
                    FCA register number:184333
                </p>
                <h4 style="font-weight: 700;">
                    Client Fund Protection
                </h4>
                <p>
                    All retail client funds are held in segregated accounts with tier-one banks, keeping your capital
                    separate from company operational funds in accordance with regulatory requirements.
                    Industry Recognition
                    Trusted by retail and professional traders across global markets
                </p>
                <h4 style="font-weight: 700;">
                    Industry Recognition
                </h4>
                <br>
                <div class="advantage-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png"
                        alt="check Icon">
                    <div class="column-right-text">
                        <span>Trusted by retail and professional traders across global markets</span>
                    </div>
                </div>

            </div>
        </div>
        <?php } ?>
    </section>
</body>