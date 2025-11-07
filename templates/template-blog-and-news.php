<?php

/**
 * Template Name: Blog and News Template
 * Template Post Type: page
 */

global $post;
get_header();
?>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: white;
    }

    .hero {
        background-color: #dbeaff;
        padding: 40px 60px;
    }

    .hero h1 {
      margin: 0;
        font-size: 3rem;
        color: black;
    }

    .hero p {
        font-size: 2.3rem;
        color: #333;
        margin-top: 15px;
    }

    .container1 {
        padding: 30px 250px 30px 60px;
    }

    .filters-form {
        width: 130%;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .filter-left {
        display: flex;
        gap: 20px;
    }

    /* .filter-right {
        margin-right: 1px;
    } */

    .filters {
        gap: 20px;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 30px;
        justify-content: flex-start;
    }

    .filters select {
        padding: 10px 15px;
        font-size: 1rem;
        border: 1px solid #000;
        border-radius: 2px;
        min-width: 200px;
    }

    .gridView {
        grid-template-columns: repeat(3, 1fr);
        /* 3 columns on desktop */
        display: grid;
        padding: 30px 60px;
        gap: 30px;
    }


    .card {
        width: 450px;
        height: 100%;
        display: flex;
        border-radius: 8px;
        flex-direction: column;
        background-color: white;
    }

    .card-img {
        background-color: #cce0ff;
        border-radius: 8px;
        height: 160px;
    }

    .card-body {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .card-img img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 8px;
    }

    .card-body h4 {
        margin: 0 0 10px;
        font-size: 1.8rem;
    }

    .card-body p {
        margin: 0 0 8px;
        font-size: 1.2rem;
        font-weight: 300;
    }

    .category,
    .card-body .meta {
        font-size: 1.2rem;
        color: #666;
    }

    .attachment-large>.size-large>.wp-post-image {
        width: 1200px;
        height: 300px;
    }

    .card-body a {
        margin-top: 10px;
        color: #65558f;
        font-size: 1.5rem;
        display: inline-block;
        text-decoration: none;
    }

    .card-body a:hover {
        text-decoration: none;
    }

    #load-more {
        background-color: transparent;
        border: 1px solid #65558f;
        border-radius: 9999px;
        padding: 20px 30px;
        font-size: 1.2rem;
        margin-bottom: 40px;
         cursor: pointer;
        color: #65558f;
    }

    #load-more-container1 {
        grid-column: 1 / -1;
        text-align: center;
        width: 100%;
    }

    #load-more:hover {
        background-color: #f0f0f0;
    }

    .custom-select {
        position: relative;
        display: inline-block;
        width: 200px;
    }

    .custom-select select {
        width: 100%;
        font-size: 1rem;
        border-radius: 2px;
        -moz-appearance: none;
        border: 1px solid #000;
        background-color: #fff;
        -webkit-appearance: none;
        appearance: none;
        /* Remove default arrow */
        background-size: 13px 13px;
        background-repeat: no-repeat;
        padding: 10px 40px 10px 15px;
        background-position: right 10px center;
        background-image: url('https://img.icons8.com/?size=100&id=99977&format=png&color=000000');
    }

    /* Filter toggle button */
    .mobile-filter-toggle {
        display: none;
        margin: 15px;
        padding: 10px 15px;
        font-size: 1rem;
        background-color: #65558f;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Filter Drawer */
    .filter-drawer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background: rgba(0, 0, 0, 0.4);
        display: none;
        justify-content: flex-end;
        z-index: 9999;
    }

    /* Drawer slide-up panel */
    .filter-drawer-content {
        background: white;
        width: 100%;
        max-height: 90%;
        padding: 20px;
        border-radius: 20px 20px 0 0;
        overflow-y: auto;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    /* Show the drawer */
    .filter-drawer.show {
        display: flex;
    }

    .filter-drawer.show .filter-drawer-content {
        transform: translateY(0%);
    }

    /* Close button */
    .filter-drawer-close {
        background: none;
        border: none;
        font-size: 2rem;
        color: #333;
        position: absolute;
        top: 15px;
        right: 20px;
        cursor: pointer;
    }

    /* -----------------category1,2 and search bar Row ------ */
    .newsroom-filter-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #fff;
        flex-wrap: wrap;
        gap: 20px;
    }

    .newsroom-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .newsroom-buttons button {
        padding: 8px 16px;
        border-radius: 20px;
        border: 1px solid #ccc;
        background-color: white;
        font-weight: 500;
        cursor: pointer;
        color: #333;
        transition: all 0.3s ease;
    }

    .newsroom-buttons button.active {
        background-color: #eee6ff;
        color: #65558F;
        border-color: #65558F;
    }

    .newsroom-search {
        display: flex;
        align-items: center;
        background-color: #eee6ff;
        padding: 8px 9px;
        border-radius: 9999px;
        margin-left: auto;
        /* Pushes search to far right */
        max-width: 300px;
        flex: 1;
        justify-content: space-between;
    }


    .newsroom-search input {
        border: none;
        background: transparent;
        outline: none;
        font-size: 14px;
        color: #333;
        width: 100%;
    }

    .newsroom-filter-form {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        flex-wrap: wrap;
        gap: 20px;
    }

    .newsroom-search button {
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 16px;
        color: #65558F;
        padding-left: 8px;
    }

    .main-content img {
        min-width: 100% !important;
        height: 350px;
    }

    /* -----------------category1,2 and search bar Row ------ */
    @media screen and (max-width: 1024px) {
        .gridView {
            grid-template-columns: repeat(2, 1fr);
            padding: 30px 60px;
            /* 2 columns on tablets */
        }
    }

    @media screen and (max-width: 768px) {
        .card {
            width: 350px;
        }

        .desktop-only {
            display: none !important;
        }

        .filter-drawer {
            top: 30%;
            background-color: red;
            z-index: 999;
        }

        .filter-drawer.show {
            display: flex;
        }

        .filter-drawer-content {
            width: 100%;
            border-radius: 0;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .filter-drawer.show .filter-drawer-content {
            transform: translateY(0%);
        }

        .mobile-filter-toggle {
            display: inline-block;
        }

        .filters-form {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .gridView {
            grid-template-columns: 1fr;
            padding: 30px 60px;
        }

        .custom-select {
            width: 70%;
            position: relative;
            margin-bottom: 20px;
            display: inline-block;
        }

        .custom-select select {
            font-size: 0.95rem;
            background-size: 16px 16px;
            border-width: 0;

        }

        .custom-select-container {
            height: 100px;
        }

        .container1 {
            padding: 20px 15px;
        }

        .filters {
            flex-direction: column;
            gap: 15px;
        }
    }

    .filters-form {
        width: 100%;
    }

    .button-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
    }

    .btn-primary {
        background-color: #65558f;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 25px;
        font-weight: 400;
        font-size: 1rem;
        cursor: pointer;
    }

    .btn-outline {
        text-decoration: none;
        /* background-color: transparent;
        color: #65558f;
        border: 1px solid #65558f;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 1rem;
        cursor: pointer; */
    }

    .btn-outline:hover {
        background-color: #f0f0f0;
    }
</style>
<?php
$current_url = $_SERVER['REQUEST_URI'];
$is_blog_page = strpos($current_url, 'blogspage') !== false;
$is_newsroom_page = strpos($current_url, 'newsroom') !== false;
?>

<div class="hero">
    <h1>Insights & Strategies from Market Experts</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi..</p>
</div>

<?php if ($is_blog_page): ?>
    <!-- Toggle Button -->
    <button class="mobile-filter-toggle" onclick="openFilterDrawer()">Filters</button>

    <!-- Mobile Filter Drawer -->
    <div class="filter-drawer" id="filterDrawer">
        <div class="filter-drawer-content">
            <button class="filter-drawer-close" onclick="closeFilterDrawer()"></button>
            <form method="get" class="filters-form">
                <h2>Filters</h2>
                <!-- Author & Subcategory -->
                <div class="custom-select-container">
                    <div class="custom-select">
                        <select name="subcat" onchange="this.form.submit()">
                            <option value="">Select Subcategory</option>
                            <?php
                            $parent_cat = get_category_by_slug('news');
                            if ($parent_cat) {
                                $subcategories = get_categories([
                                    'child_of' => $parent_cat->term_id,
                                    'hide_empty' => false,
                                ]);
                                foreach ($subcategories as $subcategory) {
                                    $selected = (isset($_GET['subcat']) && $_GET['subcat'] == $subcategory->slug) ? 'selected' : '';
                                    echo "<option value='{$subcategory->slug}' $selected>{$subcategory->name}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="custom-select">
                        <select name="author" onchange="this.form.submit()">
                            <option value="">Select Author</option>
                            <?php
                            $authors = get_users(['who' => 'authors']);
                            foreach ($authors as $author) {
                                $selected = (isset($_GET['author']) && $_GET['author'] == $author->ID) ? 'selected' : '';
                                echo "<option value='{$author->ID}' $selected>{$author->display_name}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="button-group">
                    <button onClick="createDemoAccount(); return false;" class="btn-outline">Reset All Filters</button>
                    <button onClick="startTrading(); return false;" class="btn-primary">Apply Filters</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Desktop Filter Row -->
    <div class="container1 desktop-only">
        <form method="get" class="filters-form">
            <div class="filter-left">
                <div class="custom-select">
                    <select name="subcat" onchange="this.form.submit()">
                        <option value="">Select Subcategory</option>
                        <?php
                        $parent_cat = get_category_by_slug('news');
                        if ($parent_cat) {
                            $subcategories = get_categories([
                                'child_of' => $parent_cat->term_id,
                                'hide_empty' => false,
                            ]);
                            foreach ($subcategories as $subcategory) {
                                $selected = (isset($_GET['subcat']) && $_GET['subcat'] == $subcategory->slug) ? 'selected' : '';
                                echo "<option value='{$subcategory->slug}' $selected>{$subcategory->name}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="custom-select">
                    <select name="author" onchange="this.form.submit()">
                        <option value="">Select Author</option>
                        <?php
                        $authors = get_users(['who' => 'authors']);
                        foreach ($authors as $author) {
                            $selected = (isset($_GET['author']) && $_GET['author'] == $author->ID) ? 'selected' : '';
                            echo "<option value='{$author->ID}' $selected>{$author->display_name}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="filter-right">
                <div class="custom-select">
                    <select name="date" onchange="this.form.submit()">
                        <option value="">Sort By</option>
                        <option value="newest" <?php if (isset($_GET['date']) && $_GET['date'] == 'newest')
                            echo 'selected'; ?>>Newest</option>
                        <option value="old" <?php if (isset($_GET['date']) && $_GET['date'] == 'old')
                            echo 'selected'; ?>>
                            Older than 10 days</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <!-- category 1, category 2 and search bar Row -->
<?php elseif ($is_newsroom_page): ?>
    <?php
    $categories = get_categories([
        'taxonomy' => 'category',
        'hide_empty' => false,
    ]);
    $active_cat = isset($_GET['cat']) ? intval($_GET['cat']) : 0;
    $search_query = isset($_GET['s']) ? esc_attr($_GET['s']) : '';
    ?>
    <div class="newsroom-filter-bar">
        <form method="get" class="newsroom-filter-form">
            <div class="newsroom-buttons">
                <button type="submit" name="cat" value="0" class="<?= ($active_cat === 0 ? 'active' : '') ?>">✔ All</button>
                <?php foreach ($categories as $cat): ?>
                    <button type="submit" name="cat" value="<?= $cat->term_id ?>"
                        class="<?= ($active_cat === $cat->term_id ? 'active' : '') ?>">
                        <?= esc_html($cat->name) ?>
                    </button>
                <?php endforeach; ?>
            </div>
            <div class="newsroom-search">
                <input type="text" name="s" placeholder="Hinted search text" value="<?= $search_query ?>" />
                <button type="submit"><span>🔍</span></button>
            </div>
        </form>
    </div>
<?php endif; ?>
<!-- category 1, category 2 and search bar Row -->

<!-- Grid Content -->
<div class="gridView">
    <?php
    $selected_subcat = isset($_GET['subcat']) ? sanitize_text_field($_GET['subcat']) : '';
    $selected_author = isset($_GET['author']) ? intval($_GET['author']) : '';
    $date_filter = isset($_GET['date']) ? sanitize_text_field($_GET['date']) : '';

    $post_type = 'post';
    if ($is_newsroom_page) {
        $post_type = 'news';
    } elseif ($is_blog_page) {
        $post_type = 'blogs';
    }
    $search_term = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
    if (!empty($search_term)) {
        $args['s'] = $search_term;
    }

    if (isset($_GET['cat']) && intval($_GET['cat']) !== 0) {
        $args['cat'] = intval($_GET['cat']);
    }
    $args = [
        'post_type' => $post_type,
        'posts_per_page' => 3,
        'paged' => 1,
    ];

    if (!empty($selected_subcat)) {
        $args['category_name'] = $selected_subcat;
    }

    if (!empty($selected_author)) {
        $args['author'] = $selected_author;
    }

    if ($date_filter === 'old') {
        $args['date_query'] = [
            [
                'column' => 'post_date',
                'before' => '10 days ago'
            ]
        ];
    } elseif ($date_filter === 'newest') {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    }

    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="card">
                <div class="card-img">
                    <?php if (has_post_thumbnail()):
                        the_post_thumbnail('medium', ['style' => 'width: 100%; height: 160px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;']);
                    endif; ?>
                </div>
                <div class="card-body">
                    <p class="category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        }
                        ?>
                    </p>
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <p class="meta">By <?php the_author(); ?> - <?php the_time('d/m/Y'); ?></p>
                    <a href="<?php echo site_url('index.php/view-detail-page/?post_id=' . get_the_ID()); ?>">Read post</a>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p>No posts found in this subcategory.</p>';
    endif;
    ?>
</div> <!-- Close .grid -->

<?php if ($query->max_num_pages > 1): ?>
    <div id="load-more-container1">
        <button class="btn-outline" id="load-more" data-page="1" data-max="<?php echo $query->max_num_pages; ?>">Load
            More</button>
    </div>
<?php endif; ?>
</div> <!-- Close .container1 -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const loadMoreBtn = document.getElementById('load-more');
        if (!loadMoreBtn) return;

        loadMoreBtn.addEventListener('click', function () {
            const btn = this;
            let page = parseInt(btn.getAttribute('data-page'));
            const maxPage = parseInt(btn.getAttribute('data-max'));

            const subcat = new URLSearchParams(window.location.search).get('subcat') || '';
            const author = new URLSearchParams(window.location.search).get('author') || '';
            const date = new URLSearchParams(window.location.search).get('date') || '';

            fetch('<?php echo admin_url("admin-ajax.php"); ?>?action=load_more_news&page=' + (page + 1) + '&subcat=' + subcat + '&author=' + author + '&date=' + date)
                .then(response => response.text())
                .then(data => {
                    const grid = document.querySelector('.gridView');
                    grid.insertAdjacentHTML('beforeend', data);
                    btn.setAttribute('data-page', page + 1);

                    if ((page + 1) >= maxPage) {
                        btn.remove();
                    }
                });
        });
    });
</script>


<?php
get_footer();
?>