<?php
   /*
   z constantami:
   define('DB_SERVER', '127.0.0.1:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root12345678');
   define('DB_DATABASE', 'mysql');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   */
    $db = mysqli_connect('127.0.0.1','root','root12345678','mysql','3306');
?>