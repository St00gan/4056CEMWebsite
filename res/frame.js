function settingsFrame() {
    if (settings == false){
        var settingsiframe = document.createElement("iframe");
        settingsiframe.setAttribute("src", "http://localhost:3000/settings");
        settingsiframe.style.width = "640px";
        settingsiframe.style.height = "480px";
        settingsiframe.id = "iframe";
        document.body.appendChild(settingsiframe);
        settings = true;
    } else {
        closeFrame()
        settings = false;
    }
    
}

function closeFrame() {
    document.getElementById('iframe').style.display = "none";
    window.location.reload(true);
}