<?php

//To delete files, simply pass a filename string as the only parameter to unlink(). 
//Unlink deals only with files - to delete directories you need rmdir().

//if you have a file opened with fopen(), you need to fclose() it before you call unlink()

//this file should exists in script path, before unlink can delete it.
$filename = "delete.txt";

if (unlink($filename)) {
	echo "Deleted $filename!<br/>";
} else {
	echo "Delete failed. Are you sure $filename exists?<br/>";
}
	
?>