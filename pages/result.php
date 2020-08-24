<!--  
<?php
if(!isset($_SESSION))
    {
        session_start();
    }
include('../controller/test.php');




//echo '<h4>'.$_SESSION['Age'].'<br>'.$_SESSION['Gender'].'<br>'.$_SESSION['Temp'].'<br>'.$_SESSION['Score'].'<br>'.$_SESSION['Result'].'<br>'.$_SESSION['message'].'</h4>';



?>
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Covid-19 SAS | Report</title>
    <link rel="icon" href="../img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/753fbd11bf.js"
      crossorigin="anonymous"
    ></script>

    <!-- JQuery -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>

    <script>
      $.get("../layout/header.html", function (data) {
        $("#header").replaceWith(data);
      });
    </script>
  </head>
  <body>
    <div id="header"></div>
    <div class="container">
      <div class="container">
        <div class="row justify-content-center title py-4">
          <h3 style="text-align:center;"><i class="fas fa-virus"></i> Covid-19 Self Assesment System</h3>
        </div>

        <div class="jumbotron">
          <p
            class="h4"
            style="text-align: center; color: green; font-weight: bold;"
          >
            Test Complete&nbsp; <i class="far fa-check-circle"></i>
          </p>
          <hr class="my-4" />
          <div class="card text-center">
            <div class="card-header">
              Report
            </div>
            <div class="card-body mb-4" style="margin-bottom:2%;">
              <?php if($_SESSION['Result']=="Positive")
              echo '<h5 class="card-title">Covid-19 : <span class="red-text font-weight-bold">'.$_SESSION['Result'].'</span></h5>';
              else echo '<h5 class="card-title">Covid-19 : <span class="green-text font-weight-bold">'.$_SESSION['Result'].'</span></h5>';
              ?>
              <p class="card-text mb-4">
                <?php echo $_SESSION['message'];?>
              </p>
              <div class="row justify-content-center">
                 <a href="../test/step_1.html" class="btn btn-dark-green btn-block submit_btn smpt_btn">Test Again</a>
              </div>
             
            </div>
            <div class="card-footer text-muted small">
              <?php echo $_SESSION['Date'];?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      $.get("../layout/footer.html", function (data) {
        $("#footer").replaceWith(data);
      });
    </script>
    <div id="footer"></div>
    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    ></script>
  </body>
</html>

<?php session_destroy(); ?>