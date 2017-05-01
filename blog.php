<?php
  session_start();

  $message = "";
  $postVideo = "<br><div class='container'>
                <div class='embed-responsive embed-responsive-16by9'>
                  <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/-ZbeR0mJBkk'></iframe>
                </div>
              </div>";
  $post = "<br><div class='container'>
                <div class='panel panel-primary'>
                  <div class='panel-heading'>Post Title</div>
                  <div class='panel-body'>Post Content</div>
                </div>
              </div>";
  $content = $postVideo . $post . $post;
  $script = '<script src="statics/scripts.js"></script>';
  $header = "Blog";
  require "statics/layout.php";
?>
