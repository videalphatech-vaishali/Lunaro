<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunaro</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        :root {
            --bg-start: #04061C;
            --bg-mid: #1E2F68;
            --bg-accent: #D9B464;
            --panel: #0B0D16;
            --muted-panel: rgba(160, 163, 186, 0.2);
            --gold: #A89469;
            --text-white: #ffffff;
            --max-width: 100%;
            --radius: 12px;
            --glass: rgba(17, 24, 39, 0.98);
            --shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
            font-family: "DM Sans", sans-serif;
        }

        /* Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "DM Sans", sans-serif;
        }

        html,
        body {
            height: 100%
        }

        body {
            color: var(--text-white);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            line-height: 1.4;
        }

        a {
            color: inherit;
            text-decoration: none
        }

        img {
            max-width: 100%;
            display: block
        }

        /* Top risk banner */
        .risk {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999999;
            /* highest priority */
            background: #3C4066;
            color: #fff;
        }

        .risk .container {
            text-align: center;
            font-size: 14px;
            line-height: 1.5;
            padding: 10px 0px;
        }

        /* Retail/Pro toggle row */
        .account-toggle {
            display: flex;
            gap: 16px;
            background: #000;
            padding: 12px 16px 0;
            justify-content: flex-start;
        }

        .account-toggle button {
            background: transparent;
            color: #fff;
            padding: 10px 24px;
            border: 0;
            border-bottom: 4px solid transparent;
            cursor: pointer;
            font-weight: 600;
            transition: all .18s;
        }

        .account-toggle button:focus {
            outline: none
        }

        .account-toggle button.active {
            border-bottom-color: var(--gold)
        }

        header {
            position: relative;
        }

        /* Header */
        header.header {
            z-index: 50;
            background: linear-gradient(68deg, #04061c -29.7%, #1e2f68 60.3%, #d9b464 105.88%);
        }

        .header-inner {
            max-width: var(--max-width);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            width: 300px;
        }

        /* Desktop nav */
        nav.main-nav {
            display: none;
            width: 65%;
            gap: 20px;
            align-items: center;
        }


        nav.main-nav a {
            color: var(--text-white);
            font-size: 17px;
            display: inline-block;
            font-weight: 500;
        }

        /* submenu panel */
        .submenu {
            position: absolute;
            left: 0;
            top: calc(100% + 6px);
            width: 100vw;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-12px);
            transition: all .28s ease;
            background: var(--panel);
            border-top: 1px solid rgba(128, 128, 128, 0.08);
            padding: 22px 100px;
            box-shadow: var(--shadow);
            z-index: 40;
        }

        .nav-item:hover .submenu,
        .nav-item.show-sub .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .nav-item:hover {
            background: #FFFFFF1A;
        }

        .submenu-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.25rem;
        }

        .submenu h3 {
            font-size: 15px;
            margin-bottom: 8px;
            font-weight: 700;
            cursor: pointer
        }

        /* Right actions */
        .actions {
            display: none;
            gap: 12px;
            width: 400px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 999px;
            border: 1px solid #FFF4E4;
            background: transparent;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;

        }

        .btn.secondary {
            background: #FFF4E4;
            color: #000;
            border-color: transparent
        }

        .signup-btn {
            padding: 8px 16px;
            border-radius: 100px;
            border: none;
            color: #0B0D16;
            background: #FFF4E4 !important;
            font-weight: 600;
        }

        /* Mobile header actions */
        .mobile-actions {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .mobile-actions .btn {
            padding: 8px 12px;
            border-radius: 8px
        }

        /* Mobile drawer */
        .mobile-drawer {
            position: fixed;
            top: 0;
            right: -100%;
            width: 85%;
            max-width: 400px;
            height: 100vh;
            background: var(--glass);
            backdrop-filter: blur(10px);
            transition: right .4s ease;
            z-index: 120;
            overflow-y: auto;
            box-shadow: -5px 0 20px rgba(0, 0, 0, 0.4);
            color: #fff;
            padding: 18px;
        }

        .mobile-drawer.active {
            right: 0
        }

        .overlay {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.65);
            z-index: 110;
            opacity: 0;
            visibility: hidden;
            transition: all .28s;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible
        }

        .mobile-drawer .drawer-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .mobile-nav-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.08)
        }

        .mobile-nav-header {
            padding: 14px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
        }

        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
            padding-left: 12px;
        }

        .mobile-submenu.active {
            max-height: 400px
        }




        /* Marquee / carousel */
        .marquee-wrap {
            width: 100%;
            overflow: hidden;
            padding: 18px 0;
            position: relative;
        }

        .marquee {
            display: flex;
            gap: 18px;
            width: max-content;
            animation: marquee 20s linear infinite;
            align-items: center;
            padding: 6px 20px;
        }

        .tile {
            min-width: 220px;
            min-height: 72px;
            background: rgba(160, 163, 186, 0.2);
            display: flex;
            gap: 12px;
            align-items: center;
            padding: 10px 14px;
            font-weight: 700;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.12);
            transition: background .2s;
        }

        .tile:hover {
            background: rgba(160, 163, 186, 0.33)
        }

        .tile .icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.06);
            padding: 6px;
        }

        .tile .meta {
            display: flex;
            flex-direction: column;
            font-size: 14px
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }


        /* small visual tweaks */
        .muted {
            color: rgba(255, 255, 255, 0.85);
            font-size: 14px
        }

        .spacer {
            height: 8px
        }



        /* Popup Background */
        .popup {
            display: none;
            /* hidden by default */
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(3px);
            z-index: 9999;
        }

        .popup h2 {
            color: black;
            margin-bottom: 20px;
        }

        /* Show Popup */
        .popup.active {
            display: flex;
        }

        /* Popup Box */
        .popup-box {
            background: #efebf5;
            padding: 40px 50px;
            border-radius: 12px;
            text-align: center;
            position: relative;
            max-width: 420px;
            width: 90%;
            z-index: 10000;
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            color: #030005;
            font-size: 25px;
            cursor: pointer;
        }

        /* Buttons container */
        .popup-btns {
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .popup-btn {
            padding: 12px 26px;
            background: #000;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 300;
            color: #fffffa;
            text-align: center;
            min-width: 130px;
        }



        .main-nav a {
            position: relative;
            text-decoration: none;
            color: #000;
            font-weight: 600;
        }

        .main-nav a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 0;
            height: 1px;
            background-color: #ffff;
            transition: width 0.3s ease;
        }

        .main-nav a:hover::after,
        .main-nav a.active::after {
            width: 100%;
        }


        @media (max-width: 1050px) {
            .header-inner {
                padding: 18px 24px;
            }

            nav.main-nav {
                display: none;
            }

            .actions {
                display: none;
            }

            .main-nav>.nav-item {
                padding: 20px;
            }

            .mobile-actions {
                display: flex;
                gap: 15px;
            }
        }

        @media (min-width: 1050px) {
            nav.main-nav {
                display: flex;
            }

            .actions {
                display: flex;
                justify-content: end;
                margin-left: 16px;
                width: 400px;
            }

            .main-nav>.nav-item {
                padding: 20px;
            }

            .mobile-actions {
                display: none;
            }
        }

        @media (min-width: 1000px) and (max-width: 1220px) {
            .actions {
                width: 600px;
            }
        }

        @media(max-width:500px) {

            .logo {
                width: 150px;
            }

            .btn {
                width: 60px;
                font-size: 10px;
                padding: 12px 12px !important;
            }


            .header>.header-inner {
                padding: 18px 24px;
            }

        }


        @media (max-width: 720px) {

            .submenu {
                left: 0;
                right: 0;
                width: auto;
                border-radius: 8px;
                padding: 12px
            }

            .submenu-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .marquee {
                animation-duration: 18s
            }
        }

        @media (max-width: 440px) {
            .submenu-grid {
                grid-template-columns: 1fr
            }

            .tile {
                min-width: 200px
            }
        }

        /* small screens */
        @media (max-width: 1024px) {
            .submenu {
                width: 520px;
            }
        }




        @media (min-width: 992px) {

            .header-inner,
            .submenu-grid {
                max-width: 960px;
                margin: auto;
            }
        }

        @media (min-width: 1200px) {

            .header-inner,
            .submenu-grid {
                max-width: 1140px;
                margin: auto;
            }
        }



        @media (min-width: 1400px) {

            .header-inner,
            .submenu-grid {
                max-width: 1380px;
                margin: auto;
            }
        }
    </style>
</head>

<body>

    <div class="retail-pro">
        <?php 
    get_template_part('template-parts/retail-professional');
    ?>
    </div>
    <!-- Header -->
    <header class="header" role="banner">
        <div class="header-inner">
            <div class="logo"><a href="<?php echo home_url(); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-horizontal.png"
                        alt="Lunaro logo" style="border-radius: 0px"></a></div>

            <!-- Desktop Nav -->
            <nav class="main-nav" role="navigation" aria-label="Main Navigation">
                <div class="nav-item">
                    <a href="about/">About</a>
                    <div class="submenu" aria-hidden="true">
                        <div class="submenu-grid">
                            <!-- <div >
                <a href="about-us/">About us</a>
              </div> -->
                            <div>
                                <a href="faqs/">FAQs</a>
                            </div>
                            <!-- <div>
                <a href="pricing-and-fees/">Pricing & fees</a>
              </div> -->
                            <div>
                                <a href="contact-us/">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="trading/">Trading</a>
                    <div class="submenu" aria-hidden="true">
                        <div class="submenu-grid">

                            <div>
                                <a href="/cfd-trading">CFD Trading</a>
                            </div>
                            <div>
                                <a href="/etd-trading">ETD Trading</a>
                            </div>
                            <div>
                                <a href="/cme-futures">CME Group Futures</a>
                            </div>
                            <div>
                                <a href="/cme-options">CME Group Options</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="markets/">Markets</a>
                    <div class="submenu" aria-hidden="true">
                        <div class="submenu-grid">
                            <div>
                                <a href="indices/">Indices</a>
                            </div>
                            <div>
                                <a href="forex/">Forex</a>
                            </div>
                            <div>
                                <a href="commodities/">Commodities</a>
                            </div>
                            <div>
                                <a href="shares/">Shares</a>
                            </div>
                            <div>
                                <a href="etfs/">ETFs</a>
                            </div>
                            <div>
                                <a href="treasuries/">Treasuries</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="nav-item"><a href="/platforms">Platforms</a>

                    <div class="submenu" aria-hidden="true">
                        <div class="submenu-grid">
                            <div>
                                <a href="/meta-trader-5">Meta Trader 5</a>
                            </div>
                            <div>
                                <a href="/cqg">CQG</a>
                            </div>
                            <div>
                                <a href="/trading-technologies">Trading Technologies</a>
                            </div>
                            <div>
                                <a href="/rithmic">Rithmic</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="nav-item"><a href="#">Resources</a></div> -->
            </nav>

            <!-- Desktop actions -->
            <div class="actions" aria-hidden="false">
                <!-- Popup -->
                <div id="popup" class="popup">
                    <div class="popup-box">
                        <span class="close" id="closePopup">&times;</span>
                        <h2>Select Account Type</h2>
                        <div class="popup-btns">
                            <a href="/sign-up-individual"><button class="popup-btn">INDIVIDUAL</button></a>
                            <a href="/sign-up-corporate"> <button class="popup-btn">CORPORATE</button></a>
                        </div>
                    </div>
                </div>
                <a href="https://crm.lunaro.com"> <button class="btn">Log in</button></a>
                <button
                    class="signup px-4 py-2 bg-[#FFF4E4] text-black hover:bg-[#fff4e4ee] font-bold text-sm rounded-full transition">
                    Sign up
                </button>
                <!-- Desktop navigation -->

            </div>
            <form id="countryForm" method="post" style="display:none;">
                <input type="hidden" name="country" id="countryInput">
            </form>

            <!-- Mobile actions / hamburger -->
            <div class="mobile-actions" aria-hidden="false">
                <a href="https://crm.lunaro.com"> <button class="btn">Log in</button></a>
                <button id="mobileToggle" class="btn" title="Open menu"><i class="fas fa-bars"></i></button>
            </div>
        </div>

        </div>
    </header>

    <!-- Mobile Drawer -->
    <div class="mobile-drawer" id="mobileDrawer" aria-hidden="true">
        <div class="drawer-top">
            <div style="width:120px"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-horizontal.png" alt="Logo">
            </div>
            <button id="closeDrawer" aria-label="Close menu"
                style="background:none;border:0;color:#fff;font-size:20px;cursor:pointer"><i
                    class="fas fa-times"></i></button>
        </div>

        <nav class="mobile-nav" aria-label="Mobile navigation">
            <div class="mobile-nav-item">
                <div class="mobile-nav-header">
                    <span><a href="about/">About</a></span><i class="fas fa-chevron-down"></i>
                </div>
                <div class="mobile-submenu">
                    <div style="padding:10px 0"><a href="faqs/">FAQs</a></div>
                    <!-- <div style="padding:10px 0"><a href="pricing-and-fees/">Pricing & fees</a></div> -->
                    <div style="padding:10px 0"><a href="contact-us/">Contact us</a></div>
                </div>
            </div>

            <div class="mobile-nav-item">
                <div class="mobile-nav-header">
                    <span><a href="trading/">Trading</a></span><i class="fas fa-chevron-down"></i>
                </div>
                <div class="mobile-submenu">
                    <div style="padding:10px 0"><a href="/cfd-trading">CFD Trading</a></div>
                    <div style="padding:10px 0"><a href="/etd-trading">ETD Trading</a></div>
                    <div style="padding:10px 0"><a href="/cme-futures/">CME Group Futures</a></div>
                    <div style="padding:10px 0"><a href="/cme-options">CME Group Options</a></div>
                </div>
            </div>

            <div class="mobile-nav-item">
                <div class="mobile-nav-header">
                    <span><a href="markets/">Markets</a></span><i class="fas fa-chevron-down"></i>
                </div>
                <div class="mobile-submenu">
                    <div style="padding:10px 0"><a href="indices/">Indices</a></div>
                    <div style="padding:10px 0"><a href="forex/">Forex</a></div>
                    <div style="padding:10px 0"><a href="commodities/">Commodities</a></div>
                    <div style="padding:10px 0"><a href="shares/">Shares</a></div>
                    <div style="padding:10px 0"><a href="etfs/">ETFs</a></div>
                    <div style="padding:10px 0"><a href="treasuries/">Treasuries</a></div>
                </div>
            </div>

            <div class="mobile-nav-item">
                <div class="mobile-nav-header">
                    <span><a href="/platforms">Platforms</a></span><i class="fas fa-chevron-down"></i>
                </div>
                <div class="mobile-submenu">
                    <div style="padding:10px 0"><a href="/meta-trader-5">Meta Trader 5</a></div>
                    <div style="padding:10px 0"><a href="/cqg">CQG</a></div>
                    <div style="padding:10px 0"><a href="/trading-technologies">Trading Technologies</a></div>
                    <div style="padding:10px 0"><a href="/rithmic">Rithmic</a></div>
                </div>
            </div>

            <!-- <div class="mobile-nav-item">
        <div class="mobile-nav-header">Resources</div>
      </div>

      <div class="mobile-nav-item">
        <div class="mobile-nav-header">Retail & Professional</div>
      </div> -->
        </nav>
    </div>

    <div class="overlay" id="overlay"></div>
    <!-- SCRIPTS -->
    <script>
        // Drawer & overlay
        const mobileToggle = document.getElementById('mobileToggle');
        const closeDrawer = document.getElementById('closeDrawer');
        const mobileDrawer = document.getElementById('mobileDrawer');
        const overlay = document.getElementById('overlay');

        mobileToggle && mobileToggle.addEventListener('click', () => {
            mobileDrawer.classList.add('active');
            overlay.classList.add('active');
            mobileDrawer.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        });

        closeDrawer && closeDrawer.addEventListener('click', () => {
            mobileDrawer.classList.remove('active');
            overlay.classList.remove('active');
            mobileDrawer.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        });

        overlay && overlay.addEventListener('click', () => {
            mobileDrawer.classList.remove('active');
            overlay.classList.remove('active');
            mobileDrawer.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        });

        // Mobile submenu toggles
        document.querySelectorAll('.mobile-nav-header').forEach(header => {
            header.addEventListener('click', () => {
                const submenu = header.nextElementSibling;
                const icon = header.querySelector('i');
                if (!submenu) return;
                submenu.classList.toggle('active');
                icon && icon.classList.toggle('rotate-180');
            });
        });

        // Desktop hover reset on scroll (like your original)
        const navItems = document.querySelectorAll('.nav-item');
        window.addEventListener('scroll', () => {
            navItems.forEach(item => {
                const submenu = item.querySelector('.submenu');
                if (submenu) {
                    submenu.style.opacity = '0';
                    submenu.style.visibility = 'hidden';
                    submenu.style.transform = 'translateY(-12px)';
                }
            });
        });

        // restore submenu on mouseenter/leave
        navItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                const submenu = item.querySelector('.submenu');
                if (submenu) {
                    submenu.style.opacity = '1';
                    submenu.style.visibility = 'visible';
                    submenu.style.transform = 'translateY(0)';
                }
            });
            item.addEventListener('mouseleave', () => {
                const submenu = item.querySelector('.submenu');
                if (submenu) {
                    submenu.style.opacity = '0';
                    submenu.style.visibility = 'hidden';
                    submenu.style.transform = 'translateY(-12px)';
                }
            });
        }); 
    </script>

    <script>
        function toggleDropdown() {
            const dropdown = document.querySelector(".dropdown");
            const arrow = document.getElementById("arrowIcon");

            dropdown.classList.toggle("show");
            arrow.textContent = dropdown.classList.contains("show") ? "▲" : "▼";
        }

        function selectCountry(country, flagUrl) {
            const flag = document.getElementById("countryFlag");
            const name = document.getElementById("countryName");
            const arrow = document.getElementById("arrowIcon");
            const dropdown = document.querySelector(".dropdown");

            // Update UI
            flag.src = flagUrl;
            name.textContent = country;
            dropdown.classList.remove("show");
            arrow.textContent = "▼";

            // 🔹 Submit hidden form to PHP to save in session
            document.getElementById("countryInput").value = country.toLowerCase(); // 'uae' or 'uk'
            document.getElementById("countryForm").submit();
        }

        // Close dropdown when clicking outside
        window.addEventListener("click", function (e) {
            const dropdown = document.querySelector(".dropdown");
            const arrow = document.getElementById("arrowIcon");

            if (!e.target.closest(".dropdown")) {
                dropdown.classList.remove("show");
                arrow.textContent = "▼";
            }
        });
    </script>


    <!-- for signup button -->
    <script>
        // Get elements
        document.addEventListener('DOMContentLoaded', () => {

            const buttons = document.querySelectorAll('.signup');
            const closePopup = document.getElementById("closePopup");
            const popup = document.getElementById("popup");
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    console.log('Button clicked:', button.textContent);
                    popup.classList.add("active");

                });
            });
            // Close popup on close button or background click
            closePopup.addEventListener("click", () => {
                popup.classList.remove("active");
            });

            // Optional: close when clicking outside popup box
            popup.addEventListener("click", (e) => {
                if (e.target === popup) {
                    popup.classList.remove("active");
                }
            });
        });

    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>