<?php 
  require "../controller.php";
  statusAuthenticated();

  $content = adminView();
  $content .= printModal();
  $message = "";
  $script = '<script src="../statics/dashboardScripts.js"></script>';
  $header = "Dashboard";
  require "../statics/layout.php";
 ?>
