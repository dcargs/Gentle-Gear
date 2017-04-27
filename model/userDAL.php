<?php
  function connectDB(){
    require_once("../secure/database.php");
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }

  function q_login($user, $pass){
    // echo 'in DAL';

    $conn = connectDB();
    $query = "SELECT password FROM user WHERE id=?";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
      exit();
    }

    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    $result = $result->fetch_array();
    // print_r($result);
    if($pass == $result[0]){
      return 0;
    } else {
      return $pass;
    }
  }

 ?>
