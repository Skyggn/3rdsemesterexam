<?php session_start(); ?><!doctype html>
<html>
    <head>
        <title>Malerfirma Niels Svare</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/faviconns.ico" type="image/x-icon">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="totop">
            <a id="scrolltopbtn"><img class="scrolltopbtn" src="img/tiltop.png"></a>
        </div>
        <div class="scrolldown1">
            <a id="pagetwobtn"><img class="scrolldownbtn" src="img/scrollned.png"></a>
        </div>
        <div class="scrolldown2">
            <a id="pagethreebtn"><img class="scrolldownbtn" src="img/scrollned.png"></a>
        </div>
        <div class="scrolldown3">
            <a id="pagefourbtn"><img class="scrolldownbtn" src="img/scrollned.png"></a>
        </div>
        <div class="navbar">
            <ul class="ulnavbar">
                <li class="li1nb linb"><a id="scrollprofil" class="nblinks">Profil</a></li>
                <li class="li2nb linb"><a id="scrollgalleri" class="nblinks">Galleri</a></li>
                <li class="li3nb linb"><a id="scrollkontakt" class="nblinks">Kontakt</a></li>
            </ul> 
        </div>
<!-- Container Starts -->
        <div class="container">
<!-- Page One Starts -->
            <div id="totopid" class="p1contain">
                <div class="logoheader">

                </div>
                <div class="headerh1">
                    <h1 class="landingh1">
                        Malerfirma <span class="ncolor">N</span>iels <span class="scolor">S</span>vare
                    </h1>
                    <h2 class="landingh2">
                        Vi bruger kun de bedste produkter så kvaliteten altid er i top. Med over 11 års erfaring er ingen opgaver for store eller for små. 
                    </h2>
                </div>
                <video poster="img/bgimg1.png" id="bgvid" playsinline autoplay muted loop>
                    <source src="http://andersenmikkel.dk/MNSTest/malerfirmansvideo.webm" type="video/webm">
                </video>
            </div>
            
<!-- Page Two Starts -->
        <div id="pagetwoid" class="p2contain">
            <div class="upperomos"><!--
             --><div class="upperomoscenter">
                    <h1 class="omosh">
                        Vi er medlem af Danske Malermestres Garantiordning,<br>din garanti for kvalitet!
                        <br><a class="malermestreanker"  href="https://malermestre.dk/Standard/Find-En-Rigtig-Maler-her/Garantiordning" target="_blank"><img class="dkmalermestrelogo" src="img/danskemalermestre.png"></a>
                    </h1>
                </div> 
            </div>
            <div class="downomos">
                <div class="services">
                    <h3 class="serviceh3">
                        Vi tilbyder
                    </h3>
                    <ul class="serviceulist">
                        <li>Maling af Facade</li>
                        <li>Vedligeholdelse</li>
                        <li>Renovering</li>
                        <li>Istandsættelse</li>
                        <li class="responsiveline">Maling for Privat<br><span class="servicespan">og Erhverv</span></li>
                    </ul>
                </div><!--
                --><div class="partnere">
                    <h4 class="partnereh4">Produkter vi anvender</h4>
                    <div class="partnerrow1">
                        <a class="partnerlink" href="http://www.ppmm.dk/" target="_blank"><img class="partnerlogo partnerlogo1" src="img/ppmestermalinglogo.png"></a>
                        <a class="partnerlink" href="http://www.sadolin.dk/" target="_blank"><img class="partnerlogo partnerlogo2" src="img/sadolinlogo.png"></a>
                    </div><!--
                 --><div class="partnerrow2">
                        <a class="partnerlink" href="http://www.akzonobel.com/dk/" target="_blank"><img class="partnerlogo partnerlogo3" src="img/akzonobellogo.png"></a>
                        <a class="partnerlink" href="https://www.jotun.com/dk/da/b2c" target="_blank"><img class="partnerlogo partnerlogo6" src="img/jotun.png"></a>
                    </div><!--
                 --><div class="partnerrow3">
                        <a class="partnerlink" href="https://www.nordsjo.dk/da" target="_blank"><img class="partnerlogo partnerlogo4" src="img/nordsjologo.png"></a>
                        <a class="partnerlink" href="http://www.sigmacoatings.dk/" target="_blank"><img class="partnerlogo partnerlogo5" src="img/sigmacoatingslogo.png"></a>
                    </div>
                </div>
            </div>
        </div>
<!-- Page Three Starts -->
        <div id="pagethreeid" class="p3contain">
            <p class="galleriheader"></p>
            <h1 class="gallerih1">
                Galleri
            </h1>
                            <div class="galleriimages">
<?php
	require_once('dbcon.php');
	$sql = 'SELECT id, title, imageurl FROM imagedb ORDER BY date DESC LIMIT 0,6';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($id, $title, $url);
	
	while($stmt->fetch()){ ?>
	<div class="gallerisortering">	
	   <p class="gallerioverskrift"><?=$title?></p>
        <a href="<?=$url?>"><img class="galleriimg" src="<?=$url?>" /></a>
    </div>
<?php } ?>
                </div>

        </div>
<!-- Page Four Starts -->
        <div id="pagefourid" class="p4contain"><!--
            -->
            <div class="contactform">
                <div class="contactheader">
                </div>
                <h1 class="contacth1">
                    Skriv gerne en mail, eller ring til os på Tlf. 40 52 30 33 
                </h1>
                <form method="post" action="http://www.andersenmikkel.dk/cgi-bin/FormMail.pl" 
                    accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset; 
                    document.charset = 'ISO-8859-1'; 
                    window.onbeforeunload = function () {document.charset=originalCharset;};">
                    <br />
                    <input id="name" name="realname" placeholder="Dit Navn..."/>
                    <input id="e_mail" name="email" placeholder="Din E-Mail..."/>
                    <br />
                    <br />
                    <textarea id="subject" cols="40" rows="10" name="Message" placeholder="Din Besked..."></textarea>
                    <br />
                    <input class="submitbuttonform" type="submit" value="Send" />
                    <input type="hidden" name="recipient" value="portfolio@andersenmikkel.dk" />
                    <input type="hidden" name="subject" value="Subject" />
                    <input type="hidden" name="redirect" 
                           value="http://www.andersenmikkel.dk/MNSTest/index.php#pagefourid" />
                    <input type="hidden" name="missing_fields_redirect" 
                           value="http://www.andersenmikkel.dk/MNSTest/index.php#pagefourid" />
                    <input type="hidden" name="required" value="realname,email,Message" />
                </form>
            </div><!--
        Footer Starts 
         --><div class="footer">
                <ul class="footerul">
                    <li class="footeril">
                        <span class="responsivehide">Firma Information<br></span>Tlf. 40 52 30 33 | CVR Nr. 25246772
                    </li>
                    <li class="footeril footercenter">
                        All rights reserved 2017 &copy; Niels Svare<br>Website udarbejdet af <a target="_blank" href="http://www.andersenmikkel.dk" class="developerlink">andersenmikkel.dk</a>
                    </li>
                    <li class="footeril">
                        <span class="responsivehide">Adresse<br></span>Wormsvej 2 A | 4220 Korsør
                    </li>
                </ul>     
            </div>
        </div>
        </div>
<!-- Container Ends -->
        <script src="javascript.js"></script>
    </body>
</html>