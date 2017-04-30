$(function(){
  $("#itemTable, #editBtn, #deleteBtn").hide();
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
      $("#editBtn, #deleteBtn").show();
      $("#createBtn").hide();
      $("#myModal").modal();
      $("#editBtn").click(function(){
        $("#deleteBtn").hide();
        $(".form-control").removeAttr("readonly");
        $("#editBtn").html("Save").removeClass("btn-primary").addClass("btn-success");
        $("#editBtn").click(function(){
          $("#deleteBtn").show();
          $("#editBtn").hide();
          $(".form-control").attr("readonly", true);
          eName = $("#name").val();
          eDes = $("#des").val();
          eAlt = $("#alt").val();
          $.ajax({
            url: '../controller.php',
            data: {action: 'editItem',
                   id: id,
                   name: eName,
                   des: eDes,
                   alt: eAlt},
            type: 'post',
            success: function(output){
              $("#editBtn, #deleteBtn").hide();
              $(".modal-body").html(output);
              printItemsTable();
            }
          });
        });
      });

      $("#deleteBtn").click(function(){
        path = $(".infoPic").attr("src")
        $.ajax({
          url: '../controller.php',
          data: {action: 'deleteItem',
                 id: id,
                 path: path},
          type: 'post',
          success: function(output){
            $("#editBtn, #deleteBtn").hide();
            $(".modal-body").html(output);
          }
        });
      });

      $("#closeModal").click(function(){
        $("#editBtn").show().html("Edit").removeClass("btn-success").addClass("btn-primary").unbind("click");
        $(".modal-body").html(preLoad);
      });
    }
  });
}//end item details model

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
  $("#editBtn, #deleteBtn").hide();
  $("#createBtn").show();
  $("#myModal").modal();
}

function createItem(){
  if($(".form-control").val() == ''){
    alert("Fill in all the fields");
    return false;
  } else {
    $("#createItemForm").submit();
  }
}
