<?php

function cvAnetaRU()
{  ob_start();?>
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
                <img src="../../images/staff/Tatev.jpg" alt="Анета Мелконян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar"><img src="../../images/staff/Aneta.jpg" alt="Анета Мелконян" /></div>
                    <div>
                        <h1>Анета Мелконян</h1>
                        <div class="subtitle">Психиатр-психотерапевт</div>
                        <div class="subtitle">Стоимость консультации: 20 000 / 15 000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>2017 - 2019 гг.</dt>
                        <dd>Клиническая ординатура по психиатрии — ЕГМУ</dd>
                        <dt>2014 - 2017 гг.</dt>
                        <dd>Врач, Магистратура, факультет общей медицины — ЕГМУ</dd>
                        <dt>2009 - 2014 гг.</dt>
                        <dd>Лечебное дело, Бакалавриат, факультет общей медицины — ЕГМУ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2024 - настоящее время</dt>
                        <dd>Центр психического здоровья “Mindful” — Психиатр-психотерапевт</dd>
                        <dt>2023 - настоящее время</dt>
                        <dd>ГНКО «Экспертный центр» Минюста РА — Судебный психиатр-эксперт</dd>
                        <dt>2022 - настоящее время</dt>
                        <dd>Кафедра психиатрии ЕГМУ им. М. Гераци — Преподаватель</dd>
                        <dt>2019 - 2023 гг.</dt>
                        <dd>Центр психического здоровья “Аван” — Психиатр</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации в психотерапевтических направлениях</h2>
                    <dl>
                        <dt>2024 - 2025 гг.</dt>
                        <dd>Перинатальная психотерапия — Социально-психологическая поддержка в период беременности, родов и послеродового восстановления, АНО ДПО «НАДПО», Россия</dd>
                        <dt>2021 г.</dt>
                        <dd>Экзистенциальная психотерапия — ЕГУ, Центр прикладной психологии, Армения</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>С какими проблемами работаю</h2>
                        <ul>
                            <li>Психотические расстройства</li>
                            <li>Тревожные расстройства</li>
                            <li>Депрессия</li>
                            <li>Дородовая и послеродовая депрессия</li>
                            <li>Дородовой и послеродовой психоз</li>
                            <li>Посттравматическое стрессовое расстройство (ПТСР)</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Узкая специализация</h2>
                        <dl>
                            <dt>Судебный психиатр-эксперт</dt>
                            <dd>ГНКО «Экспертный центр» Министерства юстиции Республики Армения</dd>
                        </dl>
                        <h2 style="margin-top:14px;">Членство в организациях</h2>
                        <ul>
                            <li>Армянская ассоциация психического здоровья</li>
                            <li>Европейская федерация молодых психиатров</li>
                            <li>Армянская психиатрическая ассоциация</li>
                            <li>Участие в многочисленных конференциях и тренингах в Армении и за рубежом.</li>
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
                    <div class="tag">Английский</div>
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