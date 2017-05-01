<?php
  include "shopController.php";

  $content = "";
  $message = "";
  $modal = printModal();
  $content .= $modal;
  $pictures = buildPictures();
  $content .= $pictures;
  $content = "<div class='row'>
                *** click on a picture to view details about item ***
              </div>" . $content;
  $script = '<script src="statics/shopScripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
?>
