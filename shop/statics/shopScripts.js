$(function(){

});

function modalFill(src, des){
  $(".pictureModal").attr('src', '../' + src);
  $("#description").val(des);
  $("#myModal").modal();
}
