<?php
require_once('pdo.php');
$newGuid = md5(uniqid(rand(), true));
$dte = gmdate("Y-m-d\TH:i:s\Z");

$sql = "insert into page_hits(tracking_id, request_date) values (?, ?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$newGuid,$dte]);


?>