<?php

function cvLenaEN()
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
                <img src="../../images/staff/Lena.jpg" alt="Lena Manukyan" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Lena.jpg" alt="Lena Manukyan" />
                    </div>
                    <div>
                        <h1>Lena Manukyan</h1>
                        <div class="subtitle">Psychologist-Psychotherapist</div>
                        <div class="subtitle">Consultation Fee: 15,000 AMD</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Education</h2>
                    <dl>
                        <dt>2018 - 2020</dt>
                        <dd>Clinical Psychologist, YSU, Clinical Psychology and Psychotherapy</dd>
                        <dt>2014 - 2018</dt>
                        <dd>Psychologist, Mesrop Mashtots University, Pedagogy and Psychology</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Work Experience</h2>
                    <dl>
                        <dt>2024 - Present</dt>
                        <dd>“Mindful” Mental Health Counseling Center — Psychologist-Psychotherapist</dd>
                        <dt>2024</dt>
                        <dd>Skill Academy — Instructor, Author of the course "Psychological Literacy and Psychopedagogy", Lecturer</dd>
                        <dt>2023</dt>
                        <dd>"Mission Armenia" Charitable Organization — Psychologist-Group Leader</dd>
                        <dt>2022</dt>
                        <dd>"Us Against Drugs World Vision" — Psychologist-Trainer</dd>
                        <dt>2020 - 2022</dt>
                        <dd>"Veles NGO" — Psychologist</dd>
                        <dt>2021 - 2023</dt>
                        <dd>"Zatik" YAC POO — Clinical Psychologist - Psychotherapist</dd>
                        <dt>2020</dt>
                        <dd>"Shelters" — Psychologist</dd>
                        <dt>2018 - 2021</dt>
                        <dd>Gi3 Yerevan Talks — Founder-Coordinator-Lecturer</dd>
                        <dt>2018</dt>
                        <dd>Armenian Academy of Psychology — Assistant Organizer</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Trainings in Psychotherapeutic Modalities</h2>
                    <dl>
                        <dt>2025 - ongoing</dt>
                        <dd>Therapy for Adults with ADHD — Course by Evgeniya Dashkova</dd>
                        <dt>2025</dt>
                        <dd>EMDR - Evidence-Based Method for Working with Trauma — Akme-Vita</dd>
                        <dt>2023</dt>
                        <dd>Clinical Psychology in Practice — Libra Psychological Center</dd>
                        <dt>2022</dt>
                        <dd>RESPONDER: Emergency Response Skills — Israel Trauma Coalition</dd>
                        <dt>2022</dt>
                        <dd>Psychological Features Identification in Children — "Development Platform" Social-Psychological</dd>
                        <dt>2021 - 2022</dt>
                        <dd>Trauma Therapy: Working with War Trauma — Federal Foreign Office, European Ways, Armenian Caritas</dd>
                        <dt>2020</dt>
                        <dd>Cognitive Behavioral Therapy (CBT) — Center for Applied Psychology</dd>
                        <dt>2020</dt>
                        <dd>Existential Psychotherapy — Center for Applied Psychology</dd>
                        <dt>2020</dt>
                        <dd>Working with Victims of Violence — WRC Armenia, Sexual Assault Crisis Center</dd>
                        <dt>2020</dt>
                        <dd>Working with LGBT+ Individuals — Pink Armenia</dd>
                        <dt>2019</dt>
                        <dd>Neuro-Linguistic Programming (NLP) — Ruben Naghdyan, Psychological Center of Anahit Arzumanyan</dd>
                        <dt>2019</dt>
                        <dd>Psychological Counseling — Anahit Arzumanyan's Psychological Center</dd>
                        <dt>2018</dt>
                        <dd>Working with Alcohol and Drug Addicts and Co-Addicts — INTRA</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Areas of Expertise</h2>
                    <ul>
                        <li>Anxiety disorders</li>
                        <li>Social anxiety</li>
                        <li>PTSD (Post-Traumatic Stress Disorder)</li>
                        <li>CPTSD (Complex PTSD)</li>
                        <li>Depressive disorders</li>
                        <li>ADHD</li>
                        <li>Low self-esteem and self-worth issues</li>
                        <li>Issues in interpersonal relationships</li>
                        <li>Decision-making difficulties</li>
                        <li>Emotional dependency</li>
                        <li>Unwanted emotional states (guilt, sadness, depression, anger, etc.)</li>
                        <li>Parent-child relationship problems</li>
                        <li>Working with boundaries in personal, family, and professional relationships</li>
                        <li>Working with victims of violence</li>
                        <li>Working with LGBT+ individuals</li>
                    </ul>
                </section>

                <section class="section">
                    <h2>Age Groups I Work With</h2>
                    <div class="tag">Adults</div>
                </section>

                <section class="section">
                    <h2>Languages I Work With</h2>
                    <div class="tag">Armenian</div>
                    <div class="tag">Russian</div>
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
