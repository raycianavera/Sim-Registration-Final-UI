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
</head>

<body>
  <!-- <div class="container-fluid bg"> -->
    <div class="row">
      <div class="col-md-6 firstcol text-center">
        <!--COL 1 LOGO PART-->
        <div class="logo">
          <div class="brand-part">
            <img src="images/logo.png" alt="logo" class="img-fluid logopic">
            <p class="par mt-3">SimCardRegistrationSystem</p>
          </div>

          <img src="images/login.svg" width="300px" class="svg-login">
        </div>
      </div>

      <div class="col-md-6 secondcol">
        <!--COL 2 LOGIN FORM-->

            <?php
                if (isset($_GET['simRetailer'])) {
                  echo " <div class='div-for-retail'>

        <form action='seller-register-local.html' method='post' class='form-retail'>

        <p class='userlogtext'>SIM RETAILER LOGIN</p>

        <input type='email' class='input-retail em-in' name='' placeholder='Email Address' required>
        <input type='password' class='input-retail' name='' placeholder='Password' required>
        <button type='Submit' name='button' class='btn'>Submit</button>

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

          <form action='seller-register-local.html' method='post' class='form-retail'>

          <p class='userlogtext'>ADMINISTRATOR LOGIN</p>

          <input type='email' class='input-retail em-in' name='' placeholder='Email Address' required>
          <input type='password' class='input-retail' name='' placeholder='Password' required>
          <button type='Submit' name='button' class='btn'>Submit</button>

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
          // echo " <p class='userlogtext'>USER LOGIN</p>
          //   <form id='form' action='enter-otp.html' method='post'>
          //     <div class='mobnum'>
          //       <input type='tel' name='' value='' id='userMobileNum' class='form-control' placeholder='Mobile Number ex: +639176578905' required>
          //     </div>
          //
          //     <div class='buttonn'>
          //       <button type='Submit' name='button' class='btn'>Submit</button>
          //     </div>
          //     <div class='usertypes'>
          //       <a href='login_sections.php'>
          //         <p class='simuser-type'>Sim User</p>
          //       </a>
          //       <a href='login_sections.php?simRetailer'>
          //         <p class=''>Sim Retailer</p>
          //       </a>
          //       <a href='login_sections.php?adminLogin'>
          //         <p class=''>Administrator</p>
          //       </a>
          //
          //
          //
          //   </form>";
          echo " <div class='div-for-retail'>

          <form action='seller-register-local.html' method='post' class='form-retail'>

          <p class='userlogtext'>USER LOGIN</p>
          <input type='tel' name='' class='input-retail' placeholder='Mobile Number ex: +639176578905' required>
          <button type='Submit' name='button' class='btn'>Submit</button>

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



</body>
</html>
