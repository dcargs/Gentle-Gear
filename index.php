<?php
  session_start();
  $content = "<div class='row'>
                <p>
                Gentle Gear was founded in 2016 with the simple goal of putting more kids on bikes. Partnering with after school academic support programs, Gentle Gear uses the sales from our cycling clothing and merchandise to buy bicycles for young people who can't afford their own. Explore our unique designs on the shop page, read more about our mission and community activities on our about page
                </p>
              </div>";
  $message = "";
  $script = '<script src="statics/scripts.js"></script>';
  $header = "Gentle Gear";
  require "statics/layout.php";
?>
