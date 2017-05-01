<?php
  include "shopController.php";

  $content = "";
  $message = "";
  $modal = printModal();
  $content .= $modal;
  $pictures = buildPictures();
  $content .= $pictures;
  $content = "<div class='row'>
                <h4 class='text-center'>*** Click on an item to view it's details ***</h4>
              </div><br>" . $content;
  $script = '<script src="statics/shopScripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
?>
