<?php
/**
 * Template Name: Company Overview
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage YourThemeName
*/ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .contact-boxes-section {
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
            background-color: #000;
            padding: 100px 20px;
            /* background: #0B0D16; */
            text-align: center;
            display: column;
        }

        .contact-boxes-section h2 {
            font-size: 36px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 20px;
        }

        .contact-row-body {
            gap: 20px;
            display: flex;
            flex-wrap: wrap;
            margin-top: 40px;
            align-items: center;
            justify-content: center;
        }

        .contact-row-roundedContainer {
            background-color: rgba(255, 255, 255, 0.4);
            box-sizing: border-box;
            border-radius: 20px;
            text-align: left;
            flex: 1 1 30%;
            padding: 30px;
            margin: 20px;
        }
    </style>
</head>
<div class="contact-boxes-section">
    <div class="contact-row-body">


        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 mb-16">
            <!-- Card 1 -->
            <div
                class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
                </div>
                <h3 class="text-2xl font-bold mb-4 text" style="letter-spacing: -0.78px;text-align: start;">FAQs</h3>
                <p class="text-gray-300 text-sm leading-relaxed" style="text-align: start;margin-bottom:10px">
                    Find quick answers to the most common questions about accounts, funding, platforms, and more.
                </p>
                <a href="/faqs">
                    <button
                        class="bg-[#f5ede0] text-black font-medium rounded-full hover:bg-white transition w-full  h-10 block">
                        Read FAQs
                    </button>
                </a>
            </div>
            <!-- Card 2 -->
            <div
                class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
                </div>
                <h3 class="text-2xl font-bold mb-4" style="letter-spacing: -0.78px;text-align: start;">Supported Email
                </h3>
                <?php
                // get the country from session or default to 'uk'
                $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
                if ($country === 'uae') { 
                ?>
                <p class="text-gray-300 text-sm leading-relaxed" style="text-align: start;margin-bottom:10px">
                    Prefer to write to us? Drop us a line at cs@lunaro.com and we’ll get back to you within 1–2 business
                    days.
                </p>
                <a href="mailto:cs@lunaro.com?subject=Support%20Request&body=Hi%2C%20I%20need%20help%20with...">
                    <button
                        class="bg-[#f5ede0] text-black font-medium rounded-full hover:bg-white transition w-full h-10 block">
                        Email Us
                    </button>
                    <?php
                    }else{
                 ?>
                    <p class="text-gray-300 text-sm leading-relaxed" style="text-align: start;margin-bottom:10px">
                        Prefer to write to us? Drop us a line at cs.uk@lunaro.com and we’ll get back to you within 1–2
                        business days.
                    </p>
                    <a href="mailto:cs.uk@lunaro.com?subject=Support%20Request&body=Hi%2C%20I%20need%20help%20with...">
                        <button
                            class="bg-[#f5ede0] text-black font-medium rounded-full hover:bg-white transition w-full h-10 block">
                            Email Us
                        </button>
                        <?php
                    }
                   ?>

                    </a>
            </div>
            <!-- Card 3 -->
            <?php
                             $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 
                if ($country === 'uae') { 
             ?>
            <div
                class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469]  mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
                </div>
                <h1 class="text-2xl font-bold mb-4" style="letter-spacing: -0.78px;text-align: start;">Live Chat</h1>
                <p class="text-gray-300 text-sm leading-relaxed" style="text-align: start;margin-bottom:10px">
                    Need help right away? Chat with our team in real time - available 24/5 during market hours.
                </p>
                <a href="https://wa.me/971527223027?text=Hello%20there!%20I%20need%20help." target="_blank"
                    rel="noopener">
                    <button
                        class="bg-[#f5ede0] text-black font-medium rounded-full hover:bg-white transition w-full  h-10 block">
                        Chat Now
                    </button>
                </a>
            </div>
            <?php }else{
             ?>
            <div
                class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469]  mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
                </div>
                <h1 class="text-2xl font-bold mb-4" style="letter-spacing: -0.78px;text-align: start;">Live Chat</h1>
                <p class="text-gray-300 text-sm leading-relaxed" style="text-align: start;margin-bottom:10px">
                    Need help right away? Chat with our team in real time - available 24/5 during market hours.
                </p>
                <!-- <a href="https://wa.me/971527223027?text=Hello%20there!%20I%20need%20help." target="_blank"
                    rel="noopener"> -->
                <button
                    class="bg-[#f5ede0] text-black font-medium rounded-full hover:bg-white transition w-full  h-10 block">
                    Chat Now
                </button>
                <!-- </a> -->
            </div>
            <?php }
             ?>

        </div>
    </div>
    <h3>We're here to make your trading journey simpler, ever step of the way.</h3>
</div>

<body>
</body>

</html>