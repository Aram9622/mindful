<?php

function cvMariamRU()
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
            @media (max-width:900px){.split{grid-template-columns:1fr} .image-inner{height:40vh} .card{padding:20px}}
            @media print{.image-inner{display:none}}
        </style>
    </head>
    <body>
    <div class="split">
        <aside class="image-panel">
            <div class="image-inner">
                <img src="../../images/staff/Mariam.jpg" alt="Мариам Тонян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Mariam.jpg" alt="Мариам Тонян" />
                    </div>
                    <div>
                        <h1>Мариам Тонян</h1>
                        <div class="subtitle">Психолог-психотерапевт</div>
                        <div class="subtitle">Стоимость консультации: 15 000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>2016 - 2018 гг.</dt>
                        <dd>Клинический психолог и психотерапевт, Факультет философии и психологии, ЕГУ</dd>
                        <dt>2012 - 2016 гг.</dt>
                        <dd>Психолог, Факультет философии и психологии, ЕГУ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2024 г. - настоящее время</dt>
                        <dd>Центр психического здоровья “Mindful” — Психолог-психотерапевт</dd>
                        <dt>2024 г. - настоящее время</dt>
                        <dd>«AysTegh Co-working» — Психолог-психотерапевт</dd>
                        <dt>2021 - 2025 гг.</dt>
                        <dd>Дневной центр «Шог» для детей в общинной среде — Психолог-психотерапевт</dd>
                        <dt>2018 - 2021 гг.</dt>
                        <dd>Государственное учреждение «Центр поддержки ребёнка и семьи» — Психолог-психотерапевт</dd>
                        <dt>2017 г.</dt>
                        <dd>Медицинский центр имени Арменака и Анны Тадевосян — Психолог</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации в области психотерапии</h2>
                    <dl>
                        <dt>2025 г.</dt>
                        <dd>Подготовка ведущего балинтовской группы — Центр прикладной психологии ЕГУ | Balint International Association (Россия)</dd>
                        <dt>2025 г.</dt>
                        <dd>Брейнспоттинг / Трансгенерационная травма — Центр прикладной психологии ЕГУ</dd>
                        <dt>2024–2025 гг.</dt>
                        <dd>Брейнспоттинг / Интенсив — Центр прикладной психологии ЕГУ</dd>
                        <dt>2024 г.</dt>
                        <dd>Работа с частями личности — Центр прикладной психологии ЕГУ</dd>
                        <dt>2024 г.</dt>
                        <dd>Лимбический контртрансфер — Центр прикладной психологии ЕГУ</dd>
                        <dt>2022 г.</dt>
                        <dd>Семейное кризисное вмешательство — Армянская ассоциация детских и образовательных психологов</dd>
                        <dt>2022 г.</dt>
                        <dd>Брейнспоттинг. Фаза 1 и фаза 2 — Центр прикладной психологии ЕГУ</dd>
                        <dt>2019 г.</dt>
                        <dd>Гештальт-подход в психопатологии — Центр прикладной психологии ЕГУ</dd>
                        <dt>2019 г.</dt>
                        <dd>Насилие в семье — Национальный институт труда и социальных исследований</dd>
                        <dt>2019 г.</dt>
                        <dd>Пробационная служба и ресоциализация правонарушителей через развитие общинного сотрудничества — Национальный институт труда и социальных исследований</dd>
                        <dt>2019 г.</dt>
                        <dd>Гештальт-терапия в работе с детьми — Психологический учебно-консультационный центр EL-PI</dd>
                        <dt>2019 г.</dt>
                        <dd>Работа с травмой: гештальт-подход — Центр прикладной психологии ЕГУ, APOA</dd>
                        <dt>2018 г.</dt>
                        <dd>Архетипический анализ — Центр прикладной психологии ЕГУ</dd>
                        <dt>2018 г.</dt>
                        <dd>Сказкотерапия — Центр прикладной психологии ЕГУ</dd>
                        <dt>2018 г.</dt>
                        <dd>Классическая и юнгианская психодрама — Центр прикладной психологии ЕГУ</dd>
                        <dt>2017 г.</dt>
                        <dd>Практическая подготовка психолога в области паллиативной помощи — Центр прикладной психологии ЕГУ</dd>
                        <dt>2016 - 2017 гг.</dt>
                        <dd>Когнитивно-поведенческая психотерапия — Центр прикладной психологии ЕГУ</dd>
                        <dt>2016 г.</dt>
                        <dd>Детская психотерапия — Центр прикладной психологии ЕГУ</dd>
                        <dt>2015 г.</dt>
                        <dd>Базовые техники арт-терапии — Центр прикладной психологии ЕГУ</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>С какими проблемами работаю</h2>
                    <ul>
                        <li>Психологические травмы</li>
                        <li>Тревожные и депрессивные расстройства</li>
                        <li>Самопознание и принятие себя</li>
                        <li>Трудности межличностного общения</li>
                        <li>Эмоциональное выгорание</li>
                        <li>Работа со страхом смерти</li>
                        <li>Потеря и горе</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Работает со следующими возрастными группами</h2>
                    <div class="tag">Взрослые</div>
                </section>

                <section class="section">
                    <h2>Рабочие языки</h2>
                    <div class="tag">Армянский</div>
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
