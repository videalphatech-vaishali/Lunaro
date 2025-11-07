


<style>
        .popular-indices-section {
  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;
 background-color: #000;
 background-size: cover;
    background-position: center;
    }
.pi-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 60px 80px;
  font-family: "DM Sans", sans-serif;
  color: #fff4e4;
  gap: 80px;
  flex-wrap: wrap; /* makes it responsive */
}
 .pi-table-section {
    padding: 5rem 5rem;
 }
/* Title Section */
.pi-title {
  flex: 1;
  font-size: 2.5rem;
  font-weight: 700;
  line-height: 1.2;
  color: #fff4e4;
  min-width: 250px;
}

/* Right side (box list) */
.right-side {
  flex: 1.5;
  display: flex;
  flex-direction: column;
  gap: 20px;
  min-width: 320px;
}

/* Each accordion item */
.boc-item {
  background-color: black;
  border: 1px solid rgba(255, 244, 228, 0.2);
  border-radius: 12px;
  padding: 18px 20px;
  transition: all 0.3s ease;
  cursor: pointer;
}

.boc-item:hover {
  border-color: rgba(255, 244, 228, 0.4);
  background-color: rgba(255, 244, 228, 0.08);
}

.boc-item.active {
  border-color: #ffd79f;
}

/* Question text */
.boc-question {
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  position: relative;
  padding-right: 30px;
  transition: color 0.3s ease;
}

.boc-question::after {
  content: "▼";
  right: 0;
  font-size: 1rem;
  position: absolute;
  transition: transform 0.3s ease;
}

.boc-item.active .boc-question {
  color: #ffd79f;
}

.boc-item.active .boc-question::after {
  content: "▲";
}

/* Answer text */
.boc-answer {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  font-size: 0.95rem;
  line-height: 1.5;
  color: rgba(255, 244, 228, 0.8);
  transition: max-height 0.4s ease, opacity 0.4s ease;
  margin-top: 8px;
}

.boc-item.active .boc-answer {
  max-height: 300px;
  opacity: 1;
}



.table-container {
  background: #141824;
  border-radius: 10px;
  padding: 10px 20px 20px;
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  color: #fff;
}

th, td {
  text-align: left;
  padding: 18px 12px;
  border-bottom: 1px solid #1f2231;
}

th {
  color: #9fa3b9;
  font-weight: 500;
  font-size: 0.85rem;
}

td {
  font-size: 0.9rem;
  font-weight: 500;
}

td img {
  width: 30px;
  height: 30px;
  margin-right: 1px;
  vertical-align: middle;
  border-radius: 50%; 
}

.up {
  color: #5cd85c;
}

.down {
  color: #ff5c5c;
}
.featured-market-section {
  background-color: #0d1019;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 60px 20px;
}
td:first-child {
  display: flex;
  align-items: center;
  gap: 10px;
}

td:first-child img {
  width: 22px;
  height: 22px;
}


/* Responsive layout */
@media (max-width: 900px) {
  .pi-container {
    flex-direction: column;
    gap: 40px;
    padding: 40px 20px;
  }
  .pi-title {
    text-align: center;
  }
}
</style>


<div class="popular-indices-section">
    <div class="pi-expandabe-box-section">
            
<div class="pi-container">
  <div class="left-side">
  <h2 class="pi-title">Popular Indices You Can Trade</h2>
  <p>Track and trade the world's most actively followed indices in real time. Access
    tight spreads and institutional-grade execution on:
  </p>
  </div>

  <div class="right-side">
    <div class="boc-item">
      <div class="boc-question">European Indices</div>
      <div class="boc-answer">
        We offer branding, digital marketing, performance campaigns, and content
        strategy tailored to your business goals.
      </div>
    </div>

    <div class="boc-item">
      <div class="boc-question">US Indices</div>
      <div class="boc-answer">
        We offer branding, digital marketing, performance campaigns, and content
        strategy tailored to your business goals.
      </div>
    </div>

    <div class="boc-item">
      <div class="boc-question">UK Indices</div>
      <div class="boc-answer">
   We offer branding, digital marketing, performance campaigns, and content
        strategy tailored to your business goals.
      </div>
    </div>

  </div>
</div>

    </div>
    <div class="pi-table-section">
        
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Instrument ↓</th>
            <th>Sell ↓</th>
            <th>Buy ↓</th>
            <th>Updated ↓</th>
            <th>Change ↓</th>
          </tr>
        </thead>
        <tbody>
          <tr>
 
             <td><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png" alt="icon"> EUR/USD</td>
 

            <td>2.2</td>
            <td>5%</td>
            <td>44,409.88</td>
            <td class="down">↓ -0.41%</td>
          </tr>
          <tr>
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png"  alt="icon"> GBP/USD</td>
            <td>1.2</td>
            <td>5%</td>
            <td>22,327.07</td>
            <td class="up">↑ -1.06%</td>
          </tr>
          <tr>
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png"  alt="icon"> GBP/USD</td>
            <td>1.2</td>
            <td>5%</td>
            <td>22,327.07</td>
            <td class="up">↑ -1.06%</td>
          </tr>
          <tr>
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png"  alt="icon"> GBP/USD</td>
            <td>1.2</td>
            <td>5%</td>
            <td>22,327.07</td>
            <td class="up">↑ -1.06%</td>
          </tr>
          <tr>
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png"  alt="icon"> GBP/USD</td>
            <td>1.2</td>
            <td>5%</td>
            <td>22,327.07</td>
            <td class="up">↑ -1.06%</td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
</div>

<script>
const items = document.querySelectorAll(".boc-item");
items.forEach((item) => {
  item.addEventListener("click", () => {
    item.classList.toggle("active");
  });
});
</script>
