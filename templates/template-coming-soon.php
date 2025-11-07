<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lunaro — Coming Soon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --deep-blue: #0d1321;
            --midnight: #1b263b;
            --silver: #fff;
            --white: #ffffff;
            --light-gray: #fff;
            --shadow: rgba(0, 0, 0, 0.25);
            --font-body: 'DM Sans', sans-serif;
        }

        html,
        body {
            margin: 0;
            height: 100%;
            color: #000000;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: var(--font-body);
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg.png');
        }

        .stage {
            position: relative;
            width: 100vw;
            height: 100vh;
            display: grid;
            place-items: center;
            perspective: 1200px;
        }

        .envelope {
            position: relative;
            width: min(88vw, 560px);
            height: calc(min(88vw, 560px) * 0.66);
            transform-style: preserve-3d;
            transform: translateY(40vh) scale(0.9);
            opacity: 0;
            transition: transform 900ms cubic-bezier(.2, .8, .2, 1), opacity 900ms ease;
        }

        .envelope.in {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .env-base {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, #f6f4ee 0%, #ece9e2 100%);
            border-radius: 12px;
            box-shadow: 0 18px 45px var(--shadow), 0 2px 8px rgba(0, 0, 0, 0.12);
            overflow: hidden;
        }

        .flap {
            position: absolute;
            background: linear-gradient(180deg, #f6f4ee 0%, #eae7df 100%);
            border-radius: 8px;
        }

        .flap-top {
            left: 0;
            right: 0;
            top: 0;
            height: 55%;
            clip-path: polygon(0 0, 100% 0, 50% 100%);
            transform-origin: 50% 0%;
            transition: transform 900ms cubic-bezier(.2, .8, .2, 1) 300ms;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .flap-bottom {
            left: 0;
            right: 0;
            bottom: 0;
            height: 50%;
            clip-path: polygon(0 100%, 100% 100%, 50% 0);
            transform-origin: 50% 100%;
            transition: transform 900ms cubic-bezier(.2, .8, .2, 1) 300ms;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .flap-left {
            left: 0;
            top: 0%;
            bottom: 10%;
            width: 50%;
            clip-path: polygon(0 0, 100% 50%, 0 100%);
            transform-origin: 0% 50%;
            transition: transform 900ms cubic-bezier(.2, .8, .2, 1) 300ms;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            background: #f6f4ee;
            height: calc(min(88vw, 560px) * 0.66);
        }

        .flap-right {
            right: 0;
            top: 0%;
            bottom: 10%;
            width: 50%;
            clip-path: polygon(100% 0, 0 50%, 100% 100%);
            transform-origin: 100% 50%;
            transition: transform 900ms cubic-bezier(.2, .8, .2, 1) 300ms;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            background: #f6f4ee;
            height: calc(min(88vw, 560px) * 0.66);
        }

        .sticker {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) translateZ(50px);
            width: 85px;
            height: 85px;
            border-radius: 50%;
            transform-style: preserve-3d;
            transition: transform 700ms cubic-bezier(.2, .8, .2, 1),
                opacity 300ms ease 500ms,
                box-shadow 700ms ease;
            z-index: 100;
            background: #A89469;
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: none;
        }


        .sticker img {
            width: 45px;
            height: 45px;
            object-position: center;
        }

        .sticker.lift {
            transform: translate(-50%, -125%) translateZ(30px);
            opacity: 0.8;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3), 0 0 15px rgba(0, 0, 0, 0.8);
        }

        .letter-full-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.8);
            width: 45vw;
            height: 75vh;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.25);
            z-index: 2147483647;
            display: none;
            overflow: auto;
            padding: 24px 40px;
            opacity: 0;
            transition: transform 0.8s cubic-bezier(.2, .8, .2, 1), opacity 0.8s ease;
            text-align: justify;
            scrollbar-width: thin;
            scrollbar-color: #c1a56f #f0f0f0;
        }

        .letter-full-container::-webkit-scrollbar {
            width: 10px;
        }

        .letter-full-container::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 12px;
        }

        .letter-full-container::-webkit-scrollbar-thumb {
            background: #c1a56f;
            border-radius: 12px;
            border: 2px solid #f0f0f0;
        }

        .letter-full-container::-webkit-scrollbar-thumb:hover {
            background: #a88b5f;
        }

        .letter-full-container.show {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        .letter-full-container h1 {
            margin-top: 0;
            color: #000000;
            font-weight: 500;
            font-size: 41px;
            line-height: 33px;
            text-align: center;
        }

        .letter-full-container p {
            font-size: 16px;
            line-height: 1.7;
            color: #000000;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 480ms ease, transform 480ms ease;
        }

        .letter-full-container p.show {
            opacity: 1;
            transform: translateY(0);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2147483646;
            display: none;
        }

        .overlay.show {
            display: block;
        }

        @media (max-width: 1200px) {
            .letter-full-container {
                width: 85vw;
                height: 60vh;
                padding: 20px;
            }

            .letter-full-container h1 {
                font-size: 32px;
            }
        }

        .footer-text {
            font-weight: 400;
            font-size: 5.79px;
            line-height: 100%;
            margin-bottom: 25px;
            margin-top: 25px;
            color: #A89469;
            margin-bottom: 0px;
        }
    </style>
</head>

<body>
    <div class="stage">
        <div class="envelope" id="envelope">
            <div class="env-base"></div>
            <div class="flap flap-top" id="flapTop"></div>
            <div class="flap flap-left" id="flapLeft"></div>
            <div class="flap flap-right" id="flapRight"></div>
            <div class="flap flap-bottom" id="flapBottom"></div>
            <div class="sticker" id="sticker"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Union.svg" alt="Sticker Image"></div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="letter-full-container" id="letterFullContainer">
        <div class="letter-head" style="margin-bottom: 25px; display: flex; justify-content: center;">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-logo.png" alt="Lunaro Logo">
        </div>
        <h1 style="text-align: center;">A trusted name, <span style="color: #A89469;">reborn.</span></h1>
        <div id="letterFullContent" style="margin-top: 35px;"></div>
    </div>
<script>
        (function () {
            const envelope = document.getElementById('envelope');
            const sticker = document.getElementById('sticker');
            const flapTop = document.getElementById('flapTop');
            const flapBottom = document.getElementById('flapBottom');
            const flapLeft = document.getElementById('flapLeft');
            const flapRight = document.getElementById('flapRight');
            const letterFullContainer = document.getElementById('letterFullContainer');
            const letterFullContent = document.getElementById('letterFullContent');
            const overlay = document.getElementById('overlay');

            const formattedContent = document.createElement('div');


            const line1 = document.createElement('p');
            line1.className = 'line';
            line1.style.margin = '0px';
            line1.innerHTML = "What began as APM Capital has evolved; the same foundation, refined into something greater: <strong style='color: #A89469; font-family: 'DM Sans', sans-serif;'>Lunaro</strong>.";
            line1.style.fontFamily = "'DM Sans', sans-serif"; 
            formattedContent.appendChild(line1);

            const line2 = document.createElement('p');
            line2.className = 'line';
            line2.style.margin = '0px';
            line2.innerHTML = "Born from experience, built on regulation, and shaped by precision, <strong style='color: #A89469; font-family: 'DM Sans', sans-serif;'>Lunaro</strong> marks a new era in how we define excellence in finance.";
             line2.style.fontFamily = "'DM Sans', sans-serif"; 
            formattedContent.appendChild(line2);

            const line3 = document.createElement('p');
            line3.className = 'line';
            line3.style.margin = '0px';
            line3.innerHTML = "We remain who we've always been - steady, principled, and exacting - yet sharper, more agile, and ready for what's next.";
             line3.style.fontFamily = "'DM Sans', sans-serif"; 
            formattedContent.appendChild(line3);

            const line4 = document.createElement('p');
            line4.className = 'line';
            line4.style.marginBottom = '0px';
            line4.innerHTML = "Like the moon that endures through every cycle, <strong style='color: #A89469; font-family: 'DM Sans', sans-serif;'>Lunaro</strong> embodies strength, clarity, and evolution.";
             line4.style.fontFamily = "'DM Sans', sans-serif"; 
            formattedContent.appendChild(line4);

            const line5 = document.createElement('p');
            line5.className = 'line';
            line5.style.margin = '0px';
            line5.innerHTML = "Our vision extends beyond boundaries. The markets evolve, and so do we, with the same conviction and a renewed commitment to clarity, integrity, and performance.";
             line5.style.fontFamily = "'DM Sans', sans-serif"; 
            formattedContent.appendChild(line5);

            const line6 = document.createElement('p');
            line6.className = 'line';
            line6.style.marginBottom = '0px';
            line6.innerHTML = "Welcome to <strong style='color: #A89469; font-family: 'DM Sans', sans-serif;'>Lunaro</strong>, a boutique, fully regulated financial brokerage that offers both exchange-traded and CFD products under one roof. We combine the credibility of top-tier regulation with the agility and service of a nimble, client-focused firm.";
             line6.style.fontFamily = "'DM Sans', sans-serif"; 
            formattedContent.appendChild(line6);

            const line7 = document.createElement('p');
            line7.className = 'line';
            line7.style.marginBottom = '0px';
            line7.innerHTML = "For those who value the excellence that lasts.";
             line7.style.fontFamily = "'DM Sans', sans-serif"; 
            formattedContent.appendChild(line7);

            // Footer
            const footerDiv = document.createElement('div');
            footerDiv.style.marginTop = '24px';
            footerDiv.style.display = 'flex';
            footerDiv.style.flexDirection = 'column';
            footerDiv.style.alignItems = 'center';
            footerDiv.style.justifyContent = 'center';
            footerDiv.style.opacity = '0';
            footerDiv.style.transform = 'translateY(10px)';
            footerDiv.style.transition = 'opacity 500ms ease, transform 500ms ease';

            const footerImg = document.createElement('img');
            footerImg.src = './logo.png';
            footerImg.alt = 'Lunaro Logo';
          
            footerImg.style.marginTop = '30px';
            footerImg.style.marginBottom = '12px';
            footerDiv.appendChild(footerImg);

            const footerText = document.createElement('p');
            footerText.className = 'footer-text line';
            footerText.style.fontSize = '8px';
            footerText.style.color = '#A89469';
            footerText.style.marginTop = '20px';
            footerText.innerHTML = "Registered with Abu Dhabi Global Market (ADGM) as a Private Company Limited by Shares (RN 000005466). Authorised and regulated by the Financial Services Regulatory Authority of the ADGM (FSP No. 200034).";
            footerDiv.appendChild(footerText);

            formattedContent.appendChild(footerDiv);
            letterFullContent.appendChild(formattedContent);

            function openSequence() {
                envelope.classList.add('in');
                setTimeout(() => {
                    sticker.classList.add('lift');
                    setTimeout(() => {
                        flapTop.style.transform = 'rotateX(-160deg)';
                        setTimeout(() => {
                            flapLeft.style.transform = 'rotateY(-160deg)';
                            flapRight.style.transform = 'rotateY(160deg)';
                            setTimeout(() => {
                                flapBottom.style.transform = 'rotateX(160deg)';
                                setTimeout(() => {
                                    overlay.classList.add('show');
                                    letterFullContainer.style.display = 'block';
                                    setTimeout(() => {
                                        letterFullContainer.classList.add('show');
                                        const fullLines = Array.from(letterFullContent.querySelectorAll('.line'));
                                        fullLines.forEach((node, idx) =>
                                            setTimeout(() => node.classList.add('show'), 300 + idx * 420)
                                        );

                                        setTimeout(() => {
                                            footerDiv.style.opacity = '1';
                                            footerDiv.style.transform = 'translateY(0)';
                                        }, 300 + fullLines.length * 420);
                                    }, 50);
                                }, 280);
                            }, 200);
                        }, 200);
                    }, 320);
                }, 900);
            }

            window.addEventListener('DOMContentLoaded', openSequence);
        })();
    </script>
</body>

</html>