<?php
  include "shopController.php";

  $itemsArray = getItems();
  $pictures = '<div class="row">
                <div class="col-md-3 block">
                  <img class="img-responsive" src="../statics/images/shop/bikeHappyFront.jpg" alt="Bike Happy Front" >
                </div>
                <div class="col-md-3 block">
                  <img class="img-responsive" src="../statics/images/shop/chromeSpeedFront.jpg" alt="Chrome Speed Front" >
                </div>
                <div class="col-md-3 block">
                  <img class="img-responsive" src="../statics/images/shop/spinToWinFront.jpg" alt="Spin it to win it front" >
                </div>
                <div class="col-md-3 block">
                  <img class="img-responsive" src="../statics/images/shop/utilityFront.jpg" alt="Utility Front" >
                </div>
              </div>';
  $content = $pictures;
  $script = '<script src="../statics/scripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
  // echo "<br>$itemsArray[0]<br>";
  // echo "<br>$itemsArray[1]<br>";
  // json
  // $json = json_decode($itemsArray[2], true);
  // echo $json["Sizes"][0];
  // print_r($json);

  $jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($itemsArray[2], TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

  foreach ($jsonIterator as $key => $val) {
      if(is_array($val)) {
          echo "$key:\n";
      } else {
          echo "$key => $val\n";
      }
  }
  // echo "<br>jsonArray: $itemsArray[2]<br>";
  // echo "<br>$itemsArray[3]<br>";

?>
