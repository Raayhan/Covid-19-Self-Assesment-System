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
      
        $logged_in_user_id = mysqli_insert_id($conn);

        $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
        header('location: ../pages/result.php');
      }
    else {
	 echo "Error: " . $query . "<br>" . mysqli_error($conn);
	 header('location: ../index.php');
      }
// return user array from their id
function getUserById($id){
	global $conn;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$temp_result = mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($temp_result);
	return $user;
}


?>