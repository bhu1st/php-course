<?php

$name="rudra";


$string = "my name is \$name";
echo $string;

echo "<br/><br/><br/>";

eval("\$string=\"$string\";");
echo $string;

?>