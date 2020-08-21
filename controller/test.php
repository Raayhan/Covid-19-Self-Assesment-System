<?php



$Age = "";
$Gender ="";
$Temp = "";
$Date = "";

if (isset($_POST['STEP_1'])) {
	step_1();
}


function step_1(){
	// call these variables with the global keyword to make them available in function
	global $Age, $Gender, $Temp, $Date;

      $Age      = $_POST["Age"];
      $Gender   = $_POST["Gender"];
      $Temp     = $_POST["Temp"];
     


	date_default_timezone_set('Asia/Dhaka');
      $Date = date('d-m-Y');
     
      header('location: ../pages/step_2.html');
      
}




?>