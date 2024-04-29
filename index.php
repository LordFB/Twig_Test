<?php

require_once './inc/util.php';

$data = [
    "nav" => [
        ["text" => "Home", "url" => "./"],
        ["text" => "Contact", "url" => "./contact"]
    ]
];

$data['data'] = $db->select("items", [
    "id",
    "title",
    "text",
    "image"
]);

echo $twig->render('index.twig', $data);
