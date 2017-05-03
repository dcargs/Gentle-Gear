<?php
  if(isset($_GET['action'])){
    $action = htmlspecialchars($_GET['action']);
    switch ($action) {
      case 'contact_submit':
        $json = new jsonController();
        $json->submit_success();
      break;

      default: break;
    }
  }

  class jsonController{
    private $appData;

    function __contruct(){
      $this->appData = json_decode(file_get_contents('appData.json'), true);
    }

    function submit_success(){
      $title = $this->appData['posts'][0]['title'];
      $message = $this->appData['posts'][0]['content'];
      $boxFront = $this->appData['message_box'][0]['content-front'];
      $boxMiddle = $this->appData['message_box'][0]['content-middle'];
      $boxBack = $this->appData['message_box'][0]['content-back'];

      $displayItem = $boxFront.$title.' '.$boxMiddle.$message.$boxBack;
      echo $displayItem;
      echo "in jsonController"
    }
  }

  // function data_posts($type){
  //   switch ($type) {
  //     case 'success':
  //       $appData = json_decode(file_get_contents('appData.json'), true);
  //       // $x = $appData['posts'][0]['content'];
  //       while($item = array_shift($appData['posts'])){
  //         foreach ($item as $key => $value) {
  //           if($key == 'title' && $value == 'success'){
  //             $label = $value;
  //           } else if($key == 'content'){
  //             $message = $value;
  //           }
  //         }
  //       }
  //       break;
  //
  //     default:
  //       # code...
  //       break;
  //   }
  // }
 ?>
