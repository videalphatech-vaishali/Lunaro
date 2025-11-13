 <?php



/**

 * Template Name: Open Account Page

 *

 * @package WordPress

 * @subpackage YourThemeName

 */

 

?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --font-family: "DM Sans", sans-serif;
              --bg-gradient: #0B0D16;
      --text-color: #ffffff;
      --subtext-color: #d1d5db;
      --note-color: #9ca3af;
      --circle-bg: #ffffff;
      --circle-color: #0b1635;
      --line-color: #E6E7F0;
        }

        body {
            background-color: #0d0f1a;
            color: #fff;
        
            padding: 0px 20px;
            font-family: 'DM Sans', sans-serif;
        }





         /* =============================
       LUNARO PRO HERO SECTION
    ============================= */
        .lunaro-herocontainer {
            width: 100%;
        }

        .lunaro-hero {
            width: 100%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 80px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 60px;
        }

        /* LEFT TEXT CONTENT */
        .lunaro-text {
            flex: 1;
        }

        .lunaro-text h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .lunaro-text p {
            font-size: 1rem;
            line-height: 1.8;
            color: #dcdcdc;
            max-width: 500px;
            margin-bottom: 30px;
        }

        /* BUTTON STYLE */
        .lunaro-btn {
            display: inline-block;
            background-color: #FFF4E4;
            color: #000;
            font-weight: 600;
            font-size: 1rem;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .lunaro-btn:hover{
             background-color: #fff7eb;
        }


        /* RIGHT IMAGE BOX */
        .lunaro-image {
            flex: 1;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .lunaro-image img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            display: block;
        }

        /* =============================
       RESPONSIVE BREAKPOINTS
    ============================= */

        /* Extra Small (<576px) */
        @media (max-width: 575.98px) {
            .lunaro-hero {
                flex-direction: column;
                padding: 60px 15px;
                text-align: center;
            }

            .lunaro-text h1 {
                font-size: 2rem;
                margin-bottom: 15px;
            }

            .lunaro-text p {
                font-size: 0.95rem;
                margin: 0 auto 25px;
            }

            .lunaro-btn {
                padding: 10px 25px;
                font-size: 0.9rem;
            }

            .lunaro-image {
                width: 100%;
            }
        }

        /* Small (≥576px) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            .lunaro-hero {
                flex-direction: column;
                max-width: 540px;
                text-align: center;
            }

            .lunaro-text h1 {
                font-size: 2.2rem;
            }

            .lunaro-btn {
                font-size: 0.95rem;
                padding: 11px 28px;
            }

            .lunaro-image {
                max-width: 100%;
            }
        }

        /* Medium (≥768px) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .lunaro-hero {
                flex-direction: row;
                max-width: 720px;
                gap: 40px;
            }

            .lunaro-text h1 {
                font-size: 2.4rem;
            }

            .lunaro-btn {
                font-size: 1rem;
            }
        }

        /* Large (≥992px) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .lunaro-hero {
                max-width: 960px;
                gap: 50px;
            }
        }

        /* X-Large (≥1200px) */
        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .lunaro-hero {
                max-width: 1140px;
            }
        }

        /* XX-Large (≥1400px) */
        @media (min-width: 1400px) {
            .lunaro-hero {
                max-width: 1320px;
            }
        }

        .eligibility{
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            max-width: 1320px;
        }

        /* Left Section */
        .left-section {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            padding: 30px;
            border-radius: 8px;
        }

        .left-section h1 {
            font-size: 36px;
            margin-bottom: 15px;
            font-weight: 700;
            color: #FFF4E4;
        }

        .left-section p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #aaa;
            line-height: 1.6;
        }

        .eligibility-buttons {
            display: flex;
            gap: 10px;
            flex-direction: column;
        }

        .eligibility-button {
            background-color: #FFF4E4;
            color: #0B0D16;
            font-family: 600;
            font-size: 16px;
            padding: 12px 20px;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            width: 187px;
            text-align: center;
            transition: all 0.3s ease;
            font-family: var(--font-family);
        }

        .eligibility-button:hover {
            background-color: #f8f4ef;
            color: #000;
        }

        #notEligibleButton {
            background: none;
            border: 1px solid #FFF4E4;
            color: #FFF4E4;
            font-family: var(--font-family);
        }

        #notEligibleButton:hover {
            background: #0f0f0f !important;
        }

        .italic {
            font-size: 10px !important;
            font-style: italic;
        }

        /* Right Section */
        .right-section {
            flex: 1;
            min-width: 300px;
            max-width: 700px;
            padding: 30px;
            border-radius: 8px;
        }

        .criteria-item {
            margin-bottom: 20px;
            background: #0B0D16;
            border: 1px solid #A89469;
            border-radius: 6px;
            overflow: hidden;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .criteria-item.active {
            border-color: #A89469;
            ;
        }

        .criteria-button {
            color: #fff;
            font-size: 18px;
            padding: 15px;
            width: 100%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #0B0D16;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }



        .arrow {
            transition: transform 0.3s ease;
            font-size: 20px;
        }

        .arrow.rotate {
            transform: rotate(180deg);
        }

        .criteria-content {
            max-height: 0;
            overflow: hidden;
            color: #bbb;
            font-size: 14px;
            line-height: 1.5;
            padding: 0 15px;
            background-color: #0B0D16;
            transition: max-height 0.4s ease, padding 0.3s ease;
        }

        .criteria-content.show {
            max-height: 200px;
            /* Adjust if needed */
            padding: 10px 15px 15px;
        }

        @media (max-width: 575.98px) {
            .container {
                flex-direction: column;
                max-width: 100%;
            }

            .left-section,
            .right-section {
                max-width: 100%;
            }

            .left-section h1 {
                font-size: 26px;
            }

            .left-section p {
                font-size: 14px;
            }

            .eligibility-button {
                font-size: 14px;
                padding: 10px 14px;
            }

            .criteria-button {
                font-size: 15px;
                padding: 12px;
            }

            .arrow {
                font-size: 16px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .container {
                max-width: 540px;
                flex-direction: column;
            }

            .left-section h1 {
                font-size: 28px;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .container {
                max-width: 720px;
            }

            .left-section h1 {
                font-size: 30px;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .container {
                max-width: 960px;
            }

            .left-section h1 {
                font-size: 32px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .container {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {
            .container {
                max-width: 1320px;
            }
        }















         .pro-section{
 padding: 40px 20px;
    }

    .pro-access-container {
      display: flex;
      align-items: stretch;
      justify-content: center;
      gap: 40px;
      max-width: 1320px;
      width: 100%;
      margin: auto;
    }

    .pro-access-left {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .pro-access-left h1 {
      font-size: 52px;
      font-weight: 800;
      margin-bottom: 20px;
      font-family: var(--font-family);
    }

    .pro-access-left p {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 20px;
            font-family: var(--font-family);
      color: var(--subtext-color);
    }

    .pro-access-left .note {
      font-size: 0.85rem;
      font-style: italic;
      color: var(--note-color);
      margin-bottom: 30px;
    }

    /* STEPS WRAPPER */
    .steps {
      position: relative;
    }

    /* Vertical connecting line */
    .steps::before {
      content: "";
      position: absolute;
      top: 0;
      left: 24px;
      width: 4px;
      height: 100%;
      background: white;
    }

    /* Single step */
    .step {
      position: relative;
      display: flex;
      align-items: flex-start;
      margin-bottom: 40px;
    }

    .step:last-child {
      margin-bottom: 0;
    }

    /* Step number circle */
    .step-number {
      position: absolute;
      left: 0;
      top: 0;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      background: var(--circle-bg);
      color: var(--circle-color);
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: 700;
      font-size: 17px;
      z-index: 1;
    }

    /* Step text */
    .step-content {
      margin-left: 60px;
    }

    .step-content h3 {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 6px;
    
    }

    .step-content p {
      color: #fff;
      font-family: var(--font-family);
      font-size: 1rem;
      line-height: 1.5;
      letter-spacing: -3%;
    }

    /* Right side image */
    .pro-access-right {
      flex: 1;
      display: flex;
      align-items: center;
      min-height: 540px;
      position: relative;
    }

    .pro-access-right img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
      .pro-access-container {
        flex-direction: column;
      }

      .pro-access-right {
        min-height: 420px;
      }
    }

    @media (max-width: 575.98px) {
      .pro-access-left h1 {
        font-size: 1.8rem;
      }

      .step-content h3 {
        font-size: 1rem;
      }

      .steps {
        padding-left: 40px;
      }

      .steps::before {
        left: 18px;
      }

      .step-number {
        width: 30px;
        height: 30px;
        font-size: 0.9rem;
      }

      .step-content {
        margin-left: 50px;
      }
    }
















      /* =============================
       EXCLUSIVE SERVICES SECTION
    ============================= */
        .exclusive-services {
            width: 100%;
            max-width: 1320px;
            padding: 60px 20px;
            text-align: center;
            margin: 0 auto;
        }

        .exclusive-services h2 {
            font-size: 41px;
            font-weight: 700;
            margin: 0 0 20px 0px;
            line-height: 1.6;
            color: #f7f2e8;
        }

        .exclusive-services p {
            margin-top: 10px;
            margin-bottom: 20px;
            font-style: italic;
        }

        .exclusive-services-cards {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
        }

        .exclusive-card {
            background-color: #141829;
            border-radius: 40px;
            flex: 1;
            min-width: 280px;
            padding: 40px 30px;
            text-align: left;
            transition: all 0.3s ease;
        }
        .service-card p{
            font-style: normal;
            color: #FFF4E4;
        }


        .exclusive-icon {
            background-color: #A89469;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .exclusive-icon img {
            width: 24px;
            height: 24px;
        }

        .professional-card>.professional-note {
            font-size: 10px;
        }

        .professional-txt{
            line-height: 1.6;
            font-style: normal;
            font-family: var(--font-family);

        }

        .exclusive-card h3 {
            font-size: 26px;
            line-height: 1.1;
            font-weight: 700;
            color: #FFF4E4;
            margin-bottom: 15px;
        }

        /* =============================
       LIST STYLE INSTEAD OF PARAGRAPH
    ============================= */
        .exclusive-card ul {
            list-style: disc;
            padding-left: 20px;
        }

        .exclusive-card ul li {
            font-size: 1rem;
            line-height: 1.7;
            color: #FFF4E4;
            margin-bottom: 8px;
        }

        /* =============================
       RESPONSIVE BREAKPOINTS
    ============================= */

        /* Extra Small Devices (<576px) */
        @media (max-width: 575.98px) {
            .exclusive-services {
                padding: 40px 15px;
            }

            .exclusive-services h2 {
                font-size: 1.5rem;
                margin-bottom: 30px;
            }

            .exclusive-services-cards {
                flex-direction: column;
                gap: 20px;
                align-items: center;
            }

            .exclusive-card {
                width: 100%;
                max-width: 100%;
                padding: 25px 20px;
            }

            .exclusive-card h3 {
                font-size: 1.2rem;
            }

            .exclusive-card ul li {
                font-size: 0.9rem;
            }
        }

        /* Small (≥576px) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            .exclusive-services {
                max-width: 540px;
            }

            .exclusive-services-cards {
                flex-direction: column;
                gap: 25px;
                align-items: center;
            }

            .exclusive-card {
                max-width: 480px;
            }
        }

        /* Medium (≥768px) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .exclusive-services {
                max-width: 720px;
            }

            .exclusive-services-cards {
                justify-content: center;
                flex-wrap: wrap;
            }

            .exclusive-card {
                flex: 1 1 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        /* Large (≥992px) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .exclusive-services {
                max-width: 960px;
            }

            .exclusive-services-cards {
                justify-content: space-between;
            }

            .exclusive-card {
                flex: 1 1 calc(33.333% - 20px);
            }
        }

        /* X-Large (≥1200px) */
        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .exclusive-services {
                max-width: 1140px;
            }
        }

        /* XX-Large (≥1400px) */
        @media (min-width: 1400px) {
            .exclusive-services {
                max-width: 1320px;
            }
        }

















        .regulatory-section {
    width: 100%;
    padding: 60px 0px;

}

/* Base regulatory width setup */
.regulatory {
    width: 100%;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
    color: #eaeaea;

    font-family: var(--font-family);
    line-height: 1.6;
}

/* Typography */
h1 {
    font-size: 1.8rem;
    color: #fff;
}

h2 {
    font-size: 1.4rem;
    color: #fff;
    margin-bottom: 1rem;
}

h3 {
    color: #f0f0f0;
    margin-top: 1rem;
}

h4 {
    color: #fff;
    margin-bottom: 0.3rem;
}

p {
    color: #ccc;
    margin: 0.3rem 0 1rem;
}

/* Layout */
.content {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.right ul {
    list-style: none;
    padding: 0;
}

.right li {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.right li span {
    font-size: 1.3rem;
    color: #ffc107;
    margin-right: 10px;
    flex-shrink: 0;
}

.section {
    margin-top: 1rem;
}

/* Responsive Layout - Two Columns on Medium Screens and Up */
@media (min-width: 768px) {
    .content {
        flex-direction: row;
        justify-content: space-between;
    }

    .left {
        flex: 1;
        margin-right: 40px;
    }

    .right {
        flex: 1;
    }
}

/* regulatory Width Breakpoints */
@media (min-width: 576px) {
    .regulatory {
        width: 540px;
    }
}

@media (min-width: 768px) {
    .regulatory {
        width: 720px;
    }
}

@media (min-width: 992px) {
    .regulatory {
        width: 960px;
    }
}

@media (min-width: 1200px) {
    .regulatory {
        width: 1140px;
    }
}

@media (min-width: 1400px) {
    .regulatory {
        width: 1320px;
    }
}









  .document-section{
    width: 100%;
    display: flex;
    justify-content: center;
  }

    .document-services {
        max-width: 1320px;
        padding: 60px 20px;
        text-align: center;
    }

    .document-services h2 {
        font-size: 3rem;
        font-weight: 700;
        color: #f7f2e8;
        margin: 0;
        line-height: 1.6;
    }

    .document-services p {
        margin-bottom: 20px;
        font-family: var(--font-family);
        color: #FFF4E4;
    }


    .document-services-cards {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        flex-wrap: wrap;
    }


    .document-card {
        background-color: #FFF4E433;
        border-radius: 20px;
        flex: 1;
        min-width: 280px;
        padding: 40px 30px;
        text-align: left;
        transition: all 0.3s ease;
    }

    .document-icon {
        background-color: #A89469;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .document-icon img {
        width: 24px;
        height: 24px;
    }


    .document-card h3 {
        font-size: 26px;
        font-weight: 700;
        color: #FFF4E4;
        margin-bottom: 15px;
    }
    .document-card ul{
        padding-left: 4px;
    }

    .document-card ul li {
        font-size: 1rem;
        line-height: 1.6;
        font-family: var(--font-family);
        color: #FFF4E4;
    }



    /* Extra Small Devices (<576px) */
    @media (max-width: 575.98px) {
        .document-services {
            padding: 40px 15px;
        }

        .document-services h2 {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .document-services-cards {
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }

        .document-card {
            width: 100%;
            max-width: 100%;
            padding: 25px 20px;
        }

        .document-card h3 {
            font-size: 1.1rem;
        }

        .document-card p {
            font-size: 0.9rem;
        }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .document-services {
            max-width: 540px;
        }

        .document-services-cards {
            flex-direction: column;
            gap: 25px;
            align-items: center;
        }

        .document-card {
            max-width: 480px;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .document-services {
            max-width: 720px;
        }

        .document-services-cards {
            justify-content: center;
            flex-wrap: wrap;
        }

        .document-card {
            flex: 1 1 calc(50% - 20px);
            max-width: calc(50% - 20px);
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .document-services {
            max-width: 960px;
        }

        .document-services-cards {
            justify-content: space-between;
        }

        .document-card {
            flex: 1 1 calc(33.333% - 20px);
        }
    }

    @media (min-width: 1200px) and (max-width: 1399.98px) {
        .document-services {
            max-width: 1140px;
        }
    }

    @media (min-width: 1400px) {
        .document-services {
            max-width: 1320px;
        }
    }


















        





        .trade-professionally {
            width: 100%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 50px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 40px;
        }

        .left-section,
        .right-section {
            border-radius: 20px;
            padding: 40px;
            flex: 1;
            min-width: 300px;
        }
        .left-section ul li{
            line-height: 1.6;
        }

        .right-section {
            height: 380px;
        }

        .left-section h2,
        .right-section h2 {
            font-size: 1.8rem;
            color: #ffff;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.4;
        }

        .left-section p,
        .right-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #fff;
            margin-bottom: 20px;
        }

        .professional-btn {
            display: inline-block;
            background: #FFF4E4;
            color: #000;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 26px;
            border-radius: 100px;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .professional-btn:hover {
            background: #e9e6e2;
        }


        @media (max-width: 575.98px) {
            .trade-professionally {
                flex-direction: column;
                padding: 30px 15px;
            }

            .left-section,
            .right-section {
                padding: 25px;
            }

            .left-section h2,
            .right-section h2 {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .trade-professionally {
                max-width: 540px;
                flex-direction: column;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .trade-professionally {
                max-width: 720px;
                flex-direction: column;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .trade-professionally {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399.98px) {
            .trade-professionally {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {
            .trade-professionally {
                max-width: 1320px;
            }
        }









.timeline-section {
      width: 100%;
      display: flex;
      justify-content: center;
      color: #fff;
      padding: 60px 20px;
    }

    .container-timeline {
      width: 100%;
      max-width: 1320px;
      padding: 20px;
    }

    .container-timeline h2 {
      text-align: center;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 60px;
    }

    .timeline {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: flex-start;
      position: relative;
      padding-top: 40px;
      padding-bottom: 50px;
    }

    /* Horizontal line */
    .timeline::before {
      content: '';
      position: absolute;
      top: 60px;
      left: 50px;
      right: 50px;
      height: 4px;
      background-color: #E6E7F0;
      z-index: 1;
    }

    .timeline-step {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      text-align: start;
      position: relative;
      z-index: 2;
      flex: 1;
    }

    .step-number {
      background-color: #E6E7F0;
      color: #000;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .step-details {
      margin-top: 60px;
    }

    .step-title {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .step-duration {
      font-size: 14px;
      opacity: 0.9;
    }

    /* ---------------------------------------------------
       MEDIA QUERIES (Bootstrap breakpoints)
    --------------------------------------------------- */

    /* Extra small (<576px) */
    @media (max-width: 575.98px) {
      .timeline {
        flex-direction: column;
        align-items: center;
        padding-top: 20px;
      }

      .timeline::before {
        display: none;
      }

      .timeline-step {
        width: 100%;
        margin-bottom: 35px;
        align-items: center;
        text-align: center;
      }

      .step-number {
        margin-bottom: 10px;
      }

      .container-timeline h2 {
        font-size: 20px;
      }
    }

    /* Small (≥576px and <768px) */
    @media (min-width: 576px) and (max-width: 767.98px) {
      .timeline {
        flex-direction: column;
        align-items: center;
      }

      .timeline::before {
        display: none;
      }

      .timeline-step {
        width: 100%;
        margin-bottom: 40px;
        align-items: center;
        text-align: center;
      }

      .container-timeline h2 {
        font-size: 22px;
      }
    }

    /* Medium (≥768px and <992px) */
    @media (min-width: 768px) and (max-width: 991.98px) {
      .timeline {
        flex-direction: column;
        align-items: center;
      }

      .timeline::before {
        display: none;
      }

      .timeline-step {
        width: 100%;
        margin-bottom: 40px;
        align-items: center;
        text-align: center;
      }

      .container-timeline h2 {
        font-size: 24px;
      }
    }

    /* Large (≥992px and <1200px) */
    @media (min-width: 992px) and (max-width: 1199.98px) {
      .timeline {
        flex-direction: row;
        justify-content: space-between;
      }

      .timeline-step {
        align-items: flex-start;
        text-align: start;
      }

      .timeline::before {
        display: block;
        left: 40px;
        right: 40px;
      }

      .container-timeline h2 {
        font-size: 26px;
      }
    }

    /* X-Large (≥1200px and <1400px) */
    @media (min-width: 1200px) and (max-width: 1399.98px) {
      .timeline-step {
        align-items: flex-start;
        text-align: start;
      }

      .container-timeline h2 {
        font-size: 28px;
      }
    }

    /* XX-Large (≥1400px) */
    @media (min-width: 1400px) {
      .timeline-step {
        align-items: flex-start;
        text-align: start;
      }

      .container-timeline {
        max-width: 1320px;
      }

      .container-timeline h2 {
        font-size: 30px;
      }
    }














.risk-section{
    width: 100%;
}


 .risk-management {
      max-width: 1320px;
      margin: 0 auto;
          padding: 60px 20px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    .risk-left {
      flex: 0 0 40%;
    }

    .risk-right {
      flex: 0 0 40%;
      max-width: 60%;
    }

    .risk-left h2 {
      font-size: 2rem;
      font-weight: 700;
      line-height: 1.3;
        color: #FFF4E4;
    }

    .risk-right h4 {
      font-size: 1rem;
      margin-bottom: 1rem;
      font-weight: 500;
      color: #FFF4E4;
    }

    .risk-list {
      list-style: none;
    }

    .risk-list li {
      display: flex;
      font-size: 1.1rem;
      color: #FFF4E4;
      align-items: center;
      margin-bottom: 0.8rem;
    }

    .risk-list li img {
      width: 18px;
      height: 18px;
      margin-right: 10px;
      object-fit: contain;
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 1399.98px) {
      .risk-management {
        max-width: 1140px;
      }
    }

    @media (max-width: 1199.98px) {
      .risk-management {
        max-width: 960px;
      }
    }

    @media (max-width: 991.98px) {
      .risk-management {
        max-width: 720px;
        flex-direction: column;
        align-items: flex-start;
        gap: 2rem;
      }
      .risk-left, .risk-right {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }

    @media (max-width: 767.98px) {
      .risk-management {
        max-width: 540px;
      }
      .risk-left h2 {
        font-size: 1.7rem;
      }
    }

    @media (max-width: 575.98px) {
      .risk-management {
        max-width: 100%;
        padding: 40px 15px;
      }
      .risk-right h4 {
        font-size: 0.95rem;
      }
      .risk-list li {
        font-size: 0.9rem;
      }
      .risk-list li img {
        width: 16px;
        height: 16px;
      }
    }

































    .container-professionally {
      max-width: 1320px;
      margin: 0 auto;
      padding: 80px 20px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 3rem;
      flex-wrap: wrap;
    }

    /* LEFT SECTION */
    .left-professionally {
      flex: 0 0 40%;
      min-width: 320px;
    }

    .left-professionally h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .left-professionally p {
      color: #d1d1d1;
      font-size: 1rem;
      margin-bottom: 1.5rem;
    }

    .steps-professionally {
      margin-bottom: 2rem;
    }

    .steps-professionally h4 {
      font-weight: 700;
      margin-bottom: 0.8rem;
    }

    .steps-professionally ol {
      list-style: none;
      padding: 0;
    }

    .steps-professionally li {
      margin-bottom: 0.7rem;
      line-height: 1.5;
    }

    .steps-professionally li strong {
      color: var(--accent-color);
    }

    .risk-btn {
      background-color: #ffffff;
      color: #000;
      border: none;
      border-radius: 25px;
      padding: 12px 25px;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .risk-contact-btn{
        background-color: #ffffff;
      color: #000;
      border: none;
      border-radius: 25px;
      padding: 12px 25px;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.3s ease;
      width: 60%;
    }

    .risk-btn:hover {
      background-color: #e2e2e2;
    }

    /* RIGHT SECTION */
    .right-professionally {
      flex: 0 0 40%;
      background: linear-gradient(6deg, #192C6E 2.46%, #0B152F 93.72%);
      border-radius: 16px;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .right-professionally h3 {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .right-professionally p {
      color: #d1d1d1;
      margin-bottom: 0.8rem;
      font-size: 0.95rem;
    }

    .right-professionally strong {
      color: var(--accent-color);
    }

    .right-professionally .btn {
      margin-top: 1.5rem;
      align-self: start;
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 1199.98px) {
      .container-professionally {
        max-width: 960px;
      }
    }

    @media (max-width: 991.98px) {
      .container-professionally {
        flex-direction: column;
        align-items: flex-start;
        gap: 2rem;
      }

      .left-professionally, .right-professionally {
        flex: 1 1 100%;
        width: 100%;
      }

      .right-professionally {
        padding: 30px;
      }
    }

    @media (max-width: 767.98px) {
      .container-professionally {
        max-width: 540px;
      }

      .left-professionally h2 {
        font-size: 1.7rem;
      }

      .risk-professionally {
        width: 100%;
        text-align: center;
      }
    }

    @media (max-width: 575.98px) {
      .container-professionally {
        max-width: 100%;
        padding: 40px 15px;
      }
    }






    </style>
</head>

<body>
    <?php   
load_country_header();
    ?>
 

      <section class="lunaro-herocontainer">
        <div class="lunaro-hero">
            <!-- Left Content -->
            <div class="lunaro-text">
                <h1>How to open a professional account</h1>
                <p>
                    Transform your trading experience with institutional, professional-grade conditions. Follow our
                    streamlined application process designed for qualified professional traders.
                </p>
                <a href="#" class="lunaro-btn">Open a Professional Account</a>
            </div>

            <!-- Right Image -->
            <div class="lunaro-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lunaro-hero.png" alt="lunaro.png">
            </div>
        </div>
    </section>

  



 <section class="pro-section">
      <div class="pro-access-container">


         <div class="pro-access-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/open-account-hero-pic.png" alt="Eligibility Steps" />
        </div>
        <div class="pro-access-left">
          <h1>Unlock Pro Access</h1>
          <p>
            Experienced traders who meet the required criteria may qualify to be categorised as
            Elective Professional Clients, gaining access to enhanced trading conditions and
            professional-grade services under the Lunaro Pro framework.
          </p>
          <p class="note">
          Professional clients are not subject to certain retail protections under applicable regulations. Please review the Professional Client Disclosure and Risk Notice carefully before applying.
          </p>

          <!-- Steps -->
          <div class="steps">
            <div class="step">
              <div class="step-number">1</div>
              <div class="step-content">
                <h3>Verify Eligibility</h3>
                <p>Confirm you meet at least two of the three FCA professional client criteria (see below).</p>
              </div>
            </div>

            <div class="step">
              <div class="step-number">2</div>
              <div class="step-content">
                <h3>Submit Application</h3>
                <p>Complete our professional account application with documentation including portfolio statements and credentials.</p>
              </div>
            </div>

            <div class="step">
              <div class="step-number">3</div>
              <div class="step-content">
                <h3>Account Activation</h3>
                <p>Upon approval, your account will be upgraded with professional trading conditions and a dedicated relationship manager.</p>
              </div>
            </div>
          </div>
        </div>

       
      </div>
   </section>


     <section class="eligibility">
        <div class="container">
            <!-- Left Section -->
            <div class="left-section">
                <h1>Eligibility Criteria</h1>
                <p>The Firm is regulated by the FSRA and adheres to strict qualification criteria to ensure trader
                    sophistication and experience.</p>
                <p class="italic">Regulatory Overview: Professional client classification requires meeting at least one
                    of the criteria established by the Financial Services Regulatory Authority (FSRA) in addition to a
                    qualitative assessment.</p>

                <div class="eligibility-buttons">
                    <button class="eligibility-button" id="eligibleButton">I am eligible</button>
                    <button class="eligibility-button" id="notEligibleButton">I am not eligible</button>
                </div>
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <div class="criteria-item">
                    <button class="criteria-button" onclick="toggleContent(this)">
                        <span>Criterion 1: Financial Portfolio</span>
                        <span class="arrow">&#9662;</span>
                    </button>
                    <div class="criteria-content">
                        <p>Details about financial portfolio criteria...</p>
                    </div>
                </div>

                <div class="criteria-item">
                    <button class="criteria-button" onclick="toggleContent(this)">
                        <span>Criterion 2: Trading Experience</span>
                        <span class="arrow">&#9662;</span>
                    </button>
                    <div class="criteria-content">
                        <p>Details about trading experience criteria...</p>
                    </div>
                </div>

                <div class="criteria-item">
                    <button class="criteria-button" onclick="toggleContent(this)">
                        <span>Criterion 3: Professional Experience</span>
                        <span class="arrow">&#9662;</span>
                    </button>
                    <div class="criteria-content">
                        <p>Details about professional experience criteria...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="exclusive-services">
        <h2>Key Benefits</h2>
        <p>Access exclusive advantages designed for sophisticated traders who demand institutional-grade trading conditions.</p>

        <div class="exclusive-services-cards">
            <!-- Card 1 -->
            <div class="exclusive-card">
                <h3>Enhanced Market Access</h3>
                <ul>
                    <li>Access to additional financial instruments including cryptocurrency CFDs</li>
                    <li>Extended trading hours on major markets.</li>
                    <li>Advanced order types and execution algorithms.</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div class="exclusive-card">
                <h3>Advanced Risk Management</h3>
                <ul>
                    <li>Portfolio-based margin calculations</li>
                    <li>Cross-collateralisation across multiple positions</li>
                    <li>Professional risk management tools and reports</li>
                </ul>
            </div>

          
        </div>
    </section>

     <section class="exclusive-services">
        <h2>Service Benefits</h2>

        <div class="exclusive-services-cards">
            <!-- Card 1 -->
            <div class="exclusive-card service-card">
                <h3>Dedicated Support Excellence</h3>
                <p style="margin-top: 10px; line-height: 1.2;">Receive dedicated customer service with direct access to
                    your relationship manager, and specialised trading support.</p>
            </div>

            <!-- Card 2 -->
            <div class="exclusive-card service-card">
                <h3>Exclusive Market Insight</h3>
                <p style="margin-top: 10px; line-height: 1.2;">Access institutional research reports, advanced market
                    analysis, and exclusive webinars with professional market analysts and trading strategists.</p>
            </div>
        </div>
    </section>

    <section class="regulatory-section">

        <div class="regulatory">
            <div class="content">
                <div class="left">
                    <h1>Important: Reduced Regulatory Protections</h1>
                    <p>
                        By choosing professional client status, you acknowledge reduced regulatory protections compared
                        to retail clients.
                        Please review these important changes carefully.
                    </p>

                    <div class="section">
                        <h3>Regulatory Compliance Notice</h3>
                        <p>
                            FCA Professional Client Rules: This account may not receive the same protections afforded to
                            Retail accounts
                            offered by firms regulated by the FCA. You must acknowledge in writing that you understand
                            the reduced protections.
                        </p>
                    </div>

                    <div class="section">
                        <h3>Appropriateness Assessment</h3>
                        <p>
                            While we will endeavor to assess your appropriateness to access a professional account based
                            on the information provided to us by you,
                            you must understand all risks before trading.
                        </p>
                    </div>

                    <div class="section">
                        <h3>Best Execution Standards</h3>
                        <p>
                            Professional clients receive best execution appropriate to your sophistication level,
                            which may differ from retail client standards.
                        </p>
                    </div>
                </div>

                <div class="right">
                    <h2>Protections you will lose:</h2>

                    <ul class="protections">
                        <li>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="bullet-check"></span>
                            <div>
                                <h4>Negative Balance Protection</h4>
                                <p>Professional accounts are not covered by negative balance protection. You may be
                                    liable for losses exceeding your account balance.</p>
                            </div>
                        </li>

                        <li>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="bullet-check"></span>
                            <div>
                                <h4>Reduced Disclosure Requirements</h4>
                                <p>We may use more sophisticated language and provide less detailed risk warnings,
                                    assuming your professional knowledge and experience.</p>
                            </div>
                        </li>

                        <li>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="bullet-check"></span>
                            <div>
                                <h4>Limited Compensation Schemes</h4>
                                <p>Access to Financial Ombudsman Service may be restricted for professional clients
                                    depending on your individual circumstances.</p>
                            </div>
                        </li>

                        <li>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="bullet-check"></span>
                            <div>
                                <h4>Enhanced Leverage Risk</h4>
                                <p>Higher leverage ratios increase both profit potential and loss risk. Losses can
                                    exceed your initial deposit significantly.</p>
                            </div>
                        </li>

                        <li>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="bullet-check"></span>
                            <div>
                                <h4>Sophisticated Language</h4>
                                <p>We won’t necessarily use simple language in our communications to pro clients.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="exclusive-services">
        <h2>Professional Account Features</h2>
        <p class="margin-top:20px">Access exclusive advantages designed for sophisticated traders who demand
            institutional-grade trading conditions.</p>

        <div class="exclusive-services-cards professional-card">
            <!-- Card 1 -->
            <div class="exclusive-card professional-card">
                <h3>Advanced Trading Infrastructure</h3>
                <ul>
                    <li>Average execution speeds of 67ms based on real account data*</li>
                    <li>Direct market access (DMA) capabilities</li>
                    <li>London-based institutional infrastructure</li>
                </ul>
                <p class="professional-note">*Execution Performance: Historical data since inception shows minimum
                    execution of 39ms and average of 67ms on real accounts. Individual results vary based on market
                    conditions, order size, network factors, and liquidity. These figures are for reference and do not
                    guarantee future performance.</p>
            </div>

            <!-- Card 2 -->
            <div class="exclusive-card professional-card">
                <h3>Professional Platforms</h3>
                <ul>
                    <li>MetaTrader 5 with advanced features unlocked</li>
                    <li>API access for algorithmic trading strategies</li>
                    <li>Advanced charting with institutional indicators</li>
                    <li>Real-time level 2 market data</li>
                </ul>
            </div>

           
        </div>
    </section>
<section class="document-section style="margin:0 auto;">
    
     <div class="document-services">
        <h2>Documentation & Verification</h2>
        <p>Required documents</p>

        <div class="document-services-cards">
            <!-- Card 1 -->
            <div class="document-card">
                <div class="document-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bank-note-03.png" alt="Cash Rebate Icon">
                </div>
                <h3>Financial Verification</h3>
                <div style="padding-left: 10px;">
                    <ul>
                    <li>Recent bank statements (last 3 months)</li>
                    <li>Investment portfolio statements</li>
                    <li>Proof of €500,000 financial instrument portfolio</li>
                    <li>Asset verification from regulated financial institutions</li>
                </ul>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="document-card">
                <div class="document-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.png" alt="VIP Events Icon">
                </div>
                <h3>Trading History Proof</h3>
               <div style="padding-left: 10px;">
                 <ul>
                    <li>Trading statements showing 40+ quarterly transactions</li>
                    <li>Account statements from previous brokers</li>
                    <li>Transaction history covering 4 consecutive quarters</li>
                    <li>Verification of significant trade sizes</li>
                </ul>
               </div>

            </div>

            <!-- Card 3 -->
            <div class="document-card">
                <div class="document-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coins-stacked-01.png" alt="Credit Facilities Icon">
                </div>
                <h3>Professional Credentials</h3>
                <div style="padding-left: 10px;">
                    <ul>
                    <li>Employment verification in financial services</li>
                    <li>Professional qualifications certificates</li>
                    <li>Reference from regulated financial services employer</li>
                    <li>Evidence of derivatives knowledge and experience</li>
                </ul>
                </div>
            </div>
        </div>
</div>
</section>



 <section class="timeline-section">
    <div class="container-timeline">
      <h2>Application Timeline</h2>

      <div class="timeline">
        <div class="timeline-step">
          <div class="step-number">1</div>
          <div class="step-details">
            <p class="step-title">Initial Review</p>
            <p class="step-duration">2–3 Business Days</p>
          </div>
        </div>

        <div class="timeline-step">
          <div class="step-number">2</div>
          <div class="step-details">
            <p class="step-title">Documentation Verification</p>
            <p class="step-duration">3–5 Business Days</p>
          </div>
        </div>

        <div class="timeline-step">
          <div class="step-number">3</div>
          <div class="step-details">
            <p class="step-title">Final Approval</p>
            <p class="step-duration">1–2 Business Days</p>
          </div>
        </div>

        <div class="timeline-step">
          <div class="step-number">4</div>
          <div class="step-details">
            <p class="step-title">Account Activation</p>
            <p class="step-duration">Same Day Upon Approval</p>
          </div>
        </div>
      </div>
    </div>
  </section>



     <section class="eligibility">
        <div class="container">
            <!-- Left Section -->
            <div class="left-section">
                <h1>Optimise Your Professional Account</h1>
                <p>Advanced Strategies Available</p>
                
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <div class="criteria-item">
                    <button class="criteria-button" onclick="toggleContent(this)">
                        <span>Algorithmic Trading</span>
                        <span class="arrow">&#9662;</span>
                    </button>
                    <div class="criteria-content">
                        <p>Details about financial portfolio criteria...</p>
                    </div>
                </div>

                <div class="criteria-item">
                    <button class="criteria-button" onclick="toggleContent(this)">
                        <span>Cross-Asset Arbitrage</span>
                        <span class="arrow">&#9662;</span>
                    </button>
                    <div class="criteria-content">
                        <p>Details about trading experience criteria...</p>
                    </div>
                </div>

                <div class="criteria-item">
                    <button class="criteria-button" onclick="toggleContent(this)">
                        <span>High-Frequency Strategies </span>
                        <span class="arrow">&#9662;</span>
                    </button>
                    <div class="criteria-content">
                        <p>Details about professional experience criteria...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



   <section class="risk-section">
  <div class="risk-management">
    <div class="risk-left">
      <h2>Risk Management Framework</h2>
    </div>

    <div class="risk-right">
      <h4>Professional Risk Controls</h4>
      <ul class="risk-list">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check icon">
          Portfolio-level risk monitoring
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check icon">
          Real-time margin calculations
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check icon">
          Advanced stop-loss and take-profit orders
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet-circular-check.png" alt="check icon">
          Professional risk reporting tools
        </li>
      </ul>
    </div>
  </div>
  </section>




<section class="container-professionally">
    <!-- LEFT SECTION -->
    <div class="left-professionally">
      <h2>Ready to trade professionally?</h2>
      <p>Transform your trading with top conditions, enhanced leverage, and dedicated professional support.</p>

      <div class="steps-professionally">
        <h4>Immediate Next Steps</h4>
        <ol>
          <li><strong>1. Eligibility Assessment:</strong> Review the professional client criteria and gather required documentation supporting your qualification for professional status.</li>
          <li><strong>2. Application Submission:</strong> Complete our streamlined professional account application with all supporting documents for rapid processing.</li>
          <li><strong>3. Account Upgrade:</strong> Upon approval, enjoy immediate access to enhanced trading conditions and your dedicated relationship manager.</li>
        </ol>
      </div>

      <button class="risk-btn">Apply for Professional Account</button>
    </div>

    <!-- RIGHT SECTION -->
    <div class="right-professionally">
      <h3>Contact Professional Services</h3>
      <p><strong>Dedicated Professional Team</strong></p>
      <p><strong>Phone:</strong> +971 58 824 3011</p>
      <p><strong>Email:</strong> hello@lunaro.com</p>
      <br>
      <p>Live chat priority support<br>Dedicated relationship manager assignment</p>

      <button class="risk-contact-btn">Contact Professional Services</button>
    </div>
  </section>



    

    <script>
        function toggleContent(button) {
            const item = button.parentElement;
            const content = item.querySelector(".criteria-content");
            const arrow = button.querySelector(".arrow");
            const isActive = item.classList.contains("active");

            // Close all open items
            document.querySelectorAll(".criteria-item").forEach(i => {
                i.classList.remove("active");
                i.querySelector(".criteria-content").classList.remove("show");
                i.querySelector(".arrow").classList.remove("rotate");
            });

            // Open selected one
            if (!isActive) {
                item.classList.add("active");
                content.classList.add("show");
                arrow.classList.add("rotate");
            }
        }
    </script>
    
    <?php

   load_country_footer();

    ?>
</body>
 