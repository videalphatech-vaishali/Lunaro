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
    .mcp-item {
        background-color: black;
        border: 1px solid rgba(255, 244, 228, 0.2);
        border-radius: 12px;
        padding: 18px 20px;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .mcp-item:hover {
        border-color: rgba(255, 244, 228, 0.4);
        background-color: rgba(255, 244, 228, 0.08);
    }

    .mcp-item.active {
        border-color: #ffd79f;
    }

    /* Question text */
    .mcp-question {
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        position: relative;
        padding-right: 30px;
        transition: color 0.3s ease;
    }

    .mcp-question::after {
        content: "▼";
        right: 0;
        font-size: 1rem;
        position: absolute;
        transition: transform 0.3s ease;
    }

    .mcp-item.active .mcp-question {
        color: #ffd79f;
    }

    .mcp-item.active .mcp-question::after {
        content: "▲";
    }

    /* Answer text */
    .mcp-answer {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        font-size: 0.95rem;
        line-height: 1.5;
        color: rgba(255, 244, 228, 0.8);
        transition: max-height 0.4s ease, opacity 0.4s ease;
        margin-top: 8px;
    }

    .mcp-item.active .mcp-answer {
        max-height: 300px;
        opacity: 1;
    }



    .table-container {
        background: #141824;
        border-radius: 10px;
        padding: 10px 20px 20px;
        overflow-x: auto;
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
                <h2 class="pi-title">Major Currency Pairs</h2>
                <p>Trade the most liquid and actively traded currency pairs in the world.
                    These "majors" account for the vast majority of daily Forex volume and offer the tightest spreads:
                </p>
            </div>

            <div class="right-side">
                <div class="mcp-item">
                    <div class="mcp-question">EUR/USD</div>
                    <div class="mcp-answer">
                        We offer branding, digital marketing, performance campaigns, and content
                        strategy tailored to your business goals.
                    </div>
                </div>

                <div class="mcp-item">
                    <div class="mcp-question">GBP/USD</div>
                    <div class="mcp-answer">
                        We offer branding, digital marketing, performance campaigns, and content
                        strategy tailored to your business goals.
                    </div>
                </div>

                <div class="mcp-item">
                    <div class="mcp-question">USD/JPY</div>
                    <div class="mcp-answer">
                        We offer branding, digital marketing, performance campaigns, and content
                        strategy tailored to your business goals.
                    </div>
                </div>
                <div class="mcp-item">
                    <div class="mcp-question">AUD/USD</div>
                    <div class="mcp-answer">
                        We offer branding, digital marketing, performance campaigns, and content
                        strategy tailored to your business goals.
                    </div>
                </div>
                <div class="mcp-item">
                    <div class="mcp-question">USD/CHF</div>
                    <div class="mcp-answer">
                        We offer branding, digital marketing, performance campaigns, and content
                        strategy tailored to your business goals.
                    </div>
                </div>

                <div class="mcp-item">
                    <div class="mcp-question">Additional pairs available</div>
                    <div class="mcp-answer">
                        We offer branding, digital marketing, performance campaigns, and content
                        strategy tailored to your business goals.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const items = document.querySelectorAll(".mcp-item");
    items.forEach((item) => {
        item.addEventListener("click", () => {
            item.classList.toggle("active");
        });
    });
</script>