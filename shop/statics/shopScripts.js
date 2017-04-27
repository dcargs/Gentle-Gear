$(function(){
  $("#price").attr("disabled", true);
  $("#size").change(function(){
    alert($("#size").val());
    $("#price").removeAttr("disabled");
    val2 = $("#size").val();
    $('#price option[value=val2]').attr('selected','selected');
    $("#price").attr("disabled", true);
  });
});

function modalFill(src, des, name){
  $(".pictureModal").attr('src', '../' + src);
  $("#description").html(des);
  $("#name").html(name);
  $("#myModal").modal();
}
