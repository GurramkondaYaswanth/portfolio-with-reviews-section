<?php
session_start();
?>
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

  if(isset($_SESSION["nameUpdation"])){
    $name = $_SESSION["nameUpdation"];
    // $email = $_POST['email'];
    $review = $_SESSION["reviewUpdation"];
    $rating =  $_SESSION["ratingUpdation"];

  }else{
    $name = $_POST['name'];
    // $email = $_POST['email'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

  }
$id =  $_SESSION["ludoReviewId"];




  //inserting the recommendations 
  $insertRecommendation = "UPDATE `business_ludo_reviews` SET `name` = '$name', `review` = '$review', `rating` = '$rating' WHERE `ID` = '$id';";

  if(mysqli_query($conn, $insertRecommendation)){
    header("location: ../Projects/businessLudo.php");    
  } else{
    echo "ERROR: Could not able to execute $insertRecommendation. " . mysqli_error($conn);
  } 

    // Close connection
    mysqli_close($conn);
    ?>
    
</body>
</html>