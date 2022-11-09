function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function displayCookies() {
    var fname = getCookie("language");
    if (fname == null) {
        fname = "";
    }
    if (fname != "") {
        fname = "language=" + fname;
    }
    var lname = getCookie("lastname");
    if (lname == null) {
        lname = "";
    }
    if (lname != "") {
        lname = "lastname=" + lname;
    }
    alert(fname + " " + lname);
}

function getCookie(name) {
    var nameEQ = name + "=";
    //alert(document.cookie);
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1);
        if (c.indexOf(nameEQ) != -1)
            return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function checkCookieLanguage() {
    let langauge = getCookie("language");
    if (langauge == null) {
        setCookie("language", "pl", 14);
    }
}

function setLanguage(lang) {
    switch (lang) {
        case 1:
            setCookie("language", "pl", 14);
            break;
        case 2:
            setCookie("language", "en", 14);
            break;
        case 3:
            setCookie("language", "de", 14);
            break;
    }
}

