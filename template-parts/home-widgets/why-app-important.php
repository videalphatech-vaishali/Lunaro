<style>
    :root {
        --abc-text: #333;
        --abc-border: #888;
        --abc-hover-bg: #555;
        --abc-primary: #6a4ef4;
        --abc-card-bg: #ffffff;
        --abc-hover-text: #fff;
        --abc-bg-light: #eaeaea;
    }

    .abc-difference {
        background-color: var(--abc-bg-light);
        padding: 30px 40px;
    }

    .abc-heading {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .abc-reasons {
        display: flex;
        gap: 20px;
        justify-content: space-between;
    }

    .abc-card {
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


    .abc-card-title {
        margin-bottom: 10px;
        font-family: 'Calibri', sans-serif;
        font-weight: bold;
        font-size: 20px;
    }

    .abc-card-desc {
        margin: 0;
        color: var(--abc-text);
        font-size: 18px;
    }

    .abc-button-container {
        text-align: center;
        margin-top: 40px;
    }

    .abc-button {
        color: #65558F;

        font-size: 14px;
        font-family: 'Calibri', sans-serif;
        padding: 10px 25px;
        border-radius: 20px;
        display: inline-block;
        text-decoration: none;
        border: 1px solid var(--abc-border);
        transition: background-color 0.3s, color 0.3s;
    }

    .abc-button:hover {
        background-color: var(--abc-hover-bg);
        color: var(--abc-hover-text);
    }

    @media (max-width: 768px) {

        .abc-difference {
            padding: 20px;
        }

        .abc-card {
            width: 100%;
        }

        .abc-reasons {
            flex-direction: column;
        }


    }
</style>



<section class="abc-difference">
    <h2 class="abc-heading">Why ABC is different</h2>

    <div class="abc-reasons">
        <?php
        $reasons = [
            ["title" => "Reason 1", "desc" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi."],
            ["title" => "Reason 2", "desc" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi."],
            ["title" => "Reason 3", "desc" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi."]
        ];

        foreach ($reasons as $reason) {
            echo '
        <div class="abc-card">
          <h3 class="abc-card-title">' . $reason["title"] . '</h3>
          <p class="abc-card-desc">' . $reason["desc"] . '</p>
        </div>
      ';
        }
        ?>
    </div>

    <div class="abc-button-container">
        <a href="#" class="abc-button">Learn more about ABC</a>
    </div>
</section>