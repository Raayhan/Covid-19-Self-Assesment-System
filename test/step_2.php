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
    <title>Covid-19 SAS | STEP 2</title>
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
    <link
      href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css"
      rel="stylesheet"
    />
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
          <h4 style="text-align: center;">STEP : 2</h4>

          <h6 style="text-align: center;">(Symptom Informations)</h6>
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
            <div class="row justify-content-center mb-4">
              <img class="symptoms" src="../img/breath.svg" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Breathing Problem
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="breath" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />

            <div class="row justify-content-center mb-4">
              <img class="symptoms" src="../img/cough.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Dry Cough
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="cough" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-4">
              <img class="symptoms" src="../img/throat.svg" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Sore Throat
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="throat" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-4">
              <img class="symptoms" src="../img/weak.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Weakness
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="weak" />
              <div class="slider round">
                <span class="on">YES</span><span class="off">NO</span>
              </div>
            </label>
            <hr />
            <div class="row justify-content-center mb-4">
              <img class="symptoms" src="../img/nose.png" alt="" />
            </div>
            <h5 style="text-align: center; color: red; font-weight: bold;">
              Runny Nose
            </h5>
            <label class="switch mb-4"
              ><input type="checkbox" name="nose" />
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
              NEXT <i class="fas fa-angle-double-right"></i>
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
                          name="STEP_2"
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
              <!-- Progress Bar -->
            <div class="progress" style="margin-top: 2%;">
              <div
                class="progress-bar progress-bar-striped progress-bar-animated"
                role="progressbar"
                aria-valuenow="50"
                aria-valuemin="0"
                aria-valuemax="100"
                style="width: 50%;"
              ></div>
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
