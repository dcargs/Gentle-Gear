<?php
  include "model/shopDAL.php";

  function getItems(){
    $result = q_getItems();
    return $result;
  }

  function printModal(){
    return '<!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Item Description</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-offset-2 col-md-4">
                      <img class="pictureModal img-responsive" src="">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <input class="form-control" id="description" val="" readonly>
                      </div>
                    </div>
                  </div><hr>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>';
  }

 ?>
