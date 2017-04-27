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
    // $result = $result;
    return $result;
  //   if($pass == $result['password']){
  //     return 1;
  //   } else {
  //     return $result['password'];
  //   }
  // }

 ?>
