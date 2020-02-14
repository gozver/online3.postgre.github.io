<?php

$host = 'ec2-54-195-247-108.eu-west-1.compute.amazonaws.com';
$db_name = 'd3osglm9g8dcao';
$usr_name = 'pcikziwddszuai';
$pwd = 'b949404c1ea625b54f3cbab3d8187e3ff0178781887dbfc89b768cf6f261e198'; 


// MySQL/MariaDB
// $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db_name, $usr_name, $pwd);

// PostgreSQL
try {
    $dbh = new PDO('pgsql:host=' . $host . ';dbname=' . $db_name, $usr_name, $pwd);    
} catch(PDOException $e) {
    echo $e->getMessage();    
}

?>