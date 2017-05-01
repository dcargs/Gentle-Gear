<?php
  session_start();
  $message = "";
  $content = "<div class='container'>
                <br><div class='row'>
                  <div class='col-md-offset-1 col-md-10'>
                    <p>
                      Gentle Gear was founded in 2016 with a simple purpose: to get more kids on bikes. Using a portion of our profits from the sale of cycling clothing and merchandise, Gentle Gear purchases new and gently used bikes for children in Columbia, Missouri who can't afford them
                    </p>
                    <p>
                      We believe that riding bicycles is the key to a happy and healthy life, and that everyone, regardless of age or circumstance, should be able to enjoy the simple pleasure of riding a bike.
                    </p>
                  </div>
                  <div class='row'>
                    <div class='col-md-offset-1 col-md-10'>
                      <img src='statics/images/about/Jonah_Riding_large.png' class='img-responsive img-rounded center-block' alt='Anita Riding'><br>
                    </div>
                  </div>
                <div class='row'>
                  <div class='col-md-offset-1 col-md-10'>
                    <p>
                      Staying safe on your bike is of paramount importance, which is why each child participates in a rider safety course and receives a helmet when they receive their bicycle.
                    </p>
                    <p>
                      Bicycle safety and maintenance courses are open to the public and hosted on a monthly basis from March-October.
                    </p>
                  </div>
                </div>
                <div class='row'>
                  <div class='col-md-offset-1 col-md-10'>
                    <img src='statics/images/about/Anita_Riding_large.png' class='img-responsive img-rounded center-block' alt='Anita Riding'><br>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-offset-1 col-md-10'>
                  <p>
                    We are currently partnered with after school academic support programs to distribute bicycles to underprivileged children. If you would like more information about Gentle Gear, or to see if your program qualifies to partner with Gentle Gear, please send us an e-mail through our contact page.
                  </p>
                  <p class='text-center'>
                    Happy Riding!
                  </p>
                </div>
              </div>
            </div>";
  $script = '<script src="statics/scripts.js"></script>';
  $header = "About";
  require "statics/layout.php";

?>
