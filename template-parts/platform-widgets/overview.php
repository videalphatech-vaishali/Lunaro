<style>
    .overview-section {
        padding: 20px 50px;
    }

    .overview-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }

    .overview-card {
        background: white;
        border-radius: 10px;
        padding: 0;
    }

    .overview-image {
        height: 320px;
        background-size: cover;
        background-color: #ddd;
        border-radius: 10px;
    }

    .overview-card p {
        font-size: 1.5rem;
        color: #333;
    }

    .overview-card a {
        display: inline-block;
        margin: 10px;
        color: #65558F;
        font-size: 1rem;
        font-weight: 500;
        text-decoration: none;
    }

    .overview-card a:hover {
        text-decoration: underline;
    }
</style>



<?php
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

?><?php
    $args = [
        'post_type'      => 'platform-overview',
        'posts_per_page' => -1
    ];
    $query = new WP_Query($args);

    // Check if there are posts
    if ($query->have_posts()) : ?>
<section class="overview-section">
    <h2>Overview</h2>
    <div class="overview-grid">
        <?php
        while ($query->have_posts()) : $query->the_post();
            $parsed_data = parse_platform_content(get_the_content()); // Custom parsing
            $title = $parsed_data['title'] ?? get_the_title();
            $short_info = $parsed_data['short_info'] ?? '';
            $platform_id = get_the_ID();
            $link = site_url('/available-platforms?platform_id=' . $platform_id);
        ?>
            <div class="overview-card">
                <div class="overview-image" style="<?php echo has_post_thumbnail() ? "background-image: url('" . get_the_post_thumbnail_url(null, 'medium') . "');" : 'background-color: #cfe2ff;'; ?>"></div>
                <h4><?php echo esc_html($title); ?></h4>
                <p><?php echo esc_html($short_info); ?></p>
                <a href="<?php echo esc_url($link); ?>">Learn more</a>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>