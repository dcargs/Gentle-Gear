$(function(){
  $(".picture").click(function(){
        $("#myModal").modal();
        $(".pictureModal").html($(this).html());
    });
});
