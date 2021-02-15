var textSizer = document.getElementById("text");
var imageToggleVal = parseInt(readCookie("invertImages"))
var fontSize = parseInt(readCookie("fontsize"))

textSizer.style.fontSize = fontSize + "px";