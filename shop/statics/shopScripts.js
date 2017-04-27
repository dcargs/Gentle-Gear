$(function(){
  $("#size").change(function(){
    val2 = $("#size").val();
    $('#price option[value=val2]').attr('selected','selected');
  });
});

function modalFill(src, des, name){
  $(".pictureModal").attr('src', '../' + src);
  $("#description").html(des);
  $("#name").html(name);
  $("#myModal").modal();
}
