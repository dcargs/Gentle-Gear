<?php
  if(isset($_POST['action']) && !empty($_POST['action'])){
    include "model/userDAL.php";
    $action = $_POST['action'];
    switch ($action) {
      case 'loginValidate': login(); break;

      default: echo $action; break;
    }
  }

  function login(){
    session_start();
    $user = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['pass']);
    $result = q_login($user, $pass);
    if($result == 0){
      echo '0';
    } else {
      echo " Incorrect credentials";
    }
    $_SESSION['status'] = "authenticated";
    $_SESSION['user'] = $user;
  }

  $loginForm = '<div class="container">
                  <div class="form-group">
                    <label for="label1">User:</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="User">
                  </div>
                  <div class="form-group">
                    <label for="label2">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="text-center">
                      <input class="btn btn-primary btn-md" type="submit" value="Login" name="submit" role="button" onclick="return login_submission()">
                  </div>
                </div>';

  $signupForm = '';
 ?>
