<?php

  if(isset($_GET['content'])){
    $appData = json_decode(file_get_contents('appData.json'));
    print_r($appData->posts);
    echo $appData->posts->'0'->id;
  } else {
    echo "not set";
  }
 ?>
