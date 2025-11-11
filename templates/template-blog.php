<?php

/**
 * Template Name: Blog Page
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
 */
get_header('new');

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Market Insights</title>
</head>
<style>
    /* ----------------------- */
/* RESET & BASE */
/* ----------------------- */

.blog-section{

  background-color: #04061c;
  color: white; 
  overflow-x: hidden;
} 
/* ----------------------- */
/* HERO (Top Section) */
/* ----------------------- */
.hero {
  position: relative;
  width: 100%; 
  display: flex;
  align-items: flex-end;
  padding: 5rem 5rem;
  justify-content: flex-start;
  overflow: hidden;
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png') center/cover no-repeat;
  background-color: #000;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center 80%;
  margin-bottom: 60px;
}

.hero-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 
  z-index: 0;
}

.hero-content {
  position: relative;
  z-index: 1;
  padding-bottom: 40px;
  padding-left: 40px;
}

.hero h1 {
  font-size: 36px;
  font-weight: 700;
  line-height: 1.3;
}

.hero p {
  color: #ccc;
  margin-top: 19px;
  margin-bottom: 30px;
  max-width: 600px;
}

/* ----------------------- */
/* FILTERS */
/* ----------------------- */
.filters {
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
  flex-wrap: wrap;
}

.filter {
  display: flex;
  flex-direction: column;
  width: 240px;
}

.filter label {
  font-size: 14px;
  margin-bottom: 5px;
  text-align: left;
}

.filter select {
  background: #10143f;
  color: #8d8787;
  border: 1px solid #D9D9D9;
  border-radius: 6px;
  padding: 8px 16px;
  text-align: left;
}

/* ----------------------- */
/* ARTICLE GRID */
/* ----------------------- */
.articles {
  display: grid;
  grid-template-columns: repeat(3, minmax(320px, 1fr));
  
  padding: 5rem 5rem;
  gap: 24px;
}

/* CARD */
.card {
  background: #0b0f2a;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.3);
  transition: transform 0.2s ease;
  display: flex;
  flex-direction: column;
}

.card:hover {
  transform: translateY(-5px);
}

/* IMAGE CONTAINER */
.image-container {
  position: relative;
  width: 100%;
  aspect-ratio: 389 / 230;
  border-radius: 19px;
  overflow: hidden;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 19px;
}

/* CATEGORY BUTTON INSIDE IMAGE */
.image-container .category {
  position: absolute;
  bottom: 10px;
  left:16px;
  background: rgba(16, 20, 63, 0.9);
  color: #fff;
  border: 1px solid #D9D9D9;
  border-radius: 40px;
  padding: 17px 36px;
  font-size: clamp(10px, 1vw, 14px);
  font-weight: 500;
  text-align: center;
  cursor: pointer;
  transition: background 0.2s ease, transform 0.2s ease;
}

.image-container .category:hover {
  background: rgba(28, 35, 100, 0.9);
  transform: scale(1.05);
}

/* CARD BODY */
.card-body {
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.card-body h3 {
  margin-bottom: 10px;
  font-size: 18px;
}

.card-body p {
  color: #ccc;
  font-size: 14px;
  margin-bottom: 15px;
}

.card-body a {
  text-decoration: none;
  color: #fff;
  font-weight: 500;
}

/* ----------------------- */
/* LOAD MORE BUTTON */
/* ----------------------- */
.load-more-container {
  display: flex;
  justify-content: center;
  padding-bottom: 5rem;
}

.load-more-btn {
  width: 120px;
  height: 48px;
  border-radius: 40px;
  border: 1px solid #ccc;
  background-color: #fff4e4;
  color: black;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.load-more-btn:hover {
  background-color: #aeb5bd;
}

/* ----------------------- */
/* RESPONSIVE DESIGN */
/* ----------------------- */

/* Tablet */
@media (max-width: 992px) {
  .articles {
    grid-template-columns: repeat(2, 1fr);
  }

  .hero {
    height: 250px;
  }

  .hero-content {
    padding-bottom: 30px;
    padding-left: 30px;
  }

  .image-container {
    aspect-ratio: 16 / 9;
  }

   .image-container .category {
    bottom: 10px;
    left: 10px;
    padding: 8px 18px;
    font-size: 13px;
    border-radius: 40px;
  }
}

@media (max-width: 600px) {
  .articles {
    grid-template-columns: 1fr;
  }

  .hero {
    height: 220px;
    padding: 20px;
  }

  .filters {
    flex-direction: column;
  }

  .image-container {
    aspect-ratio: 16 / 10;
  }

   .image-container .category {
    bottom: 8px;
    left: 8px;
   padding: 0.6em 1.4em;
    font-size: 12px;
    border-radius: 40px;
  }

  .load-more-btn {
    width: 100px;
    height: 44px;
    font-size: 14px;
  }

  .load-more-container {
    margin-top: 30px;
  }
}



</style>
<body>
<div class="blog-section">


  <!-- Header Section -->
  <header class="hero">
    <div class="hero-content">
      <h1>Insights & Strategies from<br>Market Experts</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut et massa mi.</p>

      <!-- Filter Section inside header -->
      <section class="filters">
        <div class="filter">
          <label>Category</label>
          <select>
            <option>Select</option>
          </select>
        </div>
        <div class="filter">
          <label>Author</label>
          <select>
            <option>Select</option>
          </select>
        </div>
      </section>
    </div>
  </header>

  <!-- Articles Section -->
  <section class="articles">
    <!-- Repeatable Card -->
    <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

    <!-- Duplicate for demo -->
    <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

    <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

      <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 4</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

      <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 5</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

      <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 6</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

      <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 7</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

      <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 8</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>

      <div class="card">
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Article Image" />
        <button class="category">Category</button>
      </div>
      <div class="card-body">
        <h3>Article 9</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <a href="#">Read Post →</a>
      </div>
    </div>


  </section>

  <!-- Load More Button -->
 <div class="load-more-container">
  <button class="load-more-btn">Load More</button>
</div>
</div> 

<?php
   load_country_footer();
?>

</body>
</html>
