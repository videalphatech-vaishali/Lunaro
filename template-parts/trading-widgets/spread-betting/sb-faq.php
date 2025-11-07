<style>
    .sb-trade-with-us-body {
        background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
        background-color: #000;
        padding: 5rem 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .sb-trade-with-us-body h1 {
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    /* ===== Shared Background ===== */
    .sb-content-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 6rem;
    }

    /* ===== FAQ Section ===== */
    .sb-faq-section {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4rem;
        flex-wrap: wrap;
        text-align: left;
    }

    .sb-faq-left img {
        width: 300px;
        max-width: 100%;
    }

    .sb-faqs-right-side {
        max-width: 600px;
    }

    .sb-faqs-right-side h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    .sb-faqs-right-side p {
        font-size: 1.1rem;
        color: #ccc;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .sb-faqs-btn-primary {
        color: #fff;
        background-color: #3C4066;
        border: none;
        font-size: 1rem;
        cursor: pointer;
        font-weight: 600;
        padding: 14px 36px;
        border-radius: 40px;
        transition: all 0.3s ease;
    }

    .sb-faqs-btn-primary:hover {
        background-color: #4e538a;
    }

    /* ===== Start Trading Section ===== */
    .sb-start-trading-section {
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .sb-start-trading-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 80px;
        /* max-width: 1200px; */
        width: 100%;
    }

    /* Left Side */
    .sb-start-trading-left {
        max-width: 700px;
    }

    .sb-start-trading-left h1 {
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .sb-start-trading-left p {
        color: #b6b8c7;
        font-size: 1.05rem;
        margin-bottom: 35px;
    }

    .button-group {
        display: column;
        /* flex-wrap: wrap; */
        gap: 18px;
    }

    .btn-primary {
        color: #000;
        background-color: #fff0d6;
        font-size: 1rem;
        font-weight: 600;
        padding: 14px 36px;
        border-radius: 40px;

        margin-bottom: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ffe8b5;
    }

    .btn-outline {
        background: transparent;
        border: 1.5px solid #fff;
        border-radius: 40px;
        padding: 14px 36px;
        font-weight: 500;
        font-size: 1rem;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-outline:hover {
        background: #fff;
        color: #000;
    }

    /* Right Side Features */
    .sb-start-trading-right {
        max-width: 1000px;
        display: flex;
        flex-direction: column;
        gap: 35px;
    }

    .feature {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .feature .icon {
        width: 40px;
        height: 40px;
        background-color: #A89469;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .feature p {
        font-size: 0.95rem;
        line-height: 1.5;
        color: #fff;
        max-width: 400px;
    }

    /* ===== Section: Feature Cards ===== */
    .feature-grid {
        display: grid;
        gap: 2.5rem;
        padding: 5rem 5rem;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        margin-bottom: 4rem;
    }

    .feature-card {
        background-color: rgba(255, 244, 228, 0.2);
        padding: 1.5rem;
        border-radius: 1.5rem;
        border: 1px solid rgb(55, 65, 81);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease, transform 0.3s ease;
    }

    .feature-card:hover {
        border-color: rgb(168, 85, 247);
        transform: translateY(-5px);
    }

    .feature-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background-color: #a89469;
        margin-bottom: 1rem;
    }

    .feature-icon img {
        width: 1.5rem;
        height: 1.5rem;
    }

    .feature-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        letter-spacing: -0.78px;
        color: #fff;
    }

    .feature-description {
        font-size: 0.875rem;
        line-height: 1.625;
        color: rgb(209, 213, 219);
    }

    /*  */
    /* Responsive */
    @media (max-width: 992px) {

        .sb-faq-section,
        .sb-start-trading-container {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 3rem;
        }

        .sb-start-trading-right {
            align-items: center;
        }

        .feature {
            justify-content: center;
            text-align: left;
        }
    }
</style>
<div class="sb-trade-with-us-body">
    <!-- why spread betting with us  Cards Section  -->
    <h1>Why spread betting with us</h1>
    <div class="feature-grid">
        <!-- Card 1 -->
        <div class="feature-card">
            <div class="feature-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg"
                    alt="Lightning Fast Icon">
            </div>
            <h3 class="feature-title">Transparent Pricing</h3>
            <p class="feature-description">
                No surprises. Our pricing is clear and straightforward, so you alsways know your cossts before you place
                a trade.
                Enjoy tight spreads with no hidden fees.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="feature-card">
            <div class="feature-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                    alt="Trusted and Regulated Icon">
            </div>
            <h3 class="feature-title">Institutional-Grade Execution</h3>
            <p class="feature-description">
                We connect you to deep liquidity from multiple providers, delivering fast fills and reliable
                pricing—even during high volatility. Built for performance when it matters most.
            </p>
        </div>
        <!-- Card 2 -->
        <div class="feature-card">
            <div class="feature-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg"
                    alt="Trusted and Regulated Icon">
            </div>
            <h3 class="feature-title">Expert Tools & Support</h3>
            <p class="feature-description">
                Access MetaTrader 5's advanced charting and analysis tools, plus market insights and dedicated client
                support from professionals who understand trading. We're here to help you make informed decisions.
            </p>
        </div>
    </div>
    <!--  -->


    <!-- Spread Betting Section -->
    <section class="sb-content-section">
        <div class="sb-faq-section">
            <div class="sb-faq-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testonomal.png"
                    alt="Coins Illustration">
            </div>

            <div class="sb-faqs-right-side">
                <h2>FAQs</h2>
                <p>
                    Get answers to the most common questions about spread betting, account setup,
                    funding, and platform features.
                </p>
              <a href="/faqs">  <button class="sb-faqs-btn-primary">Spread Betting FAQs</button></a>
            </div>
        </div>
    </section>

    <!-- Start Trading Section -->
    <section class="sb-start-trading-section">
        <div class="sb-start-trading-container">

            <div class="sb-start-trading-left">
                <h1>Start Spread Betting Today</h1>
                <p>
                    Open your Lunaro Markets account and experience transparent pricing, institutional
                    execution, and dedicated support.
                </p>
                <div class="button-group">
                    <button class="btn-primary signup">Start trading</button> 
                </div>
            </div>

            <div class="sb-start-trading-right">
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
                    </div>
                    <p><strong>Fast and Simple Onboarding.</strong> Open an account in minutes with our streamlined
                        digital process.</p>
                </div>

                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
                    </div>
                    <p><strong>Secure Funding & Withdrawals.</strong> Multiple ppayment methods, segregated client
                        accounts, and tier-one
                        banking parnerships for your peace of mind.</p>
                </div>

                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg"
                            alt="">
                    </div>
                    <p><strong>Diverse Instruments.</strong> Practice your strategies risk-free with a fully-featured
                        demo account before trading live.</p>
                </div>
            </div>
        </div>
    </section>

</div>