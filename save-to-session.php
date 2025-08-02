<?php
session_start();
require_once "log.php";
$root = __DIR__.'/lang/'.$_POST['lang'];

$rii  = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root,
        FilesystemIterator::SKIP_DOTS)
);

$files = [];
foreach ($rii as $file) {
    if ($file->isFile()) { 
        $files[] = $file->getPathname();
    }
}

if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
    $trans = [];
    foreach ($files as $file) {
        $data = require $file;
        logMessage(json_encode([$file]));
        if (!is_array($data)) {
            throw new \RuntimeException("$file не вернул массив");
        }
        $trans = array_merge($trans, $data);
    }
    logMessage(json_encode(["session" => $_SESSION["lang"], "lang" => $_POST['lang']]));
    session_write_close();
    echo json_encode($trans);
    exit;
}

http_response_code(400);
echo 'no lang';