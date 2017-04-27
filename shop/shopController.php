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
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img class="pictureModal" src="">
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
