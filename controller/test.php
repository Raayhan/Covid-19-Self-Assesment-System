<?php

if(!isset($_SESSION))
    {
        session_start();
    }

 
include('../database/connect.php');
// variable declaration   
 

//STEP 1
$Age      = "";
$Gender   = "";
$Temp     = "";
$Date     = "";
$Score    = "";
$S1_Score = "";


//STEP 2
$breath   = "";
$cough    = "";
$throat   = "";
$weak     = "";
$nose     = "";
$S2_Temp  = "";
$S2_Score = "";


//STEP 3
$abdominal = "";
$vomit     = "";
$diarrhoea = "";
$chest     = "";
$muscel    = "";
$taste     = "";
$skin      = "";
$speech    = "";
$S3_Score  = "";

// General
$Score     = "";
$Message   = "";


// Conditions for step by step executions

//Step 1 execution
if (isset($_POST['STEP_1'])) {
     
      $Age      = $_POST["Age"];
      $Gender   = $_POST["Gender"];
      $Temp     = $_POST["Temp"];
     
      $_SESSION['Age'] = $Age;
      $_SESSION['Gender'] = $Gender;
      $_SESSION['Temp'] = $Temp;
      date_default_timezone_set('Asia/Dhaka');
      $Date = date('d-m-Y');
      $_SESSION['Date'] = $Date;
	  
      step_1();
      $_SESSION['Score'] = $Score;
      header('location: ../test/step_2.php');
}




//Step 2 execution

if
 (isset($_POST['STEP_2'])) {
    step_2();
    $_SESSION['Score'] = $Score;
    header('location: ../test/step_3.php');
}



//Step 3 execution
if (isset($_POST['STEP_3'])) {
    step_3();
    $_SESSION['Score'] = $Score;
    result();
    message();
    insert();
   
   
     
    
}



// funtion to generate result

function result(){
$Score = $_SESSION['Score'];

if($Score<5){
   
    $Result = 'Negative';
    $_SESSION['Result'] = $Result;
    
}
if($Score >= 5){
   
    $Result = 'Positive';
    $_SESSION['Result'] = $Result;
}

return $_SESSION_['Result'];


}





// funtion to generate message

function message(){
$Score = $_SESSION['Score'];


if($Score < 5){
     
    $_SESSION['message'] = 'Merely have chance to get affected by COVID-19. Advised to go to isolation. Contact doctor & follow advice.';
   
    
}
elseif($Score == 5){
    $_SESSION['message'] = 'Possible suspected case for COVID-19 affected. Advised to go to isolation. Contact doctor & follow advice.';
   
}
elseif($Score == 6){
     $_SESSION['message'] = 'Highly chance of COVID-19 affected. Advised to go to isolation. Contact doctor immediately and follow advice.';
   
}
else{
     $_SESSION['message'] = 'Almost confirmed case of COVID-19 positive. Advised to go to isolation. Highly advised to be hospitalized. Contact doctor immediately and follow advice.';
   
}

return  $_SESSION['message'];

}





//funtion for step 1

function step_1(){
	// call these variables with the global keyword to make them available in function
	global $Temp, $Score;

      $Temp     = $_POST["Temp"];
     


if($Temp>99.5){
      $Score = 2;
}
else{
      $Score = 0;
}
return $Score;

     
      
}



//funtion for step 2

function step_2(){
global $breath,$cough,$throat,$weak,$nose,$Score,$S2_Temp;

$Score = $_POST['score'];

if(isset($_POST['breath'])) {
    $breath = 1;
} else { 
    $breath = 0;
}

if(isset($_POST['cough'])) {
    $cough = 1;
} else { 
    $cough = 0;
}
if(isset($_POST['throat'])) {
    $throat = 1;
} else { 
    $throat = 0;
}
if(isset($_POST['weak'])) {
    $weak = 1;
} else { 
    $weak = 0;
}
if(isset($_POST['nose'])) {
    $nose = 1;
} else { 
    $nose = 0;
}

$S2_Temp = ($breath+$cough+$throat+$weak+$nose);
if($S2_Temp>0){
      $Score = $Score+ $S2_Temp+2;
}
else { $Score =$Score+$S2_Temp;
}
return $Score;
 
}


// funtion for step 3

function step_3(){
global $abdominal,$vomit,$diarrhoea,$chest,$muscel,$taste,$skin,$speech,$Score;
$Score = $_POST['score'];
if(isset($_POST['abdominal'])) {
    $abdominal = 2;
} else { 
    $abdominal = 0;
}

if(isset($_POST['vomit'])) {
    $vomit = 2;
} else { 
    $vomit = 0;
}
if(isset($_POST['diarrhoea'])) {
    $diarrhoea = 2;
} else { 
    $diarrhoea = 0;
}
if(isset($_POST['chest'])) {
    $chest = 2;
} else { 
    $chest = 0;
}
if(isset($_POST['muscel'])) {
    $muscel = 2;
} else { 
    $muscel = 0;
}
if(isset($_POST['taste'])) {
    $taste = 2;
} else { 
    $taste = 0;
}
if(isset($_POST['skin'])) {
    $skin = 2;
} else { 
    $skin = 0;
}
if(isset($_POST['speech'])) {
    $speech = 2;
} else { 
    $speech = 0;
}
$Score = $Score+($abdominal+$vomit+$diarrhoea+$chest+$muscel+$taste+$skin+$speech);

return $Score;
 
}


// funtion to insert user data in database

function insert(){

    global $Age, $Gender, $Temp, $Date, $Score, $Result;

$Age = $_SESSION['Age'];
$Gender = $_SESSION['Gender'];
$Temp = $_SESSION['Temp'];
$Date = $_SESSION['Date'];
$Score = $_SESSION['Score'];
$Result = $_SESSION['Result'];


$query = "INSERT INTO users (age, gender, temp, date, score, result)
    VALUES ('$Age', '$Gender', '$Temp', '$Date', '$Score', '$Result')";

    if (mysqli_query($conn, $query)) {
      

			header('location: ../pages/result.php');
      }
    else {
	 echo "Error: " . $query . "<br>" . mysqli_error($conn);
	 header('location: ../../index.php');
      }






}



function display_error() {
	global $errors;

  	if (count($errors) > 0){
	   	echo '<div class="error">';
			foreach ($errors as $error){
			echo $error .'<br>';
			}
		echo '</div>';
	}
}





?>