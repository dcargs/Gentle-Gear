<?php
  require "userController.php";

  $script = '<script src="statics/userScripts.js"></script>';
  $header = "Login";
  $content = $loginForm;
  require "statics/layout.php";
?>
