<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business ludo reviews</title>
</head>
<body>

<?php
  include '../database.php';
  $conn = connectionDB(); //returns coonection

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$review = $_SESSION["review"];
$rating = $_SESSION["rating"];

  //inserting the recommendations 
  $insertRecommendation = "INSERT INTO `business_ludo_reviews` (`name`, `email`, `date`, `review`, `rating`) VALUES ('$name', '$email', CURRENT_DATE(), '$review','$rating')";

  if(mysqli_query($conn, $insertRecommendation)){
    header("location: ../Projects/businessLudo.php");    
  } else{
    echo "ERROR: Could not able to execute $insertRecommendation. " . mysqli_error($conn);
  } 

    // Close connection
    mysqli_close($conn);

   

    function avgReviews(){
      include '../database.php';
      $conn = connectionDB(); //returns coonection
        $result = mysqli_query($conn, 'SELECT AVG(rating) AS rating_avg FROM business_ludo_reviews'); 
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['rating_avg'];

          // Close connection
     mysqli_close($conn);
     return $sum;
    }

   
?>


    
    
</body>
</html>