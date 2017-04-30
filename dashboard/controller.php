<?php
  if(isset($_POST['submit'])){
    require 'model/upload.php';
  }

  if(isset($_POST['action']) && !empty($_POST['action'])){

    $action = $_POST['action'];
    switch ($action) {
      case 'printItemsTable': printItemsTable(); break;
      case 'fillModalItem': fillModalItem(); break;
      case 'editItem': editItem(); break;
      case 'deleteItem': deleteItem(); break;

      default:
        $message = "<h2 class='text-center'>$action not specified in controller</h2>";
        break;
    }
  }

  function deleteItem(){
    // include 'model/dashboardDAL.php';
    // $id = htmlspecialchars($_POST['id']);
    // $path = htmlspecialchars($_POST['path']);
    // q_deleteItem($id);
    // $path = explode("../..", $path);
    // unlink( $_SERVER['DOCUMENT_ROOT'] ."$path[1]" );
    unlink('../statics/images/shop/20170407_101619.jpg');

  }

  function editItem(){
    include 'model/dashboardDAL.php';
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $des = htmlspecialchars($_POST['des']);
    $alt = htmlspecialchars($_POST['alt']);
    q_editItem($id, $name, $des, $alt);
    echo "<h2 class='text-center'>Item Successfully Updated</h2>";
  }

  function fillModalItem(){
    $img = $_POST['img'];
    echo "<img class='img-responsive infoPic' src='../..$img'>";
  }

  function printItemsTable(){
    include("../shop/model/shopDAL.php");
    $itemsResult = q_getItems();
    while($itemArray = $itemsResult->fetch_array()){
      $items[] = $itemArray;
    }
    echo '<table class="table table-responsive table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image Path</th>
                <th>Image Alt</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>';
    foreach ($items as $item) {
      $id = "'".$item[0]."'";
      $name = "'".$item[1]."'";
      $des = "'".$item[2]."'";
      $img = "'".$item[3]."'";
      $alt = "'".$item[4]."'";
      echo "<tr>
              <td>$name</td>
              <td>$des</td>
              <td><img class='center-block imageCell img-responsive' src='../..$item[3]' alt='$item[4]'></td>
              <td>$alt</td>";
      echo   '<td><button class="btn btn-primary" onclick="fillModalItem('.$id.','.$name.','.$des.','.$img.','.$alt.')">Edit</button></td>
            </tr>';
    }
    echo '</tbody></table>';

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
                      <button class='btn btn-info' onclick='modalFillCreateItem()'>Create an item</button>
                    </div>
                  </div>
                </div>
                <div class='col-md-4'>
                  <div class='panel panel-success'>
                    <div class='panel-heading'>View Your Items</div>
                    <div class='panel-body text-center'>
                      <button class='btn btn-danger' onclick='printItemsTable()'>View Items</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class='row' id='itemTable'>

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
                      <input type="hidden" name="id" />
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
                      <input id="alt" class="form-control" type="text" name="alt" value="">
                    </div>
                  </div><hr>
                  <!-- img_path -->
                  <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                      <label id="label4" for="img">Upload Image:</label>
                    </div>
                    <div id="img_path" class="col-md-4">
                      <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                  </div><hr>
                </div>
                <div class="modal-footer">
                  <input type="submit" id="createBtn" class="btn btn-success" name="submit" onclick="createItem()">
                  <button type="button" id="deleteBtn" class="btn btn-danger floatLeft">Delete</button>
                  <button type="button" id="editBtn" class="btn btn-primary">Edit</button>
                  <button type="button" id="closeModal" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </form>
              </div>

            </div>
          </div>';
    return $modal;
  }


 ?>
