<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVIEWS</title>
    <link rel="stylesheet" href="reviews.css">
    <style>
        .review-type{
        margin: 15px 10%;
        max-width: 60%;    
        padding: 5px 10px;
        display: flex;
        margin-bottom:0px;
        padding-bottom:0px;
        justify-content:space-around;
    }

    .review-title{
        font-size: 1.3rem;
        font-weight: 600;

    }
    a{
        text-decoration-line: none;
    }
    </style>
</head>

<body>
    <div class="container">

        <section class="recommendation-review" id="recommendation-review">
        <div class="review-type" id="type-info" >
            <p class="review-title">Recommendations</P>
            <button><a href="forms/recommendationsInsertform.html">ADD</a></button>
        </div>

        <div class="review-on-u" id="review-on-u">
        <?php
            include 'database.php';
            $conn = connectionDB(); //returns coonection
                    
            // Attempt select query execution
            $sql = "SELECT * FROM recommendations";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                    echo ' <div class="viewer-details">';
                    echo '<div class="viewer-info" >';
                    echo '  <p class="name" >'. $row['name'] ."</p>";
                    echo ' <p class="email">'. $row['email'] ."</p>";
                    echo " </div >";
                    echo ' <div class="viewer-info">';
                    echo ' <p class="designation">'. $row['designation'] ."</p>";
                    echo ' <p class="date">'. $row['date'] ."</p>";
                    echo " </div>";
                    echo "</div>";
                    echo ' <div class="viewer-review">  ' . $row['review'] ." </div>";
                    }
                }
            }
            //(`name`, `email`, `designation`, `date`, `review`)
            ?>
            </div>
        </section>
  
    </div>
    
</body>
</html>

