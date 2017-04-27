function login_submission(){
  if($(".form-control").val() == ''){
    alert("You must fill out all of the fields to proceed");
  } else {
    user = $("#user").val();
    pass = $("#password").val();
    $.ajax({
      data: {action: 'loginValidate',
             user: user,
             pass: pass},
      type: 'post',
      success: function(output){
        if(output == 1){
          window.location.href = 'dashboard/views/dashboard.php';
        } else {
          console.log(output);
        }
      }
    });
  }
}
