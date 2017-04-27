$(function(){
  $("#price").attr("disabled", true);
  $("#size").change(function(){
    alert($("#size").val());
    $("#price").removeAttr("disabled");
    val2 = $("#size").val();
    $('#price').val(val2);
    $("#price").attr("disabled", true);
  });
});

function modalFill(src, des, name){
  $(".pictureModal").attr('src', '../' + src);
  $("#description").html(des);
  $("#name").html(name);
  $("#myModal").modal();
}
