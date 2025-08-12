<?php
function topMenu($dir = "") { ?>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="tel:+37444181230" class="mr-2"><span class="fa fa-phone mr-1"></span>+37444181230</a>
                        <a href="mailto:mindful.arm@gmail.com"><span class="fa fa-paper-plane mr-1"></span>mindful.arm@gmail.com </a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end align-items-center">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="https://www.facebook.com/mindful.mhc" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="https://www.instagram.com/mindful.arm" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        </p>
                    </div>
                    <?php
                    require_once $dir."language-config/index.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

