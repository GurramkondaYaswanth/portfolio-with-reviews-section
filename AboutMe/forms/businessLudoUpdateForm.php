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
          $ID = $_GET['id'];
          $_SESSION["ludoReviewId"] =$ID ;
          include '../database.php';
          $conn = connectionDB(); //returns coonection

          $sql = "SELECT * FROM business_ludo_reviews WHERE ID = ".$ID."";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);

          $name = $row['name'];
          $_SESSION['updatingEmail'] = $row['email'];
    
          $review = $row['review'];
          $rating = $row['rating'];
    
    ?>
         <?php
            if($_SESSION['updatingEmail'] != $_SESSION["email"] ||  !isset($_SESSION["email"])){
                echo '<form action="../BussinessLogic/gmailVerficationForLudoUpdate.php" method="post">';    
                // echo '<form action="../DAO/businessLudoReviewUpdate.php" method="post">'; 
            }else{
                echo '<form action="../DAO/businessLudoReviewUpdate.php" method="post">';  
                
            }
      
        ?> 
          
            <table>
                <tr><td> Name:</td>
                <td><input type="text" name="name" id="firstName" value="<?php echo $name; ?>" ></input></td>
            </tr>
       
            <!-- <tr><td> Email Address:</td>
                <td><input type="text" name="email" id="emailAddress" value=""></input></td>
            </tr> -->
    
            <tr><td> rating:</td>
                <td><input type="text" name="rating" id="rating" placeholder="out of 5" value="<?php echo $rating; ?>"></input></td>
            </tr>
            
            <tr><td> review:</td>
                <td><textarea name="review" rows="10" cols="22" value="<?php echo $review; ?>"><?php echo $review; ?></textarea></td>
            </tr>
    
            <tr><td><input type="submit" value="Submit"></td></tr>
        </form>  
</body>
</html>