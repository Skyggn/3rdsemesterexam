<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
header( "refresh:5;url=index.php" );
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Redirecting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stylesheet.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
<div class="logoutpage">
    <h1 class="redirectmessage">Du er nu logged ud, du bliver omdirigeret til forsiden om 5 sekunder.</h1>
    <div class="loader"></div>
</div>


</body>
</html>