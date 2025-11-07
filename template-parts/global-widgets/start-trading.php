<?php

/**
 * Template part: Start Trading Section
 */
$clickEvent1 = get_query_var('click_event1', '');
$clickEvent2 = get_query_var('click_event2', '');
?>


<style>
    .start-trading {
        background-color: #e7e7e7;
        padding: 40px 60px;
        text-align: left;
    }


    .start-trading p {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .button-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        max-width: 250px;
    }

    .btn-primary {
        background-color: #65558f;
        color: white;
        border: none;
        padding: 20px 25px;
        border-radius: 9999px;
        font-size: 1.5rem;
        cursor: pointer;
    }



    .btn-outline {
        background-color: transparent;
        color: #65558f;
        border: 1.7px solid #65558f;

        padding: 20px 25px;
        border-radius: 9999px;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .btn-outline:hover {
        background-color: #f0f0f0;
    }

    @media (max-width: 768px) {
        .start-trading {
            background-color: #e7e7e7;
            padding: 20px;
        }
    }
</style>

<html>

<head>
    <title>Console Log Button</title>
    <script>
        function startTrading() {
            console.log(" startTrading Button was clicked!");
            <?php if (!empty($clickEvent1)): ?>
                <?php echo $clickEvent1; ?>;
            <?php endif; ?>
        }

        function createDemoAccount() {
            console.log("createDemoAccount clicked!");
            <?php if (!empty($clickEvent2)): ?>
                <?php echo $clickEvent2; ?>;
            <?php endif; ?>
        }
    </script>
</head>

<body>
    <div class="start-trading">
        <h2>Start trading now</h2>
        <p>Create an account and start trading with ABC.</p>
        <div class="button-group">
            <button onClick="startTrading(); return false;" class="btn-primary">Start trading</button>
            <button onClick="createDemoAccount(); return false;" class="btn-outline">Create demo account</button>
        </div>
    </div>
</body>

</html>