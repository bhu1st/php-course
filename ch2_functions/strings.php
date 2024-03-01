<html>
<head>
<title>PHP : Numbers</title>
</head>

<body>
<?php
$first_name = "Joe";
$last_name = "Blow";
$whole_name = $first_name . " " . $last_name;
echo "First name plus last name = <b>$whole_name</b><br/>";

$string_length = strlen($whole_name);
echo "The length of the name is <b>" . $string_length . "</b><br/>";

$part_after_space = strstr($whole_name, " ");
echo "The part of the string after the space is <b>" . $part_after_space . "</b><br/>";

$letter_position = strpos($whole_name, "o");
echo "The position of the letter &quot;a&quot; is <b>" . $letter_position . "</b><br/>";

$ascii_character_returned = chr(97);
echo "The character corresponding to ASCII decimal value 97 is <b>" . $ascii_character_returned . "</b><br/>";
?>
</body>
</html>
