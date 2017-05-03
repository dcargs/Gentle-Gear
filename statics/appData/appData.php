<?php

  if(isset($_GET['content'])){
    $appData = json_decode(file_get_contents('appData.json'));
    print_r($appData->posts);
    $x = $appData['posts']['content'];
    print_r($x);
  } else {
    echo "not set";
  }
 ?>
