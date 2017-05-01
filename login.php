<?php
  ob_start();
  session_start();

  if(isset($_SESSION['status'])){
    // header("Location: dashboard/views/dashboard.php");
  } else {
    require "userController.php";
    $message = "<br><div id='messageRow' class='row'>
                  <div class='alert alert-danger'>
                    <strong>Error!</strong><span id='message'></span>
                  </div>
                </div>";
    $script = '<script src="statics/scripts.js"></script>
               <script src="statics/userScripts.js"></script>';
    $header = "Login";
    $content = $loginForm;
    $content .= $signupForm;
    require "statics/layout.php";
  }
?>
