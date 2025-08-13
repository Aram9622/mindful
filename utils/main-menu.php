<?php
function mainMenu($dir = "", $home = true)
{ ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
        }
        .navbar-collapse ul {
            list-style: none;
            margin: 0;
            padding: 0;
            /*display: flex;*/
        }

        .navbar-collapse ul li {
            position: relative;
        }

        .navbar-collapse ul li a {
            display: block;
            padding: 12px 20px;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s ease;
        }


        /* Dropdown styles */
        .navbar-collapse ul li ul {
            position: absolute;
            top: 100%;
            left: -99px;
            min-width: 180px;
            width: 312px;
            z-index: 99;
            opacity: 0;
            transform: translateY(10px);
            pointer-events: none;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .navbar-collapse ul li:hover > ul {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .navbar-collapse ul li ul li a {
            padding: 0 15px;
            background: #444;
            transition: background 0.3s ease, padding-left 0.3s ease;
        }

        .navbar-collapse ul li ul li a:hover {
            background: #555;
        }

        /* Second-level submenu - vertical drop */
        .navbar-collapse ul li ul li ul {
            position: absolute;
            top: 100%;
            left: 0;
            background: #555;
            opacity: 0;
            transform: translateY(10px);
            pointer-events: none;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .navbar-collapse ul li ul li:hover > ul {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }
        @media (max-width: 990px) {
            .navbar-collapse ul li ul {
                left: 0;
            }
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=home">
                <img src="<?= $dir?>images/svg/2.svg" alt="" width="100%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Меню
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if ($home) : ?> active <?php endif; ?>"><a
                                href="<?php if ($home) : ?>#hero-wrap <?php else: ?> / <?php endif; ?>" class="nav-link"
                                id="home-link">Home</a></li>
                    <li class="nav-item <?php if (!$home) : ?> active <?php endif; ?>"><a href="counselor/"
                                                                                          class="nav-link"
                                                                                          id="counselor-link">Counselor</a>
                    </li>
                    <?php if ($home) : ?>
                        <li class="nav-item"><a href="#about" class="nav-link" id="about-link">About</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link" id="contact-link">Contact</a></li>
                        <li class="nav-item"><a href="#service" class="nav-link" id="service-link">Service</a>
                            <ul>
                                <li>
                                    <a href="#" id="service-main-menu">Psychotherapeutic Directions ▾</a>
                                    <ul>
                                        <li><a href="#" id="cognitive-behavioral-therapy">Cognitive Behavioral Therapy</a></li>
                                        <li><a href="#" id="schema-therapy">Schema Therapy</a></li>
                                        <li><a href="#" id="existential-therapy">Existential Therapy</a></li>
                                        <li><a href="#" id="brainspotting">Brainspotting</a></li>
                                        <li><a href="#" id="cue-centered-therapy">Cue centered therapy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
<?php } ?>
