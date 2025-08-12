<?php

function cvTatev()
{  ob_start();?>
<!doctype html>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Կենսագրություն — Mindful (Two-column)</title>
<style>
    :root{--bg:#f6f7fb;--card:#ffffff;--accent:#2b6cb0;--muted:#6b7280;--paper:#f8fafc}
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,`Noto Sans Armenian`,Arial;color:#111}

    /* layout */
    .split{display:grid;grid-template-columns:42% 58%;min-height:100vh}

    /* left image panel stays fixed (sticky) while right content scrolls */
    .image-panel{position:relative}
    .image-inner{position:sticky;top:0;height:100vh;width:100%;overflow:hidden}
    .image-inner img{width:100%;hei<html lang="hy">
    <head>ght:100%;object-fit:cover;display:block}

    /* right content scrolls normally */
    .content-panel{background:var(--bg);padding:32px 28px;overflow:auto}
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
    .split {
        /*display: none;*/
    }
</style>
</head>
<body>
<div class="split">
    <!-- LEFT: fixed/sticky image block -->
    <aside class="image-panel">
        <div class="image-inner">
            <!-- Replace the src with your image file or URL -->
            <img src="../../images/staff/Tatev.jpg" alt="Տաթևիկ Խաչատրյան" />
        </div>
    </aside>

    <!-- RIGHT: scrollable content (your template placed here) -->
    <main class="content-panel">
        <div class="card">
            <header>
                <div class="avatar">Տ</div>
                <div>
                    <h1>Տաթևիկ Խաչատրյան</h1>
                    <div class="subtitle">Հիմնադիր, հոգեբույժ-հոգեթերապևտ</div>
                    <div class="subtitle">Խորհրդատավերի արժեք՝ 25,000 / 20,000 դր</div>
                </div>
            </header>

            <section class="section">
                <h2>Կրթություն</h2>
                <dl>
                    <dt>2020 - 2021թթ.</dt>
                    <dd>Մանկական և դեռահասային հոգեբույժ — ԱԱԻ կլինիկական օրդինատուրա</dd>

                    <dt>2017 - 2019թթ.</dt>
                    <dd>Հոգեբույժ — ԵՊԲՀ կլինիկական օրդինատուրա</dd>

                    <dt>2015 - 2017թթ.</dt>
                    <dd>Բժիշկ — ԵՊԲՀ մագիստրատուրա (ԸԲՖ)</dd>

                    <dt>2010 - 2015թթ.</dt>
                    <dd>Բուժական գործ — ԵՊԲՀ բակալավրիատ (ԸԲՖ)</dd>
                </dl>
            </section>

            <section class="section">
                <h2>Աշխատանքային փորձ</h2>
                <dl>
                    <dt>2024թ.- մինչ օրս</dt>
                    <dd>Mindful հոգեկան առողջության խորհրդատվություն — հիմնադիր, հոգեբույժ-հոգեթերապևտ</dd>

                    <dt>2024թ.- մինչ օրս</dt>
                    <dd>Իրավունքներ, ծառայություններ, մասնակցություն. Հայաստանում հոգեկան առողջության խթանում — հոգեբույժ-փորձագետ</dd>

                    <dt>2020 - 2024թթ.</dt>
                    <dd>MHS հոգեկան առողջության ծառայություն — հոգեբույժ-հոգեթերապևտ</dd>

                    <dt>2022 - 2023թթ.</dt>
                    <dd>Մուրացան համալսարանական հիվանդանոց — հոգեբույժ-խորհրդատու</dd>

                    <dt>2019 - 2021թթ.</dt>
                    <dd>Արցախի հանրապետություն ԱՆ, Հոգեթմրաբանական դիսպանսեր ՓԲԸ — հոգեբույժ</dd>

                    <dt>2019 - 2021թթ.</dt>
                    <dd>Արցախի հանրապետություն, Էմպատիա հոգեկան առողջության կենտրոն — հոգեբույժ-հոգեթերապևտ</dd>

                    <dt>2019 - 2021թթ.</dt>
                    <dd>Ստեփանակերտի զինկոմիսարիատ — հոգեբույժ</dd>
                </dl>
            </section>

            <section class="section">
                <h2>Հոգեթերապևտիկ վերապատրաստումներ</h2>
                <dl>
                    <dt>2024 - 2025թթ.</dt>
                    <dd>Սխեմա թերապիա — Մոսկվայի սխեմա թերապիայի ինստիտուտ, Ռուսաստան</dd>

                    <dt>2022 - 2024թթ.</dt>
                    <dd>Նշան կենտրոնացված թերապիա — Ստենֆորդի համալսարանի հոգեբուժության ֆակուլտետ, ԱՄՆ</dd>

                    <dt>2020թ.</dt>
                    <dd>Ձգձգված վիշտի թերապիա — Կոգնիտիվ-վարքաբանական թերապիայի ասոցիացիա, Ռուսաստան</dd>

                    <dt>2020թ.</dt>
                    <dd>Կոգնիտիվ-վարքաբանական թերապիա — ԵՊՀ կիրառական հոգեբանություն, Հայաստան</dd>
                </dl>
            </section>

            <section class="section two-cols">
                <div>
                    <h2>Որ խնդիրների հետ եմ աշխատում</h2>
                    <ul>
                        <li>Դեպրեսիա</li>
                        <li>Տագնապային խանգարումներ</li>
                        <li>Կպչուն-Սևեռուն խանգարում</li>
                        <li>Սոմատոփսիխիկ և փսիխոսոմատիկ խանգարումներ</li>
                        <li>Հետտրավմատիկ սթրեսային խանգարում</li>
                        <li>Կոմպլեքս ՀՏՍԽ</li>
                        <li>Անձի խանգարումներ</li>
                        <li>Սննդային վարքի խանգարում և այլն</li>
                    </ul>
                </div>

                <div>
                    <h2>Նեղ մասնագիտացումներ</h2>
                    <dl>
                        <dt>2023 - 2024թթ.</dt>
                        <dd>Տագնապային խանգարումներ — Եվրոպական Նեյրոփսիխոֆարմակոլոգիայի Քոլեջ</dd>
                    </dl>

                    <h2 style="margin-top:14px">Անդամակցություններ</h2>
                    <ul>
                        <li>Հոգեկան Առողջության Հայկական Ասոցիացիա — Երիտասարդների սեկցիայի ղեկավար</li>
                        <li>Երիտասարդ Հոգեբույժների Եվրոպական Ֆեդերացիա — Հայաստանյան ասոցիացիայի ղեկավար</li>
                        <li>Եվրոպական Նեյրոփսիխոֆարմակոլոգիայի Քոլեջ</li>
                        <li>Հայկական Հոգեբուժական Ասոցիա</li>
                        <li>Մասնակցել է բազմաթիվ կոնֆերանսների և թրեյնինգների Հայաստանում և արտերկրում</li>
                    </ul>
                </div>
            </section>

            <section class="section">
                <h2>Որ տարիքային խմբերի հետ եմ աշխատում</h2>
                <div class="tag">Մեծահասակներ</div>
                <div class="tag">Դեռահասներ</div>
            </section>

            <section class="section">
                <h2>Աշխատանքային լեզուներ</h2>
                <div class="tag">Հայերեն</div>
                <div class="tag">Ռուսերեն</div>
            </section>

            <div class="footer">Եթե ցանկանում եք, կարող եմ նաև պատրաստել՝ PDF տարբերակի համար, թղթային վարկածի ձևաչափ (A4), կամ թարգմանել և կազմել անգլերեն — պարզապես ասեք։</div>

        </div>
    </main>
</div>
</body>
</html>
<?php return ob_get_clean(); } ?>

