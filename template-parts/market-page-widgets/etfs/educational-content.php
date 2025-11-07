<style>
    .etf-content-section {
        display: flex;
        background-color: #000;
        gap: 80px;
        justify-content: space-evenly;
        padding: 5rem 5rem;
    }

    .etf-btn-primary {
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

    .etf-right-side {
        max-width: 800px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        margin-right: 2rem;
    }

    .etf-right-side h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    .etf-right-side p {
        line-height: 1.6;
        font-weight: 400;
        color: #ccc;
    }
</style>



<div class="etf-content-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testonomal.png" alt="Coins"
        class="mb-6 max-w-[280px] md:max-w-[320px]">
    <div class="etf-right-side">
        <h2>Educational content</h2>
        <p>
            Want to understand how ETFs compare to mutual funds, individual shares, or index CFDs? Explore our comprehensive guides covering ETF structures, how tracking works, cost considerations, and strategies for incorporating ETFs into broader trading or investment approaches.
From beginner explanations to advanced sector rotation and thematic investing strategies, our resources help you navigate the ETF landscape with confidence


        </p>
        <button class="etf-btn-primary">Read in our Resource section</button>
    </div>
</div>