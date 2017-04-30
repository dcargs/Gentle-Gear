$(function(){
  $("#itemTable, #editBtn").hide();
});

function fillModalItem(id, name, des, img, alt){
  preLoad = $(".modal-body").html();
  $.ajax({
    url: '../controller.php',
    data: {action: 'fillModalItem',
           img: img,},
    type: 'post',
    success: function(output){
      $(".modal-title").html("Edit " + name + " details");
      $("#img_path").html(output);
      $("#id").val(id);
      $("#name").val(name);
      $("#des").val(des);
      $("#alt").val(alt);
      $(".form-control").attr("readonly", true);
      $("#editBtn").show();
      $("#createBtn").hide();
      $("#myModal").modal();
      $("#editBtn").click(function(){
        $(".form-control").removeAttr("readonly");
      });
      $("#closeModal").click(function(){
        $(".modal-body").html(preLoad);
      });
    }
  });
}

function printItemsTable(){
  $.ajax({
    url: '../controller.php',
    data: {action: 'printItemsTable'},
    type: 'post',
    success: function(output){
      $("#itemTable").html(output).slideToggle();
    }
  });
}

function modalFillCreateItem(){
  $("#createBtn").show();
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
