<?php

// This is the database connection configuration.

//if ( isset($_SERVER['WINDIR']) ) { // если локально
    $dsn = 'mysql:host=localhost;dbname=feedback_page';
    $username = 'root';
    $password = '';
//}

return array(
//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
    // uncomment the following lines to use a MySQL database

     'connectionString' => $dsn,
     'emulatePrepare' => true,
     'username' => $username,
     'password' => $password,
     'charset' => 'utf8',

);