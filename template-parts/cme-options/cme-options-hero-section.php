<style>
    .cme-hero-section-body {
        height: 500px;
        background: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-img-2.png') center/cover no-repeat;
        background-color: #000;
        text-align: center;

        /* ✅ Use Flexbox for centering */
        display: flex;
        flex-direction: column;
        justify-content: center; /* vertical centering */
        align-items: center; /* horizontal centering */
        padding: 0 40px; /* optional horizontal padding */
    }

    .cme-hero-section-body img {
        max-width: 200px;
        margin-bottom: 20px;
    }

    .cme-body-content {
        max-width: 800px;
    }

    .cme-hero-section-body h2 {
        font-family: 'Calibri', sans-serif;
        margin-bottom: 20px;
        white-space: nowrap;
        font-weight: 900;
        font-size: 50px;
        color: #fff; 
    }

    .cme-hero-section-body h4 {
        font-family: 'Calibri', sans-serif;
        margin-bottom: 10px;
        font-size: 15px;
        color: #fff;
        line-height: 1.6;
    }

    .button-group {
        display: inline-grid;
        gap: 18px;
    }

    .btn-primary {
        color: #000;
        border: none;
        font-size: 1rem;
        cursor: pointer;
        font-weight: 600;
        padding: 14px 36px;
        border-radius: 40px;
        background-color: #fff0d6;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ffe8b5;
    }

    .btn-outline {
        transition: all 0.3s ease;
        background: transparent;
        border: 1.5px solid #fff;
        border-radius: 40px;
        padding: 14px 36px;
        font-weight: 500;
        font-size: 1rem;
        cursor: pointer;
        color: #fff;
    }

    .btn-outline:hover {
        background: #fff;
        color: #000;
    }
</style>

<div class="cme-hero-section-body">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lu-cme-img.png" alt="Forex">
    <div class="cme-body-content">
        <h2>Trade Options on CME Group Exchanges</h2>
        <h4>
            Master options trading across CME Group's liquid markets through Lunaro Markets'
            ADGM-regulated platform. Whether you're hedging existing positions, generating income,
            or speculating on market volatility, our comprehensive CME options access provides
            institutional-quality tools with retail-friendly micro contract sizes
            for precise risk control.
        </h4>
    </div>
</div>
