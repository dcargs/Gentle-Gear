<?php
  include "shopController.php";

  $result = getItems();
  $modal = printModal();
  $content .= $modal;
  $pictures .= "<div id='items'>";
  $pictures .= "<div class='row'>";
  $pictures .= "<div class='picture col-md-3 block'><img class='img-responsive' src='../$result[5]' alt='$result[6]'></div>";
  $pictures .= "</div></div>";
  $content .= $pictures;
  $script = '<script src="../statics/scripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
?>
