<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Final Project Documentation</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <div class="row">
          <button type="button" class="btn btn-warning center-block" onclick="window.location.href='../'">Go Back</button>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <h2 class='text-center'>Final Project Documentation</h2>
          </div><hr><hr>
        </div>

        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>1.</label>
          </div>
          <div class="col-md-8">
            <p><strong>5 required tags:</strong><br>
            I used the 5 required tags on every page where the user's browser will display information.<br>
            I did this by creating a layout.php file that had the basic structure of the website and I included it on every page.<br>
            You can find this under /statics/layout.php.<br>*** Note: there are different layouts for the shop and dashboard but they accomplish the same purpose ***<br>
            <strong>File + Line Num: /statics/layout.php from line 1 to 71</strong></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>2.</label>
          </div>
          <div class="col-md-8">
            <p><strong>Consistent Design / Feel</strong><br>
              I have fulfilled this requirement through using the layout.php file on my pages. If you tab through my website the whole thing has very similar components across the whole.
              The following example is just one of many examples of how I made my website have a consistent design / feel<br>
              <strong>File + Line Num: index.php on line 13</strong>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>3.</label>
          </div>
          <div class="col-md-8">
            <p><strong>Well-Structured and Code Reusability</strong><br>
              I have fulfilled this requirement through using the layout.php files. If I want to change the navigation bar on the entire website I just have to change one place.
              The following example brings you back to the same layout.php file as the past 2 requirements<br>
              <strong>File + Line Num: /statics/layout.php from line 1 to 71</strong>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>4.</label>
          </div>
          <div class="col-md-8">
            <p><strong>User Authentication</strong><br>
              I have fulfilled this requirement by allowing a user to login and create a new item to display in the shop.
              If you login with the user: test and password: pass you will be able to upload a new item for the shop.
              When you do this it uploads an image file to the server then maps the corresponding link to the image in a MySql table.
              The shop is written to where it will pull all of the available items to show. Go ahead and try to add one.
              Just make sure the file is a .jpg and less than 5MB<br>
              <br>*** Note: When you press login it performs an AJAX call to userController to validate the user then redirect upon success ***<br>
              <strong>File + Line Num: login.php on line 17 builds the form</strong><br>
              <strong>File + Line Num: userController.php from line 1 to 41 deals with building the login form and the AJAX call</strong><br>
              <strong>File + Line Num: userScripts.js from line 5 to 27 sends off the AJAX call to validate user then redirect upon success</strong>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>5.</label>
          </div>
          <div class="col-md-8">
            <p><strong>User Account</strong><br>
              You can try logging with test and pass.<br>
              <strong>File + Line Num: login.php on line 17</strong>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>6.</label>
          </div>
          <div class="col-md-8">
            <p><strong>Use PHP</strong><br>
              I have fulfilled this requirment by using PHP in almost everything my website does.
              One specific example is in shop/shop.php. This page builds itself dynamically everything a user loads the page.
              It pulls the images from the statics/images/shop folder and the item information from the item table in my database.<br>
              <strong>File + Line Num: /shop/shop.php on line 8 and 9 puts the pictures on the page</strong><br>
              <strong>File + Line Num: /shop/shopController.php from line 9 to 36 builds the pictures from the database</strong>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>7.</label>
          </div>
          <div class="col-md-8">
            <p><strong>Use GET and POST</strong><br>
              I have fulfilled this requirment. I use POST with AJAX on almost every page and I use GET in two places.
              One of them is if the user hits the logout on any of the pages that aren't the dashboard they will get logged out and then redirected back to their current page.
              The second place I use GET is on the contact page. If you submit this form while it's empty it will send off an AJAX GET request
              for the error message while if you fill it in all the way it sends off an AJAX GET request to get the success message.<br>
              <br>*** Note: The data sent to the GET request in the last example is built from any page that's not the dashboard ***<br>
              <strong>File + Line Num: /statics/userScripts.js from line 5 to 28 is an example of a POST</strong><br>
              <strong>File + Line Num: /dashboard/statics/dashboardScripts.js from line 50 to 124 is another example of a POST</strong><br>
              <strong>File + Line Num: /statics/scripts.js from line 9 to 34 is an example of GET</strong><br>
              <strong>File + Line Num: logout.php from line 11 to 16 is another example of GET</strong><br>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>8.</label>
          </div>
          <div class="col-md-8">
            <p><strong>Must Use Form Elements</strong><br>
              I have fulfilled this requirment by allowing the user to fill out a form while logged in that allows for image uploads.
              It's going further than just a login form because I'm using this encryption type to send the data, enctype="multipart/form-data".<br>
              <strong>File + Line Num: /dashboard/controller.php from line 177 to 240 is an example of advanced form usage</strong><br>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>9.</label>
          </div>
          <div class="col-md-8">
            <p><strong>Feedback to Users with Forms</strong><br>
              I have fulfilled this requirement by when you login if you enter the wrong credentials it gives you feedback as to if you got it right or wrong.
              If the login is sucessful you get redirected to the dashboard but if it fails you are presented with an error message at the bottom of the screen.<br>
              <strong>File + Line Num: /statics/userScripts.js from line 5 to 29 is an example of how I give the user feedback</strong><br>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>10.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>11.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>12.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>13.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>14.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>15.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>16.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>17.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>18.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>19.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
