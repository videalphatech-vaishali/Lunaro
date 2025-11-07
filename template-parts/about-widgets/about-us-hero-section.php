
  <style>
      /* ======= ABOUT LUNARO ======= */
  .about-lunaro {

    padding: 5rem 5rem;
    display: flex;
    flex-direction: column;
  }

  .about-lunaro-section {
    border-radius: 12px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 50px;
  }

  .about-lunaro-text {

    flex: 0 0 700px;
    text-align: center;

  }

  .about-lunaro h1 {
    font-size: 2.6rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-align: center;
  }

  .about-lunaro p {

    color: var(--text-color);
    margin-top: 0;
    line-height: 1.5;

  }
  /* ======= RESPONSIVE (Mobile & Tablet) ======= */
  @media (max-width: 1024px) {
    .about-lunaro {
      padding: 3rem 2rem;
    }

    .about-lunaro-text {
      flex: 1 1 100%;
    }

    .about-lunaro h1 {
      font-size: 2rem;
    }

    .about-lunaro b {
      font-size: 1rem;
    }

    .about-lunaro p {
      font-size: 0.95rem;
    }
  }

  @media (max-width: 600px) {
    .about-lunaro {
      padding: 2rem 1rem;
    }

    .about-lunaro-section {
      flex-direction: column;
      gap: 20px;
    }

    .about-lunaro h1 {
      font-size: 1.6rem;
    }

    .about-lunaro p {
      font-size: 0.9rem;
      padding: 0;
    }
  }


  </style> 
    <section class="about-lunaro">

      <div class="about-lunaro-section">

        <div class="about-lunaro-text">

          <h1>About Lunaro</h1>
          <b>Empowering traders with institutional-grade tools and boutique level care.</b>
          <p>
            At Lunaro, trading is built on three pillars: transparency, security, and accessibility. We combine the
            precision of institutional infrastructure with a client-first philosophy, ensuring every trader, whether
            you're taking your first position or managing a sophisticated portfolio, can navigate global markets with
            complete confidence.
          </p>
        </div>
      </div>
    </section>