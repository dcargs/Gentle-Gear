<?php
  session_start();
  $content = "<br><div id='contactForm' class='container'>
                <div class='form-group'>
                  <label>First Name:</label>
                  <input type='text' class='form-control' placeholder='First Name'>
                </div>
                <div class='form-group'>
                  <label>Last Name:</label>
                  <input type='text' class='form-control' placeholder='Last Name'>
                </div>
                <div class='form-group'>
                  <label>Phone Number:</label>
                  <input type='number' class='form-control' placeholder='ex.6364976542'>
                </div>
                <div class='form-group'>
                  <label>First Name:</label>
                  <textarea class='form-control' placeholder='Message'></textarea>
                </div>
                <button type='button' onclick='contactFormSubmission()' class='btn btn-primary center-block'>Submit</button>
              </div>";
  $message = "";
  $script = '<script src="statics/scripts.js"></script>';
  $header = "Contact";
  require "statics/layout.php";
?>
