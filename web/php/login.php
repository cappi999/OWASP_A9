<?php
    session_start();

    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('/srv/www/heart.bleed/credentials.sqlite');
        }
    }

    $username = htmlspecialchars($_POST['bID']);
    $password = htmlspecialchars($_POST['pw']);

    $db = new MyDB();
    $credentials = $db->query("SELECT * FROM credentials WHERE username='$username'")->fetchArray(SQLITE3_ASSOC);
    $db->close();

    // We have found a valid user
    if ($credentials && $credentials['password'] == $password) {
        setcookie("loginFailed", false, time()-72000, '/');
        unset($_COOKIE['loginFailed']);
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $username;
    } else if (! isset($_COOKIE['loginFailed'])) {
        setcookie("loginFailed", true, time()+72000, '/');
    }
    header("Refresh:0, url=/index.php");
?>