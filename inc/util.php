<?php
require_once './vendor/autoload.php';
use Medoo\Medoo;

$config = include('./config.php');
$db = new Medoo($config);
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
	'strict_variables' => false,
	'cache' => false
]);
$nav = $db->select('nav','*');
