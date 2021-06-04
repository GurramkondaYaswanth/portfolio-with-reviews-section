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
<script src="https://smtpjs.com/v3/smtp.js"></script>

<body>

<script>

function sendMail() {
     var email = 
   "<?php
        $email = $_SESSION['updatingEmail'];
        echo "$email";
    ?>
    ";
    var otp = Math.round(Math.random()*10000);
  console.log(name);
  Email.send({
  SecureToken : "0343e578-7bc2-4c88-9ec8-4e1362ec7e13",   //smtp js credentials secure token
  To : email,                  
  From : "yashwanth.memories@gmail.com",
  Subject: "OTP for yaswanth portfolio email verfication",
  Body: "OTP is "+otp
  })
//   .then(function (message) {
//   alert("Mail has been sent successfully")
//   });

  var otpvalidation = otpVerification(otp);

  if(otpvalidation){
    window.location.href = "../DAO/businessLudoReviewUpdate.php";
  }else{
    alert("Incorrect otp");
    window.location.href = "../Projects/businessLudo.php";
  }
  }

  function otpVerification(otp){
    var otpTyped = prompt("Please enter otp", "");
    if(otp == otpTyped ){
        return true;
    }else{
        return false;
    }
  }
</script>

    <?php
    // if( $_SESSION["email"] != $_POST['email']){
       $_SESSION["nameUpdation"] = $_POST['name'];
    //    $_SESSION["email"] = $_POST['email'];
       $_SESSION["reviewUpdation"] = $_POST['review'];
       $_SESSION["ratingUpdation"] = $_POST['rating'];
           echo '<script type="text/javascript">','sendMail();',
           '</script>';
    // }
           
    ?>
    
</body>
</html>