<?php

  if(isset($_GET['content'])){
    echo "set";
  } else {
    echo "not set";
  }
  // $id = empty($_GET['content']) ? 0 : $_GET['content'];
  // $appData = json_decode(file_get_contents('appData.json'));
  //
  // header('Content-Type: application/json');
  // if ($id == 0) {
  //   print json_encode($appData);
  // }
  // else {
  //   print json_encode($appData->posts[$id-1]);
  // }
 ?>
