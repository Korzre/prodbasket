<?php
$db_name = "bd_korz";
$db_user = "root";
$db_password = "@12345678@";
$db_host = "127.0.0.1";

$pdo = new PDO("mysql:host=$db_host;
                dbname=$db_name",
                $db_user,
                $db_password);

?>
