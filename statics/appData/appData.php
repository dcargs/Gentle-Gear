<?php

  if(isset($_GET['content'])){
    $appData = json_decode(file_get_contents('appData.json'));
    echo $appData->posts['content'];
  } else {
    echo "not set";
  }
 ?>
