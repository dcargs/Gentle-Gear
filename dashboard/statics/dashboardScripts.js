$(function(){
  $("#itemTable").hide();
});

function printItemsTable(){
  $.ajax({
    url: 'controller.php',
    data: {action: 'printItemsTable'},
    type: 'post',
    success: function(output){
      $("#itemTable").html(output).slideToggle();
    }
  });
}

function modalFillCreateItem(){
  $("#myModal").modal();
}

function createItem(){
  if($(".form-control").val() == ''){
    alert("Fill in all the fields");
    return false;
  } else {
    submit();
  }
}
