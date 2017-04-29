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
    <link rel="stylesheet" href="../statics/styles.css">
    <meta charset="utf-8">
    <title>Gentle Gear</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../statics/images/car1.JPG" alt="Gentle Gear" >
          </div>
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
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="../blog.php">Blog</a></li>
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php
                    if(isset($_SESSION['status'])){
                      $currentPage = $_SERVER['PHP_SELF'];
                      echo '<li><a class="btn btn-primary" id="text-white" href="../dashboard/dashboard.php">Dashboard</a></li>
                            <li><a class="btn btn-danger" id="text-white" href="../logout.php?page='.$currentPage.'">Logout</a></li>';
                    } else {
                      echo '<li><a class="btn btn-primary" id="text-white" href="../login.php">Login</a></li>';
                    }?>
                </ul>
            </div>
          </nav>
        </div>
        <div class="row">
          <h2 class="text-center"><?= $header ?></h2>
        </div><hr>
        <div class="container">
          <?= $content ?>
        </div>
        <?= $message ?>
      </div>
    </div>
  </body>
</html>
