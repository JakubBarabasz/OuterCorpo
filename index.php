<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>ΦuterCorpo</title>
  </head>
  <body>
    <div class="header">
      <h1> ΦuterCorpo<img src="emoji.png" class="rotate" width="50" height="50" /></h1>

      <span><a href="?id=about">About</a></span>
      <span><a href="?id=login">Login</a></span>
      <span><a href="?id=policy">Privacy policy</a></span>
      <!-- TODO: dodać ostrzeżenie o cookies z powodów prawnych-->
      <!-- TODO: zrobić floder faq z html i css faq-->
      <span><a href="?">FAQ</a></span>
    </div>
    <?php
      require("db_config.inc.php");
    ?>
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    switch($id){
      case 'login': require("./subpages/login/login.inc.php"); break;
      case 'policy': require("./subpages/policy/policy.inc.html"); break;
      case 'register': require("./subpages/register/register.inc.php"); break;
      default: require("./subpages/about/about.inc.html"); break;
    }
  ?>

    <div class="col-3 right">
        <div class="aside">
          <h2>Our company</h2>
          <p>
            consists only of well-selected advanced development groups
            consisting of young, dynamic
          </p>
          <p>We need people like you!</p>
        </div>
      </div>
    </div>
    <?php
    $conn->close();
    ?>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Cookies</h2>
            </div>
            <div class="modal-body">
                <p>We know cookies will be withdrawn soon,</p>
                <p>but what is necessity, is necessity.</p>
            </div>
            <div class="modal-footer">
                <h3>ΦuterCorpo</h3>
            </div>
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        setTimeout(function() {
            modal.style.display = "block";
        },1000);

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>

    </div>

    <div class="footer">
      <p>ΦuterCorpo © 2136</p>
    </div>
  </body>
</html>
