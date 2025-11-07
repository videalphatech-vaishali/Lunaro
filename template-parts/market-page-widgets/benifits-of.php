<!DOCTYPE html>
<html>

<head>
    <title>Benefits of Trading</title>
    <style>
        .benefits-section {
            padding: 0 50px;
            margin: 0 auto;
        }

        .benefits-section h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            /* Keeps top alignment for all */
            gap: 20px;
        }

        .benefit-icon {
            flex-shrink: 0;
            /* Prevent shrinking */
            width: 60px;
            height: 60px;
            background-color: #d7e7ff;
            border-radius: 50%;
            margin-top: 4px;
            /* Optional: align slightly better with text top */
        }


        .benefit-text h3 {
            margin: 0 0 8px;
            font-size: 18px;
        }

        .benefit-text p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        @media (max-width: 768px) {
            .benefit-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="benefits-section">
        <h2>Benefits of trading</h2>
        <div class="benefit-grid">
            <?php
            $benefits = [
                ['title' => 'Feature 1', 'desc' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..Lorem ipsum dolor sit amet consectetur adipiscing'],
                ['title' => 'Feature 2', 'desc' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..'],
                ['title' => 'Feature 3', 'desc' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..'],
                ['title' => 'Feature 4', 'desc' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..'],
            ];

            foreach ($benefits as $benefit) {
                echo '<div class="benefit-item">';
                echo '<div class="benefit-icon"></div>';
                echo '<div class="benefit-text">';
                echo '<h3>' . esc_html($benefit['title']) . '</h3>';
                echo '<p>' . esc_html($benefit['desc']) . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>