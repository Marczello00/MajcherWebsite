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
    document.cookie =
        name + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
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
function httpsGetJson(theUrl) {
    return fetch(theUrl, {
        method: "GET",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
        },
    }).then((response) => response.json());
}
function IsWorkingHour(wh, date) {
    let weekDay = date.getDay();
    if (wh.Days[weekDay].state == false) return false;
    let hour = date.getHours();
    let minute = date.getMinutes();
    let startTime = wh.Days[weekDay].from;
    let endTime = wh.Days[weekDay].to;
    let startHour = parseInt(startTime.substr(0, 2));
    let startMin = parseInt(startTime.substr(2, 4));
    let endHour = parseInt(endTime.substr(0, 2));
    let endMin = parseInt(endTime.substr(2, 4));
    if (hour < startHour || hour > endHour) return false;
    if (hour == startHour && minute < startMin) return false;
    if (hour == endHour && minute > endMin) return false;
    return true;
}
function check_cameras() {
    (async () => {
        const response = await httpsGetJson(
            "/api/workingHours"
        );
        const date = new Date();
        //date.setHours(15);
        if (IsWorkingHour(response, date))
            document
                .getElementById("camera_workshop")
                .setAttribute("class", "camera_unhidden");
    })();
}
