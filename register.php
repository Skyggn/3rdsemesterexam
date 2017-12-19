<?php session_start(); ?><!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
        <div class="container">
<p>
<div class="loginbodybox">
    <h1 class="logininstructions">Admin værtøj, skriv brugernavn og password ind for at få et account til upload af billeder.</h1>
<?php

if(filter_input(INPUT_POST, 'submit')){

	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal un parameter');

	$pw = filter_input(INPUT_POST, 'pw')
		or die('Missing/illegal pw parameter');

	$pw = password_hash($pw, PASSWORD_DEFAULT);
	
//	echo 'Opretter bruger<br>'.$un.' : '.$pw;
	
	require_once('dbcon.php');
	$sql = 'INSERT INTO users (username, pwhash) VALUES (?, ?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $un, $pw);
	$stmt->execute();
	
	if($stmt->affected_rows > 0){
		echo '<p class="guideloginmsgregister">Konto er lavet, du kan logge ind <a href="login.php" class="loginorregister">her</a></p>';
	}
	else {
		echo '<h1>ERROR</h1>';
	}
	
}
?>
                <div class="logindiv">
                    <form class="loginform" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	                   <fieldset class="loginfieldset">
    	               <input class="loginboxstyling" name="un" type="text"     placeholder="Brugernavn" required />
    	               <input class="loginboxstyling" name="pw" type="password" placeholder="Password"   required />
                        <p></p>
    	               <input class="cursorlogin loginboxstyling registerbuttonstyling" name="submit" type="submit" value="Register" />
	                   </fieldset>
                    </form>
                </div>
            </div>
</p>
</body>
</html>