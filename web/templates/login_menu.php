<form action="/php/login.php" method="POST">
    <label for="bID">Benutzer-ID</label> <input type="text" id="bID" name="bID"><label for="pw">passwort:</label>
    <input type="text" id="pw" name="pw">
    <input type="submit" value="Submit" class="btn btn-primary">
    <?php if ($_COOKIE['loginFailed']) echo "Ungültiger Nutzername oder ungültiges Passwort."; ?>
</form>