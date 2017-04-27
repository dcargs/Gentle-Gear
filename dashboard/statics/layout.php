<?php ob_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $script ?>
    <meta charset="utf-8">
    <title>Gentle Gear</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../../shop.php">Shop</a></li>
                    <li><a href="../../blog.php">Blog</a></li>
                    <li><a href="../../about.php">About</a></li>
                    <li><a href="../../contact.php">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="btn-danger"><a href="../../logout.php">Logout</a></li>
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
