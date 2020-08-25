<?php 
include('../database/connect.php');


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 SASS | Result History</title>
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
   <script src="../js/script.js"></script>
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
          <h5 style="text-align:center;"><i class="fas fa-virus"></i> Covid-19 Self Assesment System</h5>
        </div>
       </div>
    <div class="container">
        <div class="jumbotron">
            <div class="row justify-content-center mb-4">
                <h5>Result History</h5>
            </div><hr>
        <div class="row justify-content-center" style="padding-left:5%;padding-right:5%;">
            <!--Table-->
            <table class="table table-striped table-responsive-md">

    <!--Table head-->
    <thead>
      <tr>
        <th>Sl no.</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Temperature</th>
        <th>Assessment Date</th>
        <th>Score</th>
        <th>Result</th>
      </tr>
    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
    <?php
                
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                // output data of each row
               
                while($row = $result->fetch_assoc()) {

      echo "<tr>";
      echo '<th scope="row">'.$row['id'].'</th>';
      echo '<td>'.$row['age'].'</td>';
      echo  '<td>'.$row['gender'].'</td>';
      echo  '<td>'.$row['temp'].'°F</td>';
      echo  '<td>'.$row['date'].'</td>';
      echo  '<td>'.$row['score'].'</td>';
      echo  '<td>'.$row['result'].'</td>';
      echo '</tr>';
                }
              }
      else {
                              
        
        echo "<tr>";
        echo '<th scope="row">#</th>';
        echo "<td>"; echo "No Data Available"; echo "</td>";
        echo "<td>"; echo "NULL"; echo "</td>";
        echo "<td>"; echo "NULL"; echo "</td>";
        echo "<td>"; echo "No Data Available"; echo "</td>";
        echo "<td>"; echo "NULL"; echo "</td>";
        echo "<td>"; echo "NULL"; echo "</td>";
        echo "</tr>";
        
      }  
      ?>
    </tbody>
    <!--Table body-->
  
    <hr>
  </table>
  <hr>
  <!--Table-->
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