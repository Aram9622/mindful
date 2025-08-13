<?php

function cvSatenEN()
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
                <img src="../../images/staff/Saten.jpg" alt="Saten Sargsyan" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Saten.jpg" alt="Saten Sargsyan" />
                    </div>
                    <div>
                        <h1>Saten Sargsyan</h1>
                        <div class="subtitle">Psychotherapist</div>
                        <div class="subtitle">Consultation Fee: 15,000 AMD</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Education</h2>
                    <dl>
                        <dt>2019 - 2021</dt>
                        <dd>Psychologist<br>Yerevan State University, Master's Degree, Faculty of Psychology, Clinical Psychology and Psychotherapy</dd>
                        <dt>2015 - 2019</dt>
                        <dd>Psychologist<br>Yerevan State University, Bachelor's Degree, Faculty of Philosophy and Psychology, Department of Psychology</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Work Experience</h2>
                    <dl>
                        <dt>2025 - Present</dt>
                        <dd>YSU Center for Applied Psychology — Psychotherapist</dd>
                        <dt>2024 - Present</dt>
                        <dd>“Mindful” Mental Health Counseling Center — Psychotherapist</dd>
                        <dt>2022 - Present</dt>
                        <dd>Mikaelyan Institute of Surgery, Department of Oncology — Clinical Psychologist</dd>
                        <dt>2022</dt>
                        <dd>Ayg Psychological Services Center — Coordinating Psychologist</dd>
                        <dt>2021 - 2022</dt>
                        <dd>Diaconia Charitable Foundation — Psychologist</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Trainings in Psychotherapeutic Modalities</h2>
                    <dl>
                        <dt>2019 - 2021</dt>
                        <dd>Cognitive Behavioral Therapy<br>YSU Center for Applied Psychology</dd>
                        <dt>2018 - 2019</dt>
                        <dd>Existential Psychotherapy<br>YSU Center for Applied Psychology</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>Areas of Expertise</h2>
                        <ul>
                            <li>Oncological (cancer-related) illnesses</li>
                            <li>Difficulties in interpersonal and intrapersonal relationships</li>
                            <li>Trauma and self-acceptance</li>
                            <li>Loss and grief</li>
                            <li>Anxiety and depressive spectrum disorders</li>
                            <li>Issues related to self-esteem</li>
                            <li>Post-traumatic stress disorder (PTSD)</li>
                            <li>Loss of life meaning</li>
                            <li>Feelings of loneliness</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Works with the following age groups</h2>
                        <div class="tag">Adults</div>

                        <h2 style="margin-top: 22px;">Working Languages</h2>
                        <div class="tag">Armenian</div>
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
