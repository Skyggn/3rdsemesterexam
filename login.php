<?php session_start(); ?><!doctype html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stylesheet.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
        <div class="loginpage">
            <div class="logindiv">
            <div class="textdiv">
                <h1 class="logininstructions">Hej Niels/Niels' bogholder, her kan i logge ind =)</h1>
            </div>
                <br>
<?php
        if(filter_input(INPUT_POST, 'submit')){

	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal un parameter');

	$pw = filter_input(INPUT_POST, 'pw')
		or die('Missing/illegal pw parameter');

	require_once('dbcon.php');
	$sql = 'SELECT id, pwhash FROM users WHERE username=?';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->bind_result($uid, $pwhash);
	
	while($stmt->fetch()) { }
	
	if (password_verify($pw, $pwhash)){
		$_SESSION['uid'] = $uid;
		$_SESSION['username'] = $un; 
        echo "<script> window.location.assign('galleri.php'); </script>";

		
	}
	else{
		echo '<p class="loginerror">Brugernavn ikke fundet, eller også er passworded forkert.</p>';
	}
}
	
?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <fieldset>
	                   <input class="loginboxstyling" name="un" type="text"     placeholder="Brugernavn" required />
	                   <input class="loginboxstyling" name="pw" type="password" placeholder="Adgangskode"   required />
                        <br>
	                   <input class="loginboxstyling submitbuttonstyling" name="submit" type="submit" value="Login" />
                    </fieldset>
                </form>
            </div>
        </div>
</body>