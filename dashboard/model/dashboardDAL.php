<?php
  function connectDB(){
    require_once("../../secure/database.php");
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }

  function q_createItem($name, $des, $img, $alt){
    $query = "INSERT INTO item (name, description, img_path, img_alt) VALUES (?,?,?,?)";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
      exit();
    }
    $stmt->bind_param("ssss", $name, $des, $img, $alt);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;

  }
 ?>
