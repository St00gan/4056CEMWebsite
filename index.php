<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="res/style.css">
        <script src="res/theme.js"></script>
        <title>Login</title>
    </head>
    <header>
        <button id="switch" class="btn" onclick="toggleTheme()">Switch Theme</button>
    </header>
    <body>
        <div style="font-size:<?php echo $_COOKIE["fontsize"]?>px;" id="login-form" class="text-center">
            <h1>4056CEM Website</h1>
            <form method="POST">
                <form name="login-form" method="POST" action="<?php $_PHP_SELF ?>">
                    <input type="text" class="form-control" name="username" placeholder="Username"> <br>
                    <input type="password" class="form-control" name="password" placeholder="Password"> <br>
                    <input type="submit" name="submit" id="submit" value="Login">
                </form>
            </form>
        </div>
        <br><br>
        <div class="text-center">
            <button class="regbtn" onclick="window.location.href='./register';">Register</button>
        </div>
    </body>
</html>

<?php
    if($_POST["username"] && $_POST["password"]) {
      $USERNAME = $_POST['username'];
      $PASSWORD = $_POST['password'];
      if ($USERNAME != "") {
        $CODE = $USERNAME.":".hash("sha256",$PASSWORD);
        $HASH = hash("sha256",$PASSWORD);
        $cookie_name = "auth";
        setcookie($cookie_name, $CODE, time() + (86400 * 30), "/");
        setcookie("user", $USERNAME, time() + (86400 * 30), "/");
        setcookie("pass", $HASH, time() + (86400 * 30), "/");
        if(!isset($_COOKIE[$cookie_name])) {
          echo "<script> window.location.replace('/') </script>";
          die();
        } else {
           $authed = FALSE;
           $AUTHCODE = $_COOKIE[$cookie_name];
           $file = new SPLFileObject('res/logins.txt');
           foreach($file as $line) {
             if ((strcasecmp($line, $AUTHCODE) == 0) || (strcasecmp(substr($line, 0, -1), $AUTHCODE) == 0)){
               $authed = TRUE;
             }
           }
           if ($authed == TRUE){
               echo "<script> window.location.replace('/home') </script>";
               die();
           } else {
                setcookie("user", "", time()-3600);
                setcookie("pass", "", time()-3600);
                echo "<script> window.location.replace('/') </script>";
                die();
           }
        }
      }
      exit();
   }
?>