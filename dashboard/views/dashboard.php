<?php
  require "../controller.php";
  statusAuthenticated();

  $content = adminView();
  $content .= printModal();

  $script = '<script src="../statics/dashboardScripts.js"></script>';
  $header = "Dashboard";
  require "../statics/layout.php";
 ?>
