<style>
    .edu-content-section {
        display: flex;
        background-color: #000;
        gap: 80px;
        justify-content: space-evenly;
        padding: 5rem 5rem;
    }

    .edu-btn-primary {
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

    .edu-right-side {
        max-width: 800px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        margin-right: 2rem;
    }

    .edu-right-side h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    .edu-right-side p {
        line-height: 1.6;
        font-weight: 400;
        color: #ccc;
    }
</style>



<div class="edu-content-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testonomal.png" alt="Coins"
        class="mb-6 max-w-[280px] md:max-w-[320px]">
    <div class="edu-right-side">
        <h2>Educational content</h2>
        <p>
            Want to understand what drives commodity markets before you trade? Explore our comprehensive guides covering supply-demand fundamentals, seasonal patterns, correlation analysis, and risk management strategies specific to metals, energy, and agricultural products.
From beginner introductions to advanced trading techniques, our resources help you navigate the unique characteristics of commodity markets with confidence.

        </p>
        <button class="edu-btn-primary">Read in our Resource section</button>
    </div>
</div>