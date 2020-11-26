Hello, <?php echo($_SESSION['username']); ?>! How are you today?
Would you like to log out?
<form action="/php/logout.php" method="POST">
    <button id="logout_button">Log Out</button>
</form>