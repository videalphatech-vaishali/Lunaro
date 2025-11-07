<?php
// trading-cta.php

// Optional: Include WordPress functions if this is a standalone file
// require_once('../../../wp-load.php');
?>



<style>
    .cta-section {
     background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
     background-color: #000;

        display: flex;
        gap: 80px;
        align-items: flex-start;
        padding: 5rem 5rem;
        background-color: #000;
    }

    .cta-text {
        max-width: 50%;
    }

    .cta-text h2 {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .cta-text p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .cta-button {
        background-color:  #FFF4E4;
        color: black;
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
    }

    .cta-support {
        margin-top: 40px;
        font-size: 15px;
    }

    .cta-support a {
        color: #fff;
        text-decoration: underline;
    }

    .cta-image-placeholder {
        width: auto;
        height: 260px; 
    }

    @media(max-width:768px) {
        .cta-section {
            padding: 20px;
        }
    }
</style>

<div class="cta-section">
    <div class="cta-text">
        <h2>Ready to start trading?</h2>
        <p>Ready to join us? Sign up now and start trading with transparent,competitive pricing.</p>


        <div class="cta-support">
            <p>If you still have questions about our services,
                <a href="faqs/">check out our FAQs</a> or
                <a href="#">contact our support team</a>.
            </p>
        </div>
                <button class="cta-button">Sign up</button>
    </div>

    <div class="cta-image-placeholder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ready-to-start.png" alt=""  ></div>
</div>