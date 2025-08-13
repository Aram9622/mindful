<?php

function cvSatenRU()
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
                <img src="../../images/staff/Saten.jpg" alt="Сатен Саргсян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card" dir="ltr">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Saten.jpg" alt="Сатен Саргсян" />
                    </div>
                    <div>
                        <h1>Сатен Саргсян</h1>
                        <div class="subtitle">Психотерапевт</div>
                        <div class="subtitle">Стоимость консультации: 15,000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>2019 - 2021 гг.</dt>
                        <dd>Психолог<br>Ереванский государственный университет, факультет психологии, магистратура, клиническая психология и психотерапия</dd>
                        <dt>2015 - 2019 гг.</dt>
                        <dd>Психолог<br>Ереванский государственный университет, факультет философии и психологии, бакалавриат, кафедра психологии</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2025 - настоящее время</dt>
                        <dd>Центр прикладной психологии ЕГУ — Психотерапевт</dd>
                        <dt>2024 - настоящее время</dt>
                        <dd>Центр психического здоровья “Mindful” — Психотерапевт</dd>
                        <dt>2022 - настоящее время</dt>
                        <dd>Институт хирургии им. Микаеляна, отделение онкологии — Клинический психолог</dd>
                        <dt>2022 г.</dt>
                        <dd>Центр психологических услуг «Айг» — Координатор-психолог</dd>
                        <dt>2021–2022 гг.</dt>
                        <dd>Благотворительный фонд «Диакония» — Психолог</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации в области психотерапии</h2>
                    <dl>
                        <dt>2019 - 2021 гг.</dt>
                        <dd>Когнитивно-поведенческая терапия<br>Центр прикладной психологии, ЕГУ</dd>
                        <dt>2018 - 2019 гг.</dt>
                        <dd>Экзистенциальная психотерапия<br>Центр прикладной психологии, ЕГУ</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>С какими проблемами работаю</h2>
                        <ul>
                            <li>Онкологические заболевания</li>
                            <li>Трудности во внутриличностных и межличностных отношениях</li>
                            <li>Травма и принятие себя</li>
                            <li>Потеря и горе</li>
                            <li>Тревожные и депрессивные расстройства</li>
                            <li>Проблемы с самооценкой</li>
                            <li>Посттравматическое стрессовое расстройство (ПТСР)</li>
                            <li>Потеря смысла жизни</li>
                            <li>Чувство одиночества</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Работает со следующими возрастными группами</h2>
                        <div class="tag">Взрослые</div>

                        <h2 style="margin-top: 22px;">Рабочие языки</h2>
                        <div class="tag">Армянский</div>
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
