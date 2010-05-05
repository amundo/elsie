<?php

require('db.php');

$line  = $_POST['line'];
$start_time = $_POST['start'];
$stop_time  = $_POST['stop'];

$pdo = pdo();
$sql = 'insert into lines (line,  stop_time) values (?,  ?)';
$pds = $pdo->prepare($sql);

$pds->execute(array($line, $stop_time));



?>
