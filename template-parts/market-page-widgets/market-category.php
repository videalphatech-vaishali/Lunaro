<?php
/*
Template Name: Market Categories
*/
?>

<style>
    .market-categories-wrapper {
        padding: 40px 50px;
        background-color: white;
    }



    .market-categories {
        display: grid;
        grid-template-columns: repeat(3, minmax(250px, 1fr));
        gap: 40px;
        text-align: center;
    }

    .market-categories .category-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: white;
        padding: 20px;
        height: 100%;
        min-height: 100px;
    }

    .market-categories .category-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .market-categories .category-title {
        font-weight: 600;
        margin: 10px 0 5px;
    }

    .market-categories .category-description {
        font-size: 14px;
        color: black;
        margin-bottom: auto;
        width: 300px;
        padding: 10px 10px;
    }

    .market-categories .learn-more {
        color: #6B46C1;
        font-size: 14px;
        margin-top: 16px;
        display: inline-block;
        text-decoration: none;
    }

    /* Responsive behavior */
    @media screen and (max-width: 768px) {
        .market-categories {
            grid-template-columns: 1fr;
            overflow-x: auto;
        }

        .market-categories .category-item {
            min-width: 280px;
            max-width: 100%;
        }
    }

    .category-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 10px;
        background-color: #d6e6ff;
        /* Placeholder background */
        overflow: hidden;
    }

    .category-icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }
</style>

<?php
// Get the parent category by slug
$parent_cat = get_category_by_slug('market-category'); // Change slug if needed

if ($parent_cat) {
    $args = array(
        'taxonomy'   => 'category',
        'child_of'   => $parent_cat->term_id,
        'hide_empty' => false,
    );

    $subcategories = get_categories($args);

    if (!empty($subcategories)) {
?>
        <div class="market-categories-wrapper">
            <h2>Market categories</h2>
            <div class="market-categories">
                <?php
                foreach ($subcategories as $subcategory) {
                    echo '<div class="category-item">';

                    // Extract image URL from description
                    $description = $subcategory->description;
                    $image_url = '';
                    if (preg_match('/https?:\/\/\S+/i', $description, $matches)) {
                        $image_url = $matches[0];
                    }

                    // Show image or fallback
                    if (!empty($image_url)) {
                        echo '<div class="category-icon"><img src="' . esc_url($image_url) . '" alt="' . esc_attr($subcategory->name) . ' icon"></div>';
                    } else {
                        echo '<div class="category-icon"></div>';
                    }

                    // Clean description
                    $clean_description = preg_replace('/https?:\/\/\S+/i', '', $description);

                    // Title, description, and learn more
                    echo '<div class="category-title">' . esc_html($subcategory->name) . '</div>';
                    echo '<div class="category-description">' . esc_html($clean_description) . '</div>';
                    echo '<a class="learn-more" href="' . site_url('/market-subcategory/?market_category=' . urlencode($subcategory->name)) . '">Learn more</a>';

                    echo '</div>';
                }
                ?>
            </div>
        </div>
<?php
    }
}
?>