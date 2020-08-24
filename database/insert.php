<?php
if(!isset($_SESSION))
{
    session_start();
}
include('../controller/test.php');
include('../database/connect.php');


$Age = $_SESSION['Age'];
$Gender = $_SESSION['Gender'];
$Temp= $_SESSION['Temp'];
$Date = $_SESSION['Date'];
$Score = $_SESSION['Score'];
$Result=$_SESSION['Result'];

$query = "INSERT INTO users (age, gender, temp, date, score, result)
    VALUES ('$Age', '$Gender', '$Temp', '$Date', '$Score', '$Result')";

    if (mysqli_query($conn, $query)) {
      

			header('location: ../pages/result.php');
      }
    else {
	 echo "Error: " . $query . "<br>" . mysqli_error($conn);
	 header('location: ./index.php');
      }


?>