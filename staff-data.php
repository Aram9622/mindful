<?php
if(isset($_GET["lang"])){
    $trans = include_once "lang/" . $_GET["lang"] . '/' . $_GET["lang"] . ".php";
}
else {
    session_start();
    $trans = include_once "lang/" . $_SESSION["lang"] . '/' . $_SESSION["lang"] . ".php";
}


$staff = $trans["staff"];

if(isset($_POST["id"])){
    $staffId = $_POST["id"];
    $memberDescription = "";
    foreach ($staff as $person) {
        if($person["id"] == $staffId){
            $memberDescription = $person["data"]();
            break;
        }
    }
    echo $memberDescription;
}else{
    header('Content-Type: application/json');
    echo json_encode($staff);
}
