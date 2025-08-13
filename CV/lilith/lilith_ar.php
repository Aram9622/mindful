<?php

function cvLilithAR()
{ ob_start(); ?>
    <!doctype html>
    <html lang="hy">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Պրոֆիլ — Mindful</title>
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
            .avatar{width:92px;height:92px;border-radius:12px;background:linear-gradient(180deg,var(--accent),#6aa6e6);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:28px;overflow:hidden}
            .avatar img{width:100%;height:100%;object-fit:cover}
            h1{margin:0;font-size:22px}
            .subtitle{color:var(--muted);margin-top:4px}
            .section{margin-top:22px;line-height:1.5;}
            .section h2{font-size:16px;margin:0 0 10px 0;color:var(--accent)}
            p{margin:0 0 12px 0}
            @media (max-width:900px){.split{grid-template-columns:1fr} .image-inner{height:40vh} .card{padding:20px}}
            @media print{.image-inner{display:none}}
        </style>
    </head>
    <body>
    <div class="split">
        <aside class="image-panel">
            <div class="image-inner">
                <img src="../../images/staff/Lilith.JPG" alt="Լիլիթ Խաչատրյան" />
            </div>
        </aside>
        <main class="content-panel">
            <div class="card">
                <header>
                    <div class="avatar">
                        <img src="../../images/staff/Lilith.JPG" alt="Լիլիթ Խաչատրյան" />
                    </div>
                    <div>
                        <h1>Լիլիթ Խաչատրյան</h1>
                        <div class="subtitle">Սոցիալական մեդիայի բովանդակություն ստեղծող — «Մայնդֆուլ» հոգեկան առողջության խորհրդատվական կենտրոն</div>
                    </div>
                </header>

                <section class="section">
                    <h2>Մասին</h2>
                    <p>Ծանոթացեք <strong>Լիլիթ Խաչատրյանի</strong> հետ՝ <em>«Մայնդֆուլ» հոգեկան առողջության խորհրդատվական կենտրոնի</em> սոցիալական մեդիայի բովանդակություն ստեղծողը (Social Media Content Creator)։</p>
                    <p>Մեր գրառումները ստեղծվում են Լիլիթի ստեղծագործական մտքի ու վիզուալ ճաշակի շնորհիվ։</p>
                    <p>Նա է ապահովում «Մայնդֆուլի» ներկայությունը թվային հարթակներում։</p>
                </section>
            </div>
        </main>
    </div>

    <script>
        function toggleAvatarImage() {
            const avatarImg = document.querySelector('.avatar img');
            const imagePanel = document.querySelector('.image-panel');

            if (window.innerWidth <= 900) {
                avatarImg.style.display = 'block';
                imagePanel.style.display = 'none';
            } else {
                avatarImg.style.display = 'none';
                imagePanel.style.display = 'block';
            }
        }

        toggleAvatarImage();
        window.addEventListener('resize', toggleAvatarImage);
    </script>
    </body>
    </html>
    <?php return ob_get_clean(); }
?>
