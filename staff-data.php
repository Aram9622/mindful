<?php
require_once "fullscreen-modal/staff.php";
$staff = [
    [
        "id" => 1,
        "description" => tatev()
    ],
    [
        "id" => 2,
        "description" => ""
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

$staffId = $_POST["id"];

$member = [];
foreach ($staff as $person) {
    if($person["id"] == $staffId){
        $member = $person["description"];
        break;
    }
}
echo json_encode($member);