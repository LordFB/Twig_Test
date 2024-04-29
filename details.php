<?php

    require_once './inc/util.php';

    $id = $_GET['id'];
    $data = $db->select("items",[
        "id",
        "title",
        "text",
        "image"
    ],[
        "id"=>$id
    ])[0];

    $data['nav'] = [
        ["text" => "Home", "url" => "./"],
        ["text" => "Contact", "url" => "./contact"]
    ];
    
    echo $twig->render('details.twig', $data);

?>