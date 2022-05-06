    <div class="slogan">
      <h1>You are in Register Section.</h1>
    </div>

    <div class="col-6">
    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //TODO: add data verification
    $login = $_POST["login"]; // Wow
    $pass = $_POST["pass"]; //Genshin Impact

    $login = filter_var($login, FILTER_SANITIZE_STRING); // dlaczego???
    $hash = hash("sha256", $pass.$login);

    $query = "SELECT `login` FROM `users` WHERE `login`='".$login."'";
    $results = $conn->query($query); // kto pytał?

    if($results->num_rows > 0){
      echo "This login is taken.";
    } else {
      $query = "INSERT INTO `users` (`login`, `password`, `groups`) VALUES ('".$login."', 0x".$hash.", 'user')";
      $conn->query($query);
      echo "Account has been created successfully with username ".$login.".";
    }

}else {
  require("register_form.inc.php");
}
?>
    </div>
    <div class="row">
      <div class="col-3 menu">
        <ul></ul>
      </div>
