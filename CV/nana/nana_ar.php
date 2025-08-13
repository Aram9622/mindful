<?php

function cvNanaAR()
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
                <img src="../../images/staff/Nana.jpg" alt="Նանա Փամբուխչյան" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Nana.jpg" alt="Նանա Փամբուխչյան" />
                    </div>
                    <div>
                        <h1>Նանա Փամբուխչյան</h1>
                        <div class="subtitle">Հոգեթերապևտ</div>
                        <div class="subtitle">Խորհրդատվության արժեք՝ 15,000 դրամ</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Ուսումնառություն</h2>
                    <dl>
                        <dt>2015 - 2019 թթ.</dt>
                        <dd>Կլինիկական հոգեբան<br>Բակալավրիատ, ԵՊՀ Փիլիսոփայության և Հոգեբանության Ֆակուլտետ</dd>
                        <dt>2019 - 2021 թթ.</dt>
                        <dd>Կլինիկական հոգեբան<br>Կլինիկական Հոգեբանություն և Հոգեթերապիա, Մագիստրատուրա, ԵՊՀ Փիլիսոփայության և Հոգեբանության Ֆակուլտետ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2024 - մինչ օրս</dt>
                        <dd>Mindful Հոգեկան առողջության խորհրդատվություն կենտրոն — Հոգեթերապևտ</dd>
                        <dt>2023 - մինչ օրս</dt>
                        <dd>Կենաց Ծառ հոգեբանական կենտրոն — Հոգեթերապևտ</dd>
                        <dt>2024 - մինչ օրս</dt>
                        <dd>Առաքելություն Հայաստան ԲՀԿ — Հոգեբան</dd>
                        <dt>2023 թ.</dt>
                        <dd>Հայկական Կարմիր Խաչի ընկերություն — Հոգեբան</dd>
                        <dt>2022 - 2023 թթ.</dt>
                        <dd>Հայկական Հոգևոր վերականգնման հիմնադրամ — Հոգեբան</dd>
                        <dt>2022 - 2023 թթ.</dt>
                        <dd>ԵՊՀ Կիրառական հոգեբանության կենտրոն — Հոգեթերապևտ</dd>
                        <dt>2021 - 2022 թթ.</dt>
                        <dd>Ավանի տարեցների ցերեկային կենտրոն, "Առաքելություն Հայաստան" ԲՀԿ — Հոգեբան</dd>
                        <dt>2021 - 2022 թթ.</dt>
                        <dd>Ավանի "Խատուտիկ" երեխայի և ընտանիքի աջակցման կենտրոն — Հոգեբան</dd>
                        <dt>2022 թ.</dt>
                        <dd>"Տնային խնամքի ծառայություններ հոգեկան առողջության խնդիրներ ունեցող անձանց համար" ծրագիր — Հոգեբան</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Հոգեթերապևտիկ ուղղություններում վերապատրաստումներ</h2>
                    <dl>
                        <dt>2019 - 2022 թ․</dt>
                        <dd>Կոգնիտիվ Վարքաբանական Հոգեթերապիա<br>ԵՊՀ Կիրառական հոգեբանության կենտրոն</dd>
                        <dt>2024 թ․</dt>
                        <dd>Նարրատիվային հոգեթերապիա<br>Հայկական հոգևոր վերականգման հիմնադրամ</dd>
                        <dt>2022 թ․</dt>
                        <dd>Ընտանեկան ճգնաժամային միջամտություն<br>ԵՊՀ Կիրառական հոգեբանության կենտրոն</dd>
                        <dt>2021 թ․</dt>
                        <dd>Տրավմա և վիշտ<br>Տրանսպերսոնալ հոգեբանության և հիպնոթերապիայի դպրոց, ԵՊՀ</dd>
                        <dt>2020 թ․</dt>
                        <dd>Առաջին հոգեբանական օգնություն<br>ԵՊՀ Կիրառական Հոգեբանության կենտրոն</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                    <ul>
                        <li>Դեպրեսիա</li>
                        <li>Տագնապային խանգարումներ</li>
                        <li>Կպչուն - Սևեռուն խանգարում</li>
                        <li>Երկբևեռ Աֆեկտիվ խանգարում</li>
                        <li>Հետտրավմատիկ սթրեսային խանգարում</li>
                        <li>Անձի խանգարումներ</li>
                        <li>Սննդային վարքի խանգարում</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Որ տարիքային խմբերի հետ եմ աշխատում</h2>
                    <div class="tag">Մեծահասակներ</div>
                    <div class="tag">Դեռահասներ</div>
                </section>

                <section class="section">
                    <h2>Աշխատանքային լեզուներ</h2>
                    <div class="tag">Հայերեն</div>
                    <div class="tag">Անգլերեն</div>
                </section>

                <section class="section">
                    <h2>Խորհրդատվության արժեք</h2>
                    <div>15,000 դրամ</div>
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