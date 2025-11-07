<style>
    .info-cards-section {
        background-color: #dbeafe;
        padding: 30px 40px;
    }

    .info-cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 2fr));
        gap: 30px;
        margin: 0 auto;
    }

    .info-card {
        background-color: white;
        border: 1px solid #444;
        padding: 30px;
        max-width: 950px;
        box-shadow: none;
    }

    .info-icon {
        width: 20px;
        height: 20px;
        background-color: #cbd5e1;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .info-card p {
        font-size: 18px;
        color: black;
        font-family: 'Calibri', sans-serif;
        margin-bottom: 25px;
    }

    .info-button {
        display: inline-block;
        padding: 10px 20px;
        border: 1px solid #65558F;
        border-radius: 20px;
        color: #65558F;
        text-decoration: none;
        font-family: 'Calibri', sans-serif;
        font-size: 1.2rem;
        transition: 0.2s;
    }

    .info-button:hover {
        background-color: #65558F;
        color: white;
    }


    @media (max-width: 768px) {
        .info-cards-section {
            padding: 20px;
        }

        .info-cards-grid {
            grid-template-columns: 1fr;
        }


    }
</style>


<?php
$show = $args['show_cards'] ?? ['faqs', 'tutorials'];

$cards = [];

if (in_array('faqs', $show)) {
    $cards[] = [
        'title' => 'FAQs',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi...',
        'link' => 'index.php/faqs',
        'button_text' => 'Read FAQs'
    ];
}

if (in_array('tutorials', $show)) {
    $cards[] = [
        'title' => 'Tutorials',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi...',
        'link' => '#',
        'button_text' => 'Read more'
    ];
}
?>

<section class="info-cards-section">
    <div class="info-cards-grid">
        <?php foreach ($cards as $card) : ?>
            <div class="info-card">
                <div class="info-icon"></div>
                <h2><?php echo esc_html($card['title']); ?></h2>
                <p><?php echo esc_html($card['description']); ?></p>
                <a href="<?php echo esc_url($card['link']); ?>" class="info-button"><?php echo esc_html($card['button_text']); ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>