<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Covid-19 SAS | STEP 1</title>
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
    <!-- Navbar -->
    <div id="header"></div>
    <div class="container">
      <div class="container">
        <div class="row justify-content-center title py-4">
          <h3 style="text-align: center;">
            <i class="fas fa-virus"></i> Covid-19 Self Assesment System
          </h3>
        </div>

        <div class="jumbotron">
                 <p class="lead" style="text-align: center;">
            This Wizard will help you to detect whether you are affected by
            Covid-19 or not.
          </p>
          <hr class="my-4" />
          <div class="alert alert-info message" role="alert">
            <i class="fas fa-exclamation-circle"></i>&nbsp;Please be informed
            that, the information you give during the questionnaire session must
            be correct in order to help the system to generate accurate results.
          </div>

          <!-- Default form contact -->
          <form
            class="text-center border border-light p-5"
            action="../controller/test.php"
            method="POST"
          >
            <h4>STEP : 1</h4>

            <h6>(Generel Informations)</h6>
            <br />

            <div class="form-row mb-4">
              <div class="col-md-4 mb-4">
                <!-- Age -->
                <input
                  type="number"
                  class="form-control"
                  placeholder="Age"
                  required
                  name="Age"
                />
              </div>
              <div class="col-md-4 mb-4">
                <!-- Gender -->
                <select
                  name="Gender"
                  class="browser-default custom-select"
                  required
                >
                  <option value="" selected disabled>Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-md-4 mb-4">
                <!-- Temp -->
                <input
                  type="number"
                  step="0.01"
                  name="Temp"
                  class="form-control"
                  placeholder="Body Temperature in °F"
                  required
                />
              </div>
            </div>

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
                          name="STEP_1"
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
            <!-- Central Modal Small -->
            
           <!-- Horizontal Steppers -->
                  <div class="row">
                    <div class="col">

                      <!-- Stepers Wrapper -->
                      <ul class="stepper stepper-horizontal">

                        <!-- First Step -->
                        <li class="active">
                          <a href="#!">
                            <span class="circle">1</span>
                            <span class="label">STEP 1</span>
                          </a>
                        </li>

                        <!-- Second Step -->
                        <li class="inactive">
                          <a href="#!">
                          <i class="fas fa-arrow-circle-right fa-lg text-danger font-weight-bold"></i>
                            <span class="label">STEP 2</span>
                          </a>
                        </li>

                        <!-- Third Step -->
                        <li class="inactive">
                          <a href="#!">
                          <i class="fas fa-arrow-circle-right fa-lg text-danger font-weight-bold"></i>
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
