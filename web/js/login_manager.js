setTimeout(setup, 100);

function addCookie(key, value) {
    document.cookie = key + "=" + value + "; ";
}

function deleteCookie(key) {
    document.cookie = key + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
}

function setup() {
    // Possible credentials
    const savedCredentials = [
        {
            username: "h.meier",
            password: "173263"
        },
        {
            username: "l.bauer",
            password: "3726"
        }
    ];

    // Replace the form with a welcome string if the user "logged in"
    if (document.cookie.includes("loggedIn=")) {
        let username = document.cookie
            .split(";")
            .find(cookie => cookie.startsWith("loggedIn="))
            .replace(/loggedIn=/, "");

        // Add logout button
        let loggedInMenu = document.createTextNode("Hallo, " + username + "!       ");
        let logoutButton = document.createElement("button");
        logoutButton.textContent = "Logout";
        logoutButton.addEventListener("click", () => {
            deleteCookie("loggedIn");
            window.location.reload();
        });
        document.getElementById("loginForm").hidden = true;
        let loginFormDiv = document.getElementById("loginFormDiv");
        loginFormDiv.appendChild(loggedInMenu);
        loginFormDiv.appendChild(logoutButton);

        // Mention a former failed login attempt
    } else if (document.cookie.includes("loginFailed")) {
        document
            .getElementById("loginForm")
            .appendChild(document.createTextNode("Entweder der Nutzername oder das Passwort ist falsch."));
    }

    document.getElementById("submitButton").addEventListener("click", () => {
        let givenUsername = document.getElementById("bID").value;
        let givenPassword = document.getElementById("pw").value;

        if (
            typeof savedCredentials.find(
                credentialSet => credentialSet.username == givenUsername && credentialSet.password == givenPassword
            ) !== "undefined"
        ) {
            deleteCookie("loginFailed");
            addCookie("loggedIn", givenUsername);
            window.location.reload();
        } else {
            if (!document.cookie.includes("loginFailed=true")) addCookie("loginFailed", "true");
            window.location.reload();
        }
    });
}
