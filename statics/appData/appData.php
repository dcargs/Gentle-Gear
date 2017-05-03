<?php

  if(isset($_GET['content'])){
    $appData = json_decode(file_get_contents('appData.json'));
    print_r($appData->posts);
  } else {
    echo "not set";
  }
 ?>
