<?php
  require 'dbh.inc.php';
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
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- CDN CSS FILE BOOTSTRAP VER 4.6 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

  <!-- CUSTOM CSS FILE  -->
  <link rel="stylesheet" href="../styles/adminstyle.css">
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/207a28b81e.js" crossorigin="anonymous"></script>

</head>
  <body>
    <!-- NAVBAR PART -->
    <header>

      <nav class="navbar navbar-expand-lg">
        <a class="div1 navbar-brand" href="navbar.php">
            <img src="../images/logo.png" width="30" height="32" class="d-inline-block align-top" alt="">
            <span class="brandname">SimCardRegistrationSystem</span>
          </a>

        <button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">


            <ul class='navbar-nav'>
              <li class='nav-item'>
                <a class='nav-link selected' href='../admininbox.php'>Inbox</a>
              </li>

              <li class="nav-item">
                <form class="form-btnn" action="#" method="POST">
                  <button type="submit" name="btn-primary" class="nav-link logbtn">Logout</button>
                </form>
              </li>
            </ul>



          <form class="form-inline" action="search.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="input-search">
            <button class="log-button search-btn my-2 my-sm-0" type="submit" name="submit-search">Search</button>
          </form>

        </div>
      </nav>
    </header>

<!-- INBOX PART -->

    <div class="row header">
      <h4>Administrator: <span>Raycia Navera</span></h2>
        <h4 class="rep-message">Reported messages</h4>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="f-column" scope="col">#</th>
          <th class="f-column" scope="col">Recepient</th>
          <th class="f-column" scope="col">Message</th>
          <th class="f-column" scope="col">Date</th>
        </tr>
      </thead>
      <tbody>

        <?php
        if (isset($_POST['submit-search'])) :
          $searchInput = mysqli_real_escape_string($conn, $_POST['input-search']);
          $sql = "SELECT * FROM report_details WHERE user_name LIKE '%$searchInput%' OR user_mobile_num LIKE '%$searchInput%' OR remarks LIKE '%$searchInput%' OR sent_at LIKE '%$searchInput%'; ";
          $result = mysqli_query($conn, $sql);
          $queryResult = mysqli_num_rows($result);
          if ($queryResult > 0):
              while($row = mysqli_fetch_assoc($result)):
        ?>

        <!-- <tr class="canHov" onclick="window.location='reported-message-content.php';"> -->

        <tr class="canHov" onclick="window.location='reported-message-content.php';">
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><?php echo $row['user_name']; ?></td>
          <td><?php echo $row['remarks']; ?></td>
          <td><?php echo $row['sent_at']; ?></td>

        </tr>

      <?php endwhile; endif; endif; ?>


      </tbody>
    </table>


</body>

</html>
