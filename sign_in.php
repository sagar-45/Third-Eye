<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sign_in.css" rel="stylesheet">
  </head>

  <body >
    <?php
    if(isset($_SESSION['start']))
    {
    ?>
    <main role="main">
  
    <form action="otp.php" method="Post">
    <div class="justify-content-center">
      <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="inputEmail" id="inputEmail" class="form-control" size='30' placeholder="Email address" required autofocus><br>

      
      
      <div class="checkbox mb-3">
      </div>
      
      <button id='btn' value="one" name="btn" class="btn btn-lg btn-primary btn-block">Sign in</button>
      <?php
        $_SESSION['sign_in']='1';
      ?>
    </div>
      </form>
    </main>
    <?php
    }
    else{
      header("Location: http://localhost/mini_project/index.php");
      exit();
    }
    ?>
  </body>
</html>
