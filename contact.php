<?php
require_once './inc/util.php';

$data = [
    "title" => "Contact",
    "text" => "Made by FBP",
    "nav" => $nav
];

echo $twig->render('contact.twig', $data);
