<?php
  require_once "../controller.php";
  statusAuthenticated();

  $content = adminView();
  $content .= printModal();
  $message = "";
  $script = '<script src="../statics/dashboardScripts.js"></script>';
  $header = "Dashboard";
  require_once "../statics/layout.php";
 ?>
