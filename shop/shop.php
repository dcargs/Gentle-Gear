<?php
  include "shopController.php";

  $content = "";
  $message = "";
  $modal = printModal();
  $content .= $modal;
  $pictures = buildPictures(); //pictures built from database here
  $content .= $pictures; //pictures put on page here
  $content = "<div class='row'>
                <h4 class='text-center'>*** Click on an item to view its details ***</h4>
              </div><br>" . $content;
  $script = '<script src="statics/shopScripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
?>
