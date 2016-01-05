<?php
// http://www.redbeanphp.com/index.php?p=/connection
require_once(__DIR__.'/../vendor/autoload.php');
use RedBeanPHP\R;

/* SQLite */
R::setup('sqlite:'.__DIR__.'/taskboard.db');

/* MySQL */
// R::setup('mysql:host=localhost;dbname=taskboard', 'user', 'password');

/* PostgreSQL */
// R::setup('pgsql:host=localhost;dbname=taskboard', 'user', 'password');
