<?php

function cvLenaRU()
{ ob_start(); ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Резюме — Mindful (Двухколоночный шаблон)</title>
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
                <img src="../../images/staff/Lena.jpg" alt="Лена Манукян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Lena.jpg" alt="Лена Манукян" />
                    </div>
                    <div>
                        <h1>Лена Манукян</h1>
                        <div class="subtitle">Психолог-психотерапевт</div>
                        <div class="subtitle">Стоимость консультации: 15,000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>2018 - 2020 гг.</dt>
                        <dd>Клинический психолог, ЕГУ, клиническая психология и психотерапия</dd>
                        <dt>2014 - 2018 гг.</dt>
                        <dd>Психолог, Университет имени Месропа Маштоца, педагогика и психология</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2024 г. - настоящее время</dt>
                        <dd>Центр психического здоровья “Mindful” — Психолог-психотерапевт</dd>
                        <dt>2024 г.</dt>
                        <dd>Skill Academy — Преподаватель, автор курса "Психологическая грамотность и психообразование", лектор</dd>
                        <dt>2023 г.</dt>
                        <dd>Благотворительная организация "Миссия Армения" — Психолог-групповой руководитель</dd>
                        <dt>2022 г.</dt>
                        <dd>"Us Against Drugs World Vision" — Психолог-тренер</dd>
                        <dt>2020 - 2022 гг.</dt>
                        <dd>"Veles NG” — Психолог</dd>
                        <dt>2021 - 2023 гг.</dt>
                        <dd>"Затик" ЕАК ПООК — Клинический психолог - психотерапевт</dd>
                        <dt>2020 г.</dt>
                        <dd>"Приюты" — Психолог</dd>
                        <dt>2018 - 2021 гг.</dt>
                        <dd>Gi3 Yerevan Talks — Основатель-координатор-лектор</dd>
                        <dt>2018 г.</dt>
                        <dd>Армянская академия психологии — Помощник организатора</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации по психотерапевтическим направлениям</h2>
                    <dl>
                        <dt>2025 г. - настоящее время</dt>
                        <dd>Терапия для взрослых с ADHD — Курс Евгении Дашковой</dd>
                        <dt>2025 г.</dt>
                        <dd>EMDR - доказательный метод работы с травмами — Акме-Вита</dd>
                        <dt>2023 г.</dt>
                        <dd>Клинический психолог в практике — Либра психологический центр</dd>
                        <dt>2022 г.</dt>
                        <dd>RESPONDER: Навыки реагирования в экстренных ситуациях — Israel Trauma Coalition</dd>
                        <dt>2022 г.</dt>
                        <dd>Выявление психологических особенностей детей — "Развивающая Платформа" социально-психологическая</dd>
                        <dt>2021 - 2022 гг.</dt>
                        <dd>Травмотерапия: работа с военными травмами — Federal foreign office, European ways, Armenian Caritas</dd>
                        <dt>2020 г.</dt>
                        <dd>Когнитивно-поведенческая психотерапия — Центр прикладной психологии</dd>
                        <dt>2020 г.</dt>
                        <dd>Экзистенциальная психотерапия — Центр прикладной психологии</dd>
                        <dt>2020 г.</dt>
                        <dd>Работа с жертвами насилия — WRC Armenia, Sexual Assault Crisis Center</dd>
                        <dt>2020 г.</dt>
                        <dd>Работа с ЛГБТ+ людьми — Pink Armenia</dd>
                        <dt>2019 г.</dt>
                        <dd>Нейролингвистическое программирование — Рубен Нагдян, психологический центр Анаит Арзуманян</dd>
                        <dt>2019 г.</dt>
                        <dd>Психологическое консультирование — Психологический центр Анаит Арзуманян</dd>
                        <dt>2018 г.</dt>
                        <dd>Работа с зависимыми от алкоголя и наркотиков, а также с созависимыми — INTRA</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>С какими проблемами работаю</h2>
                    <ul>
                        <li>Тревожные расстройства</li>
                        <li>Социальная тревожность</li>
                        <li>PTSD - посттравматическое стрессовое расстройство</li>
                        <li>CPTSD - комплексное PTSD</li>
                        <li>Депрессивные расстройства</li>
                        <li>ADHD</li>
                        <li>Проблемы с самоуважением и самооценкой</li>
                        <li>Проблемы в межличностных отношениях</li>
                        <li>Трудности принятия решений</li>
                        <li>Эмоциональная зависимость</li>
                        <li>Нежелательные эмоциональные состояния (чувство вины, грусть или депрессия, гнев и т.д.)</li>
                        <li>Проблемы в отношениях "родитель-ребенок"</li>
                        <li>Работа с границами в личных, семейных и профессиональных отношениях</li>
                        <li>Работа с жертвами насилия</li>
                        <li>Работа с ЛГБТ+ людьми</li>
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
