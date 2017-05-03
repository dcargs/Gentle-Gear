<?php

  if(isset($_GET['content'])){
    echo "set";
    $appData = json_decode(file_get_contents('appData.json'));
    echo $appData;
  } else {
    echo "not set";
  }
 ?>
