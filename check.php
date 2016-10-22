<?php
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $number = $_POST['number'];
  session_start();

  if(empty($email) || empty($password) || empty($cpassword) || empty($number)){
    $_SESSION['errEmpty'] = "Fill all boxes!";
    header("Location: registration.php");
  }else{
    // header("Location: user.php");
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['errMail'] = "Invalid email format";
      header("Location: registration.php");
    }
    else if (strlen($password)<=7 && strlen($cpassword)<=7) {
      $_SESSION['errPass'] = "Passwords must be at last 8 characters";
      header("Location: registration.php");
    }
    else if ($password !== $cpassword) {
      $_SESSION['errcPass'] = "Passwords are different";
      header("Location: registration.php");
    }
    else if(strlen($number) < 10 && strlen($number) > 10){
      $_SESSION['errNumb'] = "Number must be min-max 10 characters";
      header("Location: registration.php");
    }
    else{
      $_SESSION['logginned'] = TRUE;
      header("Location: user.php");
    }
  }

}else{
  header("Location:registration.php");
}
?>
