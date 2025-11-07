

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lunaro</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- DM Sans Font -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="market_is_different.css"> -->


</head>
<style>
.text-white {
  --tw-text-opacity: 1;
  /* background-image:"<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png"; */
  color: rgb(255 255 255 / var(--tw-text-opacity, 1)); 
}
.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
   background: linear-gradient(to top, #0B0D16 93.72%, #000 5%, );
}
.py-20 {
  padding-top: 5rem;
  padding-bottom: 5rem;
}
.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}
.md\:px-12 {
  padding-left: 3rem;
  padding-right: 3rem;
}
.lg\:px-20 {
  padding-left: 5rem;
  padding-right: 5rem;
}
.relative {
  position: relative;
}
.bg-cover {
  background-size: cover;
}
.bg-center {
  background-position: center;
}
.bg-no-repeat {
  background-repeat: no-repeat;
}
.z-10 {
  z-index: 10;
}
.text-center {
  text-align: center;
}
.mb-12 {
  margin-bottom: 3rem;
}
.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}
.md\:text-4xl {
  font-size: 2.25rem;
  line-height: 2.5rem;
}
.font-bold {
  font-weight: 700;
}
.grid {
  display: grid;
}
.gap-10 {
  gap: 2.5rem;
}
.md\:grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}
.lg\:grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}
.mb-16 {
  margin-bottom: 4rem;
}
.bg-\[\#FFF4E433\] {
  background-color: #FFF4E433;
}
.p-6 {
  padding: 1.5rem;
}
.rounded-3xl {
  border-radius: 1.5rem;
}
.shadow-lg {
  box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
}
.border {
  border-width: 1px;
}
.border-gray-700 {
  border-color: rgb(55 65 81 / 1);
}
.hover\:border-purple-500:hover {
  border-color: rgb(168 85 247 / 1);
}
.transition {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.flex {
  display: flex;
}
.items-center {
  align-items: center;
}
.justify-center {
  justify-content: center;
}
.w-12 {
  width: 3rem;
}
.h-12 {
  height: 3rem;
}
.rounded-full {
  border-radius: 9999px;
}
.bg-\[\#A89469\] {
  background-color: #A89469;
}
.mb-4 {
  margin-bottom: 1rem;
}
.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}
.leading-relaxed {
  line-height: 1.625;
}
.text-gray-300 {
  color: rgb(209 213 219 / 1);
}
.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}
.max-w-2xl {
  max-width: 42rem;
}
.mx-auto {
  margin-left: auto;
  margin-right: auto;
}
.mt-6 {
  margin-top: 1.5rem;
}
.bg-white {
  background-color: rgb(255 255 255 / 1);
}
.text-black {
  color: rgb(0 0 0 / 1);
}
.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.rounded-full {
  border-radius: 9999px;
}
.font-medium {
  font-weight: 500;
}
.shadow {
  box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
}
.hover\:bg-gray-200:hover {
  background-color: rgb(229 231 235 / 1);
}
.overflow-x-auto {
  overflow-x: auto;
}
.min-w-full {
  min-width: 100%;
}
.bg-\[\#1A1A2E\] {
  background-color: #1A1A2E;
}
.rounded-2xl {
  border-radius: 1rem;
}
.overflow-hidden {
  overflow: hidden;
}
.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}
.bg-\[\#252542\] {
  background-color: #252542;
}
.text-gray-300 {
  color: rgb(209 213 219 / 1);
}
.uppercase {
  text-transform: uppercase;
}
.py-5 {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}
.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}
.text-left {
  text-align: left;
}
.space-x-2 > :not([hidden]) ~ :not([hidden]) {
  margin-left: 0.5rem;
}
.justify-center {
  justify-content: center;
}
.text-center {
  text-align: center;
}
.text-gray-200 {
  color: rgb(229 231 235 / 1);
}
.divide-y > :not([hidden]) ~ :not([hidden]) {
  border-top-width: 1px;
}
.divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
  border-color: rgb(55 65 81 / 1);
}
.w-4 {
  width: 1rem;
}
.h-4 {
  height: 1rem;
}
.w-10 {
  width: 2.5rem;
}
.h-10 {
  height: 2.5rem;
}
.text-red-400 {
  color: rgb(248 113 113 / 1);
}
.text-green-400 {
  color: rgb(74 222 128 / 1);
}
@media (min-width: 640px) {
  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (min-width: 768px) {
  .md\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
  .md\:px-12 {
    padding-left: 3rem;
    padding-right: 3rem;
  }
  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }
}
@media (min-width: 1024px) {
  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
  .lg\:px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }
}
</style>
<body class="text-white">
<!-- Combined Section: Why Lunaro Markets is Different + Markets -->
  <section class="py-16 py-20 px-4 md:px-12 lg:px-20 relative bg-cover bg-center bg-no-repeat"  style="background-color: black">
    <!-- Content Wrapper -->
    <div class="relative z-10">
      <!-- Why Lunaro Markets is Different -->
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white">Why Lunaro Markets is Different</h2>
      </div>
      <!-- Feature Cards -->
   <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 mb-16">
  <!-- Card 1 -->
  <div class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-01.svg" alt="">
    </div>
    <h3 class="text-2xl font-bold mb-4" style="letter-spacing: -0.78px;">Lightning-Fast Execution</h3>
    <p class="text-gray-300 text-sm leading-relaxed">
      Our cutting-edge infrastructure delivers trades in under 30ms, allowing traders to benefit from fast
      execution. State-of-the-art technology with user-friendly interface.
    </p>
  </div>

  <!-- Card 2 -->
  <div class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lock-01.svg" alt="">
    </div>
    <h3 class="text-2xl font-bold mb-4">Trusted & Regulated</h3>
    <p class="text-gray-300 text-sm leading-relaxed">
      Highly transparent and regulated across multiple jurisdictions. Your funds are protected with segregated
      accounts, ensuring peace of mind and professional support.
    </p>
  </div>

  <!-- Card 3 -->
  <div class="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition">
    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-chat-square.svg" alt="">
    </div>
    <h1 class="text-2xl font-bold mb-4">24/5 Professional Support</h1>
    <p class="text-gray-300 text-sm leading-relaxed">
      Get guidance from experienced traders and risk managers. Access live chat, phone support, and dedicated
      account management whenever you need it.
    </p>
  </div>
</div>

      <!-- Markets Section -->
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Markets</h2>
        <p class="text-gray-300 max-w-2xl mx-auto">
          Trade the world’s most popular financial instruments with competitive spreads and flexible leverage.
        </p>
<a href="markets/">
  <button class="mt-6 bg-white text-black px-6 py-3 rounded-full font-medium shadow hover:bg-gray-200 transition">
    Markets Overview
  </button>
</a>
      </div>
      <!-- Markets Table -->
      <div class="overflow-x-auto">
        <table class="min-w-full bg-[#1A1A2E] rounded-2xl overflow-hidden text-sm">
          <thead class="bg-[#252542] text-gray-300 uppercase text-xs">
            <tr>
              <th class="py-5 px-4 text-left">
                <div class="flex items-center space-x-2">
                  <span>Product</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt="US 30" class="w-4 h-4">
                </div>
              </th>
              <th class="py-5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2">
                  <span>Min Spread</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt="Arrow" class="w-4 h-4">
                </div>
              </th>
              <th class="py-5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2">
                  <span>Margin</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt="US 30" class="w-4 h-4">
                </div>
              </th>
              <th class="py-5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2">
                  <span>Price</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt="US 30" class="w-4 h-4">
                </div>
              </th>
              <th class="py-5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2">
                  <span>Day</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt="US 30" class="w-4 h-4">
                </div>
              </th>
              <th class="py-5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2">
                  <span>Week</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt="US 30" class="w-4 h-4">
                </div>
              </th>
              <th class="py-5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2">
                  <span>Trend</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow down.svg" alt="US 30" class="w-4 h-4">
                </div>
              </th>
            </tr>
          </thead>
          <tbody class="text-gray-200 divide-y divide-gray-700"  id="marketTable">
            <tr id="row-GBPUSD">
              <td class="py-5 px-4">
                <div class="flex items-center space-x-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.svg" alt="US 30" class="w-10 h-10">
                  <span>GBPUSD</span>
                </div>
              </td>
              <td class="py-5 px-4 text-center minSpread">0.00</td>
              <td class="py-5 px-4 text-center">5%</td>
              <td class="py-5 px-4 text-center price">0.00</td>
              <td class="py-5 px-4 text-center text-red-400">-0.04%</td>
              <td class="py-5 px-4 text-center text-green-400">+3.14%</td>
              <td class="py-5 px-4 text-center">↗</td>
            </tr>
            <tr id="row-USDCAD">
              <td class="py-5 px-4">
                <div class="flex items-center space-x-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.svg" alt="US 30" class="w-10 h-10">
                  <span>USDCAD</span>
                </div>
              </td>
              <td class="py-5 px-4 text-center minSpread">0.00</td>
              <td class="py-5 px-4 text-center">5%</td>
              <td class="py-5 px-4 text-center price">0.00</td>
              <td class="py-5 px-4 text-center text-red-400">-0.10%</td>
              <td class="py-5 px-4 text-center text-green-400">+2.90%</td>
              <td class="py-5 px-4 text-center">↗</td>
            </tr>
            <tr id="row-EURUSD">
              <td class="py-5 px-4">
                <div class="flex items-center space-x-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.svg" alt="US 30" class="w-10 h-10">
                  <span>EURUSD</span>
                </div>
              </td>
              <td class="py-5 px-4 text-center minSpread">0.00</td>
              <td class="py-5 px-4 text-center">5%</td>
              <td class="py-5 px-4 text-center price">0.00</td>
              <td class="py-5 px-4 text-center text-red-400">-0.08%</td>
              <td class="py-5 px-4 text-center text-green-400">+3.44%</td>
              <td class="py-5 px-4 text-center">↗</td>
            </tr>
            <tr id="row-USDJPY"> 
              <td class="py-5 px-4">
                <div class="flex items-center space-x-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.svg" alt="US 30" class="w-10 h-10">
                  <span>USDJPY</span>
                </div>
              </td>
              <td class="py-5 px-4 text-center minSpread">0.00</td>
              <td class="py-5 px-4 text-center">5%</td>
              <td class="py-5 px-4 text-center price">0.00</td>
              <td class="py-5 px-4 text-center text-green-400">+0.10%</td>
              <td class="py-5 px-4 text-center text-green-400">+3.14%</td>
              <td class="py-5 px-4 text-center">↗</td>
            </tr>
            <tr id="row-id="row-AUDUSD">
              <td class="py-5 px-4">
                <div class="flex items-center space-x-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.svg" alt="US 30" class="w-10 h-10">
                  <span>AUDUSD</span>
                </div>
              </td>
              <td class="py-5 px-4 text-center minSpread">0.8</td>
              <td class="py-5 px-4 text-center">5%</td>
              <td class="py-5 px-4 text-center price">0.00</td>
              <td class="py-5 px-4 text-center text-green-400">+0.10%</td>
              <td class="py-5 px-4 text-center text-green-400">+3.14%</td>
              <td class="py-5 px-4 text-center">↗</td>
            </tr>
            <tr id="row-USDCHF">
              <td class="py-5 px-4">
                <div class="flex items-center space-x-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.svg" alt="US 30" class="w-10 h-10">
                  <span>USDCHF</span>
                </div>
              </td>
              <td class="py-5 px-4 text-center minSpread">0.00</td>
              <td class="py-5 px-4 text-center">5%</td>
              <td class="py-5 px-4 text-center price">0.00</td>
              <td class="py-5 px-4 text-center text-green-400">+1.06%</td>
              <td class="py-5 px-4 text-center text-green-400">+3.14%</td>
              <td class="py-5 px-4 text-center">↗</td>
            </tr>
                   <tr id="row-NZDUSD">
              <td class="py-5 px-4">
                <div class="flex items-center space-x-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.svg" alt="US 30" class="w-10 h-10">
                  <span>NZDUSD</span>
                </div>
              </td>
              <td class="py-5 px-4 text-center minSpread">0.00</td>
              <td class="py-5 px-4 text-center">5%</td>
              <td class="py-5 px-4 text-center price">0.00</td>
              <td class="py-5 px-4 text-center text-green-400">+1.06%</td>
              <td class="py-5 px-4 text-center text-green-400">+3.14%</td>
              <td class="py-5 px-4 text-center">↗</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/microsoft-signalr/8.0.0/signalr.min.js"></script>

  <!-- Script -->
  <script>
     const hubUrl = "https://lunaromarket.vedakronos.com/dataHub"; 
    const connection = new signalR.HubConnectionBuilder()
        .withUrl(hubUrl)
        .withAutomaticReconnect()
        .build();

    const tableBody = document.getElementById("marketTable");

    // Start connection
    async function start() {
        try {
            await connection.start();
            console.log("Connected to SignalR Hub!");
        } catch (err) {
            console.error(err);
            setTimeout(start, 5000); 
        }
    }

    connection.on("ReceiveMessage", (symbol, data) => {
      console.log('log----in table');

      const minSpread = data.minSpread?.toFixed?.(5) ?? data.minSpread ?? "0.00000";
      const lastPrice = data.bidPrice ?? "N/A";

      // Find existing row by symbol text
      const row = Array.from(tableBody.querySelectorAll("tr")).find(tr => 
          tr.querySelector("td")?.innerText.trim().toUpperCase() === symbol.toUpperCase()
      );

      if (row) {
          // Update only min spread and price
          const minSpreadCell = row.querySelector(".minSpread");
          const priceCell = row.querySelector(".price");

          if (minSpreadCell) minSpreadCell.textContent = minSpread;
          if (priceCell) priceCell.textContent = lastPrice;
      }

    });

    start();
    const mobileToggle = document.getElementById('mobileToggle');
    const closeDrawer = document.getElementById('closeDrawer');
    const mobileDrawer = document.querySelector('.mobile-drawer');
    const overlay = document.getElementById('overlay');

    mobileToggle.addEventListener('click', () => {
      mobileDrawer.classList.add('active');
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
    closeDrawer.addEventListener('click', () => {
      mobileDrawer.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    });
    overlay.addEventListener('click', () => {
      mobileDrawer.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    });

    // Mobile submenu toggle
    document.querySelectorAll('.mobile-nav-header').forEach(header => {
      header.addEventListener('click', () => {
        const submenu = header.nextElementSibling;
        const icon = header.querySelector('i');
        submenu.classList.toggle('active');
        icon.classList.toggle('rotate-180');
      });
    });

  </script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html> 