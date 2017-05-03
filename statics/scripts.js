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
    $.get( "statics/appData/appData.php", {action: 'contact_submit'}, function(output){
        $("#message").html(output);
        console.log(output);
    });
    // $("#contactForm").html("<h2 class='text-center'>Contact form submission successful<h2>");
  }
}
