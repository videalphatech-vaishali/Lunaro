<!DOCTYPE html>

<head>
    <style>
        .olt-body {
            text-align: center;
            padding: 60px 20px;
        }

        .olt-body h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            color: #fff;
            font-weight: 700;
        }

        .olt-body h4 {
            font-weight: 400;
            color: #fff;
            font-size: 1rem;
            max-width: 900px;
            margin: 0 auto 50px auto;
        }

        /* Bootstrap-style width container */
        .our-leadership-team-section {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 30px;
            width: 100%;
            margin: 0 auto;
            transition: width 0.3s ease;
        }


        @media (max-width: 575.98px) {
            .our-leadership-team-section {
                width: 100%;
            }
        }

        @media (min-width: 576px) {
            .our-leadership-team-section {
                width: 540px;
            }
        }

        @media (min-width: 768px) {
            .our-leadership-team-section {
                width: 720px;
            }
        }

        @media (min-width: 992px) {
            .our-leadership-team-section {
                width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .our-leadership-team-section {
                width: 1140px;
            }
        }

        @media (min-width: 1400px) {
            .our-leadership-team-section {
                width: 1320px;
            }
        }

        /* Leadership Cards */
        .olt-center-square {
            border-radius: 15px;
            overflow: hidden;
            flex: 1 1 calc(33.333% - 30px);
            max-width: 400px;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .olt-center-square:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        .image-card {
            width: 100%;
            height: 340px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content-cards {
            padding: 25px;
            text-align: left;
        }

        .content-cards h2 {
            font-size: 1.3rem;
            color: #fff;
            margin-bottom: 8px;
            text-align: start;
        }

        .content-cards h4 {
            font-size: 0.95rem;
            color: #fff;
            margin-bottom: 12px;
            text-align: start;
        }

        .content-cards p {
            font-size: 0.95rem;
            font-weight: 400;
            color: #fff;
            text-align: start;
        }

        .cta-line {
            text-align: center;
            font-weight: 400;
        }

        .olt-cta-btn {
            background-color: #3C4066;
            display: inline-block;
            border-radius: 30px;
            padding: 12px 24px;
            max-width: fit-content;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
            color: #fff;
        }


        /* Responsive Cards Layout */
        @media (max-width: 1200px) {
            .olt-center-square {
                flex: 1 1 calc(45% - 20px);
            }
        }

        @media (max-width: 900px) {
            .our-leadership-team-section {
                flex-direction: column;
                align-items: center;
            }

            .olt-center-square {
                max-width: 500px;
                flex: 1 1 100%;
            }

            .content-cards {
                text-align: center;
            }
        }

        @media (max-width: 600px) {
            .image-card {
                height: 350px;
            }

            .content-cards {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <?php 
            // get the country from session or default to 'uk'
            $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk'; 

            if ($country === 'uae') { 
            ?>
    <!-- UAE content -->
    <div class="olt-body">
        <h2>Our Leadership Team</h2>
        <h4>Our leadership combines decades of experience across global derivatives, market infrastructure, and
            financial
            technology, guiding Lunaro with integrity, precision, and forward vision to shape the future of regulated
            trading and client excellence.</h4>

        <div class="our-leadership-team-section">
            <!-- 1 -->
            <div class="olt-center-square">
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nicholas.png" alt="">
                </div>
                <div class="content-cards">
                    <h2>Nicholas Spencer-Skeen</h2>
                    <h4>Executive Director</h4>
                    <p>Nick brings over 40 years of experience in global financial markets, specialising in FX and
                        derivatives.
                        A former member of the Futures Industry Clearing Committee and LCH user committee, he has built
                        and led
                        operations for three major international institutions and served as a director at a leading
                        financial
                        software firm. Now based in the UAE, Nick brings his deep industry expertise to Lunaro, driving
                        the firm’s
                        continued growth and excellence.</p>
                </div>
            </div>

            <!-- 2 -->
            <div class="olt-center-square">
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/amit.png" alt="">
                </div>
                <div class="content-cards">
                    <h2>Amit Sharma</h2>
                    <h4>Group CEO</h4>
                    <p>Amit brings over 20 years of international experience in brokerage, trading, and investment
                        management.
                        Based in Dubai, he leads Lunaro’s operations across Dubai, and the UK, driving growth,
                        compliance, and
                        strategic direction. An MBA-qualified executive, he has built and scaled profitable,
                        client-focused
                        businesses across asset classes, combining market insight and operational excellence to deliver
                        lasting
                        results.</p>
                </div>
            </div>

            <!-- 3 -->
            <div class="olt-center-square">
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/disha.png" alt="">
                </div>
                <div class="content-cards">
                    <h2>Disha Rajdev</h2>
                    <h4>Executive Director</h4>
                    <p>Disha is an Executive Director at Lunaro with a vision to provide clients with fast, seamless
                        access to
                        global financial markets. With a background in Econometrics and Quantitative Economics from
                        Northeastern
                        University, Boston, she combines analytical precision with strong leadership. Disha is dedicated
                        to
                        building a secure, growth-oriented organisation where both clients and employees thrive through
                        innovation, collaboration, and integrity.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php 
            } else { 
            ?>
    <!-- UK content -->

    <div class="olt-body">
        <h2>Our Leadership Team</h2>
        <h4>Our leadership combines decades of experience across global derivatives, market infrastructure, and
            financial
            technology, guiding Lunaro with integrity, precision, and forward vision to shape the future of regulated
            trading and client excellence.</h4>

        <div class="our-leadership-team-section">
            <!-- 1 -->
            <div class="olt-center-square">
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joshua.png" alt="">
                </div>
                <div class="content-cards">
                    <h2>Joshua Owen</h2>
                    <h4>Chief Executive Officer</h4>
                    <p>Josh brings over a decade of hands-on trading and leadership experience across FCA-regulated
                        firms.
                        With a background in Mathematics and Statistics, specialising in Quantitative Finance and
                        Machine
                        Learning, he combines analytical precision with deep market insight. Having led trading desks
                        and
                        company operations, Josh understands the realities of client needs, risk, and execution. His
                        leadership focuses on delivering efficient, transparent, and client-driven trading solutions
                        through
                        disciplined governance and strategic vision.</p>

                </div>
            </div>

            <!-- 2 -->
            <div class="olt-center-square">
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/philip.png" alt="">
                </div>
                <div class="content-cards">
                    <h2>Philip Holland</h2>
                    <h4>Executive Director</h4>
                    <p>Phil brings over 17 years of experience in financial services, with more than 15 years in
                        trading leading operations, projects, and integrations across the business. His deep
                        understanding
                        of trading infrastructure and client service ensures seamless delivery and operational
                        excellence.
                        Dedicated to precision and performance, Phil plays a key role in driving Lunaro’s growth through
                        efficient processes, reliable execution, and a strong client focus.
                    </p>
                </div>
            </div>

            <!-- 3 -->
            <div class="olt-center-square">
                <div class="image-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nicholas.png" alt="">
                </div>
                <div class="content-cards">
                    <h2> Nicholas Spencer-Skeen</h2>
                    <h4>Executive Officer</h4>
                    <p>Nick brings over 40 years of experience in global financial markets, specialising in FX and
                        derivatives.
                        A former member of the Futures Industry Clearing Committee and LCH user committee, he has built
                        and led
                        operations for three major international institutions and served as a director at a leading
                        financial
                        software firm. Now based in the UAE, Nick brings his deep industry expertise to Lunaro, driving
                        the
                        firm’s continued growth and excellence.</p>

                </div>
            </div>
        </div>    <!-- line -->
    <p class="cta-line">Whether you're taking your first steps into trading or you're a
        seasoned professional managing significant capital , Lunaro<br>Markets provides the infrastructure, tools, and
        support to help you trade with confidence.
    </p>
    <!-- cta-btn -->
    <div class="olt-cta-btn">Learn more about Lunaro Markets</div>

    <?php } ?>
    </div>




</body>

</html>