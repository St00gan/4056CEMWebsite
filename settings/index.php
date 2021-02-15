<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="res/style.css">
        <script src="res/theme.js"></script>
        <script>readSettings()</script>
        <title>Settings</title>
    </head>
    <body>
        <div class="text-center">
            <h1>Settings</h1>
        </div>
        <div class="text-center">
            <h3>Invert Images</h3>
            <label class="switch">
                <input id="imageToggle" type="checkbox">
                <span class="slider"></span>
            </label>
            <h3>Text Size</h3>
            <input type="range" min="10" max="30" value="<?php echo $_COOKIE["fontsize"]?>" id="textSizeSlider">
            <p id="textToIncrease">Example<p>
            
            <script src=../res/settings.js></script>
        </div>
        <div class="text-center">
            <button class="regbtn" onclick="applySettings()">Apply</button>
        </div><br>
        <div class="text-center">
            <button class="regbtn" onclick="removeCookies()">Logout</button>
        </div>
    </body>
</html>