<?php

function cvAnnaAR()
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
            .section{margin-top:22px;line-height:1.4;}
            .section h2{font-size:16px;margin:0 0 10px 0;color:var(--accent)}
            dl{display:grid;grid-template-columns:180px 1fr;gap:8px 20px;margin:0}
            dt{color:var(--muted);font-weight:600}
            dd{margin:0}
            ul{margin:8px 0 0 18px; padding-left: 16px;}
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
                <img src="../../images/staff/Anna.jpg" alt="Աննա Թոնիկյան" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card" dir="ltr">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Anna.jpg" alt="Աննա Թոնիկյան" />
                    </div>
                    <div>
                        <h1>Աննա Թոնիկյան</h1>
                        <div class="subtitle">Կրծքով կերակրման մասնագետ</div>
                        <div class="subtitle">Խորհրդատվության արժեք՝ 15,000 դրամ (առերես/օնլայն), 25,000 դրամ (տնայց)</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Ուսումնառություն</h2>
                    <dl>
                        <dt>2014 - 2017թթ</dt>
                        <dd>Նեոնատոլոգ<br>ԵՊԲՀ կլինիկական օրդինատուրա</dd>
                        <dt>2012 - 2014թթ</dt>
                        <dd>Բժիշկ<br>ԵՊԲՀ մագիստրատուրա, ԸԲՖ</dd>
                        <dt>2007 - 2012թթ</dt>
                        <dd>Բուժական գործ<br>ԵՊԲՀ բակալավրիատ, ԸԲՖ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2025 - մինչ օրս</dt>
                        <dd>Mindful հոգեկան առողջության կենտրոն, Երևան — Կրծքով կերակրման մասնագետ</dd>
                        <dt>2024 - մինչ օրս</dt>
                        <dd>Մարգարյան ծննդատուն, Երևան — Կրծքով կերակրման մասնագետ</dd>
                        <dt>2024 - մինչ օրս</dt>
                        <dd>Դավիդյանց Պոլիկլինիկաներ, Երևան — Կրծքով կերակրման մասնագետ</dd>
                        <dt>2022 - 2024թթ</dt>
                        <dd>Էրեբունի ԲԿ, Երևան — Կրծքով կերակրման մասնագետ</dd>
                        <dt>2019 - 2023թթ</dt>
                        <dd>ՄՄԱՊԳԿ, Ստեփանակերտ — Նեոնատոլոգ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Նեղ մասնագիտացումներ</h2>
                    <dl>
                        <dt>2024 - 2025թթ</dt>
                        <dd>Կրծքով կերակրման խորհրդատու<br>Gold Lactation Academy, Կանադա</dd>
                        <dt>2024թ</dt>
                        <dd>Կրծքով կերակրման խորհրդատվություն<br>ԱԱԻ ՀՀ</dd>
                        <dt>2022թ</dt>
                        <dd>Մանկական սննդաբան<br>АСИЗ, ՌԴ</dd>
                        <dt>2019թ</dt>
                        <dd>Կրծքով կերակրման խորհրդատու<br>ՙՙNew Degree՚՚, ՌԴ</dd>
                    </dl>
                    <p>Մասնակցություն բազմաթիվ կոնֆերանսների Հայաստանում և արտերկրում</p>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                        <ul>
                            <li>Նախապատրաստում կրծքով կերակրման հղիության ընթացքում</li>
                            <li>Կրծքին ճիշտ մոտեցում կյանքի առաջին օրերին</li>
                            <li>Լակտոստազներ, մաստիտ</li>
                            <li>Պտուկի շրջանի վնասվածքներ, ճաքեր</li>
                            <li>Քիչ կաթ, ռելակտացիա</li>
                            <li>Լակտացիայի ինդուկցիա</li>
                            <li>Կեղծ հրաժարում կրծքից և շշից</li>
                            <li>Կրծքով կերակրման ավարտ</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Աշխատանքային լեզուներ</h2>
                        <div class="tag">Հայերեն</div>
                        <div class="tag">Ռուսերեն</div>
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
