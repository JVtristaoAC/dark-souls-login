<?php
define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/View/modules/');

$_ENV['db']['host'] = 'localhost:3307'; //'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'etecjau'; //'nasciEM1606';
$_ENV['db']['database'] = 'db_mvc';
?>