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
      <!-- TODO: zrobić floder faq z html i css faq-->
      <span><a href="?">FAQ</a></span>
    </div>
    <?php
      require("db_config.inc.php");
    ?>
    <?php
    $id = $_GET['id'] ?? "";
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
    </div>

    <div class="footer">
      <p>ΦuterCorpo © 2136</p>
    </div>
  </body>
</html>
