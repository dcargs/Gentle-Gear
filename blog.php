<?php
  session_start();

  $message = "";
  $post = "<br><div class='container'>
                <div class='panel panel-primary'>
                  <div class='panel-heading'>Post Title</div>
                  <div class='panel-body'>Post Content</div>
                </div>
              </div>";
  $content = $post . $post . $post;
  $script = '<script src="statics/scripts.js"></script>';
  $header = "Blog";
  require "statics/layout.php";
?>
