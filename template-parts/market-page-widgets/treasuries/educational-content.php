<style>
    .treasuries-content-section {
        display: flex;
        background-color: #000;
        gap: 80px;
        justify-content: space-evenly;
        padding: 5rem 5rem;
    }

    .treasuries-btn-primary {
        color: #fff;
        border: none;
        font-size: 1rem;
        cursor: pointer;
        width: 300px;
        font-weight: 600;
        padding: 14px 36px;
        margin-top: 20px;
        border-radius: 40px;
        background-color: #3C4066;
        transition: all 0.3s ease;
    }

    .treasuries-right-side {
        max-width: 800px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        margin-right: 2rem;
    }

    .treasuries-right-side h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    .treasuries-right-side p {
        line-height: 1.6;
        font-weight: 400;
        color: #ccc;
    }
</style>



<div class="treasuries-content-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testonomal.png" alt="Coins"
        class="mb-6 max-w-[280px] md:max-w-[320px]">
    <div class="treasuries-right-side">
        <h2>Educational content</h2>
        <p>
            Want to understand how treasury products fit into trading strategies or portfolio construction? Explore our comprehensive guides covering bond basics, yield curve analysis, duration and convexity concepts, interest rate forecasting, and fixed income hedging techniques.
From beginner introductions to advanced rate trading strategies, our resources help you navigate the complexities of government bond markets with confidence.

        </p>
        <button class="treasuries-btn-primary">Read in our Resource section</button>
    </div>
</div>