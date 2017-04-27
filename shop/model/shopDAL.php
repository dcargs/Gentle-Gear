<?php
  function connectDB(){
    require_once("../../secure/database.php");
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }

  function q_getItems(){
    $conn = connectDB();
    $query = "SELECT * FROM item";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
      exit();
    }
    $stmt->execute();
    $result = $stmt->get_result();
    // $array = $result->fetch_array();
    // print_r($array);
    return $result;
  }

  function q_getSizeData(){
    $conn = connectDB();
    $query = "";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
      exit();
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $array = $result->fetch_array();
    // print_r($array);
    return $array;
  }
 ?>
