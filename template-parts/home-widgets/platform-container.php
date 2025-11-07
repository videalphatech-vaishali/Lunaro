<?php

/**
 * Template Part: Platform Posts Layout
 * Description: Displays posts from 'platform' custom post type.
 */
function parse_platform_content($content)
{
    $lines = explode("\n", $content);
    $data = [];

    foreach ($lines as $line) {
        if (strpos($line, '-') !== false) {
            [$key, $value] = explode('-', $line, 2);
            $key = trim($key);
            $value = trim($value);

            if (!empty($key)) {
                $data[$key] = $value;
            }
        }
    }

    return $data;
}

$args = array(
    'post_type'      => 'platform-overview', // Your custom post type
    'posts_per_page' => -1,
);

$query = new WP_Query($args);
?>

<style>
    .platform-section {
        background: #e9e9e9;
        padding: 30px 40px;
        font-family: Arial, sans-serif;
    }

    .platform-header h2 {
        font-size: 28px;
        margin-bottom: 5px;
    }

    .platform-header p {
        font-size: 14px;
        margin-bottom: 30px;
    }

    .platform-entry {
        display: flex;
        background: white;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .platform-image {
        flex: 1 1 65%;
        min-height: 220px;
        background-color: #cfe2ff;
        background-size: cover;
        background-position: center;
    }

    .platform-info {
        flex: 1 1 35%;
        padding: 20px;
        box-sizing: border-box;
    }

    .platform-info h3 {
        font-size: 18px;
        margin-top: 0;
    }

    .platform-info ul {
        max-width: 220px;
        text-align: start;
        flex-direction: column;
        padding-left: 5px;
    }


    .feature-line::before {
        content: "●";
        display: inline-block;
        color: black;
        font-size: 14px;
        vertical-align: middle;
    }

    .platform-info a {
        font-size: 14px;
        color: #6b46c1;
        text-decoration: none;
    }



    @media (max-width: 768px) {
        .platform-section {
            padding: 20px;
        }

        .platform-entry {
            flex-direction: column;
        }

        .platform-image,
        .platform-info {
            flex: 1 1 100%;
        }
    }
</style>
<div class="platform-section-1">


    <?php if ($query->have_posts()) : ?>
        <div class="platform-section">
            <div class="platform-header">
                <h2>Platforms</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
            </div>
            <?php while ($query->have_posts()) : $query->the_post();
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');

                // Parse custom content
                $parsed_data = parse_platform_content(get_the_content());
            ?>
                <div class="platform-entry">
                    <div class="platform-image" style="<?php echo $thumbnail_url ? "background-image: url('$thumbnail_url');" : ''; ?>"></div>
                    <div class="platform-info">
                        <h3><?php echo esc_html($parsed_data['title'] ?? get_the_title()); ?></h3>
                        <ul>
                            <div class="feature-line"> <?php if (!empty($parsed_data['feature1'])) : ?>
                                    <li><?php echo esc_html($parsed_data['feature1']); ?></li>
                                <?php endif; ?>
                            </div>
                            <div class="feature-line"> <?php if (!empty($parsed_data['feature2'])) : ?>
                                    <li><?php echo esc_html($parsed_data['feature2']); ?></li>
                                <?php endif; ?>
                            </div>
                            <div class="feature-line"> <?php if (!empty($parsed_data['feature3'])) : ?>
                                    <li><?php echo esc_html($parsed_data['feature3']); ?></li>
                                <?php endif; ?>
                            </div>
                        </ul>
                        <a href="<?php echo esc_url(site_url('/available-platforms?platform_id=' . get_the_ID())); ?>">
                            <img src="https://img.icons8.com/?size=100&id=100530&format=png&color=6b46c1" alt="icon" style="width:16px; height:16px; vertical-align:middle; margin-right:6px;" />
                            Learn about <?php the_title(); ?>
                        </a>


                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
    <?php endif; ?>
</div>