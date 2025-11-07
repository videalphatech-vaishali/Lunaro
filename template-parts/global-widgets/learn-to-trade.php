<?php

/**
 * Template Part: Static Banner Section
 */
$clickEvent = get_query_var('click_event', '');

$learnToTradeBg = get_query_var('learn_to_trade_bg', '#ffffff'); // default white
?>


<style>
    .banner-wrapper {
        background-color: <?php echo esc_attr($learnToTradeBg); ?>;
        padding: 20px 50px;
    }

    .banner-content {
        display: flex;
        align-items: center;
        margin: auto;
        text-align: justify;
        flex-wrap: wrap;
    }

    .banner-left {
        flex: 1 1 50%;
        font-family: Arial, sans-serif;

        padding-right: 100px;
    }

    .banner-left h1 {
        font-size: 3rem;
        font-family: Arial, sans-serif;

        margin: 0 0 10px;
    }

    .banner-left p {
        font-size: 1.2rem;
        color: black;
        margin-bottom: 20px;
    }

    .banner-btn {
        display: inline-block;
        background-color: #65558f;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
    }

    .banner-btn:hover {
        background-color: #563cd4;
    }

    .banner-right {
        text-align: right;
    }

    .banner-right img {
        max-height: 300px;
        width: 800px;
        border-radius: 12px;
    }
</style>

<html>

<head>
    <script>
        function myFunction() {
            console.log("Button was clicked!");
            <?php if (!empty($clickEvent)) : ?>
                <?php echo $clickEvent; ?>;
            <?php endif; ?>
        }
    </script>
</head>

<body>
    <div class="banner-wrapper">
        <div class="banner-content">
            <div class="banner-left">
                <h2>Learn to trade</h2>
                <p>​Learning to trade is akin to acquiring a new language—one that speaks in charts, indicators, and market movements. It's a journey that transforms abstract financial concepts into tangible strategies, empowering individuals to navigate the complexities of global markets. At its core, trading involves the buying and selling of financial instruments such as stocks, commodities, currencies, and indices, with the aim of capitalizing on market fluctuations. This endeavor requires not only a grasp of fundamental and technical analysis but also the cultivation of discipline, patience, and emotional resilience. As one delves deeper, they learn to interpret economic indicators, assess risk-reward ratios, and develop personalized trading plans.</p>
                <a onClick="myFunction(); return false;" class="banner-btn">Get Started</a>
            </div>

            <div class="banner-right">
                <img src="https://cdn.pixabay.com/photo/2020/11/08/13/32/money-5723747_640.png" alt="Banner Image" style="width: 400px; height: auto; border-radius: 12px;" />
            </div>

        </div>
    </div>
</body>

</html>