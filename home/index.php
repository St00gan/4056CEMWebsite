<?php
    $authed = FALSE;
    $AUTHCODE = $_COOKIE["auth"];
    $file = new SPLFileObject('../res/logins.txt');
    foreach($file as $line) {
        if ((strcasecmp($line, $AUTHCODE) == 0) || (strcasecmp(substr($line, 0, -1), $AUTHCODE) == 0)){
            $authed = TRUE;
        }
    }
    if ($authed == TRUE){
    ?><html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="res/style.css">
        <script src="res/frame.js"></script>
        <script src="res/theme.js"></script>
        <title>Home</title>
    </head>
    <header>
        <img class="settingsimg" onclick="settingsFrame()" src=../res/settings.png width=24>
        <button id="switch" class="btn" onclick="toggleTheme()">Switch Theme</button>
    </header>
    <body>
        <div style="font-size:<?php echo $_COOKIE["fontsize"]?>px;" id="login-form" class="text-center">
            <h1><?php echo "Welcome ".$_COOKIE["user"]."!"?></h1>
        </div><br>
        <div style="font-size:<?php echo $_COOKIE["fontsize"]?>px;" class="text-center">
            <p id="text">
            Welcome to my website, here is an image:
            </p>
            <br>
            <div class="popup" onclick="popupInfo()">
            <img <?php
            if ($_COOKIE["invertImages"] == 1){
                echo 'class="img"';
            }
                ?> src="https://pluspng.com/img-png/leopard-png-black-and-white-big-image-png-2375.png" width="200">
                <span class="popuptext" id="myPopup"><a href="https://pluspng.com/png-45786.html" target="_blank">https://pluspng.com/png-45786.html</span>
            </div>
        </div>
        <div style="font-size:<?php echo $_COOKIE["fontsize"]?>px;" id="login-form" class="text-center">
        <h3><a href="https://git.st00gan.gq" style="color: var(--color)" >My Personal Git Repos</a></h3>
			<h3><a href="https://st00gan.gq/portfolio" style="color: var(--color)">My Portfolio</a></h3>
			<h5>Hi, I'm Stefan (aka St00gan)<br>
			I program mostly in Go and C# but sometimes write stuff in other languages<br>
			I run an open source software company known as Bitijin Software<br>
			You can email me at:<br>
			<b><a href="mailto:stefanroche@protonmail.com" style="color: var(--color)" >stefanroche@protonmail.com</a></b>
			<br>
			<br>	
			</h5>
			<h3>
				Quick links:				
			</h3>
			<h5>
				<a href="https://duckduckgo.com/" style="color: var(--color);" >Search</a><br>
				<a href="https://youtube.com/" style="color: var(--color);">Vidya - Youtube</a><br>
				<a href="https://lbry.tv/" style="color: var(--color);">Vidya - Lbry</a><br>
				<a href="https://crunchyroll.com/" style="color: var(--color);">Anime</a><br>
				<a href="https://console.cloud.google.com/home/dashboard" style="color: var(--color);">Google Cloud</a><br>
				<a href="https://st00gan.gq/23072020KernelAntiCheats.pdf" style="color: var(--color);">My Kernel Software Document</a><br>
			</h5>

        </div><br>
    </body>
</html><?php
    } else {
        echo "<script> window.location.replace('/') </script>";
        die();
    }
exit();
?>