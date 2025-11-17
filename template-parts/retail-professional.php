<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Top Bar</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: #fff;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0B0D16;
            padding: 10px 20px;
            border-bottom: 1px solid #222;
            position: relative;
        }

        .tabs {
            display: flex;
            gap: 20px;
        }

        .tab {
            background: none;
            border: none;
            color: #A0A3BA;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            padding-bottom: 6px;
            transition: color 0.3s;
        }

        .tab:hover {
            color: #fff;
        }

        .tab.active {
            color: #fff;
        }

        .tab.active::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #A89469;
        }

        /* ---- DROPDOWN STYLES ---- */

        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            width: 120px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: none;
            background: none;
            cursor: pointer;
            color: #fff;
        }

        .flag-icon {
            width: 20px;
            height: auto;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 6px;
            background: #0B0D16;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            width: 140px;
        }

        .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 10px;
            text-decoration: none;
            color: #fff;
            font-size: 14px;
        }

        .dropdown.show .dropdown-menu {
            display: block;
        }

        .arrow {
            color: #999;
            font-size: 18px;
            transition: 0.2s;
        }

        @media(max-width: 568px) {
            .dropdown {
                display: none;
            }
        }

        /* /////////////////////////////////////// */
        /* Fixed Risk Banner */
        .risk {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #3C4066;
            color: #fff;
            z-index: 999999;
            padding: 10px 15px;
            font-size: 14px;
            line-height: 1.5;
            font-family: Arial, sans-serif;
        }

        /* Keep page content visible below banner */
        body {
            padding-top: 28px;
            /* Adjust based on banner height */
        }



        .risk p {
            text-align: center;
            max-width: 1100px;
            margin: 0 auto;
            word-wrap: break-word;
        }


        /* Mobile: smaller font, more spacing */
        @media (max-width: 575.98px) {
            .risk {
                padding: 12px 10px;
                font-size: 12px;
            }

            .risk p {
                text-align: center;
            }
        }

        /* Tablet */
        @media (min-width: 576px) and (max-width: 991.98px) {
            .risk {
                padding: 12px 20px;
                font-size: 13px;
            }
        }

        /* Desktop large screens */
        @media (min-width: 992px) {
            .risk {
                font-size: 14px;
                padding: 12px 30px;
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
    <section class="risk">
        <p>
            <strong>Risk Warning:</strong> Trading CFDs and FX carries significant risk.
            OTC derivatives are leveraged products and can result in losses which exceed deposits.
        </p>
    </section>
    <?php 
    } else { 
  ?>
    <section class="risk">
        <p>
            <strong>Risk Warning:</strong> CFDs and spread bets are complex instruments and come with a high risk of
            losing money rapidly due to leverage.<br>
            <strong>Approximately 80% of retail client accounts lose money when trading in CFDs and spread
                bets.</strong><br>
            You should consider whether you understand how CFDs and spread bets work and whether you can afford to take
            the high risk of losing your money.
        </p>
    </section>
    <?php 
    } 
  ?>

    <header class="top-bar">
        <!-- LEFT TABS -->
        <div class="tabs">
            <a href="<?php echo home_url(); ?>"> <button class="tab active" id="retailTab">Retail</button></a>
            <?php 
              $country = $_SESSION['country'] ?? 'uk';
              // Define links
              $links = [
                  'uae' => '/wordpress/ae/lunaro-pro/',
                  'uk'  => '/wordpress/uk/lunaro-pro/'
              ];
              ?>
            <a href="<?php echo $links[$country]; ?>">
                <button class="tab" id="professionalTab">Professional</button>
            </a>
        </div>
        <!-- RIGHT DROPDOWN (ADDED) -->
        <div class="dropdown">
            <?php 
         // Read session country
         $country = isset($_SESSION['country']) ? $_SESSION['country'] : 'uk';
         // Set default values
         $selectedName = ($country === 'uae') ? 'UAE' : 'UK';
         $selectedFlag = ($country === 'uae')
         ? get_template_directory_uri() . '/assets/images/uaeflag.png'
         : get_template_directory_uri() . '/assets/images/ukflag.png';
         ?>
            <button class="btn dropdown-toggle" id="countryButton" onclick="toggleDropdown()">
                <span id="countryName">
                    <?php echo $selectedName; ?>
                </span>
                <img id="countryFlag" src="<?php echo $selectedFlag; ?>" alt="Flag" class="flag-icon">
                <span id="arrowIcon" class="arrow">▼</span>
            </button>
            <div class="dropdown-menu" id="dropdownMenu">
                <a href="#"
                    onclick="selectCountry('UAE', '<?php echo get_template_directory_uri(); ?>/assets/images/uaeflag.png', '/ae/lunaro-pro')">
                    UAE
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uaeflag.png" class="flag-icon">
                </a>

                <a href="#"
                    onclick="selectCountry('UK', '<?php echo get_template_directory_uri(); ?>/assets/images/ukflag.png', '/uk/lunaro-pro')">
                    UK
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ukflag.png" class="flag-icon">
                </a>

            </div>
        </div>
    </header>
    <!-- for retail-pro toggle -->

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

    <script>
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });

        const countrySelect = document.getElementById('countrySelect');
        const dropdown = document.getElementById('countryDropdown');
        const countryName = document.querySelector('.country-name');
        const flagImg = document.querySelector('.country-select .flag');
        const arrow = document.querySelector('.arrow');

        countrySelect.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdown.classList.toggle('active');
            arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
        });

        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.stopPropagation();
                const selectedCountry = item.dataset.country;
                const selectedFlag = item.dataset.flag;
                countryName.textContent = selectedCountry;
                flagImg.src = selectedFlag;
                dropdown.classList.remove('active');
                arrow.style.transform = 'rotate(0deg)';
            });
        });

        document.addEventListener('click', (e) => {
            if (!countrySelect.contains(e.target)) {
                dropdown.classList.remove('active');
                arrow.style.transform = 'rotate(0deg)';
            }
        });
    </script>
    <script>
        function adjustBodyPadding() {
            const risk = document.querySelector('.risk');
            if (risk) {
                const height = risk.offsetHeight;
                document.body.style.paddingTop = height + 'px';
            }
        }

        // Adjust on page load
        window.addEventListener('load', adjustBodyPadding);

        // Adjust on resize or orientation change (for mobile)
        window.addEventListener('resize', adjustBodyPadding);
        window.addEventListener('orientationchange', adjustBodyPadding);
    </script>

    <script>
        /* ---------- Safe DOM helpers (avoid errors if elements are missing) ---------- */
        function q(id) { return document.getElementById(id); }
        function qs(sel) { return document.querySelector(sel); }
        function qsa(sel) { return Array.from(document.querySelectorAll(sel)); }

        /* ---------- safe country/dropdown handlers (only attach if present) ---------- */
        (function () {
            const countryButton = q('countryButton');
            const dropdownMenu = q('dropdownMenu');
            const arrowIcon = q('arrowIcon');


        })();
    </script>

    <script>
        /* ---------- adjust body padding for risk banner (unchanged, safe) ---------- */
        function adjustBodyPadding() {
            const risk = document.querySelector('.risk');
            if (risk) {
                const height = risk.offsetHeight;
                document.body.style.paddingTop = height + 'px';
            }
        }
        window.addEventListener('load', adjustBodyPadding);
        window.addEventListener('resize', adjustBodyPadding);
        window.addEventListener('orientationchange', adjustBodyPadding);
    </script>

    <script>
        /* ---------- Reliable tab selection based on current URL ---------- */
        document.addEventListener('DOMContentLoaded', function () {
            const retailTab = document.getElementById('retailTab');
            const professionalTab = document.getElementById('professionalTab');

            // If tabs don't exist, nothing to do
            if (!retailTab || !professionalTab) return;

            // Normalize a path (ensure leading slash, no duplicate slashes, optional trailing slash)
            function normalizePath(p) {
                if (!p) return '/';
                // decode and remove query/hash
                try { p = decodeURIComponent(p.split('?')[0].split('#')[0]); } catch (e) { }
                if (!p.startsWith('/')) p = '/' + p;
                // remove duplicate slashes
                p = p.replace(/\/+/g, '/');
                // remove trailing slash for comparison (we'll compare both variants)
                if (p.length > 1 && p.endsWith('/')) p = p.slice(0, -1);
                return p;
            }

            // list of professional paths (normalized without leading/trailing slash)
            const proPaths = [
                'uk/lunaro-pro/',
                'ae/lunaro-pro/',
                'lunaro-benefits-uk',
                'lunaro-benefits-uae',
                'open-pro-account'
            ];

            const curPath = normalizePath(window.location.pathname); // e.g. '/lunaro-pro-uae' or '/some/parent/lunaro-pro-uae'

            // return true if current path ends with any pro path segment
            function matchesProPath(path) {
                if (!path) return false;
                // split into segments and test last segments and whole path endsWith
                const trimmed = path; // already no trailing slash
                for (const p of proPaths) {
                    if (trimmed === '/' + p) return true;                 // exact match '/lunaro-pro-uae'
                    if (trimmed.endsWith('/' + p)) return true;          // '/something/.../lunaro-pro-uae'
                    if (trimmed === p) return true;                      // just in case
                }
                return false;
            }

            if (matchesProPath(curPath)) {
                retailTab.classList.remove('active');
                professionalTab.classList.add('active');
            } else {
                professionalTab.classList.remove('active');
                retailTab.classList.add('active');
            }
        });
    </script>

</body>

</html>