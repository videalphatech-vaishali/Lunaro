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
    </style>
</head>
<body>
    <header class="top-bar">
        <!-- LEFT TABS -->
        <div class="tabs">
            <a href="<?php echo home_url(); ?>"> <button class="tab active" id="retailTab">Retail</button></a>
            <?php 
$country = $_SESSION['country'] ?? 'uk';
// Define links
$links = [
    'uae' => '/lunaro-pro-uae',
    'uk'  => '/lunaro-pro-uk'
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
                    onclick="selectCountry('UAE', '<?php echo get_template_directory_uri(); ?>/assets/images/uaeflag.png')">
                    UAE
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uaeflag.png" class="flag-icon">
                </a>
                <a href="#"
                    onclick="selectCountry('UK', '<?php echo get_template_directory_uri(); ?>/assets/images/ukflag.png')">
                    UK
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ukflag.png" class="flag-icon">
                </a>
            </div>
        </div>
    </header>
    <!-- for retail-pro toggle -->

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
</body>

</html>