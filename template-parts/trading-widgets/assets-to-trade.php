<style>
    .assets-section {
        padding: 40px 50px;
        margin: auto;
    }

    .assets-header h2 {
        font-family: 'Calibri', sans-serif;
        font-size: 28px;
        margin-bottom: 8px;
    }

    .assets-header p {
        font-size: 14px;
        font-family: 'Calibri', sans-serif;
        color: #444;
        margin-bottom: 30px;
    }

    .assets-grid {
        display: grid;
        height: 150px;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
    }

    .asset-box {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #000;
        padding: 15px 20px;
        font-size: 16px;
        font-weight: 500;
    }

    .learn-link {
        font-size: 14px;
        color: #65558F;
        font-family: 'Calibri', sans-serif;
        text-decoration: none;
    }

    .learn-link:hover {
        text-decoration: underline;
    }
</style>


<?php
// Get the parent category by slug
$parent_cat = get_category_by_slug('market-category'); // Update this slug if needed

if ($parent_cat) {
    $args = array(
        'taxonomy'     => 'category',
        'child_of'     => $parent_cat->term_id,
        'hide_empty'   => false,
    );

    $subcategories = get_categories($args);

    // Only render the section if there are subcategories
    if (!empty($subcategories)) {
        ?>
        <div class="assets-section">
            <div class="assets-header">
                <h2>Assets to trade</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
            </div>

            <div class="assets-grid">
                <?php
                foreach ($subcategories as $subcategory) {
                    echo '<div class="asset-box">';

                    // Get description and image URL
                    $description = $subcategory->description;
                    $image_url = '';
                    if (preg_match('/https?:\/\/\S+/i', $description, $matches)) {
                        $image_url = $matches[0];
                        $clean_description = trim(str_replace($image_url, '', $description));
                    } else {
                        $clean_description = $description;
                    }

                    // Output
                    echo '<span>' . esc_html($subcategory->name) . '</span>';
                    echo '<a href="' . esc_url(site_url('/market-subcategory/?market_category=' . urlencode($subcategory->name))) . '" class="learn-link">Learn more</a>';

                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <?php
    }
}
// No else block — show nothing if no category or subcategories
?>