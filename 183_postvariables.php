<!doctype HTML>
<html lang="pt-BR">
<head>
  <title> Learning PHP </title>
  <meta charset="utf-8" />
</head>
<body>
  <div>

        <?php

        $names=array("Fred", "Rob", "Ian");



        if (isset($_POST['submit'])){  //corrige o undefined index
  if ($_POST["submit"]) {

                if($_POST["name"]) {

                    foreach ($names as $name) {

                      if ($_POST['name']==$name) echo "I know you! Your name is ".$name;

                        $knowYou=1;

                      }

                    if (!$knowYou) echo "I don't know you, ".$name; // not working

                    } else {

                        echo "Please enter your name";

                    }
                  }
}



         ?>

    <form method="post">

        <label for="name">Name</label>
        <input name="name" type="text" />
        <input type="submit" name="submit" value="Submit Your Name"/> <!-- quando dá o submit vai pra url ou seja é get -->
    </form>


  </div>
</body>
</html>
