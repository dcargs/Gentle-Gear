<?php
  if(isset($_POST['action']) && !empty($_POST['action'])){
    include "model/userDAL.php";
    $action = $_POST['action'];
    switch ($action) {
      case 'loginValidate':
        $user = htmlspecialchars($_POST['user']);
        $pass = htmlspecialchars($POST['pass']);
        echo q_login($user, $pass);
        break;

      default:
        echo $action;
        break;
    }
    exit(0);
  }

  $loginForm = '<div class="form-group">
                  <label for="label1">User:</label>
                  <input type="text" class="form-control" id="user" name="user" placeholder="User">
                </div>
                <div class="form-group">
                  <label for="label2">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="text-center">
                    <input class="btn btn-primary btn-md" type="submit" value="Login" name="submit" role="button" onclick="return login_submission()">
                </div>';
 ?>
