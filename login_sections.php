<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

  <title>Sim Card Registration System</title>
  <!-- LOGO ON TAB -->
  <link rel="icon" href="images/logo.png">
  <!-- GOOGLE FONTS -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- CDN CSS FILE BOOTSTRAP VER 4.6 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- CUSTOM CSS FILE  -->
  <link rel="stylesheet" href="styles/userlogin1.css">
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/207a28b81e.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
  <!-- <div class="container-fluid bg"> -->
    <div class="row">
      <div class="col-md-6 firstcol text-center">
        <!--COL 1 LOGO PART-->
        <div class="logo">
          <div class="brand-part">
            <img src="images/logo.png" alt="logo" class="img-fluid logopic">
            <p class="par mt-3">Sim Card Registration System</p>
          </div>

          <img src="images/login.svg" width="300px" class="svg-login">
        </div>
      </div>

      <div class="col-md-6 secondcol">
        <!--COL 2 LOGIN FORM-->
      <?php
          if (isset($_GET['simRetailer'])) {
              echo "<div class='div-for-retail'>
             <form action='SellerBackEnd/sellerlogin.inc.php' method='post' class='form-retail'>
             <p class='userlogtext'>SIM RETAILER LOGIN</p>";

             //BACKEND OF SIM RETAILER LOGIN
             $fulUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
             if (strpos($fulUrl,"login_sections.php?simRetailer=invalidpassoremail") == true){
               echo "<p class= 'errormessage' style='color:#FF0000'> Incorrect Email or Password  </p>";
             };

             echo"
             <input type='email' class='input-retail em-in' name='selleremail' placeholder='Email Address' required>
             <input type='password' class='input-retail' name='sellerpassword' placeholder='Password' required>
             <button type='Submit' name='sellerbutton' class='btn'>Submit</button>

             <div class='links-users'>
                <a href='login_sections.php' class='aF'>
                  <p class=''>Sim User</p>
                </a>
                <a href='login_sections.php?simRetailer' class='aF'>
                  <p class='simuser-type'>Sim Retailer</p>
                </a>
                <a href='login_sections.php?adminLogin'>
                  <p class=''>Administrator</p>
                </a>
              </div>
        </form>
          </div>";
        } elseif (isset($_GET['adminLogin'])) {
          echo " <div class='div-for-retail'>
                  <form action='AdminBackEnd/adminlogin.inc.php' method='post' class='form-retail'>
                  <p class='userlogtext'>ADMINISTRATOR LOGIN</p>";
//SELLER LOGIN
                  $fulUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  if (strpos($fulUrl,"login_sections.php?adminLogin=invalidpassoremail") == true){
                    echo "<p class= 'errormessage' style='color:#FF0000'> Incorrect Email or Password  </p>";
                  };


          echo "
                  <input type='email' class='input-retail em-in' name='adminemail' placeholder='Email Address' required>
                  <input type='password' class='input-retail' name='adminpass' placeholder='Password' required>
                  <button type='Submit' name='adminbutton' class='btn'>Submit</button>
                  <div class='links-users'>
                    <a href='login_sections.php' class='aF'>
                      <p class=''>Sim User</p>
                    </a>
                    <a href='login_sections.php?simRetailer' class='aF'>
                      <p class=''>Sim Retailer</p>
                    </a>
                    <a href='login_sections.php?adminLogin'>
                      <p class='simuser-type'>Administrator</p>
                    </a>
                </div>
                </form>
              </div>";

        } else {

//LOGIN USER
          echo "<div class='div-for-retail'>

          <form name='otpForm' action='UserprofileBackEnd/index.inc.php' method='post' class='form-retail'>

          <p class='userlogtext'>USER LOGIN</p>
          <input type='tel' name='IndexNumber' id='userMobileNum' class='input-retail' placeholder='Mobile Number ex: +639176578905' required>
          <button type='Submit' name='indexButton' class='btn'>Submit</button>";
          //^first half of login page
          //ERROR MESSAGES
          $fulUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          if (strpos($fulUrl,"errornumber=notexist") == true){
            echo "<p class= 'errormessage' style='color:red'> This number is not registered </p>";
          }else if(strpos($fulUrl,"errornumber=invalid") == true){
              echo "<p class= 'errormessage' style='color:red'>Enter Numbers only</p>";
          }else if(strpos($fulUrl,"errornumber=empty") == true){
              echo "<p class= 'errormessage' style='color:red'>You did not fill up the field!</p>";
          }else if(strpos($fulUrl,"errornumber=stmtfailed") == true){
              echo "<p class= 'errormessage' style='color:red'>Connection error. please try again later</p>";
          }else if(strpos($fulUrl,"errornumber=noplus") == true){
              echo "<p class= 'errormessage' style='color:red'>Incorrect Input. enter phone number only and use '+63' format</p>";
          };

          //Second half of login page
          echo "
          <div class='edit-margin links-users'>
          <a href='login_sections.php' class='aF'>
          <p class='simuser-type'>Sim User</p>
          </a>
          <a href='login_sections.php?simRetailer' class='aF'>
          <p class=''>Sim Retailer</p>
          </a>
          <a href='login_sections.php?adminLogin'>
            <p class=''>Administrator</p>
          </a>

          </div>

          </form>

          </div>";
        }
            ?>

        </div>
      </div>


    </div>

        <script src="./sim-registration-otp/requestOtp.js"></script>

</body>
</html>
