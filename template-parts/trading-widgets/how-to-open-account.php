<!-- professional-account-section.php -->

<style>
    .professional-account-section {
        display: flex;
        align-items: center;
        background: #fff;
        gap: 50px;
        padding: 30px 40px;
        font-family: Arial, sans-serif;
    }

    .professional-account-left {
        flex: 1;
    }

    .professional-account-left h2 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .professional-account-left p {
        font-size: 16px;
        color: #333;
        margin-bottom: 20px;
    }

    .professional-account-left .cta-button {
        display: inline-block;
        background-color: #6e5b9d;
        color: white;
        padding: 10px 25px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .professional-account-left .cta-button:hover {
        background-color: #594a7c;
    }

    .professional-account-right {
        flex: 0 0 200px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .step {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 16px;
    }

    .step .circle {
        width: 30px;
        height: 30px;
        background-color: #d5e7ff;
        border-radius: 50%;
    }
</style>

<div class="professional-account-section">
    <div class="professional-account-left">
        <h2>How to open a professional account</h2>
        <p>Create an account and start trading with ABC.</p>
        <a href="#" class="cta-button">Create Professional account</a>
    </div>
    <div class="professional-account-right">
        <div class="step">
            <div class="circle"></div>Step 1
        </div>
        <div class="step">
            <div class="circle"></div>Step 2
        </div>
        <div class="step">
            <div class="circle"></div>Step 3
        </div>
    </div>
</div>