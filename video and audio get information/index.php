<?php
 require_once('v/getid3/getid3.php'); 
$getID3 = new getID3;			  
    $filename = "daru.mp3";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    echo $ThisFileInfo['playtime_string']

?>