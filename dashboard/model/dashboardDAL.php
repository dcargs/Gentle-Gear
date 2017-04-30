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
    $conn = connectDB();
    $query = "INSERT INTO item (name, description, img_path, img_alt) VALUES (?,?,?,?)";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
      exit();
    }
    $stmt->bind_param("ssss", $name, $des, $img, $alt);
    $stmt->execute();
  }

  // will eventually have to put img_path in once gallery implemented
  function q_editItem($id, $name, $des, $alt){
    $conn = connectDB();
    $query = "UPDATE item SET name = ?, description = ?, img_alt = ? WHERE id = ?";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
      exit();
    }
    $stmt->bind_param("ssss", $name, $des, $alt, $id);
    $stmt->execute();
  }

  function q_deleteItem($id){
    $conn = connectDB();
    $query = "DELETE FROM item WHERE id = ?";
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
      exit();
    }
    $stmt->bind_param("i", $id);
    $stmt->execute();
  }

  class UserController {
    private $conn;

    function __construct() {
      require_once("../../secure/database.php");
      $this->conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
      if ($this->conn->connect_error) {
          die("Connection failed: " . $this->conn->connect_error);
      }
   }

    function checkUser($userToken){
      $stmt = $this->conn->stmt_init();
      if($stmt->prepare("SELECT id FROM user WHERE id=?")){
        $stmt->bind_param("s", $userToken[1]);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows();
      }
    }

    // function updatePassword($passToken){
    //
    // }
  }
 ?>
