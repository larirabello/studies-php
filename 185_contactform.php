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
  </style>


</head>
<body>
  <div>

    <?php
/*
      $emailTo="";
      $subject="I hope this works!";
      $body="I think you're great!";
      $headers="From: lari.rabello@gmail.com";

      if (mail($emailTo, $subject, $body, $headers)==1) {

        echo "Mail sent successfully!";

      } else {

        echo "Mail not sent!";

      } */


     ?>
     <div class="container">

       <div class="row">

         <div class="col-md-6 col-md-offset-3 emailForm">
           <h1>My email form</h1>

           <form method="post">

             <div class="form-group">

               <label for="name">Your Name: </label>
               <input type="text" name="name" class="form-control" placeholder="Your name" />

               <label for="email">Your Email: </label>
               <input type="email" name="email" class="form-control" placeholder="Your email" />

               <label for="comment">Your Comment: </label>
               <textarea name="comment" class="form-control" </textarea>


            </div>

             <input>Name</input>
             <input>Subject</input>
             <input>Content</input>
             <button>Submit</button>
           </form>
         </div>

       </div>

    </div>

  </div>
</body>
</html>
