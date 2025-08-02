<?php
$staff = [
    [
        "id" => 1,
        "name" => "Lloyd Wilson",
        "position" => "Counselor",
        "avatar" => "../images/staff-1.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
    [
        "id" => 2,
        "name" => "Rachel Parker",
        "position" => "Counselor",
        "avatar" => "../images/staff-2.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
    [
        "id" => 3,
        "name" => "Ian Smith",
        "position" => "Counselor",
        "avatar" => "../images/staff-3.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
    [
        "id" => 4,
        "name" => "Alicia Henderson",
        "position" => "Counselor",
        "avatar" => "../images/staff-4.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
    [
        "id" => 5,
        "name" => "Lloyd Wilson",
        "position" => "Counselor",
        "avatar" => "../images/staff-5.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
    [
        "id" => 6,
        "name" => "Rachel Parker",
        "position" => "Counselor",
        "avatar" => "../images/staff-6.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
    [
        "id" => 7,
        "name" => "Ian Smith",
        "position" => "Counselor",
        "avatar" => "../images/staff-7.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
    [
        "id" => 8,
        "name" => "Fred Henderson",
        "position" => "Counselor",
        "avatar" => "../images/staff-8.jpg",
        "short-description" => "I am an ambitious workaholic, but apart from that, pretty simple person.",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../utils/head.php'; ?>
    <?php head("../") ?>
    <link rel="stylesheet" href="../fullscreen-modal/style.css">
</head>
<body>
<?php include_once "../utils/top-menu.php" ?>
<?php include_once "../utils/main-menu.php" ?>
<?php topMenu("../") ?>
<?php mainMenu("../", false) ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Counselor <i
                                class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Qualified Counselor</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($staff as $person) : ?>
                <div class="col-md-6 col-lg-3 ftco-animate ">
                    <div class="staff open-modal" data-id="<?=$person["id"]?>"  data-open="staff-modal">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url(<?= $person["avatar"]?>);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3><?= $person["name"]?></h3>
                            <span class="position mb-2"><?= $person["position"]?></span>
                            <div class="faded">
                                <p><?= $person["short-description"]?></p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require_once "../fullscreen-modal/modal.php"?>
<?php require_once "../utils/footer.php" ?>
<?php footer("../"); ?>
<script src="../fullscreen-modal/script.js"></script>
</body>
</html>