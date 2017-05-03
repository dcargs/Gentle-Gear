$(function(){
  var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
});

function contactFormSubmission(){
  if($(".form-control").val() == ''){
    alert("Fill out entire form");
  } else {
    $.get( "statics/appData/appData.json", 'json', function(data){
        var title = data.posts[0]['title'];
        var content = data.posts[0]['content'];
        var boxFront = data.message_box[0]['content-front'];
        var boxMiddle = data.message_box[0]['content-middle'];
        var boxEnd = data.message_box[0]['content-back'];

        var display = boxFront + title + boxMiddle + content + boxEnd;
        $("#message").html(display)
        console.log(display);
        // console.log(data.posts[0]['content']);

    });
  }
}
