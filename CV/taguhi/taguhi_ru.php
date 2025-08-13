<?php

function cvTaguhiRU()
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
            .content-panel{background:var(--bg);padding:10px;overflow:auto;}
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
                <img src="../../images/staff/Taguhi.jpg" alt="Тагуи Асатрян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Taguhi.jpg" alt="Тагуи Асатрян" />
                    </div>
                    <div>
                        <h1>Тагуи Асатрян</h1>
                        <div class="subtitle">Психолог, консультант</div>
                        <div class="subtitle">Стоимость консультации: 15 000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>2020 - 2023 гг.</dt>
                        <dd>Психология личности<br>Российско-Армянский государственный университет, магистратура</dd>
                        <dt>2017 - 2021 гг.</dt>
                        <dd>Методист<br>Государственный университет имени Валерия Брюсова</dd>
                        <dt>2004 - 2006 гг.</dt>
                        <dd>Филолог и литературовед<br>ЕГУ факультет русского языка и литературы</dd>
                        <dt>2002 - 2004 гг.</dt>
                        <dd>Филолог и педагог<br>ЕГУ степень бакалавра - факультет русского языка и литературы</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2025 г. - настоящее время</dt>
                        <dd>Центр психического здоровья “Mindful” — Психолог, консультант</dd>
                        <dt>2023 г. - настоящее время</dt>
                        <dd>Частная консультационная деятельность — Самостоятельное психологическое консультирование</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации в психотерапевтических направлениях</h2>
                    <dl>
                        <dt>2024 г.</dt>
                        <dd>Основы TA 101<br>Анализ транзакций и конфликтов, контрактный метод, диагностика эго-состояний, метод «Три стула»<br>Европейская ассоциация транзактного анализа</dd>
                        <dt>2021 - 2023 гг.</dt>
                        <dd>Экзистенциальная психотерапия<br>Консультирование, работа со страхом смерти, утратой и горем, ответственностью, границами и чувством вины<br>Центр прикладной психологии, ЕГУ</dd>
                        <dt>2023 г.</dt>
                        <dd>Нейролингвистический тренинг<br>Психосоматические техники<br>Психологический центр Анаит Арзуманян</dd>
                        <dt>2022 г.</dt>
                        <dd>Управление конфликтами и работа с травмой<br>Российско-Армянский государственный университет</dd>
                        <dt>2020 г.</dt>
                        <dd>Positum-консультирование<br>Инновационные концепции в позитивной психотерапии<br>Всемирная ассоциация позитивной психотерапии (WAPP)</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Узкая специализация</h2>
                    <dl>
                        <dt>2022 - 2023 гг.</dt>
                        <dd>Индивидуальная психология<br>Российско-Армянский государственный университет</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Проблемы, с которыми работаю</h2>
                    <ul>
                        <li>Межличностные и семейные проблемы</li>
                        <li>Внутрипсихические противоречия</li>
                        <li>Трудности самооценки</li>
                        <li>Эмоциональные и поведенческие расстройства</li>
                        <li>Экзистенциальные вопросы</li>
                        <li>Работа с жизненными сценариями</li>
                    </ul>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>Работает со следующими возрастными группами</h2>
                        <div class="tag">Взрослые</div>
                    </div>
                    <div>
                        <h2>Рабочие языки</h2>
                        <div class="tag">Армянский</div>
                        <div class="tag">Русский</div>
                    </div>
                </section>

                <section class="section">
                    <h2>Стоимость консультации</h2>
                    <div>15 000 драм</div>
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
