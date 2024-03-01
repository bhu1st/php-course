<?php
// lets's define some variables
$title='This page is pretty musical!';
$content='There are unsmiling faces and bright plastic chains, and a wheel in perpetual motion.';
$author='The Alan Parsons Project.';
// now let's replace variable values in the document
?>
 
<html>
<head>
<title><?php echo $title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div>
<p><?php echo $content?></p>
<p>The author of this song is: <?php echo $author?></p>
</div>
</body>
</html>