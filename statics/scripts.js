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
    $.get( "statics/appData/appData.php", {content: 'success_submit'}, function(output){
        console.log(output);
        obj = $.parseJSON(output);
        console.log(obj.posts);
    });
    // $("#contactForm").html("<h2 class='text-center'>Contact form submission successful<h2>");
  }
}
