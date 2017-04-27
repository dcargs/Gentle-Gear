<?php
  require "../controller.php";
  statusAuthenticated();

  $content = adminView();
  $script = '<script src="../statics/dashboardScripts.js"></script>';
  $header = "Dashboard";
  require "../statics/layout.php";
 ?>
