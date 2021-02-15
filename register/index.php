<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="res/style.css">
        <script src="res/theme.js"></script>
        <title>Register</title>
    </head>
    <header>
        <button id="switch" class="btn" onclick="toggleTheme()">Switch Theme</button>
    </header>
    <body>
        <div style="font-size:<?php echo $_COOKIE["fontsize"]?>px;" id="login-form" class="text-center">
            <h1>4056CEM Website</h1>
            <form method="POST">
                <form name="reg-form" method="POST" action="<?php $_PHP_SELF ?>">
                    <input type="text" class="form-control" name="username" placeholder="Username" required> <br>
                    <input type="password" class="form-control" name="password" placeholder="Password" required> <br>
                    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required> <br>
                    <input type="submit" name="submit" id="submit" value="Register">
                </form>
            </form>
        </div>
        <br><br>
        <div class="text-center">
            <button class="regbtn" onclick="window.location.href='../';">Login</button>
        </div>
    </body>
</html>

<?php
    if($_POST["username"] && $_POST["password"] && $_POST["confirmpassword"]) {
      $USERNAME = $_POST['username'];
      $PASSWORD = $_POST['password'];
      $CONFIRMED = $_POST['confirmpassword'];
      if ($PASSWORD === $CONFIRMED) {
        $CODE = $USERNAME.":".hash("sha256",$PASSWORD);
        $HASH = hash("sha256",$PASSWORD);
        $FP = fopen('../res/logins.txt', 'a');
        fwrite($FP, "\n".$CODE);
        fclose($FP);
      } else {
          echo "PASSWORDS DO NOT MATCH";
      }
      exit();
   }
?>