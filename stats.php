<?php
 
  require('db.php'); 
  $pdo = pdo();
  $sql = 'select count(line) from lines;' ;
  $pds = $pdo->prepare($sql);
  $pds->execute(array());
  $row = $pds->fetch();
  $line_count = $row[0];

?>

<?php require_once('inc/header.php') ?>

<div id="content">

<dl>
  <dt>Total lines recorded</dt>
  <dd> <?php echo $line_count ?></dd>
</dl>

</div><!-- #content -->

<?php require_once('inc/footer.php') ?>
