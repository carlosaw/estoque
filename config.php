<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/estoque/");
	$config['dbname'] = 'estoque';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} elseif(ENVIRONMENT == 'production') {
	define("BASE_URL", "https://estoque.awregulagens.com.br/");
	$config['dbname'] = 'estoque';
	$config['host'] = '108.181.92.71';
	$config['dbuser'] = 'estoque';
	$config['dbpass'] = 'N1e2c3a4estoque';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);