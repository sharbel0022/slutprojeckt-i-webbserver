 <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "cms2";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));
    ?> 