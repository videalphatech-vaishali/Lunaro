<?php

/**
 * Template Name: Resource Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage YourThemeName
 */
get_header('new');
?>

<!-- <style>
    body {
        background-color: white !important;
        margin: 0;
        font-family: Arial, sans-serif;
    }
</style>



<div class="resource-page-content">

   
    set_query_var('lr_title', 'Learning and Resources');
    set_query_var('lr_subtitle', 'Empower your Trading Journey with knowledge.');
    get_template_part('template-parts/global-widgets/page-heading');

    $category_blocks = [
        'news' => [
            'title' => 'Newsroom',
            'subtitle' => 'Stay updated with the latest news and market trends.',
        ],
        'tutorials' => [
            'title' => 'Tutorials',
            'subtitle' => 'Step-by-step guides to help you start trading.',
        ],
        'blogs' => [
            'title' => 'Blogs',
            'subtitle' => 'Market insights, trading strategies, and platform updates.',
        ],
    ];

    $categories = get_categories([
        'taxonomy' => 'category',
        'slug' => array_keys($category_blocks),
        'hide_empty' => true,
    ]);

    foreach ($categories as $category) {
        $slug = $category->slug;
        set_query_var('category_obj', $category);
        set_query_var('category_title', $category_blocks[$slug]['title']);
        set_query_var('category_subtitle', $category_blocks[$slug]['subtitle']);

        get_template_part('template-parts/resource-page-widgets/category-container');
    }

    get_template_part('template-parts/resource-page-widgets/featured');

    set_query_var('click_event1', "_paq.push(['trackEvent', 'Resource-Page', 'Start Trading Now', 'StartTrading']);");
    set_query_var('click_event2', "_paq.push(['trackEvent', 'Resource-Page', 'Start Trading Now', 'Create Demo Account']);");
    set_query_var('start_trading_bg', '#eaeaea');
    get_template_part('template-parts/global-widgets/start-trading');

    load_country_footer();
    ?>

</div> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Hero Section</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --font-primary: "DM Sans", sans-serif;
            --brand-color: #FFF4E4;
            --dark-brand-color: #A89469;
            --black-color: #0B0D16;
            --white-color: #FFF;
        }

        h1,
        h2 {

            font-family: "DM Sans", sans-serif;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.1;
            /* reduce line height */
            margin: 0;
            /* remove default browser margin */


        }

        body {
            color: #111;
            background-color: #0B0D16;
            font-family: var(--font-primary);
        }


        .resource-hero-wrapper {
            position: relative;
            overflow: hidden;
        }


        .resource-hero-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(to bottom, rgba(255, 255, 255, 0.0) 30%, #0B0D16 100%),
                url('./resource-img.png') center/cover no-repeat;
            opacity: 00.1;
            z-index: 0;
        }

        /* Keep content above the background */
        .resource-hero-wrapper>* {
            position: relative;
            z-index: 1;
        }

        .resource-hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 50vh;
            padding: 20px 50px 80px;
            flex-wrap: wrap;
            background-image: url('./group%20second.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .resource-hero-left {
            width: 60%;
        }

        .resource-hero-left h1 {
            margin-bottom: 20px;
            font-family: var(--font-primary);
            color: var(--white-color);
            font-size: 52px;
            font-style: normal;
            font-weight: 800;
            line-height: 130%;
            letter-spacing: -1.56px;
        }

        .resource-hero-left p {
            color: var(--white-color);
            font-family: var(--font-primary);
            font-size: 16px;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.48px;
        }

        .blog-container {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px 80px;
            flex-wrap: wrap;
        }

        .blog-img {
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }

        .blog-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .blog-content {
            width: 50%;
            display: flex;
            flex-direction: column;
            padding: 0 20px;
        }

        .blog-content>h2 {
            color: var(--white-color);
            font-family: var(--font-primary);
            font-size: 26px;
            font-weight: 700;
            line-height: 150%;
            letter-spacing: -0.78px;
            margin-bottom: 10px;
        }

        .blog-content>p {
            color: var(--white-color);
            font-family: var(--font-primary);
            font-size: 16px;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.48px;
            margin-bottom: 15px;
        }

        .blog-content button {
            padding: 10px 20px;
            font-family: var(--font-primary);
            font-size: 14px;
            font-weight: 600;
            color: var(--brand-color);
            cursor: pointer;
            border-radius: 8px;
            border: none;
            background: none;

            transition: all 0.3s ease;
            align-self: flex-start;
        }

























        /* This article */


        .articles-section>.container {
            max-width: 100%;
            margin: 0 auto;

        }

        /* Articles Section */
        .articles-section {
            padding: 20px 50px 80px;
        }

        .section-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            margin-bottom: 10px;
            color: var(--white-color);
            font-family: var(--font-primary);
            font-size: 33px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            letter-spacing: -0.99px;
        }

        .section-title p {
            max-width: 600px;


            color: var(--white-color);

            font-family: var(--font-primary);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.48px;
        }

        .articles-grid-wrapper {
            position: relative;
            overflow: hidden;
        }

        .articles-grid {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding-bottom: 10px;
        }

        .articles-grid::-webkit-scrollbar {
            display: none;
        }

        .article-card {
            background-color: #0B0D16;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;

            min-width: 300px;

        }



        .article-image {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .article-content {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .article-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        .article-category {
            background-color: #ecf0f1;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 600;
        }

        .article-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #fff;
            font-family: var(--font-primary);


        }

        .article-excerpt {
            color: var(--white-color);
            margin-bottom: 20px;
            font-family: var(--font-primary);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.48px;
        }

        .read-more {
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        #prevBtn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            font-size: 18px;
            background: none;
            color: white;
            cursor: pointer;
            border: none;
            border: 1px solid #FFF;
        }

        #nextBtn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            font-size: 18px;
            background: none;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 40px;
            border: 1px solid #FFF;


        }

        #nextBtn:hover,
        #nextBtn:active {
            color: black;

            background: white;
        }

        #prevBtn:hover,
        #prevBtn:active {
            color: black;

            background: white;
        }

        .camp-btn {

            border-radius: 40px;
            border: 1px solid var(--White, #FFF);
            background: none;
            color: var(--white-color);
            padding: 8px 16px;
            font-family: var(--font-primary);
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.36px;
            cursor: pointer;

        }

        .mintue-btn {
            border-radius: 40px;
            border: 1px solid var(--White, #FFF);
            background: none;
            color: var(--white-color);
            padding: 8px 16px;
            font-family: var(--font-primary);
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.36px;
            cursor: pointer;

        }




        /* Responsive */
        @media (max-width: 768px) {
            .section-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
        }














        @media (max-width: 1200px) {
            .resource-hero-left h1 {
                font-size: 45px;
            }

            .blog-content h2 {
                font-size: 24px;
            }
        }

        @media (max-width: 992px) {
            .resource-hero-left h1 {
                font-size: 2.2rem;
            }

            .blog-container {
                padding: 20px 30px 50px;
            }

            .blog-content {
                width: 100%;
                padding: 0;
                text-align: center;
            }

            .blog-content button {
                align-self: center;
            }

            .blog-img {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .resource-hero-section {
                flex-direction: column-reverse;
                text-align: center;
                padding: 20px;
            }

            .resource-hero-left {
                width: 100%;
            }

            .resource-hero-left h1 {
                font-size: 2rem;
            }

            .resource-hero-left p {
                font-size: 1rem;
            }

            .blog-container {
                flex-direction: column;
                align-items: center;
                padding: 15px;
            }

            .blog-img {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 480px) {
            .resource-hero-left h1 {
                font-size: 1.7rem;
            }

            .resource-hero-left p {
                font-size: 0.9rem;
            }

            .blog-content h2 {
                font-size: 20px;
            }

            .blog-content p {
                font-size: 0.9rem;
            }

            .blog-content button {
                padding: 8px 16px;
                font-size: 13px;
            }
        }















        .expert-section {
            width: 100%;
            padding: 60px 0;

        }

        .expert-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 0 50px 80px;
            gap: 40px;
            max-width: 100%;
            margin: 0 auto;
        }

        /* ---------- Left Side ---------- */
        .expert-left {
            width: 40%;
        }

        .expert-left .heading {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: 41px;
            font-weight: 700;
            line-height: 1.1;
            /* Tight vertical spacing for DM Sans */
            letter-spacing: -1.23px;
            margin: 0 0 24px 0;
            padding: 0;
        }

        .expert-left p {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: -0.48px;
            margin: 0;
        }

        .expert-left button {
            padding: 16px 24px;
            border-radius: 100px;
            margin-top: 28px;
            border: none;
            background: var(--brand-color);
            color: #0b0b0b;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .expert-left button:hover {
            opacity: 0.85;
        }

        /* ---------- Right Side ---------- */
        .expert-right {
            width: 40%;
        }

        .inner-content h2 {
            color: var(--brand-color);
            font-family: var(--font-primary);
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .card-items {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .card-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .card-item p {
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: 16px;
            margin: 0;
            font-size: 17px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
            /* 25.5px */
            letter-spacing: -0.51px;
        }

        .expert-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--dark-brand-color);
        }

        /* ---------- Responsive ---------- */

        /* Tablets (≤ 992px) */
        @media (max-width: 992px) {
            .expert-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 50px;
                padding: 0 30px 60px;
            }

            .expert-left,
            .expert-right {
                width: 100%;
            }

            .expert-left .heading {
                font-size: 34px;
                line-height: 1.2;
            }

            .expert-left p {
                font-size: 15px;
            }
        }

        /* Mobile (≤ 576px) */
        @media (max-width: 576px) {
            .expert-container {
                padding: 0 20px 40px;
            }

            .expert-left .heading {
                font-size: 26px;
                line-height: 1.25;
            }

            .expert-left p {
                font-size: 14px;
            }

            .inner-content h2 {
                font-size: 20px;
            }

            .card-items {
                gap: 20px;
            }

            .expert-icon {
                width: 32px;
                height: 32px;
            }
        }

        /* market rith section */

        .market-section {
            width: 100%;
            padding: 20px 50px 80px;
            box-sizing: border-box;
        }

        .market-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            width: 100%;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .market-left,
        .market-right {
            width: 40%;
            box-sizing: border-box;
        }

        /* Left Section */
        .market-left h1 {
            color: var(--brand-color);
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 33px;
            line-height: 150%;
            letter-spacing: -0.99px;
        }

        .market-left p {
            color: var(--brand-color);
            font-size: 17px;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.51px;
            margin: 0 0 16px 0;
        }

        .market-content h3 {
            color: var(--brand-color);
            font-weight: 500;
            margin: 24px 0;
        }

        .market-card {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 20px;
        }

        .market-right h1 {
            color: var(--brand-color);
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 33px;
            line-height: 150%;
            letter-spacing: -0.99px;
        }

        .market-right p {
            color: var(--brand-color);
            font-size: 17px;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.51px;
            margin: 0 0 16px 0;
        }

        .market-card>.market-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid var(--dark-brand-color);
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .market-card p {
            color: var(--brand-color);
            margin: 0;
        }



        /* Responsive Styles */
        @media (max-width: 1024px) {

            .market-left,
            .market-right {
                width: 48%;
            }
        }

        @media (max-width: 768px) {

            .market-left,
            .market-right {
                width: 100%;
            }

            .market-container {
                gap: 20px;
                padding: 0 10px;
            }
        }


















        .learning-section {
            width: 100%;
            margin: 0 auto;
            padding: 0 50px 80px;
            border-radius: 15px;
        }

        .learning-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
            color: var(--white-color);
        }

        .learning-header-text {
            flex: 1 1 60%;
        }

        .learning-header-text h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--white-color);
        }

        .learning-header-text p {
            font-size: 1rem;
            color: var(--white-color);
        }

        .learning-nav-buttons {
            display: flex;
            gap: 10px;
            flex: 1 1 30%;
            justify-content: flex-end;
        }

        .learning-nav-buttons button {
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border: none;
            background-color: var(--black-color);
            color: var(--white-color);
            border-radius: 5px;
            font-weight: bold;
        }

        .learning-card-container {
            overflow: hidden;
            width: 100%;
        }

        .learning-cards {
            display: flex;
            transition: transform 0.5s ease;
            gap: 20px;
        }

        .learning-card {
            flex: 0 0 calc((100% - 40px) / 3);
            padding: 15px;
            border-radius: 10px;

            min-width: 200px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            height: 100%;
        }

        .learning-card-image-wrapper {
            position: relative;
            width: 100%;
            height: 350px;
            overflow: hidden;
            border-radius: 10px;
        }

        .learning-card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .learning-card-image-wrapper button {
            position: absolute;
            bottom: 0;
            left: 5%;

            padding: 8px 16px;
            border: none;
            background-color: var(--dark-brand-color);
            color: var(--white-color);

            cursor: pointer;


            border-radius: 40px;
            border: 1px solid var(--White, #FFF);
            background: rgba(255, 255, 255, 0.10);
        }

        .learning-card h3 {
            margin-top: 16px;
            margin-bottom: 16px;
            color: var(--white-color);



            font-family: var(--font-primary);
            font-size: 21px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;

            letter-spacing: -0.63px;
        }

        #learning-prev,
        #learning-next {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            font-size: 18px;
            border: 1px solid var(--white-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #learning-prev:hover,
        #learning-next:hover {
            background: var(--white-color);
            color: var(--black-color);
        }


        .learning-card p {
            color: var(--white-color);

            /* P */
            font-family: var(--font-primary);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.48px;
        }

        .learning-card p span {
            font-weight: bold;
        }

        .learning-card button.main-btn {
            display: block;
            text-align: center;
            width: 40%;
            padding: 12px 0;
            margin-top: auto;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            background: none;
            text-align: start;
            color: var(--brand-color);
            font-family: var(--font-primary);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%;
            letter-spacing: -0.48px;
        }

        .learning-card button.main-btn:hover {
            background-color: #4242462a;
            /* pure black background */
            color: var(--white-color);
        }


        @media (max-width: 1024px) {
            .learning-card {
                flex: 0 0 calc((100% - 20px) / 2);
            }
        }

        @media (max-width: 600px) {
            .learning-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .learning-nav-buttons {
                justify-content: flex-start;
                margin-top: 10px;
            }

            .learning-card {
                flex: 0 0 100%;
            }
        }
    </style>


</head>

<body>

    <section>
        <div class="resource-hero-wrapper">
            <div class="resource-hero-section">
                <div class="resource-hero-left">
                    <h1>Empower Your Trading Journey with Knowledge</h1>
                    <p>
                        Spread betting enables you to speculate on price movements across global financial markets
                        without
                        owning the underlying asset. Go long (buy) when you expect prices to rise, or short (sell) when
                        you
                        anticipate a decline. Your profit or loss depends on how far the market moves in your chosen
                        direction and how much you stake per point.
                    </p>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/blog1.png" alt="">
                </div>
                <div class="blog-content">
                    <h2>Blog</h2>
                    <p>Stay updated on market movements with expert insights, trading strategies, and platform updates
                        from our team of professional analysts.</p>
                    <button>
                        Read more.
                    </button>
                </div>

            </div>
            <div class="blog-container">
                <div class="blog-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/blog2.png" alt="">
                </div>
                <div class="blog-content">
                    <h2>Newsroom</h2>
                    <p>Get real-time market news, economic updates, and company announcements that impact your trading
                        decisions and market opportunities. </p>
                    <button>
                        Read more.
                    </button>
                </div>

            </div>
            <div class="blog-container">
                <div class="blog-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/blog3.png" alt="">
                </div>
                <div class="blog-content">
                    <h2>Tutorials</h2>
                    <p>Build your trading skills with our step-by-step video guides covering everything from basic
                        concepts to advanced trading techniques and platform mastery.</p>
                    <button>
                        Read more.
                    </button>
                </div>

            </div>
        </div>
    </section>





    <!-- Articles Section -->
    <section class="articles-section" id="articles">
        <div class="container">
            <div class="section-title">
                <div class="title-section">
                    <h2>Read Articles</h2>
                    <p>Explore quick tips and insights to boost your marketing game</p>
                </div>
                <div style="display: flex; gap: 10px;">
                    <button id="prevBtn">← </button>
                    <button id="nextBtn"> →</button>
                </div>
            </div>

            <div class="articles-grid-wrapper">
                <div class="articles-grid">
                    <!-- Article 1 -->
                    <div class="article-card">
                        <div class="article-image"
                            style=" display: flex; align-items: center; justify-content: center; height: 400px; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="subtract" style=" height: 100%; object-fit: contain;">
                            <div style="position: absolute; bottom: 0;  left: 4%;">
                                <button class="camp-btn">Campaign</button>
                                <button class="mintue-btn">5min read</button>

                            </div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">How to create marketing campaigns that actually convert</h3>
                            <p class="article-excerpt">Learn how to craft messages that drive action and deliver results
                            </p>
                        </div>
                    </div>


                    <!-- Article 2 -->
                    <div class="article-card">
                        <div class="article-image"
                            style=" display: flex; align-items: center; justify-content: center; height: 400px; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract2.png" alt="subtract" style=" height: 100%; object-fit: contain;">
                            <div style="position: absolute; bottom: 0;  left: 4%;">
                                <button class="camp-btn">Campaign</button>
                                <button class="mintue-btn">5min read</button>

                            </div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">Why building a memorable brand is more than just a logo</h3>
                            <p class="article-excerpt">Discover the elements that make a brand stand out in a crowded
                                market
                            </p>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="article-card">
                        <div class="article-image"
                            style=" display: flex; align-items: center; justify-content: center; height: 400px; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="subtract" style=" height: 100%; object-fit: contain;">
                            <div style="position: absolute; bottom: 0; left: 4%;">
                                <button class="camp-btn">Campaign</button>
                                <button class="mintue-btn">5min read</button>

                            </div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">The essential guide to getting started with digital marketing</h3>
                            <p class="article-excerpt">A beginner-friendly guide to channels, tools, and smart
                                strategies
                            </p>
                        </div>
                    </div>

                    <!-- Article 4 -->
                    <div class="article-card">
                        <div class="article-image"
                            style=" display: flex; align-items: center; justify-content: center; height: 400px; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="subtract" style=" height: 100%; object-fit: contain;">
                            <div style="position: absolute; bottom: 0;  left: 4%;">
                                <button class="camp-btn">Campaign</button>
                                <button class="mintue-btn">5min read</button>

                            </div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">Why building a memorable brand is more than just a logo</h3>
                            <p class="article-excerpt">Discover the elements that make a brand stand out in a crowded
                                market
                            </p>
                        </div>
                    </div>

                    <!-- Article 5 -->
                    <div class="article-card">
                        <div class="article-image"
                            style=" display: flex; align-items: center; justify-content: center; height: 400px; position: relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="subtract" style=" height: 100%; object-fit: contain;">
                            <div style="position: absolute; bottom: 0; left: 4%;">
                                <button class="camp-btn">Campaign</button>
                                <button class="mintue-btn">5min read</button>

                            </div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">How to create marketing campaigns that actually convert</h3>
                            <p class="article-excerpt">Learn how to craft messages that drive action and deliver results
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="learning-section">
        <div class="learning-header">
            <div class="learning-header-text">
                <h1>Learning Pathways</h1>
                <p>Choose your educational journey based on your experience level and trading goals.</p>
            </div>
            <div class="learning-nav-buttons">
                <button id="learning-prev">&#8592;</button>
                <button id="learning-next">&#8594;</button>
            </div>
        </div>

        <div class="learning-card-container">
            <div class="learning-cards" id="learning-cards">

                <div class="learning-card">
                    <div class="learning-card-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Card 1 Image">
                        <button>Beginner Pathway</button>
                    </div>
                    <h3>New to trading?</h3>
                    <p>Start with our foundation courses covering market basics, platform navigation, and essential risk
                        management principles.</p>
                    <p><span>Key Topics:</span> Understanding financial markets, How to read price charts, Basic order
                        types and execution, Risk management fundamentals, Demo account practice guide</p>
                    <p><span>Estimated Time:</span> 2-3 weeks.</p>
                    <button class="main-btn">Start Beginner Course <span
                            style="margin-left: 20px;">&#8594;</span></button>
                </div>

                <div class="learning-card">
                    <div class="learning-card-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Card 2 Image">
                        <button> Intermediate Pathway</button>
                    </div>
                    <h3> Building Skills?</h3>
                    <p>Expand your knowledge with technical analysis, indicators, and trading strategies for real market
                        conditions.</p>
                    <p><span>Key Topics:</span> Technical indicators, Chart patterns, Risk-to-reward ratio, Demo & live
                        trading strategies</p>
                    <p><span>Estimated Time:</span> 3-4 weeks.</p>
                    <button class="main-btn">Start Beginner Course <span
                            style="margin-left: 20px;">&#8594;</span></button>
                </div>

                <div class="learning-card">
                    <div class="learning-card-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Card 3 Image">
                        <button>Advanced Pathway</button>
                    </div>
                    <h3>Advanced trader?</h3>
                    <p>Master advanced strategies including algorithmic trading, portfolio management, and market
                        psychology.</p>
                    <p><span>Key Topics:</span> Algorithmic trading, Advanced risk management, Strategy optimization,
                        Behavioral finance</p>
                    <p><span>Estimated Time:</span> 4-6 weeks.</p>
                    <button class="main-btn">Start Beginner Course <span
                            style="margin-left: 20px;">&#8594;</span></button>
                </div>

                <div class="learning-card">
                    <div class="learning-card-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Card 4 Image">
                        <button>Learn More</button>
                    </div>
                    <h3>Expert level?</h3>
                    <p>Refine professional trading skills, including institutional strategies, high-frequency trading,
                        and portfolio analysis.</p>
                    <p><span>Key Topics:</span> Institutional strategies, High-frequency trading, Portfolio
                        optimization, Professional market insights</p>
                    <p><span>Estimated Time:</span> 6-8 weeks.</p>
                    <button class="main-btn">Start Beginner Course <span
                            style="margin-left: 20px;">&#8594;</span></button>
                </div>

                <div class="learning-card">
                    <div class="learning-card-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Card 4 Image">
                        <button>Learn More</button>
                    </div>
                    <h3>Expert level?</h3>
                    <p>Refine professional trading skills, including institutional strategies, high-frequency trading,
                        and portfolio analysis.</p>
                    <p><span>Key Topics:</span> Institutional strategies, High-frequency trading, Portfolio
                        optimization, Professional market insights</p>
                    <p><span>Estimated Time:</span> 6-8 weeks.</p>
                    <button class="main-btn">Start Beginner Course <span
                            style="margin-left: 20px;">&#8594;</span></button>
                </div>

                <div class="learning-card">
                    <div class="learning-card-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/Subtract.png" alt="Card 4 Image">
                        <button>Learn More</button>
                    </div>
                    <h3>Expert level?</h3>
                    <p>Refine professional trading skills, including institutional strategies, high-frequency trading,
                        and portfolio analysis.</p>
                    <p><span>Key Topics:</span> Institutional strategies, High-frequency trading, Portfolio
                        optimization, Professional market insights</p>
                    <p><span>Estimated Time:</span> 6-8 weeks.</p>
                    <button class="main-btn">Start Beginner Course <span
                            style="margin-left: 20px;">&#8594;</span></button>
                </div>

            </div>
        </div>
    </section>
    <section class="expert-section">
        <div class="expert-container">
            <!-- Left Section -->
            <div class="expert-left">
                <h1 class="heading">
                    Connect with fellow traders and access professional guidance to accelerate your learning.
                </h1>
                <p>
                    Connect with traders worldwide, share strategies, ask questions, and learn from experienced market
                    participants in our moderated forums.
                </p>
                <button>Join Community</button>
            </div>

            <!-- Right Section -->
            <div class="expert-right">
                <div class="inner-content">

                    <div class="card-items">
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/message-chat-circle.svg" alt="">
                            </div>
                            <p>Strategy discussion forums</p>
                        </div>
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/bar-chart-07.svg" alt="">
                            </div>
                            <p>Market analysis sharing</p>
                        </div>
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/message-question-circle.svg" alt="">
                            </div>
                            <p>Weekly Q&A sessions</p>
                        </div>
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/user-check-01.svg" alt="">
                            </div>
                            <p>Peer mentorship programs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="expert-section">
        <div class="expert-container">
            <!-- Left Section -->
            <div class="expert-left">
                <h1 class="heading">
                    Expert Guidance
                </h1>
                <p>
                    Schedule one-on-one sessions with our certified trading specialists for personalized strategy
                    development and account optimization.
                </p>
                <button>Join Community</button>
            </div>

            <!-- Right Section -->
            <div class="expert-right">
                <div class="inner-content">
                    <h2>What you get:</h2>
                    <div class="card-items">
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/annotation-check.svg" alt="">
                            </div>
                            <p>Personalized trading strategy tailored to your goals.</p>
                        </div>
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/message-chat-square.svg" alt="">
                            </div>
                            <p>Personalized trading plan development</p>
                        </div>
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/graduation-hat-02.svg" alt="">
                            </div>
                            <p>Platform training and setup</p>
                        </div>
                        <div class="card-item">
                            <div class="expert-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/heart.svg" alt="">
                            </div>
                            <p>Ongoing strategy support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="market-section">
        <div class="market-container">
            <!-- Left Section -->
            <div class="market-left">
                <h1>Market Analysis Tools</h1>
                <p>Access professional-grade market analysis tools including economic calendars, market sentiment
                    indicators, and volatility trackers.</p>
                <div class="market-content">
                    <h3>Market Analysis Tools</h3>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Economic calendar with impact ratings</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Market sentiment indicators</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Volatility trackers</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Customizable alerts</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Historical market data</p>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="market-right">
                <h1>Master Trading Terminology</h1>
                <p>A comprehensive glossary of trading terms, market concepts, and technical indicators explained in
                    clear, accessible language. </p>
                <div class="market-content">
                    <h3>Master Trading Terminology</h3>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Economic calendar with impact ratings</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Market sentiment indicators</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Volatility trackers</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Customizable alerts</p>
                    </div>
                    <div class="market-card">
                        <div class="market-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/res/check.svg" alt="Check">
                        </div>
                        <p>Historical market data</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const articlesGrid = document.querySelector('.articles-grid');

        const scrollAmount = 320;

        nextBtn.addEventListener('click', () => {
            articlesGrid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            articlesGrid.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });



        const learningCards = document.getElementById('learning-cards');
        const learningPrev = document.getElementById('learning-prev');
        const learningNext = document.getElementById('learning-next');

        let index = 0;
        const totalCards = 6;

        const cardsPerView = () => {
            if (window.innerWidth <= 600) return 1;
            if (window.innerWidth <= 1024) return 2;
            return 3;
        }

        const updateCards = () => {
            const perView = cardsPerView();
            const maxIndex = totalCards - perView;
            if (index < 0) index = 0;
            if (index > maxIndex) index = maxIndex;
            const cardWidth = learningCards.children[0].offsetWidth + 20; // gap
            learningCards.style.transform = `translateX(-${index * cardWidth}px)`;
        }

        learningPrev.addEventListener('click', () => {
            index--;
            updateCards();
        });

        learningNext.addEventListener('click', () => {
            index++;
            updateCards();
        });

        window.addEventListener('resize', updateCards);
        updateCards();
    </script>
 <?php
       load_country_footer();
    ?>
</body>

</html>
