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
    ::-webkit-scrollbar {
        display: none;
    }
	
		.pop-com-answer h3 {
        color: rgba(255, 244, 228, 0.8);
        line-height: 1.5;
		font-weight:bold;	
        transition: max-height 0.4s ease, opacity 0.4s ease;
    }

    .pop-com-answer h4 {
        color: rgba(255, 244, 228, 0.8);
        line-height: 1.5;
		font-weight:bold;
        transition: max-height 0.4s ease, opacity 0.4s ease;
    }

    .pop-com-item.active .pop-com-answer {
        max-height: 300px;
        opacity: 1;
    }




    /* Responsive layout */
    @media (max-width: 900px) {
        .pi-container {
            flex-direction: column;
            gap: 40px;
            padding: 40px 20px;
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
                <h2 class="pi-title">Popular Shares to Trade</h2>
                <p>
                    Access leading global companies across multiple sectors and exchanges.
                    <br>
                    Note: Shares are offered via CFDs only.
                    You’re trading on price movements, not owning the underlying
                    stocks.

                </p>
            </div>

            <div class="right-side">
                <div class="pop-com-item">
                    <div class="pop-com-question">Technology & Innovation</div>
                    <div class="pop-com-answer">
                        
                            <h3>NVIDIA (VNDA)</h3>
                            <p> Global leader in graphics processing units (GPUs) and AI computing technology. Core
                                supplier
                                for
                                data centres, gaming, and machine learning infrastructure, driving growth through its
                                dominance
                                in AI hardware and software ecosystems.</p>
                        
                       
                            <h4>Broadcom Inc. (AVGO)</h4>
                            <p>Diversified semiconductor and infrastructure software company with strong positions in
                                networking, wireless, and broadband solutions. Known for its consistent profitability,
                                scale, and exposure to global technology supply chains.</p>
                            <h4>Oracle (ORCL)</h4>
                      
                        
                            <p>Enterprise software and cloud solutions provider specialising in databases, business
                                applications, and infrastructure-as-a-service (IaaS). Positioned for growth through
                                cloud
                                migration and AI-driven analytics offerings.</p>
                            <h4>Palantir Technologies (PLTR)
                            </h4>
                        
                        
                            <p>Data analytics and artificial intelligence software company serving government and
                                commercial
                                clients. Focused on advanced data integration and decision intelligence platforms with
                                strong exposure to AI adoption trends.
                            </p>
                        
                        
                            <h4>ASML Holding (ASML)
                            </h4>
                            <p>Dutch semiconductor equipment manufacturer and the sole producer of extreme ultraviolet
                                (EUV)
                                lithography machines essential for advanced chip production. A critical supplier to
                                global
                                chipmakers, reflecting its strategic importance in the semiconductor value chain.

                            </p>
                        
                    </div>
                </div>

                <div class="pop-com-item">
                    <div class="pop-com-question">Other Popular Sectors</div>
                    <div class="pop-com-answer">
                        <b>Financials:</b>JPMorgan Chase, Goldman Sachs, HSBC
                        <br>
                        <b>Energy:</b> ExxonMobil, BP, Shell
                        <br>
                        <b>Consumer:</b> Nike, Coca-Cola, McDonald's
                        <br>
                        <b>Healthcare:</b> Johnson & Johnson, Pfizer, AstraZeneca
                        <br>
                        <b>Industrials:</b> Boeing, Caterpillar, Siemens
                        <br>
                        <b>Trade thousands of UK, US, European, and Asia-Pacific shares from a single account.</b>
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