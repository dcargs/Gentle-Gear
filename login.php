<?php
  ob_start();
  require "userController.php";

  $message = "<div id='message' class='row'></div>";
  $script = '<script src="statics/scripts.js"></script>
             <script src="statics/userScripts.js"></script>';
  $header = "Login";
  $content = $loginForm;
  require "statics/layout.php";
?>
