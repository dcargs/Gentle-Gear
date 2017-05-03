<?php
  if(isset($_GET['action'])){
    $action = htmlspecialchars($_GET['action']);
    switch ($action) {
      case 'contact_submit': contact_submit(); break;

      default: break;
    }
  }

  function contact_submit(){
    $appData = json_decode(file_get_contents('appData.json'), true);
    $x = $appData['posts'][0]['content'];
    echo $x;
 ?>
