<?php
if(isset($_POST['submit'])) {
  $myemail = "laforge@dlproductions.biz";
  $email = $_POST['email'];
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = "From: $name <$myemail>\r\n";
  $headers .= "Reply-To: $email <$email>\r\n";
  echo "Your message has been sent successfully!";
  mail($myemail, $subject, $message, $headers);
}
else {
  echo "An error occurred during the submission of your message";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="3; url = ../musicproduction.html">
  <title>Scheduling Confirmation Redirect</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <script>
  function redirectTimer() {
    setTimeout("onloadRedirect()", 3000);
  }

  function onloadRedirect() {
    window.location.assign("../musicproduction.html");
  }

  function onClickRedirect() {
      window.location.assign("../musicproduction.html");
  }
  </script>
</head>

<body onload="redirectTimer()">
  <div class="container">
    <br>

    <div class="col-sm-4">
      <img class="img-responsive" src="logo.jpg" alt="DL Productions Logo"/>
    </div>

    <div class="col-sm-8">
      <h2>Your message was sent successfully! You are now being returned to our site.</h2>
      <h2>Please click the button below if you are not automatically redirected in 3 seconds.</h2>
    </div>

    <div class="col-sm-4">
      <input class="btn-lg pull-right" type="button" onclick="onClickRedirect()"
             value="Return to the previous page." >
             <!-- value="Return to dlproductions.biz" > -->
    </div>
  </div>

</body>
</html>
