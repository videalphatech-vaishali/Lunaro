<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Trading Now</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }


        /* Section Container */
        .shares-start-trading-section {
            background: radial-gradient(circle at top left, #0b1440 0%, #0a0c19 60%, #0a0c19 100%);
            justify-content: center;
            align-items: center;
            padding: 5rem 5rem;
            display: flex;
        }

        .shares-start-trading-container {
            justify-content: space-between;
            align-items: start;
            padding-right: 5rem;
            display: flex;
            width: 100%;
            gap: 60px;
        }

        /* Left Side */
        .shares-start-trading-left h1 {
            font-size: 2.6rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .shares-start-trading-left p {
            color: #b6b8c7;
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 35px;
        }

        .button-group {
            display: flex;
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

        /* Right Side Features */
        .shares-start-trading-right {
            flex-direction: column;
            display: flex;
            gap: 25px;
        }

        .feature {
            align-items: center;
            display: flex;
            gap: 15px;
        }

        .feature .icon {
            color: #fff;
            width: 40px;
            height: 40px;
            display: flex;
            font-size: 1rem;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            background-color: #A89469;
        }

        .feature p {
            font-size: 0.95rem;
            line-height: 1.5;
            font-weight: 400;
            text-align: left;
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .shares-start-trading-container {
                flex-direction: column;
                text-align: center;
            }

            .shares-start-trading-right {
                align-items: center;
                margin-top: 40px;
            }

            .feature {
                justify-content: center;
            }
        }
    </style>
    <section class="shares-start-trading-section">
        <div class="shares-start-trading-container">
            <!-- Left Content -->
            <div class="shares-start-trading-left">
                <h1>Start trading now</h1>
                <p>Open your Lunaro Markets account today and gain access to the world's most recognized shares with
                    transparent pricing and professional execution.
                </p>
                <div class="button-group">
                    <button class="signup btn-primary">Start trading</button>
                </div>
            </div>

            <!-- Right Features -->
            <div class="shares-start-trading-right">
                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
                    </div>


                    <p>
                       <strong> Access to Global ETFs Across Sectors and Themes</strong> <br>
                       Trade leading ETFs covering US, European, and international markets from technology to healthcare to emerging economies.               
                    </p>
                </div>

                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
                    </div>
                    <p><strong>Transparent Pricing with Low Costs</strong><br>
                        Clear spreads and competitive pricing on ETF CFDs with no hidden fees or surprise charges.
                    </p>
                </div>

                <div class="feature">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg"
                            alt="">
                    </div>
                    <p><strong>Demo Environment Available for Practice</strong><br>
                        Test ETF trading strategies and familiarise yourself with sector dynamic risk-free before committing capital
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>