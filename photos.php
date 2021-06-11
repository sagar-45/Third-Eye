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
    <meta http-equiv="refresh" content="60; http://localhost/mini_project/index.php"/>
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Third Eye</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>
   
        <?php
        if(!isset($_SESSION['name']) && !isset($_SESSION['count'])){
          header("Location: http://localhost/mini_project/sign_in.php ");
          exit();
        }
        $con=mysqli_connect("localhost:3307","root","","imageDB");
        if(!$con){
          die("Connection Failed".mysqli_connect_error());
        }
        $name=$_SESSION['name'];
        
        ?>

    
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Third Eye</strong>
          </a>
          <a href="http://localhost/mini_project/photos.php"><button type="button" class="btn btn-dark">Photos</button></a>
        </div>
      </div>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Third Eye</h1>
          <p class="lead text-muted">In this file use to cath any thief which theft your laptop.This file is use to give a picture of thief.If any other people thouch your laptop than give picture of these people.</p>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <?php
              $sql="SELECT * From ".$name;
              $result=mysqli_query($con,$sql);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                  
              ?>  
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <?php
                  echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" >';
                  $time=$row['time'];
                  $time=preg_split('/\_/',$time);
                  echo $time[0]." : ".$time[1];
                  ?>
                </div>
              </div>
              <?php
              }
            }
            else{
              echo "No Photos Available";
            }
          
            ?>
          </div>
        </div>
      </div>

            
    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
