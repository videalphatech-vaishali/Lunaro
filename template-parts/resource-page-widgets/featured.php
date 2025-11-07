<?php

/**
 * Template Part: Featured Slider
 */
?>

<?php
$featured_query = new WP_Query([
  'tag' => 'featured',
  'posts_per_page' => 4
]);

if ($featured_query->have_posts()): ?>
  <div class="featured">
    <h2>Featured content</h2>
    <div class="slider">
      <?php while ($featured_query->have_posts()):
        $featured_query->the_post(); ?>
        <div class="slide">
          <?php if (has_post_thumbnail()): ?>
            <div class="slide-img">
              <?php the_post_thumbnail('medium', [
                'style' => 'border-top-left-radius:10px;border-top-right-radius:10px;width:100%;height:300px;object-fit:cover;'
              ]); ?>
            </div>
          <?php else: ?>
            <div class="slide-img"
              style="background-color:#cce0ff;height:300px;border-top-left-radius:10px;border-top-right-radius:10px;"></div>
          <?php endif; ?>
          <div class="slide-content">
            <h4><?php the_title(); ?></h4>
            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
            <a href="<?php echo site_url('index.php/view-detail-page/?post_id=' . get_the_ID()); ?>">Read post</a>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
  </div>
<?php endif; ?>


<style>
  .featured {
    padding: 40px 60px;
    /* Increased padding */
    background-color: #ffffff;
  }

  /* feature heading */
  .featured h2 {
    font-size: 3.5rem;
    font-weight: 500;
  }

  /* title */
  .featured h4 {
    margin-top: 20px;
    font-size: 2rem;
    font-weight: 700;
  }

  /* short descriptioin */
  .slide-content p {
    font-size: 1.8rem;
    font-weight: 500;
  }

  .slide-img {
    width: 350px;
    height: 300px;
    border-radius: 0;
  }

  .slider {
    gap: 20px;
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
  }

  .slide {
    flex: 0 0 auto;
    width: 350px;
    scroll-snap-align: start;
  }

  .slide-content a {
    font-size: 1.4rem;
    font-weight: 500;
    display: inline-block;
    margin-top: 20px;
    color: #65558f;
    text-decoration: none;
  }

  .slide-content a:hover {
    text-decoration: none;
  }

  @media (max-width: 768px) {
    .featured {
      padding: 20px;
    }
  }
</style>