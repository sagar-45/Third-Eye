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

    <title>Third Eye
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>
  <?php
  $_SESSION['start']='1';
  ?>
    
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Third Eye</strong>
          </a>
          
          <a href="http://localhost/mini_project/photos.php"><button type="button" class="btn btn-dark" <?php if(!isset($_SESSION['otp'])) { ?> disabled <?php } ?>>Photos</button></a>
          <a href="http://localhost/mini_project/sign_in.php"><button type="button" class="btn btn-dark" <?php if(isset($_SESSION['otp'])) { ?> disabled <?php } ?>>Sign In</button></a>
        </div>
      </div>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Third Eye</h1>
          <p class="lead text-muted">In this file use to cath any thief which theft your laptop.This file is use to give a picture of thief.If any other people thouch your laptop than give picture of these people.</p>
        </div>
      </section>
      <p class="lead text-muted" id='par_wri'><strong>Download  this file and follow following step.</strong></p>
      <label class="lead text-muted" id="par_wri"><strong>This is file:-cam.py</strong>  </label><a class="lead text-muted" href="cam.py" download><button class="btn btn-primary ml-3" <?php if(!isset($_SESSION['otp'])) { ?> disabled <?php } ?>>Download</button>
      </a>
      
      <div class="album py-5 bg-light">
      <p class="lead text-muted" id='par_wri'><strong>For cam.py:-</strong></p>
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-1.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 1</p>
                  <p class="card-text">First go in window tab and type Task Scheduler</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-2.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 2</p>
                  <p class="card-text">Open Task Scheduler and click on “Create a Task” to create a new task.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-3.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 3</p>
                  <p class="card-text">In the new panel which opens, fill the “General” tab to suit your needs.show in this image.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-4.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 4</p>
                  <p class="card-text">Next, switch to the “Triggers” tab and choose “New”. Another Panel will open. At the top of this Panel, choose “On an event” from the drop-down menu.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-5.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 5</p>
                  <p class="card-text">Then select Event Level: Information<br>
                    Log Name: System<br>
                    Source: Power-Troubleshooter<br>
                    Event ID: 1
                    </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-6.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 6</p>
                  <p class="card-text">That was the important part. Now switch to the Actions tab and choose the program(cam.py) which you download.Save the task by clicking on OK.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-7.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 7</p>
                  <p class="card-text">In conditions tab, uncheck the option labeled "Start the task only if the computer is on AC power".<br>
                    </p>
                </div>
              </div>
            </div>
            </div>
          </div>
      </div>



      <div class="album py-5 bg-light">
      <p class="lead text-muted" id='par_wri'><strong>For upload.py:-</strong></p>
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-1.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 1</p>
                  <p class="card-text">First go in window tab and type Task Scheduler</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-2.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 2</p>
                  <p class="card-text">Open Task Scheduler and click on “Create a Task” to create a new task.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-3.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 3</p>
                  <p class="card-text">In the new panel which opens, fill the “General” tab to suit your needs.show in this image.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-4.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 4</p>
                  <p class="card-text">Next, switch to the “Triggers” tab and choose “New”. Another Panel will open. At the top of this Panel, choose “On an event” from the drop-down menu.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-5(2).png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 5</p>
                  <p class="card-text">Then select Event Level: Information<br>
                    Log Name: Microsoft-Windows-NetworkProfile/Operational<br>
                    Source: NetworkProfile<br>
                    Event ID: 10000
                    </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-6.png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 6</p>
                  <p class="card-text">That was the important part. Now switch to the Actions tab and choose the program(upload.py) which you download.Save the task by clicking on OK.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src=".\photos\step-7(2).png" alt="Card image cap">
                <div class="card-body">
                    <p class="text-muted">Step 7</p>
                  <p class="card-text">In conditions tab, uncheck the option labeled "Start the task only if the computer is on AC power" And
                    you may also check labeled "Start only if the following network connection is available." 
                    </p>
                </div>
              </div>
            </div>
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
