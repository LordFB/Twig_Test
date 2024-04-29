<?php

if ( file_exists('./install.php') ){
    header('Location: ./install.php');
    exit();
}

require_once './inc/util.php';

$data = [
    "nav" => $nav
];

$data['data'] = $db->select("items", [
    "id",
    "title",
    "text",
    "image"
]);

echo $twig->render('index.twig', $data);
