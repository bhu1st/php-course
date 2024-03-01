<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palm = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$blackberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $palm || $ipod || $blackberry == true) 
{ 
header('Location: http://m.facebook.com/');
//OR
echo "<script>window.location='http://m.facebook.com/'</script>";
}

echo "user agent <br/>";
print $_SERVER['HTTP_USER_AGENT'];

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>