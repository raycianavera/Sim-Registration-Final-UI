<?php
  require "navbar.php";
?>


<!-- BODY PART -->
<div class="container">
  <?php
    if (isset($_GET['reportPage'])) {
      echo " <div class='row header'>
      <h2>Report a malicious number</h2>
    </div>
    <div class='row'>
      <div class='col-md-6 iconn'>
        <!-- COLUMN 1 -->
        <form class='' id='form' action='#' method='post'>
          <div class='infodiv1'>
            <p class='labelings'>Name</p>
            <input type='text' name='' value='' id='usernamee' class='form-control' required>

          </div>

          <div class='infodiv1'>
            <p class='labelings'>Your Mobile Number</p>
            <input type='tel' name='' value='' id='yourNumber' class='form-control' placeholder='+639175682345' required>

          </div>

          <div class='infodiv1'>
            <p class='labelings'>Mobile Number to be reported</p>
            <input type='tel' name='' value='' id='reportedMobilenumber' class='form-control' placeholder='+639175682345' required>

          </div>
            <button type='submit' name='button' class='send-btn'>Send</button>
        <!-- </form> -->


      </div>
      <div class='col-md-6 textclass'>
        <!-- TEXTAREA COLUMN 2 -->

          <div class='infodiv1'>
            <p class='labelings'>Remarks</p>
            <textarea id='textArea' class='form-control' name='name' rows='9' cols='80' required></textarea>
          </div>
            <button type='button' name='button' class='ss-btn upload-btn-wrapper'>
              <input type='file' name='myfile' />Submit Screenshot of Message</button>

        <!-- </form> -->
        </div>

        </form>

    </div>";
  } else {
    echo "
    <div class='row'>

      <div class='col-md-4 infocol1'>
        <!-- INFO COLUMN 1 -->

        <div class='infodiv'>
          <p class='labelings'>Name</p>
          <p class='information'>Keanu P. Berches</p>
        </div>

        <div class='infodiv'>
          <p class='labelings'>Gender</p>
          <p class='information'>Male</p>
        </div>

        <div class='infodiv'>
          <p class='labelings'>Birthdate</p>
          <p class='information'>October 1, 1999</p>
        </div>

        <div class='infodiv'>
          <p class='labelings'>Address</p>
          <p class='information'>Cavite, Philippines, Earth</p>
        </div>



        <div class='infodiv'>
          <p class='labelings'>Nationality</p>
          <p class='information'>Filipino</p>
        </div>

      </div>

      <div class='col-md-4 infocol2'>
        <!-- INFO COLUMN 2 -->
        <div class='infodiv'>
          <p class='labelings'>Sim Card Number</p>
          <p class='information'>+639171234567</p>
        </div>

        <div class='infodiv'>
          <p class='labelings'>Type of User</p>
          <p class='information'>Local User</p>
        </div>

        <div class='infodiv'>
          <p class='labelings'>Date of Registration</p>
          <p class='information'>November 25, 2021</p>
        </div>

        <div class='infodiv'>
          <p class='labelings'>Time of Registration</p>
          <p class='information'>10:00am</p>
        </div>

        <div class='infodiv'>
          <p class='labelings'>Registration Site</p>
          <p class='information'>Dasmarinas, Cavite</p>
        </div>
      </div>

      <div class='col-md-4 infocol3'>
        <div class='infodiv'>
          <p class='labelings'>Sim Card</p>
          <p class='information'>New Prepaid User</p>
        </div>
      </div>
    </div>";
  }
  ?>

</div>

<!-- end of body -->


  </body>
</html>
