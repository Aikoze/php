<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//header('Content-type: text/plain; charset=utf-8;');
session_start();
setlocale(LC_ALL, 'fr_FR.UTF8');
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PWD', 'root');
define('MYSQL_DB', 'cesi');

function autoload($class) {
	require 'class/' . str_replace('\\', '/', $class) . '.class.php';
}

spl_autoload_register('autoload');