$(function(){

});

function modalFill(src, des, name){
  $(".pictureModal").attr('src', '../' + src);
  $("#description").html(des);
  $("#name").val(name);
  $("#myModal").modal();
}
