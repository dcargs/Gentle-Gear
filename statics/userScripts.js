function login_submission(){
  if($(".form-control").val() == ''){
    alert("You must fill out all of the fields to proceed");
    return false;
  } else {
    user = $("#user").val();
    pass = $("#password").val();
    $.ajax({
      url: 'userController.php',
      data: {action: 'loginValidate',
             user: user,
             pass: pass},
      type: 'post',
      success: function(output){
        if(output == 'bad'){
          window.location.href = 'dashboard/views/dashboard.php';
        } else {
          console.log(output);
        }
      }
    });
  }
}
