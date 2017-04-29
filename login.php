<?php
  ob_start();
  require "userController.php";

  $message = "";
  $script = '<script src="statics/scripts.js"></script>
             <script src="statics/userScripts.js"></script>';
  $header = "Login";
  $content = $loginForm;
  require "statics/layout.php";
?>
