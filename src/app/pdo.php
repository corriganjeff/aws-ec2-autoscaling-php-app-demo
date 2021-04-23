<?php
$dbhost = 'octankdatabase-cluster.cluster-cqewrex3aopt.us-east-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'octankdatabase';
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = "admin";
$password = "";

$pdo = new PDO($dsn, $username, $password);

?>