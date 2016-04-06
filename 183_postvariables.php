<!doctype HTML>
<html lang="pt-BR">
<head>
  <title> Learning PHP </title>
  <meta charset="utf-8" />
</head>
<body>
  <div>

        <?php

        print_r($_POST);

          if ($_GET["submit"]) {

              if($_GET["name"]) {

                  echo "Your name is ".$_GET['name'];
              } else {

                echo "Please enter your name";

              }
          }


         ?>

    <form>

        <label for="name">Name</label>
        <input name="name" type="text" />
        <input type="submit" name="submit" value="Submit Your Name"/> <!-- quando dá o submit vai pra url ou seja é get -->
    </form>


  </div>
</body>
</html>
