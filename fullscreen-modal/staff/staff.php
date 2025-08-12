<?php
session_start();

function staff($name)
{
    $trans = include_once "lang/" . $_SESSION["lang"] . '/' . $_SESSION["lang"] . ".php";
    echo @$trans[$name]["data"];
}