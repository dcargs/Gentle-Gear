$(function(){

});

function modalFill(src, des){
  $(".pictureModal").attr('src', '../' + src);
  $("#description").val(desc);
  $("#myModal").modal();
}
