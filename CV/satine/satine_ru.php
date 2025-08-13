<?php

function cvSatineRU()
{ ob_start(); ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Резюме — Сатинэ Барсегян</title>
        <style>
            :root {
                --bg: #f6f7fb;
                --card: #ffffff;
                --accent: #2b6cb0;
                --muted: #6b7280;
                --paper: #f8fafc;
            }
            * {
                box-sizing: border-box;
            }
            html, body {
                height: 100%;
                margin: 0;
                font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial;
                color: #111;
            }
            .split {
                display: grid;
                grid-template-columns: 42% 58%;
                min-height: 100vh;
            }
            .image-panel {
                position: relative;
            }
            .image-inner {
                position: sticky;
                top: 0;
                height: 100vh;
                width: 100%;
                overflow: hidden;
            }
            .image-inner img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }
            .content-panel {
                background: var(--bg);
                padding: 10px;
                overflow: auto;
            }
            .card {
                background: var(--card);
                border-radius: 12px;
                padding: 28px;
                box-shadow: 0 6px 24px rgba(16,24,40,0.06);
                max-width: 900px;
                margin: 0 auto;
            }
            header {
                display: flex;
                align-items: center;
                gap: 18px;
            }
            .avatar {
                width: 92px;
                height: 92px;
                border-radius: 12px;
                background: linear-gradient(180deg, var(--accent), #6aa6e6);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                font-weight: 700;
                font-size: 28px;
            }
            h1 {
                margin: 0;
                font-size: 22px;
            }
            .subtitle {
                color: var(--muted);
                margin-top: 4px;
            }
            .section {
                margin-top: 22px;
            }
            .section h2 {
                font-size: 16px;
                margin: 0 0 10px 0;
                color: var(--accent);
            }
            dl {
                display: grid;
                grid-template-columns: 180px 1fr;
                gap: 8px 20px;
                margin: 0;
            }
            dt {
                color: var(--muted);
                font-weight: 600;
            }
            dd {
                margin: 0;
            }
            ul {
                margin: 8px 0 0 18px;
            }
            .two-cols {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 18px;
            }
            .tag {
                display: inline-block;
                padding: 6px 10px;
                background: var(--paper);
                border-radius: 999px;
                color: #0f1724;
                margin: 6px 6px 0 0;
            }
            .footer {
                margin-top: 24px;
                color: var(--muted);
                font-size: 14px;
            }
            @media (max-width: 900px) {
                .split {
                    grid-template-columns: 1fr;
                }
                .image-inner {
                    height: 40vh;
                }
                .card {
                    padding: 20px;
                }
            }
            @media print {
                .image-inner {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
    <div class="split">
        <aside class="image-panel">
            <div class="image-inner">
                <img src="../../images/staff/Satine.jpg" alt="Сатинэ Барсегян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Satine.jpg" alt="Сатинэ Барсегян" />
                    </div>
                    <div>
                        <h1>Сатинэ Барсегян</h1>
                        <div class="subtitle">Психолог-психотерапевт</div>
                        <div class="subtitle">Стоимость консультации: 15,000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>2022 - 2024 гг.</dt>
                        <dd>Психолог-психотерапевт<br>ЕГУ, факультет философии и психологии, детская психология и психотерапия, магистр</dd>
                        <dt>2011 - 2013 гг.</dt>
                        <dd>Политолог<br>ЕГУ, факультет международных отношений, политология, магистр</dd>
                        <dt>2007 - 2011 гг.</dt>
                        <dd>Политолог<br>ЕГУ, факультет международных отношений, политология, бакалавр</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2024 - настоящее время</dt>
                        <dd>Центр психического здоровья “Mindful” — Психолог-психотерапевт, специалист по пищевому поведению у детей</dd>
                        <dt>2022 - 2024 гг.</dt>
                        <dd>Клиника “Rebalance” — Консультант по дополнительному питанию, специалист по пищевому поведению</dd>
                        <dt>2020 - настоящее время</dt>
                        <dd>Независимый консультант</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации по психотерапевтическим направлениям</h2>
                    <dl>
                        <dt>2025 г.</dt>
                        <dd>Детская психотерапия, Центр прикладной психологии ЕГУ</dd>
                        <dt>2025 г.</dt>
                        <dd>Детская психотравма, Центр прикладной психологии ЕГУ</dd>
                        <dt>2024 - 2025 гг.</dt>
                        <dd>Расстройства пищевого поведения у детей, Национальная академия дополнительного профессионального образования, Россия</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>С какими проблемами я работаю</h2>
                        <ul>
                            <li>Расстройства пищевого поведения</li>
                            <li>Избегающее/ограничительное расстройство приёма пищи</li>
                            <li>Детские расстройства кормления</li>
                            <li>Травмы, связанные с питанием</li>
                            <li>Селективное питание</li>
                            <li>Другие проблемы</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Членства</h2>
                        <div class="tag">Армянская ассоциация детских и образовательных психологов</div>

                        <h2 style="margin-top: 22px;">Возрастные группы и форматы работы</h2>
                        <div>Дети 0 - 18 лет</div>
                        <div>Родители</div>
                        <div>Индивидуальные и групповые встречи (занятия, игровые сессии, тренинги)</div>

                        <h2 style="margin-top: 22px;">Рабочие языки</h2>
                        <div class="tag">Армянский</div>
                        <div class="tag">Русский</div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    </body>
    </html>
    <?php return ob_get_clean(); }
?>
