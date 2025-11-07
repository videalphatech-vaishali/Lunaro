<style>
    .spread-betting-container {
        display: flex;
        padding: 30px 40px;
        justify-content: space-between;
        gap: 40px;
        margin: 40px 0;
        flex-wrap: wrap;
    }

    .spread-betting-left {
        flex: 1;
        min-width: 300px;
    }

    .spread-betting-right {
        flex: 1;
        min-width: 300px;
    }

    .features-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        gap: 15px;
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #cce0ff;
        flex-shrink: 0;
    }

    .feature-texts p {
        margin: 5px 0 0;
        font-size: 14px;
        line-height: 1.4;
    }

    @media(max-width:768px) {
        .spread-betting-container {
            padding: 20px;
        }
    }
</style>

<section class="spread-betting-container">
    <div class="spread-betting-left">
        <h2>What is spread betting?</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.
            Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
            mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu.
        </p>
    </div>

    <div class="spread-betting-right">
        <h3>Key features / benefits</h3>
        <ul class="features-list">
            <?php
            $features = [
                'Feature 1',
                'Feature 2',
                'Feature 3',
                'Feature 4',
                'Feature 5'
            ];

            foreach ($features as $feature) :
            ?>
                <li class="feature-item">
                    <div class="feature-icon"></div>
                    <div class="feature-texts">
                        <strong><?php echo $feature; ?></strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>