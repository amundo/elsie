<?php

function pdo(){ 

  try {
    $DATABASE = 'sqlite:./db/transcripts.db';
    $pdo = new PDO($DATABASE); 
    return $pdo;
  } catch (PDOException $e) {
    print "DB Error!: " . $e->getMessage() . "<br/>";
    die();
  }
}

?>
