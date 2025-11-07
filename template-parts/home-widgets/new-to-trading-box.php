 <style>
     .trading-section {
         padding: 40px 20px;
         font-family: 'Segoe UI', sans-serif;
     }

     .trading-row {
         display: flex;
         flex-wrap: wrap;
         align-items: flex-start;
         gap: 40px;
     }

     .trading-title {
         flex: 1 1 200px;
         font-size: 24px;
         padding: 0 20px;
         font-weight: 600;
         font-weight: bold;
         color: #111;
         margin-bottom: 20px;
     }

     .trading-cards {
         flex: 3 1 600px;
         display: flex;
         flex-wrap: wrap;
         gap: 30px;
     }

     .trading-card {
         display: flex;
         align-items: flex-start;
         gap: 15px;
         flex: 1 1 260px;
         min-width: 250px;
     }

     .trading-icon {
         width: 60px;
         height: 60px;
         background-color: #d7e6ff;
         border-radius: 50%;
         flex-shrink: 0;
     }

     .trading-content h3 {
         margin: 0;
         font-size: 16px;
         font-weight: 600;
     }

     .trading-content p {
         margin: 5px 0 10px;
         font-size: 14px;
         color: #333;
     }



     .trading-link {
         font-size: 13px;
         color: #6b46c1;
         text-decoration: none;
     }

     .trading-link:hover {
         text-decoration: underline;
     }

     .divider {
         border: none;
         border-top: 1px solid #aaa;
         margin: 40px 0;
     }

     @media (max-width: 768px) {
         .trading-group {
             flex-direction: column;
             gap: 25px;
         }

         .trading-card {
             padding: 0 20px;
             max-width: 100%;
             flex: 1 1 100%;
         }
     }
 </style>
 <div class="trading-section">
     <div class="trading-row">
         <div class="trading-title">New to trading?</div>
         <div class="trading-cards">
             <div class="trading-card">
                 <div class="trading-icon"></div>
                 <div class="trading-content">
                     <h3>Learning resources</h3>
                     <p>Explore our introductory materials for smarter money management.</p>
                     <a href="#" class="trading-link">
                         <img src="https://img.icons8.com/?size=100&id=100530&format=png&color=6b46c1" alt="icon" style="width:12px; height:16px; vertical-align:middle; margin-right:6px;" />
                         Go to our tutorials
                     </a>

                 </div>
             </div>
             <div class="trading-card">
                 <div class="trading-icon"></div>
                 <div class="trading-content">
                     <h3>Guidance and advice</h3>
                     <p>Schedule a consultation with one of our specialists to address all your inquiries.</p>
                     <a href="#" class="trading-link">
                         <img src="https://img.icons8.com/?size=100&id=100530&format=png&color=6b46c1" alt="icon" style="width:12px; height:16px; vertical-align:middle; margin-right:6px;" />
                         Book a consultation
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <hr class="divider">

 <div class="trading-section">
     <div class="trading-row">
         <div class="trading-title">For expert traders</div>
         <div class="trading-cards">
             <div class="trading-card">
                 <div class="trading-icon"></div>
                 <div class="trading-content">
                     <h3>Our platforms</h3>
                     <p>Learn about our platforms and their advantages</p>
                     <a href="#" class="trading-link">
                         <img src="https://img.icons8.com/?size=100&id=100530&format=png&color=6b46c1" alt="icon" style="width:12px; height:16px; vertical-align:middle; margin-right:6px;" />
                         Go to our tutorials
                     </a>
                 </div>
             </div>
             <div class="trading-card">
                 <div class="trading-icon"></div>
                 <div class="trading-content">
                     <h3>APM Pro</h3>
                     <p>Second point to attract expert traders, TBD</p>
                     <a href="#" class="trading-link">
                         <img src="https://img.icons8.com/?size=100&id=100530&format=png&color=6b46c1" alt="icon" style="width:12px; height:16px; vertical-align:middle; margin-right:6px;" />
                         Register as professional trader
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>