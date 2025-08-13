<?php
session_start();
if(!isset($_SESSION["lang"])){
    $_SESSION["lang"] = "ar";
}
$trans = require_once "../lang/" . $_SESSION["lang"] . '/' . $_SESSION["lang"] . ".php";
$staff = $trans["staff"];

$services = [
    "cognitive-behavioral-therapy" => [1, 2, 6, 10, 9, 13, 7, 11, 14],
    "schema-therapy" => [1, 2, 6, 15],
    "existential-therapy" => [4, 13, 7, 15],
    "brainspotting" => [9],
    "cue-centered-therapy" => [1],
];
if(isset($_GET["service"])){
    if(array_key_exists($_GET["service"], $services)){
        $service = $_GET["service"];
        if($service){
            $staff = array_filter($staff, function($person) use($service, $services){
                return in_array($person["id"], $services[$service]);
            });
        }
    }
}
else {
    $service = "all";
}

uasort($staff, function ($a, $b) {
    return $a['id'] <=> $b['id']; // Spaceship operator for ascending sort
});
if(isset($_SERVER["PATH_INFO"])){
    header("Location: " . "/counselor");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../utils/head.php'; ?>
    <?php head("../") ?>
    <link rel="stylesheet" href="../fullscreen-modal/style.css">
    <style>
        @media (max-width: 768px) {
            .bread {
                font-size: 2.5rem !important;
            }
            .staff .text h3 {
                font-size: 1.1rem !important;
            }
            .staff .text .position {
                font-size: 0.9rem !important;
            }
        }
    </style>
</head>
<body>
<?php include_once "../utils/top-menu.php" ?>
<?php include_once "../utils/main-menu.php" ?>
<?php topMenu("../") ?>
<?php mainMenu("../", false) ?>
<section class="ftco-appointment hero-wrap hero-wrap-2" style="background-image: url('../images/staff/staff_page.JPG');"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Counselor <i
                                class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread" id="service-title">Qualified Counselor</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row" id="staff-container">
            <?php foreach ($staff as $person) : ?>
                <div class="col-md-6 col-lg-3 ftco-animate ">
                    <div class="staff open-modal" data-id="<?=$person["id"]?>"  data-open="staff-modal">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url(<?= $person["avatar"]?>);"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3 id="name_<?=$person["id"]?>"><?= $person["name"]?></h3>
                            <span class="position mb-2" id="position_<?=$person['id']?>"><?= $person["position"]?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<script>
    localStorage.setItem("service", "<?=$service?>");

</script>
<?php require_once "../fullscreen-modal/modal.php"?>
<?php require_once "../utils/footer.php" ?>
<?php footer("../"); ?>
<script src="../fullscreen-modal/script.js"></script>
</body>
</html>