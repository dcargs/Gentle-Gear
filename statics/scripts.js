$(function(){
  var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
});

function contactFormSubmission(){
  if($(".form-control").val() == ''){
    $.get( "statics/appData/appData.json", 'json', function(data){
        var title = data.posts[1]['title'];
        var content = data.posts[1]['content'];
        var boxFront = data.message_box[1]['content-front'];
        var boxMiddle = data.message_box[1]['content-middle'];
        var boxEnd = data.message_box[1]['content-back'];
        var display = boxFront + title + " " + boxMiddle + content + boxEnd;

        $("#message").fadeIn().html(display);
    });
  } else {
    $.get( "statics/appData/appData.json", 'json', function(data){
        var title = data.posts[0]['title'];
        var content = data.posts[0]['content'];
        var boxFront = data.message_box[0]['content-front'];
        var boxMiddle = data.message_box[0]['content-middle'];
        var boxEnd = data.message_box[0]['content-back'];
        var display = boxFront + title + " " + boxMiddle + content + boxEnd;

        $("#message").fadeIn().html(display);
        $(".form-control").attr("readonly", true);
    });
  }
}
