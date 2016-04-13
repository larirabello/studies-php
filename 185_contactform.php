<?php
    if (isset($_POST['submit'])){
      if ($_POST["submit"]) {
        $result='<div class="alert alert-success">Form submitted</div>';

        if (!$_POST['name']) {
          $error="Please Enter your name";
        }
        if (!$_POST['email']) {
          $error="Please Enter your email";
        }
        if (!$_POST['comment']) {
          $error="Please Enter a comment";
        }
      }
    }
 ?>
<!doctype HTML>
<html lang="pt-BR">
<head>
  <title> Learning PHP </title>
  <meta charset="utf-8" />
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <style>
    .emailForm {
      border:1px solid grey;
      border-radius: 10px;
      margin-top: 20px;
    }

    textarea {
      height: 120px;
    }

    form {
      padding-bottom: 20px;
    }
  </style>


</head>
<body>
  <div>

     <div class="container">

       <div class="row">

         <div class="col-md-6 col-md-offset-3 emailForm">
           <h1>My email form</h1>
           <?php echo $result; ?>

           <p class="lead">Please get in touch - I'll get back to you soon as I can</p>

           <form method="post">

             <div class="form-group">

               <label for="name">Your Name: </label>
               <input type="text" name="name" class="form-control" placeholder="Your name" />

               <label for="email">Your Email: </label>
               <input type="email" name="email" class="form-control" placeholder="Your email" />

               <label for="comment">Your Comment: </label>
               <textarea name="comment" class="form-control"> </textarea>

            </div>

             <button type="submit" name="submit" class="btn btn-success btn-lg" value="Submit">Submit</button>
           </form>
         </div>

       </div>

    </div>

  </div>
</body>
</html>
