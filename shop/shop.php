<?php
  include "shopController.php";

  $result = getItems();
  // $pictures = "<div class='row'>
  //               <div class='col-md-3 block'>
  //                 <img class='img-responsive' src='../$itemsArray[5]' alt='$itemsArray[6]'>
  //               </div>
  //               <div class='col-md-3 block'>
  //                 <img class='img-responsive' src='../statics/images/shop/chromeSpeedFront.jpg' alt='Chrome Speed Front' >
  //               </div>
  //               <div class='col-md-3 block'>
  //                 <img class='img-responsive' src='../statics/images/shop/spinToWinFront.jpg' alt='Spin it to win it front' >
  //               </div>
  //               <div class='col-md-3 block'>
  //                 <img class='img-responsive' src='../statics/images/shop/utilityFront.jpg' alt='Utility Front' >
  //               </div>
  //             </div>";


     foreach ($result as $data) {
       $content = $content + $data;
     }


  // $pictures = "<div id='items'>";
  // if($result->num_rows > 0){
  //   $pictures += "<div class='row'>";
  //   while($row = $result->fetch_array(MYSQLI_NUM)){
  //     $pictures += "<div class='col-md-3 block'><img class='img-responsive' src='../$row[5]' alt='$row[6]'></div>";
  //   }
  // }
  // $pictures += "</div></div>";
  // $content = $pictures;
  $script = '<script src="../statics/scripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
?>
