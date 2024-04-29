<?php

require_once './inc/util.php';

$db->create("items", [
    "id" => [
        "INT",
        "NOT NULL",
        "AUTO_INCREMENT",
        "PRIMARY KEY"
    ],
    "title" => [
        "VARCHAR(30)",
        "NOT NULL"
    ],
    "text" => [
        "VARCHAR(500)",
        "NOT NULL"
    ],
    "image" => [
        "VARCHAR(100)",
        "NOT NULL"
    ],
]);
$db->create("nav", [
    "id" => [
        "INT",
        "NOT NULL",
        "AUTO_INCREMENT",
        "PRIMARY KEY"
    ],
    "text" => [
        "VARCHAR(30)",
        "NOT NULL"
    ],
    "url" => [
        "VARCHAR(50)",
        "NOT NULL"
    ]
]);
$data = [
    "data" => [
        [
            'title' => 'Title',
            'text' => '<h1>lorem ipsum dolor sit amet...</h1>',
            'image' => 'https://loremflickr.com/500/500?random=1'
        ],
        [
            'title' => 'Title2',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=2'
        ],
        [
            'title' => 'Title3',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=3'
        ],
        [
            'title' => 'Title4',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=4'
        ],
        [
            'title' => 'Title5',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=5'
        ],
        [
            'title' => 'Title6',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=6'
        ],
        [
            'title' => 'Title7',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=7'
        ],
        [
            'title' => 'Title8',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=8'
        ],
        [
            'title' => 'Title9',
            'text' => 'Lorem ipsum dolor sit amet...',
            'image' => 'https://loremflickr.com/500/500?random=9'
        ],
    ],
    "nav" => [
        ["text" => "Home", "url" => "./"],
        ["text" => "Contact", "url" => "./contact"]
    ]
];

$db->insert("items", $data['data'] );
$db->insert("nav", $data['nav'] );

rename('./install.php','./install.php.back');
header('Location: ./ ');

?>