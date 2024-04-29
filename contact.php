<?php
require_once './inc/util.php';

$data = [
    "title" => "Contact",
    "text" => "Lorem...",
    "nav" => [
        ["text" => "Home", "url" => "./"],
        ["text" => "Contact", "url" => "./contact"]
    ]
];

echo $twig->render('contact.twig', $data);
