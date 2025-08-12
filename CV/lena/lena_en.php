<?php

function cvLenaEN()
{
    ob_start();
    ?>
    <!doctype html>
    <html lang="en">
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

        .content-panel{background:var(--bg);padding:32px 28px;overflow:auto}
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
                    <div class="avatar">L</div>
                    <div>
                        <h1>Lena Manukyan</h1>
                        <div class="subtitle"></div>
                        <div class="subtitle"></div>
                    </div>
                </header>

            </div>
        </main>
    </div>
    </body>
    </html>
    <?php
    return ob_get_clean();
}
?>