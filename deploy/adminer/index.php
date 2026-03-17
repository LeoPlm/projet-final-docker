<?php
ob_start(function($html) {
    $css = file_get_contents(__DIR__ . '/adminer.css');
    return str_replace(
        '</head>',
        '<style>' . $css . '</style></head>',
        $html
    );
});

include "./adminer.php";