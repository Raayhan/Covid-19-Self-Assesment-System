
<?php
include('../controller/test.php');


if(!isset($_SESSION['user']))
{
    // not in Session
   
  header('Location:../test/step_1.php');
   exit();
}







?>

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
    
      <div class="container fluid title">
        <div class="row justify-content-center title py-4">
          <h5 style="text-align:center;"><i class="fas fa-virus"></i> Covid-19 Self Assessment System</h5>
        </div>
       </div>
       <div class="container">
        <div class="jumbotron">
          <p
            class="h4"
            style="text-align: center; color: green; font-weight: bold;"
          >
            Test Complete&nbsp; <i class="far fa-check-circle"></i>
          </p>
          <hr class="my-4" />
          <div class="card text-center mb-4">
            <div class="card-header">
              Report
            </div>
            <div class="card-body mb-4" style="margin-bottom:3%;">
              <div class="row justify-content-center mb-4" style="font-size:12px;">
                  <div class="col">Temperature : <?php echo $_SESSION['Temp']?>°F</div>
                  <div class="col">Score : <?php echo $_SESSION['Score']?></div>
              </div>
              <?php if($_SESSION['Result']=="Positive")
              echo '<h5 class="card-title mb-4">Covid-19 : <span class="red-text font-weight-bold">'.$_SESSION['Result'].'</span></h5>';
              else echo '<h5 class="card-title mb-4">Covid-19 : <span class="green-text font-weight-bold">'.$_SESSION['Result'].'</span></h5>';
              ?>
              <p class="card-text mb-4">
                <?php echo $_SESSION['message'];?>
              </p>
              <div class="row justify-content-center">
                 <a href="../test/step_1.php" class="btn btn-dark-green btn-block submit_btn smpt_btn">Test Again</a>
              </div>
             
            </div>
            <div class="card-footer text-muted small">Tested on: 
              <?php echo $_SESSION['Date'];?>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
              <div class="card gradient-card">

                <div class="card-image">
        
                  <!-- Content -->
                  <a href="#!">
                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                      <div class="first-content align-self-center p-3">
                        <h5 class="card-title"><i class="fas fa-headset"></i> Call 999</h5>
                        <p class="lead mb-0">National Emergency Services</p>
                      </div>
                     
                      
                    </div>
                  </a>
        
                </div>
        
        
                <!-- Content -->
                <div class="card-body white help" style="font-size:12px;">
                <hr>
                <span class="font-weight-bold">Corona Info :</span><a href="http://corona.gov.bd/" target=_blank> &nbsp;corona.gov.bd</a><br>
                 <hr>
                 <span class="font-weight-bold">IEDCR :</span><a href="https://iedcr.gov.bd/" target=_blank> &nbsp;iedcr.gov.bd</a><br>
                 <hr>
                 <span class="font-weight-bold">DGHS :</span><a href="http://dashboard.dghs.gov.bd/" target=_blank>&nbsp; dghs.gov.bd</a>
                 <hr>
                </div>
        
            </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card gradient-card">

                <div class="card-image">
        
                  <!-- Content -->
                  <a href="#!">
                    <div class="text-white d-flex h-100 mask purple-gradient-rgba">
                      <div class="first-content align-self-center p-3">
                        <h5 class="card-title"><i class="fas fa-user-md"></i> Call 333</h5>
                        <p class="lead mb-0">National Health Helpline</p>
                      </div>
                     
                    </div>
                  </a>
        
                </div>
        
               
        
                <!-- Content -->
                <div class="card-body white help" style="font-size:12px;">
                <hr>
                 <span class="font-weight-bold">Health Info :</span><span class="red-text font-weight-bold"> 16263</span><br>
                 <hr>
                 <span class="font-weight-bold">IEDCR :</span><span class="red-text font-weight-bold"> 10655</span><br>
                 <hr>
                 <span class="font-weight-bold">Health Line :<span class="red-text font-weight-bold"> 09611677777</span>
                 <hr>
                </div>
        
            </div>
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