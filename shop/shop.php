<?php
  include "shopController.php";

  $content = "";
  $message = "";
  $modal = printModal();
  $content .= $modal;
  $pictures = buildPictures();
  $content .= $pictures;
  $script = '<script src="statics/shopScripts.js"></script>';
  $header = "Shop";
  require "statics/layout.php";
?>
