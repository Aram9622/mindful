<?php

function cvArmenAR()
{  ob_start();?>
    <!doctype html>
    <html lang="hy">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Curriculum Vitae — Mindful (Two-column)</title>
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
        <!-- LEFT: fixed/sticky image block ,  when mobile view, hide this aside-->
        <aside class="image-panel">
            <div class="image-inner">
                <img src="../../images/staff/Armen.jpg" alt="Արմեն Հարությունյան" />
            </div>
        </aside>

        <!-- RIGHT: scrollable content (your template placed here) -->
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar"><img src="../../images/staff/Armen.jpg" alt="Արմեն Հարությունյան" /></div> <!-- I need when mobile view, show image in this div --->
                    <div>
                        <h1>Արմեն Հարությունյան</h1>
                        <div class="subtitle">Համահիմնադիր, հոգեբույժ-հոգեթերապևտ</div>
                        <div class="subtitle">Խորհրդատվության արժեք՝ 20,000 / 15,000 դր</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Կրթություն</h2>
                    <dl>
                        <dt>2022 - 2024 թթ.</dt>
                        <dd>Հոգեբույժ — ԱԱԻ կլինիկական օրդինատուրա</dd>

                        <dt>2017 - 2018 թթ.</dt>
                        <dd>Ընդհանուր բժշկական գործունեություն զինված ուժերում — Ընդհանուր գործունեության բժիշկ, ԵՊԲՀ ինտերնտուրա</dd>

                        <dt>2015 - 2017 թթ.</dt>
                        <dd>Բժիշկ, Բուժական գործ զինված ուժերում — ԵՊԲՀ մագիստրատուրա, Ռազմաբժշկական ֆակուլտետ</dd>

                        <dt>2010 - 2015 թթ.</dt>
                        <dd>Բժշկագիտություն, Բուժական գործ — ԵՊԲՀ բակալավրիատ, Ռազմաբժշկական ֆակուլտետ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2024թ. - մինչ օրս</dt>
                        <dd>Mindful հոգեկան առողջության խորհրդատվություն — համահիմնադիր, հոգեբույժ-հոգեթերապևտ</dd>

                        <dt>2023թ. - մինչ օրս</dt>
                        <dd>Ավան ՀԱԿ — Բժիշկ-հոգեբույժ</dd>

                        <dt>2022 - 2024 թթ.</dt>
                        <dd>«Երևանի Շտապբուժօգնություն» ՓԲԸ — Բժիշկ-հոգեբույժ</dd>

                        <dt>2018 - 2021 թթ.</dt>
                        <dd>Արցախի Հանրապետություն — ՊԲ բժիշկ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Հոգեթերապևտիկ ուղղություններում վերապատրաստումներ</h2>
                    <dl>
                        <dt>2024-2025 թթ.</dt>
                        <dd>Փսիխոսոմատիկա և մարմին-կենտրոնացված հոգեթերապիա — АНО ДПО «НАДПО», Ռուսաստան</dd>

                        <dt>2023 թ.</dt>
                        <dd>Կոգնիտիվ վարքաբանական թերապիա — Վարքային կոմպանիա, ՀԱՀԱ, Հայաստան</dd>
                    </dl>
                    <p style="margin-top:10px">Մասնակցել է բազմաթիվ կոնֆերանսների և թրեյնինգների Հայաստանում և արտերկրում</p>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                        <ul>
                            <li>Տագնապային խանգարում</li>
                            <li>Սոմատոփսիխիկ և փսիխոսոմատիկ խանգարում</li>
                            <li>Դեպրեսիա</li>
                            <li>Փսիխոտիկ խանգարումներ և այլն</li>
                        </ul>
                    </div>

                    <div>
                        <h2>Որ տարիքային խմբերի հետ եմ աշխատում</h2>
                        <div class="tag">Մեծահասակներ</div>

                        <h2 style="margin-top:14px">Աշխատանքային լեզու</h2>
                        <div class="tag">Հայերեն</div>
                    </div>
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
    <?php return ob_get_clean(); } ?>