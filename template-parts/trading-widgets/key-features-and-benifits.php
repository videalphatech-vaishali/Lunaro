<style>
    :root {
        --key-benefits-text: #333;
        --key-benefits-border: #888;
        --key-benefits-hover-bg: #555;
        --key-benefits-primary: #65558F;
        --key-benefits-card-bg: #ffffff;
        --key-benefits-hover-text: #fff;
        --key-benefits-bg-light: #eaeaea;
    }

    .key-benefits-difference {
        background-color: var(--key-benefits-bg-light);
        padding: 40px 50px;
    }

    .key-benefits-heading {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .key-benefits-reasons {
        display: flex;
        gap: 20px;
        justify-content: space-between;
    }

    .key-benefits-card {
        padding: 20px;
        text-align: left;
        border-radius: 4px;
        font-family: 'Calibri', sans-serif;
        background-color: #fff;
        box-sizing: border-box;
        width: calc((100% - 40px) / 3);
        /* 3 cards with 2 gaps of 20px */
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    }


    .key-benefits-card-title {
        margin-bottom: 10px;
        font-family: 'Calibri', sans-serif;
        font-weight: bold;
        font-size: 20px;
    }

    .key-benefits-card-desc {
        margin: 0;
        color: var(--key-benefits-text);
        font-size: 18px;
    }

    .key-benefits-button-container {
        text-align: center;
        margin-top: 40px;
    }

    .key-benefits-button-container p {
        text-align: center;
    }

    .key-benefits-button-container a {
        text-align: center;
        color: white;
    }

    .key-benefits-button {
        background-color: #65558F;
        font-size: 14px;
        font-family: 'Calibri', sans-serif;
        padding: 10px 25px;
        border-radius: 20px;
        display: inline-block;
        text-decoration: none;
        border: 1px solid var(--key-benefits-border);
        transition: background-color 0.3s, color 0.3s;
    }

    .key-benefits-button:hover {
        background-color: var(--key-benefits-hover-bg);
        color: var(--key-benefits-hover-text);
    }

    @media (max-width: 768px) {
        .key-benefits-card {
            flex: 1 1 100%;
        }
    }
</style>



<section class="key-benefits-difference">
    <h2 class="key-benefits-heading">Key features and benefits</h2>

    <div class="key-benefits-reasons">
        <?php
        $reasons = [
            ["title" => "Reason 1", "desc" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi."],
            ["title" => "Reason 2", "desc" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi."],
            ["title" => "Reason 3", "desc" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi."]
        ];

        foreach ($reasons as $reason) {
            echo '
        <div class="key-benefits-card">
          <h3 class="key-benefits-card-title">' . $reason["title"] . '</h3>
          <p class="key-benefits-card-desc">' . $reason["desc"] . '</p>
        </div>
      ';
        }
        ?>
    </div>

    <div class="key-benefits-button-container">
        <a href="#" class="key-benefits-button">Learn more about account today</a>
        <P>New to trading? Check out our beginner's guide to get started with your first trade.</P>
    </div>
</section>