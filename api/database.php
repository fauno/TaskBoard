<?php
// http://www.redbeanphp.com/index.php?p=/connection

/* SQLite */
R::setup('sqlite:'.__DIR__.'/taskboard.db');

/* MySQL */
// R::setup('mysql:localhost;dbname=taskboard', 'user', 'password');

/* PostgreSQL */
// R::setup('pgsql:localhost;dbname=taskboard', 'user', 'password');
