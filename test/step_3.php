<?php
if(!isset($_SESSION))
    {
        session_start();
    }
    $Score =  $_SESSION['Score'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Covid-19 SAS | STEP 3</title>
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
    <!-- Script Js -->
    <script type="javascript" src="../js/script.js"></script>
    <script>
      $.get("../layout/header.html", function (data) {
        $("#header").replaceWith(data);
      });
    </script>
  </head>

  <body>
    <!-- Navbar -->
    <div id="header"></div>
    <div class="container">
      <div class="container">
        <div class="row justify-content-center title py-4">
          <h3><i class="fas fa-virus"></i> Covid-19 Self Assesment System</h3>
        </div>

        <div class="jumbotron">
          <h4 style="text-align: center;">STEP : 3</h4>

          <h6 style="text-align: center;">(Additional Informations)</h6>
          <br />
          <hr class="my-4" />

          <h5 style="text-align: center;">
            Select the symptoms you are having from the list below :
          </h5>
          <!-- Default form -->
          <form
            class="text-center border border-light p-5"
            action="../controller/test.php"
            method="POST"
          >
          <input type="hidden" name="score" value="<?php echo $Score;?>" />
            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/abdominal.jpg" alt="" />
            </div>

            <h5 style="text-align: center; color: red; font-weight: bold;">
              Abdominal Pain
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="abdominal" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />

            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/vomit.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Vomitting
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="vomit" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/Diarrhoea.jpg" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Diarrhoea
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="diarrhoea" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/chest.svg" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Chest Pain
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="chest" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/muscle.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Muscle Pain
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="muscle" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/taste.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Taste/Smell Loss
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="taste" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/skin.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Skin Rash
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="skin" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-2">
              <img class="symptoms" src="../img/speech.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Speech Loss
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="speech" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />

            <br /><br />
            <!-- Send button -->
            <button
              class="btn btn-indigo submit_btn mb-4"
              data-toggle="modal"
              data-target="#centralModalSm"
              type="button"
            >
              SUBMIT
            </button>
            <!-- Central Modal Small -->
            <div
              class="modal fade"
              id="centralModalSm"
              tabindex="-1"
              role="dialog"
              aria-labelledby="myModalLabel"
              aria-hidden="true"
            >
              <!-- Change class .modal-sm to change the size of the modal -->
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title w-100 red-text" id="myModalLabel">
                      Alert!
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Confirm your submission
                  </div>
                  <div class="modal-footer">
                    <div class="row justify-content-center">
                      <div class="col md-2">
                        <button
                          type="button"
                          class="btn btn-elegant btn-sm"
                          data-dismiss="modal"
                        >
                          CANCEL
                        </button>
                      </div>
                      <div class="col md-2">
                        <button
                          name="STEP_3"
                          type="submit"
                          class="btn btn-dark-green btn-sm"
                        >
                          CONFIRM
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- Horizontal Steppers -->
              <div class="row">
                    <div class="col">

                      <!-- Stepers Wrapper -->
                      <ul class="stepper stepper-horizontal">

                        <!-- First Step -->
                        <li class="completed">
                          <a href="#!">
                            <i class="far fa-check-circle fa-lg green-text font-weight-bold"></i>
                            <span class="label">STEP 1</span>
                          </a>
                        </li>

                        <!-- Second Step -->
                        <li class="completed">
                          <a href="#!">
                          <i class="far fa-check-circle fa-lg green-text font-weight-bold"></i>
                            <span class="label">STEP 2</span>
                          </a>
                        </li>

                        <!-- Third Step -->
                        <li class="active">
                          <a href="#!">
                          <span class="circle">3</span>
                            <span class="label">STEP 3</span>
                          </a>
                        </li>

                      </ul>
                      <!-- /.Stepers Wrapper -->

                    </div>
                  </div>
                  <!-- /.Horizontal Steppers -->
            </div>
          </form>
          <!-- Default form contact -->
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
