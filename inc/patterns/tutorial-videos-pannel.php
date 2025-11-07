<?php

if (!function_exists('apmwptheme_register_getting_started_pattern')) {
    function apmwptheme_register_getting_started_pattern()
    {
        register_block_pattern(
            'apmwptheme/getting-started-tutorials',
            array(
                'title' => __('Getting Started Tutorials', 'apmwptheme'),
                'description' => __('A horizontal scrollable slider showing tutorial cards with video, title, and link.'),
                'categories' => array('columns', 'media', 'text'),
                'content' => '
<!-- wp:group {"align":"full","className":"getting-started-section"} -->
<div class="wp-block-group alignfull getting-started-section">

    <!-- wp:heading {"className":"getting-started-heading"} -->
    <h2 class="getting-started-heading">Getting started</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"tutorial-slider-wrapper"} -->
    <div class="wp-block-group tutorial-slider-wrapper" id="tutor-course-slider">
        <p>Loading tutorials...</p>
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"className":"view-all-link"} -->
    <p class="view-all-link"><a href="#">All ‘getting started’ tutorials</a></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:html -->

<script>
document.addEventListener("DOMContentLoaded", async () => {
    const container = document.getElementById("tutor-course-slider");
    container.innerHTML = "Loading...";

    try {
        const res = await fetch("/wordpress/wp-json/custom/v1/public-courses");
        const data = await res.json();
        container.innerHTML = "";

        if (!Array.isArray(data) || data.length === 0) {
            container.innerHTML = "<p>No tutorials found.</p>";
            return;
        }

        data.forEach(course => {
            const title = course.title || "Untitled Course";
            const link = course.link || "#";
            const desc = course.content ? course.content.slice(0, 100) + "..." : "";
            const video = course.video || "";
            const type = course.video_type || ""; 

            let media = "";
            if (type === "iframe") {
                media = `<iframe width="480" height="250" class="tutorial-thumbnail" src="${video.replace("watch?v=", "embed/")}" frameborder="0" allowfullscreen></iframe>`;
            } else if (type === "mp4" || type === "fallback") {
                media = `<video controls preload="metadata" class="tutorial-thumbnail" width="480" height="250" src="${video}" poster="${poster}"></video>`;
            }

            const card = document.createElement("div");
            card.className = "wp-block-group tutorial-card";
            card.innerHTML = `
                ${media}
                <h4 class="tutorial-title">${title}</h4>
                <p class="tutorial-description">${desc}</p>
                <p class="tutorial-link"><a href="${link}">Watch tutorial 1</a></p>
            `;

            container.appendChild(card);
        });

    } catch (err) {
        console.error("Error loading custom course API:", err);
        container.innerHTML = "<p>Error loading tutorials. Check console for details.</p>";
    }
});
</script>
<!-- /wp:html -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_getting_started_pattern');
}
