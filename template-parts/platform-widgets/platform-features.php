


<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.features-section {
  padding: 40px;
}

.features-section h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 30px;
}

.features-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
}

.feature-box {
  flex: 1 1 30%;
  min-width: 280px;
  text-align: center;
}

.icon-circle {
  width: 80px;
  height: 80px;
  background-color: #d4e4ff;
  border-radius: 50%;
  margin: 0 auto 15px;
}

.feature-box h3 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 10px;
}

.feature-box ul {
  list-style: disc;
  padding-left: 20px;
  text-align: left;
  display: inline-block;
}

</style>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Platform Features</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section class="features-section">
    <h2>Platform features</h2>
    <div class="features-container">
      <!-- Feature 1 -->
      <div class="feature-box">
        <div class="icon-circle"></div>
        <h3>Advanced charting</h3>
        <ul>
          <li>Multiple chart types and timeframes.</li>
          <li>Technical indicators and analytical tools.</li>
        </ul>
      </div>
      <!-- Feature 2 -->
      <div class="feature-box">
        <div class="icon-circle"></div>
        <h3>Automated trading</h3>
        <ul>
          <li>Support for Expert Advisors (EAs).</li>
          <li>Customizable trading algorithms.</li>
        </ul>
      </div>
      <!-- Feature 3 -->
      <div class="feature-box">
        <div class="icon-circle"></div>
        <h3>Multi-asset support</h3>
        <ul>
          <li>Trade forex, commodities, indices, and more.</li>
        </ul>
      </div>
    </div>
  </section>
</body>
</html>
