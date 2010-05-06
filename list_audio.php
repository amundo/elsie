<div id="files">
<?php

  $files = glob("./audio/*.wav");
  foreach ($files as $file) { 
    
    echo "<p><a href='$file'>$file</a></p>\n";
    
  }

?>
</div>
