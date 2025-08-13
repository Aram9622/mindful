<?php

function cvMariamEN()
{ ob_start(); ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Curriculum Vitae — Mindful (Two-column)</title>
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
                <img src="../../images/staff/Mariam.jpg" alt="Mariam Tonyan" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Mariam.jpg" alt="Mariam Tonyan" />
                    </div>
                    <div>
                        <h1>Mariam Tonyan</h1>
                        <div class="subtitle">Psychologist-Psychotherapist</div>
                        <div class="subtitle">Consultation Fee: 15,000 AMD</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Education</h2>
                    <dl>
                        <dt>2016 - 2018</dt>
                        <dd>Clinical Psychologist and Psychotherapist, Faculty of Philosophy and Psychology, YSU</dd>
                        <dt>2012 - 2016</dt>
                        <dd>Psychologist, Faculty of Philosophy and Psychology, YSU</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Work Experience</h2>
                    <dl>
                        <dt>2024 - Present</dt>
                        <dd>“Mindful” Mental Health Counseling Center — Psychologist-Psychotherapist</dd>
                        <dt>2024 - Present</dt>
                        <dd>“AysTegh Co-working” — Psychologist-Psychotherapist</dd>
                        <dt>2021 - 2025</dt>
                        <dd>“Shogh” Community-Based Day Center for Children — Psychologist-Psychotherapist</dd>
                        <dt>2018 - 2021</dt>
                        <dd>State Non-Commercial Organization “Child and Family Support Center” — Psychologist-Psychotherapist</dd>
                        <dt>2017</dt>
                        <dd>“Armenak and Anna Tadevosyan” Medical Center — Psychologist</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Trainings in Psychotherapeutic Modalities</h2>
                    <dl>
                        <dt>2025</dt>
                        <dd>Balint Group Leader Training — YSU Center for Applied Psychology | Balint International Association (Russia)</dd>
                        <dt>2025</dt>
                        <dd>Brainspotting / Transgenerational Trauma — YSU Center for Applied Psychology</dd>
                        <dt>2024 - 2025</dt>
                        <dd>Brainspotting / Intensive — YSU Center for Applied Psychology</dd>
                        <dt>2024</dt>
                        <dd>Working with Parts — YSU Center for Applied Psychology</dd>
                        <dt>2024</dt>
                        <dd>Limbic Countertransference — YSU Center for Applied Psychology</dd>
                        <dt>2022</dt>
                        <dd>Family Crisis Intervention — Armenian Association for Child and Educational Psychologists</dd>
                        <dt>2022</dt>
                        <dd>Brainspotting: Phase 1 and Phase 2 — YSU Center for Applied Psychology</dd>
                        <dt>2019</dt>
                        <dd>Gestalt Approach in Psychopathology — YSU Center for Applied Psychology</dd>
                        <dt>2019</dt>
                        <dd>Domestic Violence — National Institute of Labor and Social Research</dd>
                        <dt>2019</dt>
                        <dd>Probation Services and Resocialization of Offenders through Community Cooperation Development — National Institute of Labor and Social Research</dd>
                        <dt>2019</dt>
                        <dd>Gestalt Therapy in Work with Children — EL-PI Psychological Educational-Consultation Center</dd>
                        <dt>2019</dt>
                        <dd>Working with Trauma: Gestalt Approach — YSU Center for Applied Psychology, APOA</dd>
                        <dt>2018</dt>
                        <dd>Archetypal Analysis — YSU Center for Applied Psychology</dd>
                        <dt>2018</dt>
                        <dd>Fairy Tale Therapy — YSU Center for Applied Psychology</dd>
                        <dt>2018</dt>
                        <dd>Classical and Jungian Psychodrama — YSU Center for Applied Psychology</dd>
                        <dt>2017</dt>
                        <dd>Psychological Training for Specialists in Palliative Care — YSU Center for Applied Psychology</dd>
                        <dt>2016 - 2017</dt>
                        <dd>Cognitive-Behavioral Psychotherapy — YSU Center for Applied Psychology</dd>
                        <dt>2016</dt>
                        <dd>Child Psychotherapy — YSU Center for Applied Psychology</dd>
                        <dt>2015</dt>
                        <dd>Basic Techniques of Art Therapy — YSU Center for Applied Psychology</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Areas of Expertise</h2>
                    <ul>
                        <li>Psychological Trauma</li>
                        <li>Anxiety and Depressive Disorders</li>
                        <li>Self-Exploration and Self-Acceptance</li>
                        <li>Interpersonal Communication Difficulties</li>
                        <li>Emotional Burnout</li>
                        <li>Fear of Death</li>
                        <li>Loss and Grief</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Works with the following age groups</h2>
                    <div class="tag">Adults</div>
                </section>

                <section class="section">
                    <h2>Working Languages</h2>
                    <div class="tag">Armenian</div>
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
