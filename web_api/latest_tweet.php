<?php 

//Reference : http://webhole.net/2010/03/16/get-last-tweet-with-php-or-jquery/

//set user name
$username='bhu1st'; 

//set api response format
$format='json';

//get tweets and decode them into a variable
$tweet=json_decode(file_get_contents("http://api.twitter.com/1/statuses/user_timeline/{$username}.{$format}")); 

echo $tweet[0]->text." - by @$username"; // show latest tweet

echo "<br/>";
echo "<br/>";
echo "<pre>";
print_r($tweet);
echo "</pre>";
?>
