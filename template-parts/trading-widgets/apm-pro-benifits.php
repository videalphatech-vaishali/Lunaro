<style>
    .company-overview-block {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 30px 40px;
        background-color: white;
        border-radius: 10px;
        font-family: Arial, sans-serif;
    }

    .company-overview-content {
        flex: 1;
    }

    .company-overview-content h2 {
        font-size: 28px;
        margin-bottom: 10px;
        color: #333;
    }

    .company-overview-content p {
        font-size: 16px;
        color: #666;
        max-width: 850px;
        margin-bottom: 20px;
    }

    .overview-button {
        display: inline-block;
        background-color: #65558f;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .overview-button:hover {
        background-color: #4529a2;
    }

    .company-overview-image {
        flex: 1;
        height: 300px;
        background-size: cover;
        background-color: #cce0ff;
        max-width: 650px;
        background-position: center;
        border-radius: 10px;
    }

    @media(max-width:768px) {
        .company-overview-block {
            padding: 20px;
        }
    }
</style>

<div class="company-overview-block">
    <div class="company-overview-content">
        <h2>APM Pro Benifits</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. We provide industry-leading solutions tailored to your needs.</p>
        
    </div>
    <div class="company-overview-image" style="background-image: url('<?php echo esc_url($overview_image_url ?? ''); ?>');"></div>
</div>