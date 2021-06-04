<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  include '../database.php';
  $conn = connectionDB(); //returns coonection

$name = $_POST['name'];
$email = $_POST['email'];
$designation =$_POST['Designation'];
$review = $_POST['review'];

  //inserting the recommendations 
  $insertRecommendation = "INSERT INTO `recommendations` (`name`, `email`, `designation`, `date`, `review`) VALUES ('$name', '$email', '$designation', CURRENT_DATE(), '$review')";

  if(mysqli_query($conn, $insertRecommendation)){
    header("location: ../reviews.php");    
  } else{
    echo "ERROR: Could not able to execute $insertRecommendation. " . mysqli_error($conn);
  } 

    // Close connection
    mysqli_close($conn);
?>
    
</body>
</html>