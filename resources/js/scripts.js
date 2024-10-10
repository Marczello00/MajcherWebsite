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

function watchForHover() {
    // lastTouchTime is used for ignoring emulated mousemove events
    // that are fired after touchstart events. Since they're
    // indistinguishable from real events, we use the fact that they're
    // fired a few milliseconds after touchstart to filter them.
    let lastTouchTime = 0;

    function enableHover() {
        if (new Date() - lastTouchTime < 500) return;
        document.body.classList.add("hasHover");
    }

    function disableHover() {
        document.body.classList.remove("hasHover");
    }

    function updateLastTouchTime() {
        lastTouchTime = new Date();
    }

    document.addEventListener("touchstart", updateLastTouchTime, true);
    document.addEventListener("touchstart", disableHover, true);
    document.addEventListener("mousemove", enableHover, true);

    enableHover();
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

function checkCookieLanguage() {
    let langauge = getCookie("language");
    if (langauge == null) {
        setCookie("language", "pl", 14);
    }
    (async () => {
        const response = await httpsGetJson("/api/languages");
        changeSiteLanguage(response);
    })();
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
    checkCookieLanguage();
}

function changeSiteLanguage(languages) {
    var lang = getCookie("language");
    for (var i = 0; i < languages.Languages.length; i++) {
        var element = document.getElementById(languages.Languages[i].id);
        if (!element) continue;
        switch (lang) {
            case "pl":
                element.textContent = languages.Languages[i].pl;
                break;
            case "en":
                element.textContent = languages.Languages[i].en;
                break;
            case "de":
                element.textContent = languages.Languages[i].de;
                break;
        }
    }
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
        //return;
        const response = await httpsGetJson("/api/workingHours");
        const date = new Date();
        //date.setHours(15);
        if (IsWorkingHour(response, date))
            document
                .getElementById("camera_workshop")
                .setAttribute("class", "camera_unhidden");
    })();
}
/*
Paleta:
jasne:   F3F1F5  F0D9FF  BFA2DB  7F7C82
ciemne:  000000  3E065F  700B97  8E05C2
*/
function setColorScheme(colorScheme) {
    setCookie("theme", colorScheme, 365);
    if (colorScheme == 1) {
        //Set white theme
        const background = document.getElementById("mainBackground1");
        if (background) {
            background.classList.remove("bg-black");
            background.classList.add("bg-white");
        }
        const navbar = document.getElementsByClassName("navbar-dark")[0];
        if (navbar) {
            navbar.classList.remove("navbar-dark");
            navbar.classList.add("navbar-white");
            navbar.style["background-color"] = "#F0D9FF";
        }

        const logo = document.getElementById("imgLogo");
        logo ? (logo.src = "/api/photos/511") : null;

        const imgLanguage = document.getElementById("imgLanguage");
        imgLanguage ? (imgLanguage.src = "/api/photos/521") : null;

        const imgTheme = document.getElementById("imgTheme");
        imgTheme ? (imgTheme.src = "/api/photos/531") : null;

        const home = document.querySelectorAll('*[id^="mainHomeDiv"]'); // strona domowa, tekst zmiana koloru
        for (i = 0; i < home.length; i++) {
            if (home[i].classList.contains("text-white")) {
                home[i].classList.remove("text-white");
            }
            home[i].classList.add("text-black");
            const newURL = "url('/api/photos/1" + (i + 1) + "1')";
            home[i].style["background-image"] = newURL;
        }

        const footer = document.getElementById("mainFooter1");
        footer
            ? (footer.style.cssText = "background-color: #F0D9FF; color: #000;")
            : null;

        const queue = document.querySelectorAll('*[id^="queue"]');
        for (i = 0; i < queue.length; i++) {
            if (queue[i].classList.contains("text-white")) {
                queue[i].classList.remove("text-white");
            }
            queue[i].classList.add("text-dark");
        }

        const queueTable = document.getElementById("queueTable");
        queueTable
            ? (queueTable.style.cssText =
                  "background-color: #BFA2DB; width: 50%;")
            : null;

        const contact = document.querySelectorAll('*[id^="mainContact"]'); //strona kontaktowa
        for (i = 0; i < contact.length; i++) {
            if (contact[i].classList.contains("text-light")) {
                contact[i].classList.remove("text-light");
            }
            contact[i].classList.add("text-dark");
        }

        const gallery = document.getElementById("mainGallery1"); //tlo karuzeli galerii
        if (gallery) {
            gallery.style["background-color"] = "#BFA2DB";
        }
        const error404 = document.getElementById("error404"); //kolor tekstu strony błędu 404
        if (error404) {
            error404.classList.remove("text-white");
            error404.classList.add("text-black");
        }
        const toastCookie = document.getElementById("toastCookie1");
        if (toastCookie) {
            toastCookie.style["background-color"] = "#BFA2DB";
            toastCookie.classList.remove("text-white");
            toastCookie.classList.add("text-black");
        }
		const privacySite = document.getElementById("privacySite");
        if (privacySite) {
            privacySite.classList.remove("text-white");
            privacySite.classList.add("text-black");
        }
    }
    if (colorScheme == 2) {
        //Set dark theme
        const background = document.getElementsByClassName("bg-white")[0];
        if (background) {
            background.classList.remove("bg-white");
            background.classList.add("bg-black");
        }
        const navbar = document.getElementsByClassName("navbar-white")[0];
        if (navbar) {
            navbar.classList.remove("navbar-white");
            navbar.classList.add("navbar-dark");
            navbar.style["background-color"] = "#3E065F";
        }

        const logo = document.getElementById("imgLogo");
        logo ? (logo.src = "/api/photos/518") : null;

        const imgLanguage = document.getElementById("imgLanguage");
        imgLanguage ? (imgLanguage.src = "/api/photos/528") : null;

        const imgTheme = document.getElementById("imgTheme");
        imgTheme ? (imgTheme.src = "/api/photos/538") : null;

        const home = document.querySelectorAll('*[id^="mainHomeDiv"]'); // strona domowa, tekst zmiana koloru
        for (i = 0; i < home.length; i++) {
            if (home[i].classList.contains("text-black")) {
                home[i].classList.remove("text-black");
            }
            home[i].classList.add("text-white");
            const newURL = "url('/api/photos/1" + (i + 1) + "8')";
            home[i].style["background-image"] = newURL;
        }

        const footer = document.getElementById("mainFooter1");
        footer
            ? (footer.style.cssText = "background-color: #3E065F; color: #fff;")
            : null;

        const queue = document.querySelectorAll('*[id^="queue"]');
        for (i = 0; i < queue.length; i++) {
            if (queue[i].classList.contains("text-dark")) {
                queue[i].classList.remove("text-dark");
            }
            queue[i].classList.add("text-white");
        }
        const queueTable = document.getElementById("queueTable");
        queueTable
            ? (queueTable.style.cssText =
                  "background-color: #700B97; width: 50%;")
            : null;

        const contact = document.querySelectorAll('*[id^="mainContact"]'); //strona kontaktowa
        for (i = 0; i < contact.length; i++) {
            if (contact[i].classList.contains("text-dark")) {
                contact[i].classList.remove("text-dark");
            }
            contact[i].classList.add("text-light");
        }

        const gallery = document.getElementById("mainGallery1"); //tlo karuzeli galerii
        if (gallery) {
            gallery.style["background-color"] = "#700B97";
        }
        const error404 = document.getElementById("error404"); //kolor tekstu strony błędu 404
        if (error404) {
            error404.classList.remove("text-black");
            error404.classList.add("text-white");
        }
        const toastCookie = document.getElementById("toastCookie1");
        if (toastCookie) {
            toastCookie.style["background-color"] = "#700B97";
            toastCookie.classList.remove("text-black");
            toastCookie.classList.add("text-white");
        }
		const privacySite = document.getElementById("privacySite");
        if (privacySite) {
            privacySite.classList.remove("text-black");
            privacySite.classList.add("text-white");
        }
    }
}

function checkCookieTheme() {
    const themeCookie = getCookie("theme");
    if (themeCookie) {
        setColorScheme(themeCookie);
    } else {
        setColorScheme(2);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    checkCookieLanguage();
    checkCookieTheme();
    watchForHover();
});
