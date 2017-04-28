<?php
  if(isset($_POST['submit'])){
    require 'model/upload.php';
  }
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
                    <div class='panel-body text-center'>
                      <button class='btn btn-info' onclick='modalFill()'>Create an item</button>
                    </div>
                  </div>
                </div>
                <div class='col-md-4'>
                  <div class='panel panel-success'>
                    <div class='panel-heading'>Panel Heading</div>
                    <div class='panel-body text-center'>
                      <button class='btn btn-danger' onclick='modalFill()'>View Items</button>
                    </div>
                  </div>
                </div>
              </div>";
      return $layout;
  }

  function printModal(){
    $modal = '<!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Create an item</h4>
                </div>
                <div class="modal-body">
                <form action="../controller.php" method="post" enctype="multipart/form-data">
                  <!-- name -->
                  <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                      <label id="label1" for="name">Name:</label>
                    </div>
                    <div class="col-md-4">
                      <input id="name" class="form-control" type="text" name="name" value="">
                    </div>
                  </div><hr>
                  <!-- description -->
                  <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                      <label id="label2" for="des">Description:</label>
                    </div>
                    <div class="col-md-4">
                      <input id="des" class="form-control" type="text" name="des" value="">
                    </div>
                  </div><hr>
                  <!-- img_alt -->
                  <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                      <label id="label3" for="alt">Image Alt Text:</label>
                    </div>
                    <div class="col-md-4">
                      <input id="alt" type="text" name="alt" value="">
                    </div>
                  </div><hr>
                  <!-- img_path -->
                  <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                      <label id="label4" for="img">Upload Image:</label>
                    </div>
                    <div class="col-md-4">
                      <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                  </div><hr>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" name="submit" onclick="createItem()">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </form>
              </div>

            </div>
          </div>';
    return $modal;
  }


 ?>
