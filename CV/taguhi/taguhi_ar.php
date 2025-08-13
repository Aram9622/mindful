<?php

function cvTaguhiAR()
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
            .content-panel{background:var(--bg);padding:10px;overflow:auto;direction:ltr;}
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
                <img src="../../images/staff/Taguhi.jpg" alt="Տագուհի Ասատրյան" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Taguhi.jpg" alt="Տագուհի Ասատրյան" />
                    </div>
                    <div>
                        <h1>Տագուհի Ասատրյան</h1>
                        <div class="subtitle">Հոգեբան, խորհրդատու</div>
                        <div class="subtitle">Խորհրդատվության արժեք: 15 000 դրամ</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Կրթություն</h2>
                    <dl>
                        <dt>2020 - 2023 թթ.</dt>
                        <dd>Անձի հոգեբանություն<br>Ռուս-հայկական պետական համալսարան, մագիստրատուրա</dd>
                        <dt>2017 - 2021 թթ.</dt>
                        <dd>Մեթոդիստ<br>Վալերի Բրյուսովի անվան պետական համալսարան</dd>
                        <dt>2004 - 2006 թթ.</dt>
                        <dd>Բանասեր և գրականագետ<br>ԵՊՀ ռուսաց լեզվի եւ գրականության ֆակուլտետ</dd>
                        <dt>2002 - 2004 թթ.</dt>
                        <dd>Բանասեր և մանկավարժ<br>ԵՊՀ բակալավրի աստիճան՝ Ռուսաց լեզվի եւ գրականության ֆակուլտետ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Աշխատանքային փորձ</h2>
                    <dl>
                        <dt>2025 թ. - մինչ օրս</dt>
                        <dd>Mindful հոգեկան առողջության խորհրդատվություն կենտրոն — Հոգեբան, խորհրդատու</dd>
                        <dt>2023 թ. - մինչ օրս</dt>
                        <dd>Մասնավոր խորհրդատվական գործունեություն — ինքնուրույն հոգեբանական խորհրդատվություն</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Հոգեթերապևտիկ ուղղություններում վերապատրաստումներ</h2>
                    <dl>
                        <dt>2024 թ.</dt>
                        <dd>TA 101 հիմունքներ<br>Տրանսակցիաների և կոնֆլիկտների վերլուծություն Պայմանագրային մեթոդ<br>
                            Էգո-վիճակների ախտորոշում, «Երեք աթոռ» մեթոդ<br>
                            Տրանսակցիոն վերլուծության եվրոպական ասոցիացիա</dd>
                        <dt>2021 - 2023 թթ.</dt>
                        <dd>Էգզիստենցիալ հոգեթերապիա<br>Խորհրդատվություն մահվան վախի, կորստի և սգի հետ աշխատանք<br>
                            Պատասխանատվության, սահմանների և մեղքի զգացման հետ<br>Կիրառական հոգեբանության կենտրոն, ԵՊՀ</dd>
                        <dt>2023 թ.</dt>
                        <dd>Նեյրոլինգվիստիկ թրեյնինգ<br>Հոգեսոմատիկ տեխնիկաներ<br>Անահիտ Արզումանյանի հոգեբանական կենտրոն</dd>
                        <dt>2022 թ.</dt>
                        <dd>Կոնֆլիկտների կառավարում, աշխատանք տրավմայի հետ<br>Ռուս-հայկական պետական համալսարան</dd>
                        <dt>2020 թ.</dt>
                        <dd>Positum-խորհրդատվություն<br>Նորարարական հայեցակարգեր պոզիտիվ հոգեթերապիայում<br>Պոզիտիվ հոգեթերապիայի համաշխարհային ասոցիացիա (WAPP)</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                    <ul>
                        <li>Միջանձնային և ընտանեկան խնդիրներ</li>
                        <li>Ներհոգեկան հակասություններ</li>
                        <li>Ինքնագնահատականի դժվարություններ</li>
                        <li>Էմոցիոնալ և վարքագծային խանգարումներ</li>
                        <li>Էգզիստենցիալ հարցեր</li>
                        <li>Աշխատանք կյանքի սցենարների հետ</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Նեղ մասնագիտացումներ</h2>
                    <dl>
                        <dt>2022 - 2023 թթ.</dt>
                        <dd>Անհատական հոգեբանություն<br>Ռուս-հայկական պետական համալսարան</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>Որ տարիքային խմբերի հետ եմ աշխատում</h2>
                        <div class="tag">Մեծահասակներ</div>
                    </div>
                    <div>
                        <h2>Աշխատանքային լեզուներ</h2>
                        <div class="tag">Հայերեն</div>
                        <div class="tag">Ռուսերեն</div>
                    </div>
                </section>

                <section class="section">
                    <h2>Խորհրդատվության արժեք</h2>
                    <div>15 000 դրամ</div>
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
