<?php

function cvHermineRU()
{ ob_start(); ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Резюме — Mindful (Двухколоночный)</title>
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
                <img src="../../images/staff/Hermine.jpg" alt="Эрмине Акопян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Hermine.jpg" alt="Эрмине Акопян" />
                    </div>
                    <div>
                        <h1>Эрмине Акопян</h1>
                        <div class="subtitle">Психолог-психотерапевт</div>
                        <div class="subtitle">Стоимость консультации: 20 000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>1999–2004 гг.</dt>
                        <dd>Армянский государственный педагогический университет, факультет педагогики и психологии — Военный психолог</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2024 г. – настоящее время</dt>
                        <dd>Mindful, центр психического здоровья — Психолог-психотерапевт</dd>
                        <dt>2008 г. - настоящее время</dt>
                        <dd>Центр психического здоровья “Аван” — Психолог</dd>
                        <dt>2018 - 2019 гг.</dt>
                        <dd>Центр амбулаторной наркологической помощи “Сигма-Мед” — Психолог-консультант</dd>
                        <dt>2004 - 2007 гг.</dt>
                        <dd>Армяно-Российский университет “Мхитар Гош” — Преподаватель</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации в психотерапевтических направлениях</h2>
                    <dl>
                        <dt>2024 - 2025 гг.</dt>
                        <dd>Схематерапия — Московский институт схематерапии, Россия</dd>
                        <dt>2010 г.</dt>
                        <dd>Когнитивно-поведенческая терапия — АГПУ, Армения</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>С какими проблемами работаю</h2>
                        <ul>
                            <li>Депрессия</li>
                            <li>Тревожные расстройства</li>
                            <li>Обсессивно-компульсивное расстройство</li>
                            <li>Соматопсихические и психосоматические расстройства</li>
                            <li>Посттравматическое стрессовое расстройство</li>
                            <li>Комплексное ПТСР</li>
                            <li>Расстройства личности</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Членство в организациях</h2>
                        <ul>
                            <li>Член Армянской психиатрической ассоциации</li>
                            <li>Участие в многочисленных конференциях и тренингах в Армении</li>
                        </ul>
                    </div>
                </section>

                <section class="section">
                    <h2>Работает со следующими возрастными группами</h2>
                    <div class="tag">Взрослые</div>
                </section>

                <section class="section">
                    <h2>Рабочие языки</h2>
                    <div class="tag">Армянский</div>
                    <div class="tag">Русский</div>
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