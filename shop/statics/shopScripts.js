$(function(){

});

function modalFill(src, des, name){
  $(".pictureModal").attr('src', '../' + src);
  $("#description").val(des);
  $("#name").val(name);
  $("#myModal").modal();
}
