<?php session_start(); ?><!doctype html>
<html>
    <head>
        <title>Malerfirma Niels Svare</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/faviconns.ico" type="image/x-icon">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>
    <body>
    <?php
	if(empty($_SESSION['uid'])){
		echo '
        <div class="galleripage">
            <div class="gallericontain">
                <div class="galleritext">
                    <p class="gallerilogintxt">Klik <a class="galleriloginbtn" href="login.php">her</a> for at logge ind!</p>
                </div>
                <hr>
            </div>
        </div>
        ';
        
	}
	else {
		require('galleripage.php');
	}
?>
        </div>
    </body>