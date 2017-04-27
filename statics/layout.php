<?php ob_start();
      session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $script ?>
    <link rel="stylesheet" href="statics/styles.css">
    <meta charset="utf-8">
    <title>Gentle Gear</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li> -->
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img src="statics/images/car1.JPG" alt="Gentle Gear" >
            </div>

            <!-- <div class="item">
              <img src="img_chania2.jpg" alt="Chania" width="460" height="345">
              <div class="carousel-caption">
                <h3>Chania</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>

            <div class="item">
              <img src="img_flower.jpg" alt="Flower" width="460" height="345">
              <div class="carousel-caption">
                <h3>Flowers</h3>
                <p>Beautiful flowers in Kolymbari, Crete.</p>
              </div>
            </div>

            <div class="item">
              <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
              <div class="carousel-caption">
                <h3>Flowers</h3>
                <p>Beautiful flowers in Kolymbari, Crete.</p>
              </div>
            </div> -->

          </div>

          <!-- Left and right controls -->
          <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
        <div id="menu">
          <nav role="navigation" class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">GentleGear</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop/shop.php">Shop</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php
                    if(isset($_SESSION['status'])){
                      $currentPage = $_SERVER['PHP_SELF'];
                      echo '<li><a class="btn btn-danger" id="text-white" href="logout.php?page='.$currentPage.'">Logout</a></li>';
                    } else {
                      echo '<li><a class="btn btn-primary" id="text-white" href="login.php">Login</a></li>';
                    }?>
                </ul>
            </div>
          </nav>
        </div>
        <div class="row">
          <h2 class="text-center"><?= $header ?></h2>
        </div><hr>
        <?= $content ?>
        <?= $message ?>
      </div>
    </div>
  </body>
</html>
