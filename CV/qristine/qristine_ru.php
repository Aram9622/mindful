<?php

function cvQristineRU()
{ ob_start(); ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Резюме — Психолог</title>
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
            @media (max-width:900px){.split{grid-template-columns:1fr} .image-inner{height:40vh} .card{padding:20px}}
            @media print{.image-inner{display:none}}
        </style>
    </head>
    <body>
    <div class="split">
        <aside class="image-panel">
            <div class="image-inner">
                <img src="../../images/staff/Qristine.jpg" alt="Кристине Аветисян" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card" dir="ltr">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Qristine.jpg" alt="Кристине Аветисян" />
                    </div>
                    <div>
                        <h1>Кристине Аветисян</h1>
                        <div class="subtitle">Психолог-психотерапевт, супервизор</div>
                        <div class="subtitle">Стоимость консультации: Индивидуальная — 25 000 драм, Парная — 35 000 драм</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Образование</h2>
                    <dl>
                        <dt>1997 – 1999</dt>
                        <dd>Психолог<br>Факультет философии и психологии Ереванского государственного университета</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Опыт работы</h2>
                    <dl>
                        <dt>2025 – н.в.</dt>
                        <dd>ОО «Окружающая среда и здоровье» — Психолог-супервизор</dd>
                        <dt>2024 – н.в.</dt>
                        <dd>Центр психического здоровья “Mindful” — Психолог-психотерапевт, ко-воркинг</dd>
                        <dt>2024 – н.в.</dt>
                        <dd>ОО “Врачи без границ” — Психолог-супервизор</dd>
                        <dt>2020 – н.в.</dt>
                        <dd>Министерство внутренних дел Республики Армения — Основной член комиссии</dd>
                        <dt>2020 – н.в.</dt>
                        <dd>Министерство юстиции Республики Армения — Независимый эксперт, супервизор</dd>
                        <dt>2012 – н.в.</dt>
                        <dd>Ереванский государственный медицинский университет — Старший преподаватель</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Повышение квалификации по психотерапевтическим направлениям</h2>
                    <dl>
                        <dt>2024 – 2025</dt>
                        <dd>Когнитивно-поведенческая терапия — Армения</dd>
                        <dt>2024 – 2025</dt>
                        <dd>Психоанализ — Армения</dd>
                        <dt>2024 – 2025</dt>
                        <dd>Юнгианская терапия — Армения</dd>
                        <dt>2024 – 2025</dt>
                        <dd>Гештальт-терапия — Германия</dd>
                        <dt>2023 – 2024</dt>
                        <dd>Арт-терапия — Армения</dd>
                        <dt>2023 – 2024</dt>
                        <dd>Нейролингвистическое программирование — Армения</dd>
                        <dt>2023 – 2024</dt>
                        <dd>EMDR (десенсибилизация и переработка движением глаз) — Испания</dd>
                        <dt>2022 – 2023</dt>
                        <dd>Психология травмы — Бельгия</dd>
                        <dt>2022 – 2023</dt>
                        <dd>Терапия травмы через медиацию в конфликтных и постконфликтных регионах — European Way, Германия, Caritas</dd>
                        <dt>2022 – 2023</dt>
                        <dd>Терапия суицидального поведения — США</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>С какими проблемами работаю</h2>
                        <ul>
                            <li>Депрессия</li>
                            <li>Тревожные расстройства</li>
                            <li>Панические атаки</li>
                            <li>Обсессивно-компульсивное расстройство (ОКР)</li>
                            <li>Экзистенциальные кризисы</li>
                            <li>Супружеские проблемы</li>
                            <li>ОКПЛ (Обсессивно-компульсивное личностное расстройство)</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Возрастные группы</h2>
                        <div class="tag">Взрослые</div>

                        <h2 style="margin-top: 22px;">Рабочие языки</h2>
                        <div class="tag">Армянский</div>
                        <div class="tag">Русский</div>
                        <div class="tag">Английский</div>
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
