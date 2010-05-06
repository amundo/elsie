<?php
 
   require('db.php'); 
   $pdo = pdo();
   $lines = array();
   $sql = 'select * from lines order by start_time;' ;
   foreach($pdo->query($sql) as $row){
     $lines[] = $row;
   }

?>

<?php require_once('inc/header.php') ?>

<div id="header">
<audio src="audio/peq_001_1.wav" controls="controls">
</audio>  

<form action="save_line.php" method="post" id="editor">
  <input name="line" id="line" type="text" tabindex="0" />
  <button type="submit">save line</button>
</form>

</div><!-- #header -->

<div id="sidebar">
  <?php require_once('list_audio.php') ?>
</div>
<div id="content">
  <div style="display:none" id="heh">
</div>

<div id="lines">
<?php
  foreach($lines as $row){
   echo "<span data-start='{$row['start_time']}' data-stop='{$row['stop_time']}'>{$row['line']}</span>";
  }
?>
</div>

</div>
<p id="buttons">
<button id="view">view</button> | <a id="about" href="about.html">about</a>
</p>
<?php require_once('inc/footer.php') ?>

