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
        console.log(title);
        // console.log(data.posts[0]['content']);

    });
  }
}
