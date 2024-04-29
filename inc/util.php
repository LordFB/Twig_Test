<?php

require_once './vendor/autoload.php';

use Medoo\Medoo;

$db = new Medoo([
	// [required]
	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'twig_test',
	'username' => 'twiguser',
	'password' => '0LHPl3bez@7ioND1'
]);

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
	'strict_variables' => false,
	'cache' => false
]);
