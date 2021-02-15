var slider = document.getElementById("textSizeSlider");
var text = document.getElementById("textToIncrease");
var imageToggle = document.getElementById("imageToggle");
var fontSize = 16;
var imageToggleVal = 0;

slider.oninput = function(){
    text.style.fontSize = this.value + "px";
    fontSize = this.value;
}

imageToggle.oninput = function(){
    if (imageToggle.checked) {
        imageToggleVal = 1;
    } else {
        imageToggleVal = 0;
    }
}

function applySettings() {
    createCookie("fontsize",fontSize,1)
    createCookie("invertImages",imageToggleVal,1)
}

function readSettings() {
    fontSize = parseInt(readCookie["fontsize"])
    slider.value = fontSize
    imageToggleVal = parseInt(readCookie["invertImages"])
    if (imageToggleVal == 1) {
        imageToggle.checked = true;
    } else {
        imageToggle.checked = false;
    }
}

readSettings()

//#region Cookie Management

        //https://www.quirksmode.org/js/cookies.html

        function createCookie(name,value,days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime()+(days*24*60*60*1000));
                var expires = "; expires="+date.toGMTString();
            }
            else var expires = "";
            document.cookie = name+"="+value+expires+"; path=/";
        }
        
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        
        function eraseCookie(name) {
            createCookie(name,"",-1);
        }

function removeCookies() {
    var res = document.cookie;
    var multiple = res.split(";");
    for(var i = 0; i < multiple.length; i++) {
        var key = multiple[i].split("=");
        document.cookie = key[0]+" =; expires = Thu, 01 Jan 1970 00:00:00 UTC";
    }
    window.location.reload(true)
}

//#endregion