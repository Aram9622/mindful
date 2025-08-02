<?php
function mainMenu($dir = "", $home = true) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#hero-wrap">
                <img src="<?= $dir?>images/svg/2.svg" alt="" width="100%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($home) : ?> active <?php endif; ?>"><a href="<?php if($home) : ?>#hero-wrap <?php else: ?> / <?php endif;?>" class="nav-link">Home</a></li>
                    <li class="nav-item <?php if(!$home) : ?> active <?php endif; ?>"><a href="counselor/" class="nav-link">Counselor</a></li>
                    <?php if($home) :?>
                        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
<?php }?>
