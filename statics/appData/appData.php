<?php
  if(isset($_GET['action'])){
    $action = htmlspecialchars($_GET['action']);
    switch ($action) {
      case 'contact_submit':
        // $appData = json_decode(file_get_contents('appData.json'), true);
        // print_r($appData);
        $json = new jsonController();
        // $json->anything();
        $json->submit_success();
        // echo $result;
      break;

      default: break;
    }
  }

  class jsonController{
    private $obj;

    function __contruct(){
      $this->obj = new jsonObject();
    }

    function submit_success(){
    var_dump($this->obj->appData);
      // $title = $this->obj->appData['posts'][0]['title'];
      // $message = $this->obj->appData['posts'][0]['content'];
      // $boxFront = $this->obj->appData['message_box'][0]['content-front'];
      // $boxMiddle = $this->obj->appData['message_box'][0]['content-middle'];
      // $boxBack = $this->obj->appData['message_box'][0]['content-back'];
      //
      // $displayItem = $boxFront . $title . $boxMiddle . $message . $boxBack;
      // return $displayItem;
    }
  }

  class jsonObect{
    public $appData;

    function __contruct(){
      $this->$appData = json_decode(file_get_contents('appData.json'), true);
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
