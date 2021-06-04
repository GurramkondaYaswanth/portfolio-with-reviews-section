<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

body {
    font-family: 'Nunito Sans', sans-serif;
    font-size: 10px;
    padding: 0;
    margin: 0;
    overflow: 0;
    
}


.logoText {
    font-size: 3em;
    font-weight: 700;
    color: #f05136;
}

.nav-link {
    font-size: 1.8em;
    text-decoration: none;
    color: black;
    cursor: pointer;
   
   
}

.nav-link:hover {
    color: chocolate;
}

nav ul {
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style: none;
    padding: 10px;
}

nav ul li {
    margin: 0 20px;
}


.About-project{
    background-color: #f5f5f5;
    padding-top: 10px;
}

.Intro{
  
    display: flex;
    justify-content: space-between;
}



h1{
    font-size: 2.7rem;
    padding-bottom: 0px;
    margin-bottom: 0px;
}

h2{
    font-size: 1.6rem;
    font-weight: 400;
}

h3{
    font-size: 1rem;
}

.Intro p{
    font-size: .8rem;
    margin-top: 0px;
    padding-top: 4px;
}

p{
    font-size: .9rem;
}
a{
    text-decoration: none;
}

.link{
    color: white;
    cursor: pointer;
    font-weight: 100;
    letter-spacing: 0.5px;
    font-size: 1rem;
    padding: 10px;

}

.button{
    margin-top: 50%;
    text-align: center;
    background: #f05136;
    border-color: #f05136;
}

#Brief {
  padding-left: 22px;
  padding-right: 10px;
  font-weight: 600;
}

#start {
  padding-left: 15px;
}

.overall-reviews {
    margin-right: 25%;
    margin-top: 60px;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #ddd;
}


.overall-reviews h2{
    font-weight: 300;
    font-size: 1.8rem;
}

.review-on-u{
        border: 2px solid black;
        margin: 15px 10%;
        max-width: 70%;    
        padding: 5px 10px;
}

.viewer-details{
    margin-bottom: 3px;
}

.viewer-info{
    font-size: 1rem;
    font-weight: 600;
}

.designation, .date{
    font-size: .9rem;
    font-weight: 400;
}

.viewer-review{
    font-size: .9rem;
}

.star-ratings{
    display:flex;
}


.no-of-reviews{
    padding: 2px 3px;
    font-size: .9rem;
}

.review{
    font-size: 1rem;
}

body{
    margin:0px;
    padding:0px;
}

.fa-thumbs-up, .fa-thumbs-down{
    padding-right:15px;
    color:black;
}

 .fa-pencil{
    color:black;
}
@media screen and (min-width: 650px){
    .Intro, .description, .reviews{
    margin: 0px 15%;
    margin-right: 10%;
}

    .email{
        margin-left: 20px;
    }

    
    .review-type{
        margin: 15px 10%;
        max-width: 60%;    
        padding: 5px 10px;
        display: grid;
    }

    .review-title{
        font-size: 1.1rem;
        font-weight: 600;

    }

    .viewer-info{
        display: flex;   
        justify-content: space-between;
    }

    .viewer-review{
        padding-bottom:10px;
    }

    .review-on-u{
        max-width: 60%;    
    }

    .fa-icons{
        display: flex; 
        justify-content: space-between;
    }


}


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <nav class="navbar">
        <ul>
          <li class="logoText">YASWANTH</li>
          <li>
            <ul class="nav-link-container-none" id="nav-link-container">
              <li><a href="../index.html" class="nav-link">HOME</a></li>
              <li><a href="#reviews" class="nav-link">REVIEWS</a></li>
            </ul>
          </li>
        </ul>
      </nav>
 
 
    <section class="Intro">
    <div>
        <h1>Business Ludo Game</h1>
        <p>developed using HTML,CSS,JS</p>
        <div class="star-ratings">
            <span class="fa fa-star fa-2x" id="1"></span>
            <span class="fa fa-star fa-2x" id="2"></span>
            <span class="fa fa-star fa-2x" id="3"></span>
            <span class="fa fa-star fa-2x" id="4"></span>
            <span class="fa fa-star fa-2x" id="5"></span>
            <span class="no-of-reviews" id="no-of-reviews1">0</span>
                <span class="review"> reviews</span>
        </div>
    </div>
    <div>
        <button class="play button" ><a class="game link" href="https://gurramkondayaswanth.github.io/Business-Ludo-Game/">PLAY</a></button>
    </div>

    </section>

    <div class="About-project">
    <section class="description">
        <h2>Brief about the Game</h2>
        <p><strong id="Brief">Teams:</strong>2<strong id="Brief">Pawns in a Team:</strong>3<strong
                id="Brief">Goal:</strong>All 3 pawns reaching the end point. <strong id="Brief">Initial
                conditon:</strong>roll dice should be 1 for pawn to enter the board.</p>
        <p><strong id="Brief">Challenge1:</strong>Coins will be reduced each time you enter the new Box.<strong
                id="Brief">How many coins will be reduced:</strong>same as the number displayed on the box</p>
        <p><strong id="Brief">Challenge2:</strong>If coins become zero then u will lose the game, opponent
            wins.<strong id="Brief">How to gain coins:</strong>By flipping the magic card we can win 0 to 2000
            coins</p>
        <p><strong id="Brief">Challenge3:</strong>If opponent pawn comes to ur pawn position ur pawn will be
            killed, and sent to home again.<strong id="Brief">Anyway to be saved:</strong>U can use safe box
            button to make some of ur desired boxes as safe place</p>
        <h3>About Magic card</h3>

        <p><strong id="start">1.</strong>Magic card contains surprises like wining coins from 0 to 2000 coins
            and also u can move ur pawn upto
            7
            places front without
            paying the coins and u can also get a chance to kill ur opposition pawn</p>
        <p><strong id="start">2.</strong>You need to press the button team1 flip for team1 and team2 flip for
            team2 to win the surprises, the
            surprise details will be present on the card itself</p>
        <p><strong id="start">3.</strong>Each time u flip <strong>500 coins</strong> will be reduced from ur
            account</p>
        <!-- <br> -->
        <h3>About safe box</h3>

        <p><strong id="start">1.</strong>For making any box as your safe box, so that opposite pawn will not be
            able kill ur pawn at that
            box u need to press the <strong>safe box</strong> button and choose the pawn position. <strong>u
                should
                choose ur pawn positions only</strong> </p>
        <p><strong id="start">2.</strong>For that u need to pay <strong>5 times the box cost</strong> and ur opp
            team will pay u the
            <strong>amount on the box</strong> to u, whenever they come to that box</p>
        <!-- <br> -->
        <h3>About buttons</h3>

        <h3>Roll dice</h3>

        <p><strong id="start"> </strong>For rolling the dice (the value is displayed on below of the roll dice
            button as
            player rolls: )
        </p>
        <p><strong id="start"> </strong>Roll dice button below the team1 is for team1 and roll dice button below
            the team2 is for team2</p>
        <!-- <br> -->
        <h3>Pawn buttons</h3>

        <p><strong id="start"> </strong>After roll dice, You need to select the pawn button
            corresponding to the desired pawn of ur teams
            to move. Pawn position will be displayed in the right of every pawn button</p>
        <p><strong id="start"> </strong>Make sure u choose correct pawn button. once u selected u can't select
            the other pawn button in any situation</p>
        <!-- <br> -->
        <h3>Team1/Team2 flip</h3>

        <p><strong id="start"> </strong>If team1/Team2 want to use the magic card then You should click on this
            button</p>
        <!-- <br> -->
        <h3>Safe box</h3>

        <p><strong id="start"> </strong>If a team wants to make a box as safe box then they need to click this
            button and you can buy
            unlimited number of safe boxes, until u have enough money</p>
    </section>

    <section class="reviews"> 
    <div class="overall-reviews">
        <div>
            <h2>Reviews</h2>
            <div class="star-ratings">
                <span class="fa fa-star fa-2x"  id="6"></span>
                <span class="fa fa-star fa-2x"  id="7"></span>
                <span class="fa fa-star fa-2x" id="8"></span>
                <span class="fa fa-star fa-2x"  id="9"></span>
                <span class="fa fa-star fa-2x"  id="10"></span>
                <span class="no-of-reviews" id="no-of-reviews">0</span>
                <span class="review"> reviews</span>
            </div>
        </div>
        <div>
            <button class="button" ><a class="link" href="../forms/businessLudoReviewForm.html">RATE</a></button>
        </div>
 
    </div>
        
        <?php
            include '../database.php';
            $conn = connectionDB(); //returns coonection
                    
            // Attempt select query execution
            $sql = "SELECT * FROM business_ludo_reviews";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                    echo '<div class="review-on-u" id="review-on-u">';
                    echo ' <div class="viewer-details">';
                    echo '<div class="viewer-info" >';
                    echo '  <p class="name" >'. $row['name'] ."</p>";
                    echo ' <p class="email">'. $row['email'] ."</p>";
                    echo ' <p class="date">'. $row['date'] ."</p>";
                    echo " </div >";
                    echo "</div>";
                    $ID = $row['ID'];
                    echo ' <div class="viewer-review">  ' . $row['review'] ." </div>";
                    echo '<div class="fa-icons">';
                    echo '<div>';
                    echo ' <span class="fa fa-star fa-2x" id="'.$ID.'1"></span>  ';
                    echo ' <span class="fa fa-star fa-2x" id="'.$ID.'2"></span>  ';
                    echo ' <span class="fa fa-star fa-2x" id="'.$ID.'3"></span>  ';
                    echo ' <span class="fa fa-star fa-2x" id="'.$ID.'4"></span>  ';
                    echo ' <span class="fa fa-star fa-2x" id="'.$ID.'5"></span>  ';
                    echo '</div>';

                    echo '<div>';
                    echo '<a href="like.php?id='. $row['ID'] .'"  title=" like" ><span class="fa fa-thumbs-up fa-2x like" aria-hidden="true"></span></a>';
                    echo '<a href="dislike.php?id='. $row['ID'] .'"  title=" dislike" ><span class="fa fa-thumbs-down fa-2x like" aria-hidden="true"></span></a>';
                    echo '<a href="../forms/businessLudoUpdateForm.php?id='. $row['ID'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil  fa-2x"></span></a>';
                    // echo '<span class="fa fa-thumbs-up fa-2x like" aria-hidden="true"></span>';
                    // echo '<span class="fa fa-thumbs-down fa-2x like" aria-hidden="true"></span>';DAO/businessLudoReviewUpdate.php
                    echo '</div>';
                    echo '</div>';
                    
                    // echo '<script type="text/javascript">',
                    // 'startRating1('.$rate.');',
                    // '</script>';
                    $ID1 = $ID.'1';
                    $rate = $row['rating'];
                    for($i=0;$i<5;$i++){
                        if($i<$rate){
                            echo '<script type="text/javascript">','document.getElementById(('.($i+$ID1).')).style.color="orange"','</script>';
                        }
                    }
                    echo '</div>';
                    }
                }
            }
            //(`name`, `email`, `designation`, `date`, `review`)
            // mysqli_close($conn);
            ?>
            
    </section>
  
    </div>
    
</body>
<script>
    function startRating(rate,rowsCount){
        console.log(rowsCount);
        document.getElementById('no-of-reviews').textContent = rowsCount;
        document.getElementById('no-of-reviews1').textContent = rowsCount;
	for(var i=0;i<5;i++){
		if(i<rate){
			document.getElementById((i+1)).style.color="orange";
             document.getElementById((i+6)).style.color="orange";
		}
	}
}

</script>
<?php
    // echo 'tring';
    // include '../DAO/businessludoReviewAvg.php';
    // $avg = avgReviews();
    $result = mysqli_query($conn, 'SELECT AVG(rating) AS rating_avg FROM business_ludo_reviews'); 
        $row = mysqli_fetch_assoc($result); 
        $avg = $row['rating_avg'];
    $avgRound = round($avg);

    $result = mysqli_query($conn,'SELECT count(rating) FROM business_ludo_reviews');
    $row = mysqli_fetch_array($result);
    $rowscount = $row[0];

      echo '<script type="text/javascript">',
     'startRating('.$avgRound.','.$rowscount.');',
     '</script>';
?>

</html>