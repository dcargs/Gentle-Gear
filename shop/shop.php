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
  echo "<br>$itemsArray[0]<br>";
  echo "<br>$itemsArray[1]<br>";
  echo "<br>$itemsArray[2]<br>";
  echo "<br>$itemsArray[3]<br>";

?>
