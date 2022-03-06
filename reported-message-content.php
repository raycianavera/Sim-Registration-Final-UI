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
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- CDN CSS FILE BOOTSTRAP VER 4.6 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

  <!-- CUSTOM CSS FILE  -->
  <link rel="stylesheet" href="styles/content-report.css">
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/207a28b81e.js" crossorigin="anonymous"></script>

</head>

<body>

  <!-- NAVBAR PART -->
  <header>

    <nav class="navbar navbar-expand-lg">
      <a class="div1 navbar-brand" href="navbar.php">
          <img src="images/logo.png" width="30" height="32" class="d-inline-block align-top" alt="">
          <span class="brandname">SimCardRegistrationSystem</span>
        </a>

      <button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">


          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link selected' href='admininbox.php'>Inbox</a>
            </li>

            <li class="nav-item">
              <form class="form-btnn" action="#" method="POST">
                <button type="submit" name="btn-primary" class="nav-link logbtn">Logout</button>
              </form>
            </li>
          </ul>
      </div>
    </nav>
  </header>


  <!-- MESSAGE PART -->

    <div class="container">
      <div class="row">

        <!-- COLUMN 1 NAME AND USER'S CELLPHONE NUMBER -->
        <div class="col-12">
          <div class="infolabels">
            <p class="nameLabel">From: <span class="lightColFont">Keanu P. Berches</span></p>
          </div>
          <div class="infolabels">
            <p class="nameLabel">User's Mobile number: <span class="lightColFont">+639171234567</span></p>
          </div>
          <div class="infolabels mb-5">
            <p class="nameLabel">Reported Number: <span class="RedColFont">+639705611265</span></p>
          </div>
          <div class="infolabels">
            <p class="nameLabel">User Remarks</p>
          </div>
          <div class="infolabels mb-5">
            <p class="lighFontOnly">Good Day! I would like to report this user. As seen here, this person is pretending to be from GLOBE and is trying to trick me in to sending him 300 worth of load by changing the format of the message that appears similar to a typical GLOBE alert about data limit. Please track down this scammer, thank you.</p>
          </div>
          <div class="infolabels">
            <p class="nameLabel">Sent: <span class="lightColFont">November 10, 2021</span> <span class="lightColFont">@ 12:00PM</span></p>
          </div>


            <div class="row">
              <div class="col-12">
                <button type="button" name="button" class="send-btn replybtn" data-toggle="modal" data-target="#screenshotModal">View Screenshot</button>

                <!-- MODAL PART FOR SCREENSHOT -->
                <div class="modal fade" id="screenshotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reported Message Screenshot</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img class="screenshot-img" src="images/report.jpg" alt="">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>


</body>

</html>
