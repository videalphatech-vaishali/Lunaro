<!-- blog and news post reading page -->
<?php


/**
 * Template Name: Read Post Page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */

get_header('new');
?>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #ffffff;
    }

    .content-wrapper {
        display: flex;
        gap: 40px;
        padding: 30px 60px;
        margin: 40px auto;
        background-color: #ffffff;
    }

    .main-content {
        flex: 1 1 65%;
    }

    .sidebar {
        flex: 1 1 30%;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .author-box {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .author-box img {
        height: 60px;
        width: 100%;
        border-radius: 50%;
        background-color: #ccc;
        margin-right: 15px;
    }

    .author-meta {
        font-size: 0.95rem;
    }

    .post-thumbnail {
        width: 100%;
        height: 300px;
        background-color: #f0f0f0;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .post-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .post-content {
        margin-top: 20px;
        font-size: 16px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.6;
    }

    .post-content>p {
        font-size: 16px;
        font-weight: 400;
        color: "#ddd"
    }

    .sidebar-card {
        border-radius: 12px;
        overflow: hidden;
        width: 420px;
    }

    .sidebar-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .sidebar-card .card-content {
        padding: 15px;
    }


    .sidebar-card h4 {
        margin: 10px 0 5px;
        font-size: 1.5rem;
    }

    .sidebar-card p {
        margin-bottom: 10px;
        font-size: 1.4rem;
    }

    .sidebar-card a {
        display: inline-block;
        font-size: 1.5rem;
        color: #65558f;
        text-decoration: none;
        font-weight: 500;
    }

    .sidebar-card a:hover {
        background-color: rgb(228, 228, 228);
        padding: 7px 10px;
        text-decoration: none;
        border-radius: 9999px;
    }

    .main-content>.attachment-large {
        min-width: 100%;
        height: 500px;
    }

    .content-image {
        width: 100%;
        display: flex;
        gap: 20px;
        margin-top: 40px;
    }

    .content-image>img {
        padding: 8px;
    }

    .content-innerimage {
        width: 400px;
        height: 200px;

    }

    .content-innerimage>img {
        height: 100%
    }

    .content-imagepara {
        width: 100%;
        text-align: justify;
        font-size: 16px
    }


    .author-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #d8e8ff;
        background-size: cover;
        background-position: center;
        display: inline-block;
        flex-shrink: 0;
        margin-right: 12px;
    }

    .author-avatar.fallback {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        font-weight: bold;
        color: #444;
    }

    .author-meta {
        font-size: 26px;
        line-height: 1.3;
    }

    hr {
        border: none;
        border-top: 1px solid #000;
        margin-top: 10px;
    }

    small {
        font-size: 15px;
        font-weight: 500;
    }

    .sidebar small {
        font-size: 30px;
        font-weight: 700;
    }


    @media (max-width: 782px) {
        .content-wrapper {
            flex-direction: column;

        }

        .content-image {
            flex-direction: column;
        }

        .content-innerimage {
            width: 100%;
        }

        .sidebar-card {
            width: 100% !important;
        }
    }
</style>
<?php
get_header();

if (isset($_GET['post_id']) && get_post($_GET['post_id'])):
    $post_detail = get_post($_GET['post_id']);
    setup_postdata($post_detail);

    $category = get_the_category($post_detail);
    $category_name = !empty($category) ? $category[0]->name : '';

    // Build subtitle string
    $subtitle = $category_name ? $category_name : '';

    set_query_var('lr_title', get_the_title($post_detail));
    set_query_var('lr_subtitle', $subtitle);

    get_template_part('template-parts/global-widgets/page-heading');

    // We don't reset postdata here — it's still used below.
endif;
?>
<div class="content-wrapper">
    <!-- Left side: Main post content -->
    <div class="main-content">
        <div class="author-box">
            <?php
            $author_id = $post_detail->post_author;
            $author_name = get_the_author_meta('display_name', $author_id);
            $avatar_url = get_avatar_url($author_id);

            if (!empty($avatar_url) && strpos($avatar_url, 'gravatar.com/avatar/') !== false):
                ?>
                <div class="author-avatar" style="background-image: url('<?php echo esc_url($avatar_url); ?>');"></div>
            <?php else: ?>
                <div class="author-avatar fallback">
                    <?php echo strtoupper(substr($author_name, 0, 1)); ?>
                </div>
            <?php endif; ?>

            <div class="author-meta">
                <strong><?php echo esc_html($author_name); ?></strong><br>
                <small><?php echo get_the_date('d M Y', $post_detail); ?></small>
            </div>
        </div>

        <?php
        if (isset($_GET['post_id']) && get_post($_GET['post_id'])):
            $post_detail = get_post($_GET['post_id']);
            setup_postdata($post_detail);
            ?>
            <?php echo get_the_post_thumbnail($post_detail->ID, 'large'); ?>


            <?php
            $content = apply_filters('the_content', $post_detail->post_content);
            $content = wp_strip_all_tags($content); // optional: remove HTML tags if not needed
            $words = explode(' ', $content);
            $totalWords = count($words);

            /////
            $chunkSize = ceil($totalWords / 3);

            $section1 = implode(' ', array_slice($words, 0, $chunkSize));
            $section2 = implode(' ', array_slice($words, $chunkSize, $chunkSize));
            $section3 = implode(' ', array_slice($words, $chunkSize * 2));

            ?>
            <!-- Left side: Main post content -->

            <!-- SECTION 1 -->
            <div class="post-content">
                <p><?php echo $section1; ?></p>
            </div>

            <!-- SECTION 2 with image in middle -->
            <div class="content-image">
                <div class="content-innerimage">
                    <?php echo get_the_post_thumbnail($post_detail->ID, 'large'); ?>
                </div>
                <div class="content-imagepara">
                    <div class="post-content">
                        <p><?php echo $section2; ?></p>
                    </div>
                </div>
            </div>

            <!-- SECTION 3 -->
            <div class="post-content">
                <p><?php echo $section3; ?></p>
            </div>




            <?php
            wp_reset_postdata();
        else:
            echo '<p>Select a post to see details here.</p>';
        endif;
        ?>
    </div>
    <!-- Right side: Sidebar -->
    <div class="sidebar">
        <small>Related Articles</small>
        <?php
        $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
        $related_args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => [$post_id],
        ];

        $related_query = new WP_Query($related_args);
        if ($related_query->have_posts()):
            while ($related_query->have_posts()):
                $related_query->the_post(); ?>
                <div class="sidebar-card">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="card-img">
                            <?php the_post_thumbnail('medium', ['style' => 'width: 100%; object-fit: cover; border-radius: 8px;']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-content">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

                        <a href="<?php echo site_url('index.php/view-detail-page/?post_id=' . get_the_ID()); ?>">Read post</a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>



<?php
set_query_var('click_event1', "_paq.push(['trackEvent', 'View-Detail-Page', 'Start Trading Now', 'StartTrading']);");
set_query_var('click_event2', "_paq.push(['trackEvent', 'View-Detail-Page', 'Start Trading Now', 'Create Demo Account']);");
set_query_var('start_trading_bg', '#e7e7e7');
get_template_part('template-parts/global-widgets/start-trading');
load_country_footer();
?>