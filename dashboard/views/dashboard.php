<?php
  require "../controller.php";
  statusAuthenticated();

  $content = adminView();
  $content .= printModal();

  phpinfo();



  $script = '<script src="../statics/dashboardScripts.js"></script>';
  $header = "Dashboard";
  require "../statics/layout.php";
 ?>
