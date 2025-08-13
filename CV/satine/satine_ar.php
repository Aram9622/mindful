<?php

function cvSatineAR()
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
            .content-panel{background:var(--bg);padding:10px;overflow:auto;}
            .card{background:var(--card);border-radius:12px;padding:28px;box-shadow:0 6px 24px rgba(16,24,40,0.06);max-width:900px;margin:0 auto}
            header{display:flex;align-items:center;gap:18px}
            .avatar{width:92px;height:92px;border-radius:12px;background:linear-gradient(180deg,var(--accent),#6aa6e6);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:28px}
            h1{margin:0;font-size:22px}
            .subtitle{color:var(--muted);margin-top:4px}
            .section{margin-top:22px;line-height:1.4;}
            .section h2{font-size:16px;margin:0 0 10px 0;color:var(--accent)}
            dl{display:grid;grid-template-columns:180px 1fr;gap:8px 20px;margin:0}
            dt{color:var(--muted);font-weight:600}
            dd{margin:0}
            ul{margin:8px 0 0 18px;padding-left:16px;}
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
                <img src="../../images/staff/Satine.jpg" alt="Սաթինե Բարսեղյան" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Satine.jpg" alt="Սաթինե Բարսեղյան" />
                    </div>
                    <div>
                        <h1>Սաթինե Բարսեղյան</h1>
                        <div class="subtitle">Հոգեբան-հոգեթերապևտ, Երեխաների սննդային վարքի մասնագետ</div>
                        <div class="subtitle">Խորհրդատվության արժեք՝ 15,000 դրամ</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Ուսումնառություն</h2>
                    <dl>
                        <dt>2022 - 2024 թթ.</dt>
                        <dd>Հոգեբան-հոգեթերապևտ<br>ԵՊՀ, Փիլիսոփայության և հոգեբանության ֆակուլտետ,<br>Մանկան հոգեբանություն և հոգեթերապիա, մագիստրոս</dd>
                        <dt>2011 - 2013 թթ.</dt>
                        <dd>Քաղաքագետ<br>ԵՊՀ, Միջազգային հարաբերությունների ֆակուլտետ,<br>Քաղաքագիտություն, մագիստրոս</dd>
                        <dt>2007 - 2011 թթ.</dt>
                        <dd>Քաղաքագետ<br>ԵՊՀ, Միջազգային հարաբերությունների ֆակուլտետ,<br>Քաղաքագիտություն, բակալավր</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2024 - մինչ օրս</dt>
                        <dd>Mindful հոգեկան առողջության խորհրդատվություն կենտրոն — Հոգեբան-հոգեթերապևտ, Երեխաների սննդային վարքի մասնագետ</dd>
                        <dt>2022 - 2024 թթ.</dt>
                        <dd>Rebalance կլինիկա — Հավելյալ սնուցման խորհրդատու, Սննդային վարքի մասնագետ</dd>
                        <dt>2020 - մինչ օրս</dt>
                        <dd>Անկախ խորհրդատու</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Հոգեթերապևտիկ ուղղություններով վերապատրաստումներ</h2>
                    <dl>
                        <dt>2025 թ.</dt>
                        <dd>Մանկական հոգետրավմա<br>ԵՊՀ Կիրառական հոգեբանության կենտրոն</dd>
                        <dt>2025 թ.</dt>
                        <dd>Մանկական հոգեթերապիա<br>ԵՊՀ Կիրառական հոգեբանության կենտրոն</dd>
                        <dt>2024 - 2025 թթ.</dt>
                        <dd>Սննդային վարքի խանգարումներ երեխաների մոտ<br>Լրացուցիչ մասնագիտական կրթության ազգային ակադեմիա, Ռուսաստան</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                    <ul>
                        <li>Սննդային վարքի խանգարումներ</li>
                        <li>Խուսափողական/սահմանափակող սննդի ընդունման խանգարում</li>
                        <li>Մանկական կերակրման խանգարումներ</li>
                        <li>Սննդի հետ կապված տրավմաներ</li>
                        <li>Ընտրողական սննդընդունում</li>
                        <li>Այլ խնդիրներ</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Անդամակցություններ</h2>
                    <div>Մանկական և կրթության հոգեբանների հայկական ասոցիացիա</div>
                </section>

                <section class="section">
                    <h2>Որ տարիքային խմբերի և ձևաչափերի հետ եմ աշխատում</h2>
                    <ul>
                        <li>Երեխաներ՝ 0–18 տարեկան</li>
                        <li>Ծնողներ</li>
                        <li>Անհատական և խմբային հանդիպումներ (պարապմունքներ, խաղային հանդիպումներ, դասընթացներ)</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Աշխատանքային լեզուներ</h2>
                    <div class="tag">Հայերեն</div>
                    <div class="tag">Ռուսերեն</div>
                </section>

                <section class="section">
                    <h2>Խորհրդատվության արժեք</h2>
                    <div>15,000 դրամ</div>
                </section>
            </div>
        </main>
    </div>
    </body>
    </html>
    <?php return ob_get_clean(); }
?>
