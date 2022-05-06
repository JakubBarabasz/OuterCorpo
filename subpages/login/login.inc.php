
    <div class="slogan">
      <h1>You are in Login Section.</h1>
    </div>

    <div class="col-6">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //TODO: add data verification
        $login = $_POST["login"];
        $pass = $_POST["pass"];
    
        $login = filter_var($login, FILTER_SANITIZE_STRING);
        $hash = hash("sha256", $pass.$login);
    
        $query = "SELECT hex(`password`) FROM `users` WHERE `login`='".$login."'";
        $results = $conn->query($query);

    
        if($results->num_rows == 0){
          echo "Invalid login.";
        } else if(strtolower(rtrim($results->fetch_assoc()["hex(`password`)"], "0")) != rtrim($hash,"0")) {
          echo "Invalid password";
        } else {
          
          echo "You have been logged in.";
        }
    
    }else {
      require("login_form.inc.php");
    }
      //INSERT INTO `sessions` (`id`, `user_id`, `expire_date`) VALUES (0x123, '2', '2022-03-17 14:40:38');
    ?>
    </div>

    <div class="row">
      <div class="col-3 menu">
        <ul></ul>
      </div>
