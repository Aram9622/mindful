<?php
function footer($dir = "") { ?>
    <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Counselor</a></h2>
                        <p>Learn to be mindful. <i class="fa fa-heart color-danger" aria-hidden="true"></i></p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="https://www.facebook.com/mindful.mhc" target="_blank"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/mindful.arm/" target="_blank"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2" id="explore">Explore</h2>
                        <ul class="list-unstyled">
                            <li><a href="#about"><span class="fa fa-chevron-right mr-2"></span><span id="footer-about">About</span></a></li>
                            <li><a href="#contact"><span class="fa fa-chevron-right mr-2"></span><span id="footer-contact">Contact</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2" id="have_question">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">15 a, Nalbandyan St, Yerevan, Armenia 0001</span></li>
                                <li><a href="tel:+37444181230"><span class="icon fa fa-phone"></span><span class="text">+37444181230</span></a></li>
                                <li><a href="mailto:info@mindfulme.am"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@mindfulme.am</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://www.neurontalks.am" target="_blank">NeuronTalks.am</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="<?= $dir?>js/jquery.min.js"></script>
    <script src="<?= $dir?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= $dir?>language-config/script.js"></script>
    <script src="<?= $dir?>js/popper.min.js"></script>
    <script src="<?= $dir?>js/bootstrap.min.js"></script>
    <script src="<?= $dir?>js/jquery.easing.1.3.js"></script>
    <script src="<?= $dir?>js/jquery.waypoints.min.js"></script>
     <script src="<?= $dir?>js/jquery.stellar.min.js"></script>
    <script src="<?= $dir?>js/owl.carousel.min.js"></script>
    <script src="<?= $dir?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= $dir?>js/jquery.animateNumber.min.js"></script>
    <script src="<?= $dir?>js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?= $dir?>js/google-map.js"></script>
    <script src="<?= $dir?>js/main.js"></script>
    <script src="<?= $dir?>js/app.js"></script>

<!--    <script src="--><?php //= $dir?><!--js/app.js"></script>-->
<!--    <script src="--><?php //= $dir?><!--js/app.js"></script>-->
<!--    <script src="--><?php //= $dir?><!--js/app.js"></script>-->
<!--    <script src="--><?php //= $dir?><!--js/app.js"></script>-->
<!--    <script src="--><?php //= $dir?><!--js/app.js"></script>-->
<?php } ?>
