<?php
  ob_start();
  require "userController.php";

  $message = "<div id='messageRow' class='row'>
                <div class='alert alert-danger'>
                  <strong>Error!</strong><span id='message'></span>
                </div>
              </div>";
  $script = '<script src="statics/scripts.js"></script>
             <script src="statics/userScripts.js"></script>';
  $header = "Login";
  $content = $loginForm;
  require "statics/layout.php";
?>
