<style>
    .supporting-containers {

        padding: 40px 50px;
        text-align: left
    }

    .supporting-grid {
        display: flex;
        gap: 60px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .support-card {
        max-width: 280px;
        padding: 20px;
        text-align: center;
    }

    .support-logo {

        width: 80px;
        height: 80px;
        margin-bottom: 15px;
    }

    .support-card h3 {
        margin-bottom: 10px;
        font-size: 18px;
        font-family: sans-serif;
    }

    .support-card p {
        font-size: 14px;
        margin-bottom: 15px;
        font-family: sans-serif;
        color: #333;
    }

    .support-link {
        color: #65558F;
        margin-top: 50px;
        font-size: 14px;
        text-decoration: none;
        font-family: sans-serif;
    }

    .support-link:hover {
        text-decoration: underline;
    }



    @media(max-width:768px) {

        .supporting-containers {

            padding: 20px;
            text-align: left
        }

        .supporting-grid {
            gap: 1px;
        }

        .support-logo {

            margin-bottom: 1px;
        }
    }
</style>
<?php
$args = [
    'post_type'      => 'trading-page',
    'title'          => 'trading options',
    'posts_per_page' => 1,
];
$query = new WP_Query($args);
$containers = [];

if ($query->have_posts()) {
    $query->the_post();
    $content = get_the_content();

    preg_match_all('/logo-\s*(.*?)\s*title-\s*(.*?)\s*description-\s*(.*?)\s*link_name-\s*(.*?)\s*link-\s*(.*?)(?=(logo-|$))/is', $content, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
        $containers[] = [
            'logo'        => trim($match[1]),
            'title'       => trim($match[2]),
            'description' => trim($match[3]),
            'link_name'   => trim($match[4]),
            'link'        => trim($match[5]),
        ];
    }

    wp_reset_postdata();
}

if (!empty($containers)) : ?>
    <div class="supporting-containers">
        <h2>Trading Options</h2>
        <div class="supporting-grid">
            <?php foreach ($containers as $item): ?>
                <div class="support-card">
                    <img src="<?php echo esc_url($item['logo']); ?>" class="support-logo" alt="icon" />
                    <h3><?php echo esc_html($item['title']); ?></h3>
                    <p><?php echo esc_html($item['description']); ?></p>
                    <?php if (!empty($item['link'])): ?>
                        <a href="<?php echo esc_url($item['link']); ?>" class="support-link">
                            <?php echo esc_html($item['link_name']); ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>