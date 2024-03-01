<?php 

	$filestring = file_get_contents($filename);
    
	//echo $filestring; //uncomment to check output
	
	echo "<br/><br/>";
	
	//explode splits file into array, separating each \n i.e new line
	$filearray = explode("\n", $filestring);
	

    foreach ($filearray as $key => $val) {
        ++$key;
        $val = trim($val);
        echo "Line $key: $val<br />";
    }

?>