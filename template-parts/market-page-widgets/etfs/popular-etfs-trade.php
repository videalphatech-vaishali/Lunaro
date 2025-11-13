<style>
    .major-currency-pairs-section {
        background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
        background-color: #000;
        background-size: cover;
        background-position: center;
    }

    .pi-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 60px 80px;
        font-family: "DM Sans", sans-serif;
        color: #fff4e4;
        gap: 80px;
        flex-wrap: wrap;
        /* makes it responsive */
    }

    .pi-table-section {
        padding: 5rem 5rem;
    }

    /* Title Section */
    .pi-title {
        flex: 1;
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1.2;
        color: #fff4e4;
        min-width: 250px;
    }

    .left-side P {
        font-family: 'Calibri', sans-serif;
        margin-bottom: 10px;
        font-weight: 400;
        color: white;
    }

    /* Right side (box list) */
    .right-side {
        flex: 1.5;
        display: flex;
        flex-direction: column;
        gap: 20px;
        min-width: 320px;
    }

    /* Each accordion item */
    .pop-com-item {
        background-color: black;
        border: 1px solid rgba(255, 244, 228, 0.2);
        border-radius: 12px;
        padding: 18px 20px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .pop-com-item:hover {
        border-color: rgba(255, 244, 228, 0.4);
        background-color: rgba(255, 244, 228, 0.08);
    }

    .pop-com-item.active {
        border-color: #ffd79f;
    }

    /* Question text */
    .pop-com-question {
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        position: relative;
        padding-right: 30px;
        transition: color 0.3s ease;
    }

    .pop-com-question::after {
        content: "▼";
        right: 0;
        font-size: 1rem;
        position: absolute;
        transition: transform 0.3s ease;
    }

    .pop-com-item.active .pop-com-question {
        color: #ffd79f;
    }

    .pop-com-item.active .pop-com-question::after {
        content: "▲";
    }

    /* Answer text */
    .pop-com-answer {
        opacity: 0;
        max-height: 0;
        overflow: scroll;
        font-size: 0.95rem;
        line-height: 1.5;
        color: rgba(255, 244, 228, 0.8);
        transition: max-height 0.4s ease, opacity 0.4s ease;
        margin-top: 8px;
    }

    .pop-com-item.active .pop-com-answer {
        max-height: 300px;
        opacity: 1;
    }

    ::-webkit-scrollbar {
        display: none;
    }



    /* Responsive layout */




    @media (max-width: 575.98px) {
        .pi-container {
            width: 100%;
        }

        .pi-title {
            text-align: center;
        }
    }

    @media (min-width: 576px) {
        .pi-container {
            width: 540px;
        }

        .pi-title {
            text-align: center;
        }
    }

    @media (min-width: 768px) {
        .pi-container {
            width: 720px;
        }

        .pi-title {
            text-align: center;
        }
    }

    @media (min-width: 992px) {
        .pi-container {
            width: 960px;
        }

        .pi-title {
            text-align: center;
        }
    }

    @media (min-width: 1200px) {
        .pi-container {
            width: 1140px;
        }

        .pi-title {
            text-align: center;
        }
    }

    @media (min-width: 1400px) {
        .pi-container {
            width: 1320px;
			margin:auto
				
        }

        .pi-title {
            text-align: center;
        }
    }
</style>


<div class="major-currency-pairs-section">
    <div class="pi-expandabe-box-section">



        <div class="pi-container">
            <div class="left-side">
                <h2 class="pi-title">Popular ETFs to Trade</h2>
                <p>
                    Access leading ETFs covering major markets, sectors, and investment themes
                </p>
            </div>

            <div class="right-side">
            <?php 
              // get the country from session or default to 'uk'
              $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
              if ($country === 'uae') { 
            ?>
                <div class="pop-com-item">
                    <div class="pop-com-question">Broad Market ETFs</div>
                    <div class="pop-com-answer">
                        <span><b>S&P 500 ETFs (e.g., SPY, VOO, IVV)</b></span>
                        <p>Track the 500 largest US companies, providing diversified exposure to American large-cap
                            equities across all sectors.</p>
                        <span><b>Nasdaq 100 ETFs (e.g., QQQ)</b></span>
                        <p> Concentrated exposure to US technology and growth-oriented companies, including Apple,
                            Microsoft, Amazon, and other innovation leaders.</p>
                        <span><b>FTSE 100 ETFs</b></span>
                        <p>
                            Capture performance of the 100 largest UK-listed companies, offering exposure to British
                            blue-chips and international earnings.
                        </p>

                    </div>
                </div>
             <?php 
               } else { 
             ?>
                  <div class="pop-com-item">
                    <div class="pop-com-question">Broad Market ETFs</div>
                    <div class="pop-com-answer">
                        <span><b>US SPX 500 ETFs (e.g., SPY, VOO, IVV)</b></span>
                        <p>Track the 500 largest US companies, providing diversified exposure to American large-cap equities across all sectors.</p>
                        <span><b>US NDAQ 100 ETFs (e.g., QQQ)</b></span>
                        <p>Concentrated exposure to US technology and growth-oriented companies, including Apple, Microsoft, Amazon, and other innovation leaders.</p>
                        <span><b>UK 100 ETFs</b></span>
                        <p>
                            Capture performance of the 100 largest UK-listed companies, offering exposure to British blue-chips and international earnings.
                        </p>

                    </div>
                </div>
            <?php 
               } 
             ?>


                <div class="pop-com-item">
                    <div class="pop-com-question">Sector-Specific ETFs</div>
                    <div class="pop-com-answer">
                        <span><b>Sector ETFs</b></span>
                        <p>Focused exposure to software, semiconductors, internet services, and hardware companies
                            driving
                            digital transformation.</p>
                        <span><b> Healthcare ETFs</b></span>
                        <p>Access pharmaceutical companies, biotechnology firms, medical device manufacturers, and
                            healthcare services providers.</p>
                        <span><b> Financial Sector ETFs</b></span>
                        <p>
                            Exposure to banks, insurance companies, asset managers, and payment processors responding to
                            interest rate and regulatory environments.
                        </p>
                        <span><b>
                                Energy ETFs
                            </b></span>
                        <p>
                            Track oil and gas producers, renewable energy companies, and energy infrastructure firms
                            sensitive to commodity prices.
                        </p>
                    </div>
                </div>
                <div class="pop-com-item">
                    <div class="pop-com-question">Thematic and Regional ETFs</div>
                    <div class="pop-com-answer">
                        <span><b>Clean Energy ETFs</b></span>
                        <p>Invest in solar, wind, battery technology, and electric vehicle companies benefiting from
                            energy transition trends.</p>
                        <span><b>Emerging Markets ETFs</b></span>
                        <p>Diversified exposure to developing economies in Asia, Latin America, and other high-growth
                            regions.</p>

                        <span><b>Dividend ETFs</b></span>
                        <p>Focus on income-generating stocks with consistent dividend payment histories.</p>
                        <span><b>Gold & Precious Metals ETFs</b></span>
                        <p>
                            Track physical gold prices or mining companies, offering safe-haven exposure without storage
                            requirements.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    const items = document.querySelectorAll(".pop-com-item");
    items.forEach((item) => {
        item.addEventListener("click", () => {
            item.classList.toggle("active");
        });
    });
</script>