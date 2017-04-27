<?php
  function statusAuthenticated(){
    session_start();
    if(isset($_SESSION['status'])){
      if($_SESSION['status'] == "authenticated"){

      } else {
        header("Location: ../../login.php");
      }
    } else {
      header("Location: ../../login.php");
    }
  }

  function adminView(){
    $layout = "<div class='row'>
                <div class='col-md-offset-2 col-md-4'>
                  <div class='panel panel-primary'>
                    <div class='panel-heading'>Create an item</div>
                    <div class='panel-body'>
                      <button class='btn btn-info'>Create an item</button>
                    </div>
                  </div>
                </div>
                <div class='col-md-4'>
                  <div class='panel panel-success'>
                    <div class='panel-heading'>Panel Heading</div>
                    <div class='panel-body'>
                      <button class='btn btn-danger'>View Items</button>
                    </div>
                  </div>
                </div>
              </div>";
      return $layout;
  }

 ?>
