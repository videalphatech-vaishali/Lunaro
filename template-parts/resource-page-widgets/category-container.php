<?php

/**
 * Template Part: Resource Block
 */

$category = get_query_var('category_obj');
$title = get_query_var('category_title');
$subtitle = get_query_var('category_subtitle');
$url = '22';
if (str_contains($title, 'Blogs')) {
  $url = 'index.php/blogspage/';
} elseif (str_contains($title, 'News')) {
  $url = 'index.php/newsroom/';
} else {
  $url = 'index.php/tutorial';
}

?>

<div class="grey-wrapper">
  <div class="container"></div>
  <div class="resource">
    <div class="resource-img"></div>
    <div class="resource-content">
      <h3><?php echo esc_html($title); ?></h3>
      <p><?php echo esc_html($subtitle); ?></p>
      <a href="<?php echo esc_url($url); ?>">Read <?php echo esc_html($category->name); ?></a>
    </div>
  </div>
</div>


<style>
  .grey-wrapper {
    background-color: #f5f5f5;
    padding: 10px 20px;
    margin: 30px 60px;
  }

  .resource {
    display: flex;
    background-color: #f5f5f5;
    border-radius: 12px;
    overflow: hidden;
  }

  .resource-img {
    width: 40%;
    background-color: #cce0ff;
    min-height: 200px;
    border-radius: 12px
  }

  .resource-content {
    padding: 120px 40px 10px 10px;
    width: 60%;
  }

  .resource-content h3 {
    margin-top: 0;
  }

  .resource-content a:hover {
    text-decoration: none;
  }

  /* resources card heading */
  .resource h3 {
    font-size: 1.5rem;
    font-weight: 700;
  }

  .resource-content p {
    margin-bottom: 10px;
    font-size: 1.3rem;
    font-weight: 700;
  }

  .resource-content a {
    color: #65558f;
    text-decoration: none;
    font-size: 1.3rem;
  }

  .template-btn-primary {
    background-color: teal;
    /* purple */
    color: white;
    border-radius: 9999px;
    padding: 10px 24px;
    text-decoration: none;
    margin-bottom: 20px;
    font-weight: 500;
  }

  .template-btn-outline {
    margin: 40px;
    background-color: white;
    border-color: greenyellow;
    border-radius: 9999px;
    padding: 10px 24px;
    text-decoration: none;
    margin-bottom: 20px;
  }

  .template-left-column h2 {
    font-size: 3.5rem;
    font-weight: 500;
  }

  .template-start-trading {
    padding: 40px 60px;
  }
</style>