<!doctype HTML>
<html lang="pt-BR">
<head>
  <title> Learning PHP </title>
  <meta charset="utf-8" />
</head>
<body>
  <div>

    <?php

      $emailTo="lari.rabello@gmail.com";
      $subject="I hope this works!";
      $body="I think you're great!";
      $headers="From: lari.rabello@gmail.com";

      if (mail($emailTo, $subject, $body, $headers)==1) {

        echo "Mail sent successfully!";

      } else {

        echo "Mail not sent!";

      }


     ?>



  </div>
</body>
</html>
