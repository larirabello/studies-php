<!doctype HTML>
<html lang="pt-BR">
<head>
  <title> Learning PHP </title>
  <meta charset="utf-8" />
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<style>
    html, body {
      height: 100%;
    }
  .container {
    background-image: url("images/img1.jpg");
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    padding-top: 150px;
  }

  .center {
    text-align: center;
  }

  .white {
    color:white;
  }

  p {
    padding-top: 13px;
    padding-bottom: 13px;
  }

  button {
    margin-top: 20px;
  }
</style>

</head>
<body>
  <div class="container">

    <div class="row">

      <div class="col-md-6 col-md-offset-3 center">
        <h1 class="center white">Weather Predictor</h1>
        <p class="lead center white">Enter your city below to get a forecast for the weather.</p>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="Eg. São Paulo, Paris, Milan..."/>
          </div>
          <button class="btn btn-success btn-lg">Find My Weather</button>
        </form>
      </div>

    </div>

  </div>


  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
