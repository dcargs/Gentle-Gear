<?php
  include "shopController.php";

  $result = getItems();
  $modal = printModal();
  $content .= $modal;
  $pictures .= "<div id='items'>";
  $pictures .= "<div class='row'>";
  $modalSrc = "'".$result[3]."'";
  $pictures .= "<div class='picture col-md-3 block'><img onclick='modalFill($modalSrc)' class='img-responsive' src='../$result[3]' alt='$result[4]'></div>";
  $pictures .= "</div></div>";
  $content .= $pictures;
  $script = '<script src="statics/shopScripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
?>
