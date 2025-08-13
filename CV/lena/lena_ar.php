<?php

function cvLenaAR()
{ ob_start(); ?>
    <!doctype html>
    <html lang="hy">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Կենսագրություն — Mindful (Երկու սյունակ)</title>
        <style>
            :root{--bg:#f6f7fb;--card:#ffffff;--accent:#2b6cb0;--muted:#6b7280;--paper:#f8fafc}
            *{box-sizing:border-box}
            html,body{height:100%;margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial;color:#111}
            .split{display:grid;grid-template-columns:42% 58%;min-height:100vh}
            .image-panel{position:relative}
            .image-inner{position:sticky;top:0;height:100vh;width:100%;overflow:hidden}
            .image-inner img{width:100%;height:100%;object-fit:cover;display:block}
            .content-panel{background:var(--bg);padding:10px;overflow:auto}
            .card{background:var(--card);border-radius:12px;padding:28px;box-shadow:0 6px 24px rgba(16,24,40,0.06);max-width:900px;margin:0 auto}
            header{display:flex;align-items:center;gap:18px}
            .avatar{width:92px;height:92px;border-radius:12px;background:linear-gradient(180deg,var(--accent),#6aa6e6);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:28px}
            h1{margin:0;font-size:22px}
            .subtitle{color:var(--muted);margin-top:4px}
            .section{margin-top:22px}
            .section h2{font-size:16px;margin:0 0 10px 0;color:var(--accent)}
            dl{display:grid;grid-template-columns:180px 1fr;gap:8px 20px;margin:0}
            dt{color:var(--muted);font-weight:600}
            dd{margin:0}
            ul{margin:8px 0 0 18px}
            .two-cols{display:grid;grid-template-columns:1fr 1fr;gap:18px}
            .tag{display:inline-block;padding:6px 10px;background:var(--paper);border-radius:999px;color:#0f1724;margin:6px 6px 0 0}
            .footer{margin-top:24px;color:var(--muted);font-size:14px}
            @media (max-width:900px){.split{grid-template-columns:1fr} .image-inner{height:40vh} .card{padding:20px}}
            @media print{.image-inner{display:none}}
        </style>
    </head>
    <body>
    <div class="split">
        <aside class="image-panel">
            <div class="image-inner">
                <img src="../../images/staff/Lena.jpg" alt="Լենա Մանուկյան" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Lena.jpg" alt="Լենա Մանուկյան" />
                    </div>
                    <div>
                        <h1>Լենա Մանուկյան</h1>
                        <div class="subtitle">Հոգեբան-հոգեթերապևտ</div>
                        <div class="subtitle">Խորհրդատվության արժեք՝ 15,000 դր.</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Կրթություն</h2>
                    <dl>
                        <dt>2018 - 2020թթ․</dt>
                        <dd>Կլինիկական հոգեբան, ԵՊՀ կլինիկական հոգեբանություն և հոգեթերապիա</dd>
                        <dt>2014 - 2018թթ․</dt>
                        <dd>Հոգեբան, Մ․ Մաշտոցի անվան համալսարան, մանկավարժություն և հոգեբանություն</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2024թ. - մինչ օրս</dt>
                        <dd>“Mindful” հոգեկան առողջության խորհրդատվության կենտրոն — հոգեբան-հոգեթերապևտ</dd>
                        <dt>2024թ.</dt>
                        <dd>Skill Academy — Դասընթացավար, “Հոգեբանական գրագիտություն և հոգեկրթություն” դասընթացի հեղինակ, բանախոս</dd>
                        <dt>2023թ․</dt>
                        <dd>«Առաքելություն Հայաստան» բարեգործական կազմակերպություն — հոգեբան-խմբավար</dd>
                        <dt>2022թ․</dt>
                        <dd>«Us Against Drugs World Vision» — Հոգեբան-թրեյնինգավար</dd>
                        <dt>2020 - 2022թթ․</dt>
                        <dd>«Veles NGO» — Հոգեբան</dd>
                        <dt>2021 - 2023թթ․</dt>
                        <dd>«Զատիկ» ԵԱԿ ՊՈԱԿ — Կլինիկական հոգեբան - հոգեթերապևտ</dd>
                        <dt>2020թ.</dt>
                        <dd>«Ապաստարաններ» — հոգեբան</dd>
                        <dt>2018 - 2021թթ․</dt>
                        <dd>Gi3 Yerevan Talks — Հիմնադիր-կոորդինատոր-բանախոս</dd>
                        <dt>2018թ.</dt>
                        <dd>Հայկական հոգեբանության ակադեմիա — Կազմակերպչի օգնական</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Հոգեթերապևտիկ ուղղություններում վերապատրաստումներ</h2>
                    <dl>
                        <dt>2025թ։- մինչ օրս</dt>
                        <dd>Հոգեթերապիա ADHD-ով մեծահասակների հետ — Եվգենյա Դաշկովայի դասընթաց</dd>
                        <dt>2025թ.</dt>
                        <dd>EMDR ապացուցահեն մեթոդ տրավմաների հետ աշխատելու համար — Ակմե-Վիտա</dd>
                        <dt>2023թ.</dt>
                        <dd>Կլինիկական հոգեբանը պրակտիկայում — “Լիբրա” հոգեբանական կենտրոն</dd>
                        <dt>2022թ.</dt>
                        <dd>RESPONDER: Արտակարգ իրավիճակներում արձագանքման հմտություններ — Israel Trauman coalition</dd>
                        <dt>2022թ.</dt>
                        <dd>Երեխայի հոգեբանական առանձնահատկությունների դուրսբերում — «Զարգացման Հարթակ» սոցիալ-հոգեբանական</dd>
                        <dt>2021 - 2022թթ.</dt>
                        <dd>Տրավմաթերապիա՝ աշխատանք պատերազմական տրավմայի հետ — Federal foreign office, European ways, Armenian Caritas</dd>
                        <dt>2020թ.</dt>
                        <dd>Կոգնիտիվ վարքաբանական հոգեթերապիա — Կիրառական հոգեբանության կենտրոն</dd>
                        <dt>2020թ.</dt>
                        <dd>Էկզիստենցիալ հոգեթերապիա — Կիրառական հոգեբանության կենտրոն</dd>
                        <dt>2020թ.</dt>
                        <dd>Բռնության ենթարկված անձի հետ աշխատանք — WRC Armenia, Sexual Assault Crisis center</dd>
                        <dt>2020թ.</dt>
                        <dd>Աշխատանք ԼԳԲՏ անձանց հետ — Pink Armenia</dd>
                        <dt>2019թ.</dt>
                        <dd>Նեյրոլինգվիստիկ ծրագրավորում – NLP — Ռուբեն Նաղդյան, Անահիտ Արզումանյանի հոգեբանական կենտրոն</dd>
                        <dt>2019թ.</dt>
                        <dd>Հոգեբանական խորհրդատվություն — Անահիտ Արզումանյանի հոգեբանական կենտրոն</dd>
                        <dt>2018թ.</dt>
                        <dd>Ալկոհոլային և թմրանյութային կախյալության և փոխկախյալության հետ աշխատանք — INTRA</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                    <ul>
                        <li>Տագնապային խանգարումներ</li>
                        <li>Սոցիալական տագնապներ</li>
                        <li>PTSD-Հետտրավմատիկ սթրեսային խանգարում</li>
                        <li>CPTSD-կոմպլեքս PTSD</li>
                        <li>Դեպրեսիվ խանգարումներ</li>
                        <li>ADHD</li>
                        <li>Անինքնավստահություն և ինքնագնահատականի խնդիրներ</li>
                        <li>Խնդիրներ միջանձնային հարաբերություններում</li>
                        <li>Որոշումներ կայացնելու բարդություններ</li>
                        <li>Սիրային կախվածություն</li>
                        <li>Անցանկալի հուզական վիճակներ (մեղքի զգացում, տխրություն կամ դեպրեսիա, զայրույթ և այլն)</li>
                        <li>Սեպարացիա, ծնող-երեխա հարաբերություններում ծագած խնդիրներ</li>
                        <li>Սահմանների հետ աշխատանք՝ անձնական և ընտանեկան, աշխատանքային հարաբերություններում</li>
                        <li>Աշխատանք բռնության ենթարկված անձանց հետ</li>
                        <li>Աշխատանք ԼԳԲՏ+ անձանց հետ</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Որ տարիքային խմբերի հետ եմ աշխատում</h2>
                    <div class="tag">Մեծահասակներ</div>
                </section>

                <section class="section">
                    <h2>Աշխատանքային լեզուներ</h2>
                    <div class="tag">Հայերեն</div>
                    <div class="tag">Ռուսերեն</div>
                </section>
            </div>
        </main>
    </div>

    <script>
        function toggleAvatarImage() {
            const avatarImg = document.querySelector('.avatar img');
            const imagePanel = document.querySelector('.image-panel');
            const splitContainer = document.querySelector('.split');

            if (window.innerWidth <= 900) {
                avatarImg.style.display = 'block';
                imagePanel.style.display = 'none';
                splitContainer.style.gridTemplateColumns = '1fr';
            } else {
                avatarImg.style.display = 'none';
                imagePanel.style.display = 'block';
                splitContainer.style.gridTemplateColumns = '42% 58%';
            }
        }

        toggleAvatarImage();
        window.addEventListener('resize', toggleAvatarImage);
    </script>

    </body>
    </html>
    <?php return ob_get_clean(); }
?>