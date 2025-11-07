<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .get-started-section {
        padding: 30px 40px;
        display: flex;
        align-items: flex-start;
        gap: 40px;
    }

    .get-started-section h2 {
        font-size: 24px;
        font-weight: bold;
        flex-shrink: 0;
    }

    .steps-container {
        flex: 1;
    }

    .step {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .step-icon {
        width: 60px;
        height: 60px;
        background-color: #d4e4ff;
        border-radius: 50%;
        flex-shrink: 0;
        margin-right: 20px;
    }

    .step-content h3 {
        margin: 0 0 5px;
        font-size: 16px;
        font-weight: 600;
    }

    .step-content p {
        margin: 0;
        color: #333;
        font-size: 14px;
    }

    .cta-button {
        margin-top: 30px;
    }

    .btn-outline {
        display: inline-block;
        padding: 10px 20px;
        border: 1px solid #888;
        border-radius: 25px;
        color: #444;
        text-decoration: none;
        font-weight: 500;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-outline:hover {
        background-color: #888;
        color: #fff;
    }
</style>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>How to Get Started</title>
    <link rel="stylesheet" href="get-started.css">
</head>

<body>
    <section class="get-started-section">
        <h2>How to get started</h2>
        <div class="steps-container">
            <!-- Step 1 -->
            <div class="step">
                <div class="step-icon"></div>
                <div class="step-content">
                    <h3>Create an account</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="step">
                <div class="step-icon"></div>
                <div class="step-content">
                    <h3>Download and install Meta Trader 5</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="step">
                <div class="step-icon"></div>
                <div class="step-content">
                    <h3>Log in with your credentials</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="step">
                <div class="step-icon"></div>
                <div class="step-content">
                    <h3>Customise your trading environment</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                </div>
            </div>

            <!-- Button -->
            <div class="cta-button">
                <a href="#" class="btn-outline">Create an account</a>
            </div>
        </div>
    </section>
</body>

</html>