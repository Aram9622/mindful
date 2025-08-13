<?php

function cvMariamAR()
{ ob_start(); ?>
    <!doctype html>
    <html lang="hy">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Կենսագրություն — Mindful (Երկբաժին)</title>
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
                <img src="../../images/staff/Mariam.jpg" alt="Mariam Tonyan" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Mariam.jpg" alt="Mariam Tonyan" />
                    </div>
                    <div>
                        <h1>Mariam Tonyan</h1>
                        <div class="subtitle">Հոգեբան-հոգեթերապևտ</div>
                        <div class="subtitle">Խորհրդատվության արժեք՝ 15,000 դր.</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Կրթություն</h2>
                    <dl>
                        <dt>2016 - 2018թթ.</dt>
                        <dd>Կլինիկական հոգեբան և հոգեթերապևտ, ԵՊՀ Փիլիսոփայության և հոգեբանության ֆակուլտետ</dd>
                        <dt>2012 - 2016թթ.</dt>
                        <dd>Հոգեբան, ԵՊՀ Փիլիսոփայության և հոգեբանության ֆակուլտետ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2024թ. - մինչ օրս</dt>
                        <dd>Mindful հոգեկան առողջության խորհրդատվության կենտրոն — հոգեբան-հոգեթերապևտ</dd>
                        <dt>2024թ. - մինչ օրս</dt>
                        <dd>ԱյսՏեղ Co-working — հոգեբան-հոգեթերապևտ</dd>
                        <dt>2021 - 2025թթ.</dt>
                        <dd>Երևանի «Շող» երեխաների համայնքահեն ցերեկային կենտրոն — հոգեբան-հոգեթերապևտ</dd>
                        <dt>2018 - 2021թթ.</dt>
                        <dd>«Երեխայի և ընտանիքի աջակցության կենտրոն» ՊՈԱԿ — հոգեբան-հոգեթերապևտ</dd>
                        <dt>2017թ.</dt>
                        <dd>«Արմենակ և Աննա Թադևոսյանների» ԲԿ — հոգեբան</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Հոգեթերապևտիկ ուղղություններում վերապատրաստումներ</h2>
                    <dl>
                        <dt>2025թ.</dt>
                        <dd>Բալինտյան խմբավարի վերապատրաստում — ԵՊՀ Կիրառական հոգեբանության կենտրոն, I Balint International Association (Ռուսաստան)</dd>
                        <dt>2025թ.</dt>
                        <dd>Բրեյնսփոթինգ/տրանսգեներացիոն տրավմա — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2024 - 2025թթ.</dt>
                        <dd>Բրեյնսփոթինգ/ինտենսիվ — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2024թ.</dt>
                        <dd>Աշխատանք մասերի հետ — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2024թ.</dt>
                        <dd>Լիմբիկ կոնտրտրանսֆեր — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2022թ.</dt>
                        <dd>Ընտանեկան ճգնաժամային միջամտություն — Մանկական և կրթության հոգեբանների հայկական ասոցիացիա</dd>
                        <dt>2022թ.</dt>
                        <dd>Բրեյնսփոթինգ. Փուլ 1 և Փուլ 2 — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2019թ.</dt>
                        <dd>Գեշտալտ մոտեցումը հոգեախտաբանություն մեջ — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2019թ.</dt>
                        <dd>Բռնությունը ընտանիքում — Աշխատանքի և Սոցիալական Հետազոտությունների Ազգային Ինստիտուտ</dd>
                        <dt>2019թ.</dt>
                        <dd>Պրոբացիայի ծառայությունը և իրավախախտների վերասոցիալականացումը համայնքային համագործակցության զարգացման միջոցով — Աշխատանքի և Սոցիալական Հետազոտությունների Ազգային Ինստիտուտ</dd>
                        <dt>2019թ.</dt>
                        <dd>Գեշտալտ թերապիան երեխաների հետ աշխատանքում — ԷԼ-ՊԻ Հոգեբանական Ուսումնախորհրդատվական Կենտրոն</dd>
                        <dt>2019թ.</dt>
                        <dd>Տրավմայի հետ աշխատանք. Գեշտալտ մոտեցում — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն, APOA</dd>
                        <dt>2018թ.</dt>
                        <dd>Արքետիպային վերլուծություն — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2018թ.</dt>
                        <dd>Հեքիաթաթերապիա — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2018թ.</dt>
                        <dd>Դասական և Յունգյան հոգեդրամա — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2017թ.</dt>
                        <dd>Պալիատիվ խնամքի մասնագետի հոգեբանական գործնական վերապատրաստում — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2016 - 2017թթ.</dt>
                        <dd>Կոգնիտիվ-վարքաբանական հոգեթերապիա — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2016թ.</dt>
                        <dd>Մանկան հոգեթերապիա — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                        <dt>2015թ.</dt>
                        <dd>Արտ-թերապիայի բազային տեխնիկաներ — ԵՊՀ Կիրառական Հոգեբանության Կենտրոն</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                    <ul>
                        <li>Հոգետրավմա</li>
                        <li>Տագնապային և դեպրեսիվ խանգարումներ</li>
                        <li>Ինքնաճանաչում և ինքնաընդունում</li>
                        <li>Միջանձնային հաղորդակցման դժվարություններ</li>
                        <li>Հուզական այրում</li>
                        <li>Աշխատանք մահվան վախի հետ</li>
                        <li>Կորուստ և վիշտ</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Որ տարիքային խմբերի հետ եմ աշխատում</h2>
                    <div class="tag">Մեծահասակներ</div>
                </section>

                <section class="section">
                    <h2>Աշխատանքային լեզուներ</h2>
                    <div class="tag">Հայերեն</div>
                </section>

                <section class="section">
                    <h2>Խորհրդատվության արժեք</h2>
                    <div class="tag">15,000 դր.</div>
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
        window.addEventListener('resize', toggleAvatarImage);
        window.addEventListener('load', toggleAvatarImage);
    </script>
    </body>
    </html>
    <?php return ob_get_clean();
}
