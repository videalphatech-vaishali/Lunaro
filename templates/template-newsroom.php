<?php

/**
 * Template Name: NewsRoom Template
 * Template Post Type: post, page
 *
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
  <link rel="stylesheet" href="newsRoom.css" />
</head>
<body>

  <!-- Header Section -->
  <header class="hero">
    <div class="hero-content">
      <h1>Latest Market News</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>

      <!-- Filter Section inside header -->
       <section class="filters">
  <div class="filter-buttons">
    <div class="filter"><label>Category 1</label></div>
    <div class="filter"><label>Category 2</label></div>
    <div class="filter"><label>Category 3</label></div>
  </div>

  <div class="search-container">
    <input type="text" placeholder="Search..." class="search-input">
    <button class="search-btn">🔍</button>
  </div>
</section>
    </div>

    <style>
      




<------------------------------------------------------------------------------------------------------------------------->

/* ----------------------- */
/* RESET & BASE */
/* ----------------------- */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background-color: #04061c;
  color: white;
  overflow-x: hidden;
}

/* ----------------------- */
/* HERO (Top Section) */
/* ----------------------- */
.hero {
  position: relative;
  width: auto;
  height: 300px; /* Adjust height as needed */
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  overflow: hidden;
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blue_backgorund.png');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center 70%;
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
  width: 100%;
  padding-bottom: 40px;
  padding-left: 40px;
}

.hero h1 {
  font-size: 52px;
  letter-spacing: -3%;
  font-weight: 700;
  line-height: 130%;
}

.hero p {
  color: #fff4e4;
  margin-top: 19px;
  margin-bottom: 30px;
  max-width: 600px;
  font-size: 16px;
  letter-spacing: -3%;
  font-weight: 400;
}

/* ----------------------- */
/* FILTERS */
/* ----------------------- */
.filters {
  display: flex;
  justify-content: space-between; /* pushes left and right apart */
  align-items: center;
  flex-wrap: wrap;
  gap: 12px;
  width: 100%;
  padding: 0 40px 40px;
}

.filter-buttons {
  display: flex;
  gap: 12px;
  font-size: 12px;
  flex-wrap: wrap;

}

.filter {
  display: flex;
  align-items: center;
  gap: 10px;
  justify-content: center;
  border: 1px solid #fff4e4;
  border-radius: 40px;
  padding: 8px 16px;
  transition: background 0.2s ease, transform 0.2s ease;
  cursor: pointer;
}

.filter:hover {
  background-color: #10143F;
  color: #fff;
  transform: translateY(-2px);
}

.filter label {
  font-size: 12px;
  margin: 0;
  text-align: center;
  font-weight: 400;
}

/* Search container aligned right */
.search-container {
  display: flex;
  align-items: center;
  border: 1px solid #fff4e4;
  border-radius: 30px;
  padding: 6px 12px;
  width: 360px;
  max-width: 100%;
  background: transparent;
}

.search-input {
  flex: 1;
  border: none;
  outline: none;
  background: transparent;
  color: #fff4e4;
  padding-left: 8px;
}

.search-btn {
  border: none;
  background: transparent;
  cursor: pointer;
  height: 35px;
  width: 20px;
  font-size: 16px;
  color: #fff4e4;
}

/* ----------------------- */
/* ARTICLE GRID */
/* ----------------------- */
.articles {
  display: grid;
  grid-template-columns: repeat(3, minmax(320px, 1fr));
  gap: 16px;
  padding: 0 40px 40px;
}

/* CARD */
.card {
  background:  #04061c;
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
  bottom: 0rem;
  left: 1%;
  gap:10px;
  background: #04061c;
  color: #fff4e4;
  border: 1px solid #fff4e4;
  border-radius: 40px;
  padding: 1.5em 3.5em;
  font-size: clamp(10px, 0.9vw, 14px);
  font-weight: 500;
  text-align: center;
  cursor: pointer;
  transition: background 0.2s ease, transform 0.2s ease;
  white-space: nowrap;
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
  font-size: 21px;
}

.card-body p {
  color: #fff4e4;
  font-size: 16px;
  margin-bottom: 15px;
}

.card-body a {
  text-decoration: none;
  color: #fff4e4;
  font-size: 14px;
  font-weight: 400;
}

/* ----------------------- */
/* LOAD MORE BUTTON */
/* ----------------------- */
.load-more-container {
  display: flex;
  justify-content: center;
  margin-top: 40px;
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
/* TABLET (iPad / iPad Pro) */
@media (max-width: 1024px) {
  .articles {
    grid-template-columns: repeat(2, 1fr);
    gap: 1.2rem;
  }

  .hero {
    height: 260px;
  }

  .image-container {
    aspect-ratio: 4 / 3; /* Taller so text won't overlap */
  }

  .image-container .category {
    bottom: 0.8rem;
    left: 0.1rem;
    padding: 0.3em 0.1em;
    font-size: clamp(12px, 2vw, 15px);
  }

  /* FILTER BAR FIX FOR TABLET */
  .filters {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    row-gap: 8px;
  }

  .filter {
    margin-bottom: 6px;
  }

  .search-container {
    width: 50%;
    min-width: 180px;
    margin-left: auto;
  }
}


/* Mobile View */
@media (max-width: 600px) {
  .articles {
    grid-template-columns: 1fr;
  }

  .hero {
    height: 220px;
    padding: 20px;
  }


  .image-container {
    aspect-ratio: 16 / 10;
  }

  .image-container .category {
    bottom: 3%;
    left: 1%;
    padding: 0.35em 1em;      /* smaller padding */
    font-size: 8px;          /* smaller text */
    border-radius: 30px;
  }

  .load-more-btn {
    width: 100px;
    height: 44px;
    font-size: 14px;
  }

  .load-more-container {
    margin-top: 30px;
  }
  .filters {
    flex-direction: column;
    align-items: flex-start;
  }

  .search-container {
    width: 100%;
    margin-top: 10px;
  
}


}
    </style>
    
  </header>

  <!----Search Bar--->


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


</body>


    <?php
    load_country_footer();
    ?>
</html>