<?php
  include "model/shopDAL.php";

  function getItems(){
    $result = q_getItems();
    return $result;
  }

 ?>
