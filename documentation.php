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
            <strong>File + Line Num: statics/layout.php from line 1 to 71</strong></p>
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
              <strong>File + Line Num: statics/layout.php from line 1 to 71</strong>
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
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>6.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>7.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>8.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-offset-2 col-md-2">
            <label>9.</label>
          </div>
          <div class="col-md-8">
            explanation of how I did this
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
