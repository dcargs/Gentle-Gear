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

 ?>
