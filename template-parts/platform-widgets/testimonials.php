<?php

/**
 * Template Name: Testimonials Loop
 */

$widget_query = new WP_Query([
    'post_type' => 'testimonies',
    'posts_per_page' => -1
]);

$startTradingBg = get_query_var('testimonial_bg', 'white'); // default white
?>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .testimonials-section {
        padding: 30px 40px;
        text-align: start;

        background-color: <?php echo esc_attr($startTradingBg); ?>;
    }

    .testimonials-heading {

        font-size: 32px;
        font-weight: 600;
        margin-bottom: 40px;
    }

    .testimonials-marquee {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .testimonials-wrapper {
        display: flex;
        align-items: stretch;

        width: fit-content;
        /* Align all items to same height */
        gap: 30px;
        animation: scrollLeft 30s linear infinite;
    }

    .testimonial-card {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        text-align: center;
        box-sizing: border-box;
        width: 300px;
        max-width: 400px;
        min-height: 220px;
        background: <?php echo esc_attr($startTradingBg); ?>;
        flex-shrink: 0;
    }

    .testimonial-content {
        display: flex;
        flex-direction: column;
        align-self: start;
        flex-grow: 1;
    }

    .testimonial-description {
        font-size: 14px;
        line-height: 1.6;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
        padding: 0;
    }

    .testimonial-footer {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: auto;
        text-align: center;
    }


    .testimonial-image img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
    }

    .testimonial-placeholder {
        width: 36px;
        height: 36px;
        background-color: white;
        border-radius: 50%;
    }

    .testimonial-name {
        text-align: end;
        font-size: 15px;
        color: #000;
    }

    /* Hide scrollbar */
    .testimonials-marquee::-webkit-scrollbar {
        display: none;
    }

    .testimonials-marquee {
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 0 30px;
        /* ensures content doesn't go under arrows */
        width: 100%;
        box-sizing: border-box;
    }

    .testimonials-wrapper {
        display: flex;
        gap: 30px;
        animation: none !important;
        /* stop auto scroll for mobile */
    }

    .scroll-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        background: transparent;
        border: none;
        cursor: pointer;
        display: none;
        padding: 0;
    }

    .scroll-arrow img {
        width: 30px;
        height: 30px;
        opacity: 0.7;
        transition: opacity 0.2s;
    }

    .scroll-arrow img:hover {
        opacity: 1;
    }

    .scroll-arrow.left {
        left: -1px;
    }

    .scroll-arrow.right {
        right: -1px;
    }

    .testimonials-scroll-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* -----------------------------------------------------------mobile view---------- */
    @media (max-width: 768px) {
        .testimonials-section {
            padding: 20px;
        }

        .scroll-arrow {
            display: block;
        }

        .testimonials-marquee {
            overflow-x: auto;
            scroll-behavior: smooth;
        }

        .testimonials-wrapper {
            animation: none !important;
        }

        .testimonial-card {
            /* center it inside container */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            text-align: center;
            font-size: 12;
            box-sizing: border-box;
            width: 290px;
            max-width: 300px;
            min-height: 130px;
            background: <?php echo esc_attr($startTradingBg); ?>;
            flex-shrink: 0;
        }

        .testimonial-name {
            text-align: end;
            font-size: 15px;
            color: #000;
        }

    }

    /* ----------------------------------------------------------mobile view----------- */
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/testimonials-style.css">
</head>

<body>
    <script>
        function shouldAnimate() {
            const wrapper = document.querySelector('.testimonials-wrapper');
            const marquee = document.querySelector('.testimonials-marquee');

            if (!wrapper || !marquee) return;

            // Compare scroll width (true content width) with visible area
            const wrapperWidth = wrapper.scrollWidth;
            const visibleWidth = marquee.offsetWidth;

            if (wrapperWidth > visibleWidth) {
                wrapper.classList.add('animate');
            } else {
                wrapper.classList.remove('animate');
            }
        }

        window.addEventListener('load', shouldAnimate);
        window.addEventListener('resize', () => {
            // Debounce to prevent rapid triggering
            clearTimeout(window.scrollCheckTimeout);
            window.scrollCheckTimeout = setTimeout(shouldAnimate, 150);
        });
    </script>
    <script>
        const scrollAmount = 320; // width of one card + gap
        function scrollTestimonials(direction) {
            const container = document.getElementById('testimonialsMarquee');
            if (!container) return;

            const scrollLeft = container.scrollLeft;
            const maxScrollLeft = container.scrollWidth - container.clientWidth;

            container.scrollBy({
                left: direction === 'left' ? -scrollAmount : scrollAmount,
                behavior: 'smooth'
            });

            setTimeout(() => updateArrowState(container), 400);
        }

        function updateArrowState(container) {
            const leftArrow = document.querySelector('.scroll-arrow.left');
            const rightArrow = document.querySelector('.scroll-arrow.right');
            const cardCount = container.querySelectorAll('.testimonial-card').length;

            // If only one or zero cards, hide both arrows
            if (cardCount <= 1) {
                leftArrow.style.display = 'none';
                rightArrow.style.display = 'none';
                return;
            }

            // Otherwise, show both initially
            leftArrow.style.display = 'block';
            rightArrow.style.display = 'block';

            const scrollLeft = container.scrollLeft;
            const maxScrollLeft = container.scrollWidth - container.clientWidth;

            // Hide left arrow if at start
            if (scrollLeft <= 0) {
                leftArrow.style.display = 'none';
            }

            // Hide right arrow if at end
            if (scrollLeft >= maxScrollLeft - 5) {
                rightArrow.style.display = 'none';
            }
        }
        window.addEventListener('load', () => {
            const container = document.getElementById('testimonialsMarquee');
            if (container) updateArrowState(container);
        });

        window.addEventListener('resize', () => {
            const container = document.getElementById('testimonialsMarquee');
            if (container) updateArrowState(container);
        });

        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('testimonialsMarquee');
            if (!container) return;

            updateArrowState(container);

            container.addEventListener('scroll', () => updateArrowState(container));

            window.addEventListener('resize', () => updateArrowState(container));
            window.addEventListener('load', () => updateArrowState(container));
        });
    </script>

    <?php if ($widget_query->have_posts()) : ?>
        <section class="testimonials-section">
            <h2 class="testimonials-heading">Testimonials</h2>
            <div class="testimonials-scroll-container">
                <button class="scroll-arrow left" onclick="scrollTestimonials('left')">
                    <img src="https://img.icons8.com/?size=100&id=39790&format=png&color=000000" alt="Left Arrow" style="transform: rotate(180deg);">
                </button>

                <div class="testimonials-marquee" id="testimonialsMarquee">
                    <div class="testimonials-wrapper">
                        <?php while ($widget_query->have_posts()) : $widget_query->the_post(); ?>
                            <div class="testimonial-card">
                                <div class="testimonial-content">
                                    <p class="testimonial-description"><?php the_content(); ?></p>
                                    <div class="testimonial-footer">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="testimonial-image"><?php the_post_thumbnail('thumbnail'); ?></div>
                                        <?php else : ?>
                                            <div class="testimonial-placeholder"></div>
                                        <?php endif; ?>
                                        <span class="testimonial-name"><?php the_title(); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <button class="scroll-arrow right" onclick="scrollTestimonials('right')">
                    <img src="https://img.icons8.com/?size=100&id=39790&format=png&color=000000" alt="Right Arrow">
                </button>
            </div>


        </section>
    <?php wp_reset_postdata();
    else : ?>

    <?php endif; ?>

</body>

</html>