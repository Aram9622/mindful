<?php

function cvHermineAR()
{ ob_start(); ?>
    <!doctype html>
    <html lang="hy">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Կենսագրություն — Mindful (երկու սյունակ)</title>
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
                <img src="../../images/staff/Hermine.jpg" alt="Հերմինե Հակոբյան" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar"><img src="../../images/staff/Hermine.jpg" alt="Հերմինե Հակոբյան" /></div>
                    <div>
                        <h1>Հերմինե Հակոբյան</h1>
                        <div class="subtitle">Հոգեբան-հոգեթերապևտ</div>
                        <div class="subtitle">Խորհրդատվության արժեք՝ 20,000 դր</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Կրթություն</h2>
                    <dl>
                        <dt>1999 - 2004 թթ․</dt>
                        <dd>Ռազմական հոգեբան — ԵՊՄՀ Մանկավարժության և հոգեբանության ֆակուլտետ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2024թ - մինչ օրս</dt>
                        <dd>Mindful հոգեկան առողջության խորհրդատվություն — Հոգեբան-հոգեթերապևտ</dd>
                        <dt>2008թ - մինչ օրս</dt>
                        <dd>«Ավան» հոգեկան առողջության կենտրոն — Հոգեբան</dd>
                        <dt>2018 - 2019թթ</dt>
                        <dd>Սիգմա-Մեդ արտահիվանդանոցային նարկոլոգիական ծառայությունների կենտրոն — Հոգեբան-խորհրդատու</dd>
                        <dt>2004-2007թթ.</dt>
                        <dd>«Մխիթար Գոշ» Հայ-Ռուսական համալսարան — Դասախոս</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Հոգեթերապևտիկ ուղղություններում վերապատրաստումներ</h2>
                    <dl>
                        <dt>2024 - 2025թթ.</dt>
                        <dd>Սխեմա թերապիա — Մոսկվայի սխեմա թերապիայի ինստիտուտ, Ռուսաստան</dd>
                        <dt>2010թ.</dt>
                        <dd>Կոգնիտիվ-վարքաբանական թերապիա — ԵՊՄՀ, Հայաստան</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                    <ul>
                        <li>Դեպրեսիա</li>
                        <li>Տագնապային խանգարումներ</li>
                        <li>Կպչուն-Սևեռուն խանգարում</li>
                        <li>Սոմատոփսիխիկ և փսիխոսոմատիկ խանգարումներ</li>
                        <li>Հետտրավմատիկ սթրեսային խանգարում</li>
                        <li>Կոմպլեքս ՀՏՍԽ</li>
                        <li>Անձի խանգարումներ</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Անդամակցություններ</h2>
                    <ul>
                        <li>Հայկական Հոգեբուժական Ասոցիացիա</li>
                        <li>Մասնակցել է բազմաթիվ կոնֆերանսների և թրեյնինգների Հայաստանում</li>
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
                // Show avatar image in mobile
                avatarImg.style.display = 'block';

                // Hide left image panel
                imagePanel.style.display = 'none';

                // Make right content take full width
                splitContainer.style.gridTemplateColumns = '1fr';
            } else {
                // Hide avatar image in desktop
                avatarImg.style.display = 'none';

                // Show left image panel
                imagePanel.style.display = 'block';

                // Restore original 2-column layout
                splitContainer.style.gridTemplateColumns = '42% 58%';
            }
        }

        // Run on load
        toggleAvatarImage();

        // Run on resize
        window.addEventListener('resize', toggleAvatarImage);
    </script>
    </body>
    </html>
    <?php return ob_get_clean(); }
?>