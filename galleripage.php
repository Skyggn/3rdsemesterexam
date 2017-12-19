<div class="galleripage">
            <div class="gallericontain">
                <div class="galleritext">
                    <a href="logout.php" class="logoutbutton">Logud</a>
                    <hr>
	               <form class="uploadform" action="upload.php" method="post" enctype="multipart/form-data">
                        <p class="selectimg">Vælg billede du vil uploade</p>
    	               <input type="text" name="title" placeholder="Titel" required />
    	               <input class="inputtest" type="file" name="fileToUpload" id="fileToUpload"><br>
    	               <input type="submit" value="Upload Billede" name="submit">
	               </form>
                </div>
                <div class="galleriimages">
<?php
	require_once('dbcon.php');
	$sql = 'SELECT id, title, imageurl FROM imagedb ORDER BY date DESC LIMIT 0,6';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($id, $title, $url);
	
	while($stmt->fetch()){ ?>
	<div class="gallerisortering">	
	   <p class="gallerioverskrift gallerioverskriftadmin"><?=$title?></p>
        <a target="_blank" href="<?=$url?>"><img class="galleriimg" src="<?=$url?>" /></a>
    </div>
<?php } ?>
                </div>
            </div>