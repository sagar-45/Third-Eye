<?php
  session_start();
?>
<!DOCTYPE html>
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
    <script>
    </script>
  </head>
  <body>
      
    <?php
    if(isset($_SESSION['start']) && isset($_SESSION['sign_in'])){
        $email=$_POST['inputEmail'];
        $split=preg_split("/\@/",$email);
        $name=$split[0];
        $char="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charlength=strlen($char);
        $randStr="";
        for($i=0;$i<5;$i++)
        {
          $randStr.=$char[rand(0,$charlength-1)];
        }
        $command=escapeshellcmd("F:\Mini_project2\mail.py $email $randStr");
        $output=shell_exec($command);
        $con=mysqli_connect("localhost:3307","root","",'imageDB');
        if(!$con){
          die("Connection failed");
        }
        $sql="INSERT INTO `otp_checker` ( `username`, `otp`) VALUES (?,?);";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("ss",$name,$randStr);
        $stmt->execute();
        $_SESSION['name']=$name;
      ?>
        <div class="justify-content-center">
          <form action="http://localhost/mini_project/check.php"  method="Post">
            <p id="par">Enter the String which send on this Email Address</p>
            <label for="inputOtp" class="sr-only"></label>
            <input type="text" id="inputOtp" name="otp" class="form-control" size='30' required autofocus><br>
            <button id='btn' onclick="otp_show()" value="one" name="btn1" class="btn btn-lg btn-primary btn-block">Sign in</button>
            </form>
        </div>   
      <?php
    }
    else{
      header("Location: http://localhost/mini_project/index.php");
      exit();
    }
      ?>
        
</body>
</html>