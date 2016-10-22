<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="regcss.css" media="screen" title="no title">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form id="form" action="check.php" method="post">
          <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" class="form-control input-lg" name="email" id="email" placeholder="example@gmail.com">
              <?php
              session_start();
              if(isset($_SESSION["errMail"])){
                ?>
                <p class="text-danger small"><span class="glyphicon glyphicon-exclamation-sign glyphicon-align-left "> <?= $_SESSION['errMail'] ?></span> </p>

                <?php
                unset($_SESSION['errMail']);
                ?>
                <?php } ?>
            </div>
            <div class="form-group">
              <label for="email">Password</label>
              <input type="password" class="form-control input-lg" name="password" id="password" placeholder="password">
              <?php
              if(isset($_SESSION["errPass"])){
                ?>
                <p class="text-danger small"> <span class="glyphicon glyphicon-exclamation-sign glyphicon-align-left"> <?= $_SESSION['errPass'] ?></span> </p>

                <?php
                unset($_SESSION['errPass']);
                ?>
                <?php } ?>
            </div>
            <div class="form-group">
              <label for="cpassword">Confirm Password</label>
              <input type="password" class="form-control input-lg" name="cpassword" id="cpassword" placeholder="confirm password">
              <?php
              if(isset($_SESSION["errcPass"])){
                ?>
                <p class="text-danger small"><span class="glyphicon glyphicon-exclamation-sign glyphicon-align-left"> <?= $_SESSION['errcPass'] ?></span> </p>

                <?php
                unset($_SESSION['errcPass']);
                ?>
                <?php } ?>
            </div>
            <div class="form-group">
              <label for="number">Phone number</label>
              <input type="text" class="form-control input-lg" name="number" id="number" placeholder="number">
              <?php
              if(isset($_SESSION["errNumb"])){
                ?>
                <p class="text-danger small"><span class="glyphicon glyphicon-exclamation-sign glyphicon-align-left"> <?= $_SESSION['errNumb'] ?></span> </p>

                <?php
                unset($_SESSION['errNumb']);
                ?>
                <?php } ?>
            </div>
            <input type="submit" class="btn btn-lg btn-danger btn-block" name="submit" value="Registration">

            <?php
            if(isset($_SESSION["errEmpty"])){
              ?>
              <div class="alert alert-danger" role="alert">
                <p class="text-center text-danger"><span class="glyphicon glyphicon-exclamation-sign glyphicon-align-left"> <?= $_SESSION['errEmpty'] ?></span> </p>
              </div>
              <?php
              unset($_SESSION['errEmpty']);
              ?>
              <?php } ?>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
