<?php

function cvAnetaEN()
{  ob_start();?>
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
                <img src="../../images/staff/Aneta.jpg" alt="Aneta Melkonyan" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar"><img src="../../images/staff/Aneta.jpg" alt="Aneta Melkonyan" /></div>
                    <div>
                        <h1>Aneta Melkonyan</h1>
                        <div class="subtitle">Psychiatrist-Psychotherapist</div>
                        <div class="subtitle">Consultation Fee: 20,000 / 15,000 AMD</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Education</h2>
                    <dl>
                        <dt>2017 - 2019</dt>
                        <dd>Clinical Residency Psychiatry — YSMU</dd>
                        <dt>2014 - 2017</dt>
                        <dd>Master’s Degree, Faculty of General Medicine — YSMU</dd>
                        <dt>2009 - 2014</dt>
                        <dd>Bachelor’s Degree, Faculty of General Medicine — YSMU</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Work Experience</h2>
                    <dl>
                        <dt>2024 - Present</dt>
                        <dd>“Mindful” Mental Health Counseling Center — Founder, Psychiatrist-Psychotherapist</dd>
                        <dt>2023 - Present</dt>
                        <dd>RA Ministry of Justice “Expert Center” SNCO — Forensic Psychiatrist–Expert</dd>
                        <dt>2022 - Present</dt>
                        <dd>Yerevan State Medical University, Department of Psychiatry — Lecturer</dd>
                        <dt>2019 - 2023</dt>
                        <dd>“Avan” Mental Health Center — Psychiatrist</dd>
                    </dl>
                </section>

                <section class="section">
                    <h2>Trainings in Psychotherapeutic Modalities</h2>
                    <dl>
                        <dt>2024 - 2025</dt>
                        <dd>Perinatal Psychotherapy — Social and psychological support during pregnancy, childbirth, and postpartum period, NACPE, Russia</dd>
                        <dt>2021</dt>
                        <dd>Existential Psychotherapy — YSU, Center for Applied Psychology, Armenia</dd>
                    </dl>
                </section>

                <section class="section two-cols">
                    <div>
                        <h2>Areas of Expertise</h2>
                        <ul>
                            <li>Psychotic disorders</li>
                            <li>Anxiety disorders</li>
                            <li>Depression</li>
                            <li>Pre- and postpartum depression</li>
                            <li>Pre- and postpartum psychosis</li>
                            <li>Post-traumatic stress disorder (PTSD)</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Specializations</h2>
                        <dl>
                            <dt>Forensic Psychiatrist-Expert</dt>
                            <dd>Ministry of Justice of the Republic of Armenia, “Expert Center” SNCO</dd>
                        </dl>
                        <h2 style="margin-top:14px;">Memberships</h2>
                        <ul>
                            <li>Armenian Mental Health Association</li>
                            <li>European Federation of Psychiatric Trainees</li>
                            <li>Armenian Psychiatric Association</li>
                            <li>Has participated in numerous conferences and training both in Armenia and abroad.</li>
                        </ul>
                    </div>
                </section>

                <section class="section">
                    <h2>Works with the following age groups</h2>
                    <div class="tag">Adults</div>
                </section>

                <section class="section">
                    <h2>Working languages</h2>
                    <div class="tag">Armenian</div>
                    <div class="tag">Russian</div>
                    <div class="tag">English</div>
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