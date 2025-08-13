<?php

function cvMarianeRU()
{ ob_start(); ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Резюме — Mindful (Два столбца)</title>
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
                <img src="../../images/staff/Mariane.jpg" alt="Марианэ Абраамян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Mariane.jpg" alt="Марианэ Абраамян" />
                    </div>
                    <div>
                        <h1>Марианэ Абраамян</h1>
                        <div class="subtitle">психолог–психотерапевт</div>
                        <div class="subtitle">Стоимость консультации: Индивидуальная 20 000 драм / Парная 30 000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>2021 – 2023 гг.</dt>
                        <dd>Клинический психолог, магистратура, факультет философии и психологии, кафедра психологии, ЕГУ</dd>
                        <dt>2017 – 2021 гг.</dt>
                        <dd>Психолог, факультет философии и психологии, кафедра психологии, ЕГУ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2024 г. - настоящее время</dt>
                        <dd>Центр психического здоровья “Mindful” — Клинический психолог–психотерапевт</dd>
                        <dt>2023 г. - настоящее время</dt>
                        <dd>Центр психологических услуг “MHS” — Клинический психолог–психотерапевт</dd>
                        <dt>2022 - 2023 гг.</dt>
                        <dd>Поликлиника Давидьянц — Клинический психолог–психотерапевт</dd>
                        <dt>2021 – 2024 гг.</dt>
                        <dd>Диетологическая клиника “Rebalance” — Клинический психолог–психотерапевт</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации в области психотерапии</h2>
                    <dl>
                        <dt>2023 г.</dt>
                        <dd>«Клиническая психология изнутри» — Психологический центр “Libra”</dd>
                        <dt>2023 г.</dt>
                        <dd>Семинар «Основы сексологии для специалистов в области психического здоровья» — Центр психологических услуг “MHS”</dd>
                        <dt>2023 г.</dt>
                        <dd>Терапия десенсибилизации и переработки с помощью движения глаз (EMDR) — Армянская ассоциация EMDR</dd>
                        <dt>2023 г.</dt>
                        <dd>Brainspotting — Центр прикладной психологии ЕГУ</dd>
                        <dt>2023 г.</dt>
                        <dd>Консультирование пар: гуманистический и когнитивно-поведенческий подход — Психологический центр “Kenats Tsar”</dd>
                        <dt>2023 г.</dt>
                        <dd>Терапия принятия и ответственности — Центр психологических услуг “MHS”</dd>
                        <dt>2023 г.</dt>
                        <dd>Практический курс «Психиатрия для психологов: теория и практика» — Центр психологических услуг “MHS”</dd>
                        <dt>2022 – 2023 гг.</dt>
                        <dd>Когнитивно-поведенческая терапия — Центр прикладной психологии ЕГУ</dd>
                        <dt>2018 – 2019 гг.</dt>
                        <dd>Арт-терапия — Психологический центр “AYG”</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>С какими проблемами работаю</h2>
                    <ul>
                        <li>Депрессия</li>
                        <li>Тревожные расстройства</li>
                        <li>Расстройства пищевого поведения</li>
                        <li>Посттравматическое стрессовое расстройство (ПТСР)</li>
                        <li>Комплексное ПТСР</li>
                        <li>Межличностные проблемы: нездоровые отношения в семье и/или с партнёром</li>
                        <li>Трудности в социализации и коммуникации</li>
                    </ul>
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
