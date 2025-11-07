<style>
  .breakdown-section {
    background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
    background-color: #000;
    background-size: cover;
    background-position: center;
  }

  .breakdown-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 60px 80px;
    font-family: "DM Sans", sans-serif;
    color: #fff4e4;
    gap: 80px;
    flex-wrap: wrap;
  }

  /* Title Section */
  .breakdown-title {
    flex: 1;
    font-size: 2.5rem;
    font-weight: 700;
    line-height: 1.2;
    color: #fff4e4;
    min-width: 250px;
  }

  /* left side (box list) */
  .left-side {
    flex: 1.5;
    display: flex;
    flex-direction: column;
    gap: 20px;
    min-width: 320px;
  }

  /* Right side (box list) */
  .right-side {
    flex: 1.5;
    display: flex;
    flex-direction: column;
    gap: 20px;
    min-width: 320px;
  }

  .white-text {
    color: #fff;
    font-size: 0.9rem;
  }

  /* Each accordion item */
  .boc-item {
    background-color: black;
    border: 1px solid rgba(255, 244, 228, 0.2);
    border-radius: 12px;
    padding: 18px 20px;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .boc-item:hover {
    border-color: rgba(255, 244, 228, 0.4);
    background-color: rgba(255, 244, 228, 0.08);
  }

  .boc-item.active {
    border-color: #ffd79f;
  }

  /* Question text */
  .boc-question {
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    position: relative;
    padding-right: 30px;
    transition: color 0.3s ease;
  }

  .boc-question::after {
    content: "▼";
    position: absolute;
    right: 0;
    font-size: 1rem;
    transition: transform 0.3s ease;
  }

  .boc-item.active .boc-question {
    color: #ffd79f;
  }

  .boc-item.active .boc-question::after {
    content: "▲";
  }

  /* Answer text */
  .boc-answer {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    font-size: 0.95rem;
    line-height: 1.5;
    color: rgba(255, 244, 228, 0.8);
    transition: max-height 0.4s ease, opacity 0.4s ease;
    margin-top: 8px;
  }

  .boc-item.active .boc-answer {
    max-height: 300px;
    opacity: 1;
  }

  /* Responsive layout */
  @media (max-width: 900px) {
    .breakdown-container {
      flex-direction: column;
      gap: 40px;
      padding: 40px 20px;
    }

    .breakdown-title {
      text-align: center;
    }
  }
</style>
<div class="breakdown-section">

  <div class="breakdown-container">
    <div class="left-side">
      <h2 class="breakdown-title">Real Trading Examples</h2>
      <p>Understanding how market movements translate into trading opportunities is essential for
        developing your market expertise. These practical examples demostrate how traders can potentially capitalize
        on different market conditions across various asset classes.
      </p>
      <p class="white-text">Please note,all trading involves risk. Clients can lose money as well as win. These
        examples are for educational purposes and do not constitute investment advice. Past
        performance is not indicative of future results.
      </p>
    </div>

    <div class="right-side">
      <div class="boc-item">
        <div class="boc-question">Market Scenario Example</div>
        <div class="boc-answer">
          We offer branding, digital marketing, performance campaigns, and content
          strategy tailored to your business goals.
        </div>
      </div>

      <div class="boc-item">
        <div class="boc-question">Indices Trading Example</div>
        <div class="boc-answer">
          We offer branding, digital marketing, performance campaigns, and content
          strategy tailored to your business goals.
        </div>
      </div>

      <div class="boc-item">
        <div class="boc-question">Commodities Trading Example</div>
        <div class="boc-answer">
          We offer branding, digital marketing, performance campaigns, and content
          strategy tailored to your business goals.
        </div>
      </div>

      <div class="boc-item">
        <div class="boc-question">Forex Trading Example</div>
        <div class="boc-answer">
          We offer branding, digital marketing, performance campaigns, and content
          strategy tailored to your business goals.
        </div>
      </div>
      <div class="boc-item">
        <div class="boc-question">Bond Trading Example</div>
        <div class="boc-answer">
          We offer branding, digital marketing, performance campaigns, and content
          strategy tailored to your business goals.
        </div>
      </div>
      <div class="boc-item">
        <div class="boc-question">ETF Trading Example</div>
        <div class="boc-answer">
          We offer branding, digital marketing, performance campaigns, and content
          strategy tailored to your business goals.
        </div>
      </div>
      <div class="boc-item">
        <div class="boc-question">Share Baskets Example</div>
        <div class="boc-answer">
          We offer branding, digital marketing, performance campaigns, and content
          strategy tailored to your business goals.
        </div>
      </div>
    </div>
  </div>

</div>
<script>
  const items = document.querySelectorAll(".boc-item");
  items.forEach((item) => {
    item.addEventListener("click", () => {
      item.classList.toggle("active");
    });
  });
</script>